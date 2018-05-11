<?php namespace App\Controllers;

class Provincia
{
  public static function listar($departamento_id)
  {
    $rs = \Model::factory('App\Config\Models\Provincia', 'ubicaciones')
    	->select('id')
    	->select('nombre')
      ->where('departamento_id', $departamento_id)
    	->find_array();
    echo json_encode($rs);
  }
}

?>
