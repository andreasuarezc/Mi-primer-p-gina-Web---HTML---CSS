<?php
$link =  'mysql:host=localhost;dbname=ada';
$usuario = 'root';
$clave = '';

$pdo = new PDO($link,$usuario,$clave);

try{
    $conex = mysqli_connect('localhost','root','','ada');
    
}

catch (PDOException $e) {
    print "Error: " . $e->getMessage(). "<br>";
    die();
}