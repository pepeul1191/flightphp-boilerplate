<?php

require 'vendor/autoload.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');

Flight::set('config', App\Config\Config);
Flight::route('GET /', array('App\Controllers\Home','index'));
Flight::route('GET /demo', array('App\Controllers\Demo','hello'));
Flight::route('GET /departamento/listar', array('App\Controllers\Departamento','listar'));
Flight::start();

?>
