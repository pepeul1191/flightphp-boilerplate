<?php namespace App\Config\Models;

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

class DistritoProvinciaDepartamento extends \Model
{
	public static $_table = 'vw_distrito_provincia_departamentos';
}

?>
