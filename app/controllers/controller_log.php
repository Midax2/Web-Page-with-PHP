<?php
class Controller_Log extends Controller
{
	function __construct()
	{
		$this->view = new View();
		$this->model = new Model_Log();
	}
	function action_index($ile)
	{
		$data = $this->model->get_data($ile);
		$this->view->generate('log_view.php', $data);
	}
}
?>