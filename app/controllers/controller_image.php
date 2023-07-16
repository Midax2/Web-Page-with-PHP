<?php
class Controller_Image extends Controller
{
	function action_index($ile)
	{
        if (isset($_POST['query'])) {

        $db = get_db();
        $images = $db->images->find();
        foreach ($images as $image) {
            if (strpos($image['name'], $_POST['query']) !== false) {
                echo '<img class="normal" src="Uploads/Mini/mini_'.$image['name'].'">';
            }
        }
        }
    }
}
?>