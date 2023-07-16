<?php
class Controller_LogOut extends Controller
{
    function action_index($ile)
	{
        $db = get_db();
        session_start();
        session_destroy();
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params["httponly"]);
        }
        $db->login->deleteMany([]);
        header("Location: main");
        exit();
    }
}
?>