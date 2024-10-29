<?php
include_once 'conexion.php';

$id = 'Dolar al Dia';
$valor = $_GET['valor'];

echo $id;
echo '<br>';
echo $valor;
echo '<br>';

$sql_Valores = 'SELECT * FROM valores';
$sentencia_valores = $pdo->prepare($sql_Valores);
$sentencia_valores->execute();
$otroResultado = $sentencia_valores->rowCount();

echo $otroResultado;

if ($otroResultado != 0) {
	echo 'soy diferente de 0';
	$sql_editar = 'UPDATE valores SET valor=? WHERE nombre=?';
	$sentencia_editar = $pdo->prepare($sql_editar);
	$sentencia_editar->execute(array($valor,$id));
}else{
	echo 'soy igual de 0';
	$nombre = 'Dolar al Dia';
	$sql_editar = 'INSERT INTO valores (nombre,valor)  VALUES (?,?)';
	$sentencia_editar = $pdo->prepare($sql_editar);
	$sentencia_editar->execute(Array($nombre,$valor));
}

$pdo = null; 
$sentencia_editar = null; 

header('location:../index.php');
?>
