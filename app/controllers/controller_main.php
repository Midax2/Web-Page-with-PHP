<?php
class Controller_Main extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('main_view.php');
	}
}
?>