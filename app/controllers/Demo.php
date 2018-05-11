<?php namespace App\Controllers;

class Demo
{
  public static function hello()
  {
    $valor = 'hola mundo';
    \Flight::view()->assign('valor', $valor);
    \Flight::view()->assign('partial', 'demo/index.tpl');
    \Flight::view()->display('layouts/blank.tpl');
  }
}

?>
