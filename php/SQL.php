<?php 
    //Productos
    $sql_Table_Productos = 'CREATE TABLE `producto` ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` varchar(255) NOT NULL, `costodolar` float(50) NOT NULL, `precio` float(50) NOT NULL, `estado` tinyint(1) NOT NULL, `ganancia` float NOT NULL, `almacen` varchar(255) NOT NULL,
    PRIMARY KEY  (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
    $gsentTableProductos = $pdo->prepare($sql_Table_Productos);
    $gsentTableProductos->execute();
    //valores
     $sql_Table_Valores = 'CREATE TABLE `valores` ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` text NOT NULL, `valor` float NOT NULL,
    PRIMARY KEY  (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
    $gsentTableValores = $pdo->prepare($sql_Table_Valores);
    $gsentTableValores->execute();
 ?>

 <!--  Other Tables

//ReporteZ 
$sqlTableReporteZ = 'CREATE TABLE `reportez` ( 
       `id` INT NOT NULL AUTO_INCREMENT ,
       `idreportezfacturas` INT NOT NULL ,
       `total` float NOT NULL,
       `totaldebito` float NOT NULL,
       `totalcredito` float NOT NULL,
       `factinicial` INT NOT NULL ,
       `factfinal` INT NOT NULL ,
       `createdAt` DATE NOT NULL UNIQUE,
       PRIMARY KEY  (`id`)) ENGINE = InnoDB;' ;
          $gsentTableReporteZ = $pdo->prepare($sqlTableReporteZ);
          $gsentTableReporteZ->execute();
          //reportezfacturas 
       $sqlTableReporteZFacturas = 'CREATE TABLE `reportezfacturas` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `idfactura` int(11) NOT NULL,
            `total` float NOT NULL,
            `codigo` int(11) NOT NULL,
            `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
             PRIMARY KEY  (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
          $gsentTableReporteZFacturas = $pdo->prepare($sqlTableReporteZFacturas);
          $gsentTableReporteZFacturas->execute();
		 //reportezfacturas 
       $sqlTableReporteZFacturas = 'CREATE TABLE `facturas_alcaldia` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `idfactura` int(11) NOT NULL,
            `codigo` int(11) NOT NULL UNIQUE,
            `codigofacturaz` int(11) NOT NULL,
             PRIMARY KEY  (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
          $gsentTableReporteZFacturas = $pdo->prepare($sqlTableReporteZFacturas);
          $gsentTableReporteZFacturas->execute();
          //Facturas
          $sql_Table_Facturas = 'CREATE TABLE `facturas` (
		    `id` int(11) NOT NULL AUTO_INCREMENT,
		    `idcliente` int(11) NOT NULL,
		    `anulado` tinyint(1) NOT NULL,
		    `codigo` int(11) NOT NULL UNIQUE,
		    `total` int(11) NOT NULL,
		    `formapago` varchar(25) NOT NULL,
		    `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		    PRIMARY KEY  (`id`)
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
		    $gsentTableFacturas = $pdo->prepare($sql_Table_Facturas);
		    $gsentTableFacturas->execute();
		    //clientes
          $sql_Table_Clientes = 'CREATE TABLE `clientes` (
		    `id` int(11) NOT NULL AUTO_INCREMENT,
		    `nombre` varchar(255) NOT NULL,
		    `tipodocumento` varchar(1) NOT NULL,
		    `cedula` varchar(20) NOT NULL,
		    `telefono` varchar(20) NOT NULL,
		    `direccion` varchar(255) NOT NULL,
		    `correo` varchar(255) NOT NULL,
		    `codigo` int(11) NOT NULL UNIQUE,
		    `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		    PRIMARY KEY  (`id`)
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
		    $gsentTableClientes = $pdo->prepare($sql_Table_Clientes);
		    $gsentTableClientes->execute();
          //productosfactura
          $sql_Table_ProductosFactura = 'CREATE TABLE `productosfactura` (
           `id` int(11) NOT NULL AUTO_INCREMENT,
		    `idfactura` int(11) NOT NULL,
		    `idproducto` int(11) NOT NULL,
		    `cantidad` int(11) NOT NULL,
		    `precio` float NOT NULL,
		    PRIMARY KEY  (`id`)
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
		    $gsentProductosTableFacturas = $pdo->prepare($sql_Table_ProductosFactura);
		    $gsentProductosTableFacturas->execute();
		    //Almacenes
		    $sql_Table_Almacen = 'CREATE TABLE `almacen` ( `id` int(11) NOT NULL AUTO_INCREMENT, `nombre` varchar(255) NOT NULL,
		    PRIMARY KEY  (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
 			$gsentTableAlmacen = $pdo->prepare($sql_Table_Almacen);
		    $gsentTableAlmacen->execute();

 -->