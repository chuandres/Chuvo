<?php 
$link = 'mysql:host=localhost;dbname=bodegadb';
$usuario = 'root';
$pass = 'root';

try {
    $pdo = new PDO($link, $usuario, $pass);
    include 'SQL.php';
} catch (PDOException $e) {
    if ($e->getCode() == '1049') { // Código de error para base de datos no existente
        $pdo = new PDO('mysql:host=localhost;', $usuario, $pass);
        $sqlDB = 'CREATE DATABASE bodegadb';
        $pdo->exec($sqlDB);
        $pdo = new PDO($link, $usuario, $pass);
        include 'SQL.php';
    } else {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>
