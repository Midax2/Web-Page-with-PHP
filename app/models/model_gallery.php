<?php
class Model_Gallery extends Model
{
	public function get_data($ile)
	{
		$parametry = explode('_', $ile);
		$ile_plikow = $parametry[0];
		$blad = array();
		for ($i = 0; $i < count($parametry)-1; $i++) {
            $blad[$i] = $parametry[$i+1];
        }
		$dir = 'Uploads/Original';
		$files_temp = array_diff(scandir($dir), array('..', '.'));
		$files = array ();
		if (count($files_temp) >= 3) {
            $index = $ile_plikow;
            for ($i = 0; $i < 3; $i++) {
                $files[$i] = $files_temp[$index];
                $index++;
                if ($index - 1 > count($files_temp))
                    $index = 2;
            }
        }
		else
			$files = $files_temp;
		$dane = array ($files, $ile_plikow, count($files_temp), $blad);
		return $dane;
	}
}
?>