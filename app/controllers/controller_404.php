<?php
class Controller_404 extends Controller
{
	function action_index($ile)
	{
		$this->view->generate('404_view.php');
	}

}
