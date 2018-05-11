<?php

require 'vendor/autoload.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');

Flight::set('config', App\Config\CONFIG);
Flight::set('hola', 'mundo');
Flight::route('GET /', array('App\Controllers\Home','index'));
Flight::route('GET /demo', array('App\Controllers\Demo','hello'));
Flight::start();

?>
