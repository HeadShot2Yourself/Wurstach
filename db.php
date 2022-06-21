<?php
$host = 'localhost';
$database = 'wurstach';
$charset = 'utf8';
$user = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$database; char
set=$charset ", $user, $password);
?>

