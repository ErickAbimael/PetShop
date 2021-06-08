<?php

$server = 'localhost';
$username = 'promay20_petshop';
$password = '#ProgWeb2021';
$database = 'promay20_petshop';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
