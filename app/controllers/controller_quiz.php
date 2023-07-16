<?php
class Controller_Quiz extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('quiz_view.php');
	}
}
?>