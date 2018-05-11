<?php namespace App\Controllers;

class Home
{
  public static function index()
  {
    //var_dump(\Flight::get('config'));
    \Flight::render('layouts/blank_header', array('heading' => 'Hello'), 'header_content');
    \Flight::render('layouts/blank_footer', array('heading' => 'Hello'), 'footer_content');
    \Flight::render('home/index', array('heading' => 'Hello'), 'body_content');
    \Flight::render('layouts/layout', array('title' => 'Home Page'));
  }
}

?>
