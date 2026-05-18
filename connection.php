<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "nexora_academy";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}CATCH(PDOException $exception){
    echo "Connection to database failed! Error: " . $exception->getMessage();
    die();
}