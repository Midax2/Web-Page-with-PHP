<?php
class Controller_Search extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('search_view.php');
	}
}
?>