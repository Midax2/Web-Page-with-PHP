<?php
class Controller_Upload extends Controller
{
	function action_index($ile)
	{
		$target_dir = "Uploads/Original/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $upload = "Location: gallery&2";
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            $upload .= "_size";
        }

        if($imageFileType != "jpg" && $imageFileType != "png") {
            $upload .= "_type";
        }

        if ($upload != "Location: gallery&2") {
            header($upload);
            exit();
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                list($width, $height) = getimagesize($target_file);
                $thumb = imagecreatetruecolor(200, 125);
                $source = imagecreatefromjpeg($target_file);
                imagecopyresized($thumb, $source, 0, 0, 0, 0, 200, 125, $width, $height);
                imagejpeg($thumb, "Uploads/Mini/mini_".basename( $_FILES["fileToUpload"]["name"]));
                $blackcolor = imagecolorallocate($source, 0, 0, 0);
                $font_file = "Files/FK_Goodfellow.ttf";
                imagefttext($source, 100, 0, 15, 100, $blackcolor, $font_file, $_POST["watermark"]);
                imagejpeg($source, "Uploads/Watermark/mark_".basename( $_FILES["fileToUpload"]["name"]));
                $db = get_db();
                $image = [
                    'name' => basename( $_FILES["fileToUpload"]["name"]),
                    'autor' => $_POST['autor'],
                    'tytul' => $_POST['tytul']
                ];
                $db->images->insertOne($image);
            }
        }
		header("Location: gallery");
        exit();
	}
}
?>