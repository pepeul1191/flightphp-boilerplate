<?php namespace App\Models;

require_once 'database.php';
//use namespace App\Config;

class Departamento extends \Model
{
	public static $_table = 'departamentos';
}

class Provincia extends \Model
{
	public static $_table = 'provincias';
}

class Distrito extends \Model
{
	public static $_table = 'distritos';
}

?>
