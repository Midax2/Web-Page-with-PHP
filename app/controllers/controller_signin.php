<?php
class Controller_SignIn extends Controller
{
	function action_index($ile)
	{
		$db = get_db();
        $user = $db->users->findOne(['login' => $_POST['login']]);

        if($user !== null && password_verify($_POST['password'], $user['password'])){

        }
        else {
            header("Location: log&2_fail");
            exit();
        }

        session_start();
        session_regenerate_id();
        $_SESSION['user_id'] = $user['_id'];

        $current_user = [
            'login' => $_POST['login']
            ];
        $db->login->insertOne($current_user);
		header("Location: log&2_success");
        exit();
	}
}
?>