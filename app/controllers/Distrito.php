<?php namespace App\Controllers;

class Distrito
{
  public static function listar($provincia_id)
  {
    $rs = \Model::factory('App\Config\Models\Distrito', 'ubicaciones')
    	->select('id')
    	->select('nombre')
      ->where('provincia_id', $provincia_id)
    	->find_array();
    echo json_encode($rs);
  }

  public static function buscar()
  {
    $nombre = \Flight::request()->query['nombre'];
    $rs = \Model::factory('App\Config\Models\DistritoProvinciaDepartamento', 'ubicaciones')
  		->select('id')
  		->select('nombre')
  		->where_like('nombre', $nombre . '%')
  		->limit(10)
  		->find_array();
  	echo json_encode($rs);
  }

  public static function nombre($distrito_id)
  {
    $rs = \Model::factory('App\Config\Models\DistritoProvinciaDepartamento', 'ubicaciones')
			->select('nombre')
			->where('id', $distrito_id)
			->find_one()
			->as_array();
		echo $rs['nombre'];
  }
}

?>
