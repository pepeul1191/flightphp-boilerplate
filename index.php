<?php

require 'vendor/autoload.php';

Flight::route('/', function(){
  var_dump(App\Config\CONFIG);
  echo 'hello world!';
});

Flight::start();

?>
