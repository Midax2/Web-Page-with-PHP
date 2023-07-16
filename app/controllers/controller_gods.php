<?php
class Controller_Gods extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('gods_view.php');
	}
}
?>