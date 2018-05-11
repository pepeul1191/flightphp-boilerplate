<?php namespace App\Controllers;

class Home
{
  public static function index()
  {
    var_dump(\Flight::get('config'));
    echo 'home/index';
  }
}

?>
