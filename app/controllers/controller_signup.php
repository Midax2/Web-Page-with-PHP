<?php
class Controller_SignUp extends Controller
{
	function action_index($ile)
	{
		$db = get_db();
        $users = $db->users->find();
        $loginOk = "Location: register&2";

        foreach ($users as $user) {
            if ($_POST['login'] == $user['login']) {
                $loginOk .= "_exist";
            }
        }

        if($_POST['password'] != $_POST['repeat']) {
            $loginOk .= "_pass";
        }

        if ($loginOk != "Location: register&2") {
            header($loginOk);
            exit();
        }
        else {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $current_user = [
                'login' => $_POST['login'],
                'email' => $_POST['email'],
                'password' => $password
            ];
            $db->users->insertOne($current_user);
        }
		header("Location: register&2_success");
        exit();
	}
}
?>