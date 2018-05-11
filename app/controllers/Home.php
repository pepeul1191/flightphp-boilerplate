<?php namespace App\Controllers;

class Home
{
  public static function index()
  {
    //var_dump(\Flight::get('config'));
    $csss = [
     'bower_components/bootstrap/dist/css/bootstrap.min',
     'bower_components/font-awesome/css/font-awesome.min',
     'css/style'
   ];
    //var_dump(\App\Config\Helpers\load_csss($csss));
    \Flight::render('layouts/blank_header', array('heading' => 'Hello'), 'header_content');
    \Flight::render('layouts/blank_footer', array('heading' => 'Hello'), 'footer_content');
    \Flight::render('home/index', array('heading' => 'Hello'), 'body_content');
    \Flight::render('layout', array('title' => 'Home Page'));
  }
}

?>
