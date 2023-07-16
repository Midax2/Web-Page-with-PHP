<?php
class Controller_Gallery extends Controller
{
	function __construct()
	{
		$this->view = new View();
		$this->model = new Model_Gallery();
	}
	function action_index($ile)
	{
		$data = $this->model->get_data($ile);
		$this->view->generate('gallery_view.php', $data);
	}
}
?>