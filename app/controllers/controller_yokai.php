<?php
class Controller_Yokai extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('yokai_view.php');
	}
}
?>