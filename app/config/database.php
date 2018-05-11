<?php namespace App\Config;

\ORM::configure('sqlite:db/ubicaciones.db', null, 'ubicaciones');
\ORM::configure('return_result_sets', true);
\ORM::configure('error_mode', \PDO::ERRMODE_WARNING);

?>
