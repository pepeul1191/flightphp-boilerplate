<?php

require 'vendor/autoload.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');

Flight::set('config', App\Config\Config);
Flight::set('flight.views.path', 'app/views');
Flight::route('GET /', array('App\Controllers\Home','index'));
Flight::route('GET /demo', array('App\Controllers\Demo','hello'));
Flight::route('GET /departamento/listar', array('App\Controllers\Departamento','listar'));
Flight::route('GET /provincia/listar/@departamento_id', array('App\Controllers\Provincia','listar'));
Flight::route('GET /distrito/listar/@provincia_id', array('App\Controllers\Distrito','listar'));
Flight::route('GET /distrito/buscar', array('App\Controllers\Distrito','buscar'));
Flight::route('GET /distrito/nombre', array('App\Controllers\Distrito','nombre'));
Flight::start();

?>
