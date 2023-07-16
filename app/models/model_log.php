<?php
class Model_Log extends Model
{
	public function get_data($ile)
	{
		$parametry = explode('_', $ile);
		$info = array();
		for ($i = 0; $i < count($parametry)-1; $i++) {
            $info[$i] = $parametry[$i+1];
        }
		return $info;
	}
}
?>