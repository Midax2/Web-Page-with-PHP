<?php
class Route
{
	static function start()
	{
		$controller_name = 'main';
		$action_name = 'index';
		$parametr = "2_";

		$routes1 = explode('/', $_SERVER['REQUEST_URI']);
		$routes = explode('&', $routes1[1]);

		if ( !empty($routes[0]) )
		{
			$controller_name = $routes[0];
		}

		if ( !empty($routes[1]) )
		{
			$parametr = $routes[1];
		}

		$model_name = 'model_'.$controller_name;
		$controller_name = 'controller_'.$controller_name;
		$action_name = 'action_'.$action_name;


		$model_file = strtolower($model_name).'.php';
		$model_path = "../app/models/".$model_file;
		if(file_exists($model_path))
		{
			include "../app/models/".$model_file;
		}

		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "../app/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "../app/controllers/".$controller_file;
            $controller = new $controller_name;
            $action = $action_name;

            if(method_exists($controller, $action))
            {
                $controller->$action($parametr);
            }
            else
            {
                header("Location: 404");
                exit();
            }
		}
		else
		{
			header("Location: 404");
			exit();
		}
	}
}