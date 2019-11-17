<?php

$dsn = 'mysql:dbname=dh_pruebas; port=3306;host=127.0.0.1';
$user = 'root';
$pass = '';

try {
$baseDeDatos = new PDO ($dsn, $user, $pass);
} catch (PDOException $e) {
 echo "hubo una PDO exception"; }

 
