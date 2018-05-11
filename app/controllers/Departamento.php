<?php namespace App\Controllers;

class Departamento
{
  public static function listar ()
  {
    $rs = \Model::factory('App\Models\Departamento', 'ubicaciones')
    	->select('id')
    	->select('nombre')
    	->find_array();
    echo json_encode($rs);
  }
}

?>
