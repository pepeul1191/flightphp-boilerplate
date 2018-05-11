<?php

require 'vendor/autoload.php';

header('x-powered-by: PHP');
header('Server: Ubuntu');

Flight::route('GET /', array('App\Controllers\Index','index'));
Flight::route('GET /demo', array('App\Controllers\Demo','hello'));

Flight::start();

?>
