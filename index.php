<?php

require 'vendor/autoload.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');

Flight::set('config', App\Config\Constants);
Flight::set('flight.views.path', 'app/views');
Flight::register('view', 'Smarty', array(), function($smarty){
  $smarty->template_dir = 'app/templates/';
  $smarty->compile_dir = 'app/templates_c/';
  $smarty->config_dir = 'app/config/';
  $smarty->cache_dir = 'app/cache/';
});
Flight::route('GET /', array('App\Controllers\Home','index'));
Flight::route('GET /demo', array('App\Controllers\Demo','hello'));
Flight::route('GET /departamento/listar', array('App\Controllers\Departamento','listar'));
Flight::route('GET /provincia/listar/@departamento_id', array('App\Controllers\Provincia','listar'));
Flight::route('GET /distrito/listar/@provincia_id', array('App\Controllers\Distrito','listar'));
Flight::route('GET /distrito/buscar', array('App\Controllers\Distrito','buscar'));
Flight::route('GET /distrito/nombre', array('App\Controllers\Distrito','nombre'));
Flight::start();

?>
