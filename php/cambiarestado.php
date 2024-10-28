<?php 
         $id = $_GET['id'];
        $res =  explode("T", $id);

        $estado = $res[1];

        if ($estado == '1' ) {
            $estado = 0;
            echo "EN EL IF";
            include 'conexion.php';
        $sql_editar = 'UPDATE producto SET estado=? WHERE id=?';
        $sentencia_editar = $pdo->prepare($sql_editar);
        $sentencia_editar->execute(array($estado,$res[0]));

        //cerramos conexión base de datos y sentencia
        $sentencia_editar = null; 
        $pdo = null; 
        header('location:../index.php');
        }else{
            $estado = 1;
            echo "PAJUERA";
            include 'conexion.php';
        $sql_editar = 'UPDATE producto SET estado=? WHERE id=?';
        $sentencia_editar = $pdo->prepare($sql_editar);
        $sentencia_editar->execute(array($estado,$res[0]));

        echo  'SentenciaEditar';
        //cerramos conexión base de datos y sentencia
        $sentencia_editar = null; 
        $pdo = null; 
        header('location:../index.php');
        }

 ?>