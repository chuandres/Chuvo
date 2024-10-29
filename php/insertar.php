<?php 
include_once 'conexion.php';


if($_POST){
    $nombre =  $_POST['nombre'];
    $costodolar =  $_POST['costodolar'];
    $precio = $_POST['precio'];
    $estado = 1;
    $ganancia = $_POST['ganancia'];
    $almacen = $_POST['almacen'];
    
      $nombre = strtoupper($nombre);

    $ganancia = ($ganancia - 100)*(-1);
    $ganancia = ($ganancia / 100);
    
    $sql_agregar = 'INSERT INTO producto (nombre,costodolar,precio,estado,ganancia,almacen) VALUES (?,?,?,?,?,?)';
    $sentencia_agregar = $pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($nombre,$costodolar,$precio,$estado,$ganancia,$almacen));
    //cerramos conexión base de datos y sentencia    
    // if ($sentencia_agregar->execute(array($nombre,$costodolar,$precio,$estado,$ganancia,$almacen))) {
    //     echo "Registro agregado con éxito";
    // }else{
    //   echo "Error insertando producto";
    // }
    $sentencia_agregar = null;
    $pdo = null;
    header('location:../index.php');
    }

 ?>