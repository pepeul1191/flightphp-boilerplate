<?php namespace App\Config\Helpers;

function load_csss($array_css)
{
  $rpta = '';
  foreach ($array_css as &$css) {
    $temp = '<link rel="stylesheet" type="text/css" href="' . \Flight::get('config')->STATIC_URL . $css . '.css"/>';
    $rpta = $rpta . $temp;
  }
  return $rpta;
}

function load_jss($array_js)
{
	$rpta = '';
	foreach ($array_js as &$js) {
		$temp = '<script src="' . \Flight::get('config')->STATIC_URL . $js . '.js" type="text/javascript"></script>';
		$rpta = $rpta . $temp;
	}
	return $rpta;
}

?>
