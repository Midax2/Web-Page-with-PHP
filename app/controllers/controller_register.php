<?php
class Controller_Register extends Controller
{
	function __construct()
	{
		$this->view = new View();
		$this->model = new Model_Register();
	}
	function action_index($ile)
	{
		$data = $this->model->get_data($ile);
		$this->view->generate('register_view.php', $data);
	}
}
?>