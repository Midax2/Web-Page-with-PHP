<?php
class Controller_Tales extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('tales_view.php');
	}
}
?>