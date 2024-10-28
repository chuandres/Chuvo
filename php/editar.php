<?php

$id = $_GET['id'];
$nombre = $_GET['nombre'];
$costodolar = $_GET['costodolar'];
$precio = $_GET['precio'];
$estado = $_GET['estado'];
$ganancia = $_GET['ganancia'];
$almacen = $_GET['almacen'];

$aux = $_GET['aux'];

 $nombre = strtoupper($nombre);

$ganancia = ($ganancia - 100)*(-1);
$ganancia = ($ganancia / 100);
echo $id;
echo '<br>';
echo $nombre;
echo '<br>';
echo $costodolar;
echo '<br>';
echo $precio;
echo '<br>';
echo $estado;
echo '<br>';
echo $ganancia;
echo '<br>';
echo $almacen;
echo '<br>';

if ($estado == null) {
	$estado = $aux;
}

include_once 'conexion.php';

$sql_editar = 'UPDATE producto SET nombre=?,costodolar=?, precio=?, estado=?, ganancia=?, almacen=? WHERE id=?';
$sentencia_editar = $pdo->prepare($sql_editar);
$sentencia_editar->execute(array($nombre,$costodolar,$precio,$estado,$ganancia,$almacen,$id));

//cerramos conexión base de datos y sentencia
$pdo = null; 
$sentencia_editar = null; 

header('location:../index.php');
?>
