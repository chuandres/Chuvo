<?php
include_once 'php/conexion.php';
// include_once 'php/listar.php';
  $flag = false;
  
  //Obtener Almacenes
  $sql_leerAlmacen = 'SELECT * FROM almacen ORDER BY nombre ASC';
  $gsentAlmacen = $pdo->prepare($sql_leerAlmacen);
  $gsentAlmacen->execute();
  $resultadoAlmacen = $gsentAlmacen->fetchAll();

  //Obtener Producto
  $sql_leer = 'SELECT * FROM producto ORDER BY nombre ASC';
  $gsent = $pdo->prepare($sql_leer);
  $gsent->execute();
  $resultado = $gsent->fetchAll();

  //Obtener Valores
  $sql_leer = 'SELECT * FROM valores';
  $gsent2 = $pdo->prepare($sql_leer);
  $gsent2->execute();
  $resultado2 = $gsent2->fetchAll();

  //Agregar producto

?>

<!-- Relog script -->
<script>
  function actualizarFecha() {
    var fecha = new Date();
    var diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
    var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
    var diaSemana = diasSemana[fecha.getDay()];
    var diaMes = fecha.getDate();
    var mes = meses[fecha.getMonth()];
    var año = fecha.getFullYear();
    
    document.getElementById("fecha").innerHTML = diaSemana + ", " + diaMes + " de " + mes + " del " + año;
    
    // Actualiza la hora en el reloj
    var horas = fecha.getHours();
    var minutos = fecha.getMinutes();
    var segundos = fecha.getSeconds();
    
    if (horas < 10) {
      horas = "0" + horas;
    }
    if (minutos < 10) {
      minutos = "0" + minutos;
    }
    if (segundos < 10) {
      segundos = "0" + segundos;
    }
    
    document.getElementById("subir").value = horas + ":" + minutos + ":" + segundos;
  }

  // Actualiza la fecha y hora cada segundo
  setInterval(actualizarFecha, 1000);

  // Llama a la función para inicializar la fecha y hora
  actualizarFecha();
</script>

<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Guaraguao Center C.A</title>   
      <link rel="icon" type="image/x-icon" href="favicon.ico">
      <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/jquery-confirm.min.css">
      <link rel="stylesheet" href="css/jquery.modal.min.css">
  </head>

  <!-- Relog Visible -->
  <body onload="mueveReloj()" style="background-color: #b9c8ff;">
    <?php include 'cabecera.php' ?>
      <div>
        <?php include 'panelPrincipal.php'; ?>
      </div>
      <div class="bg-light" style="margin: 50px;"> 
        <?php include 'tabla.php'; ?>
      </div>
      
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/jquery-confirm.min.js" type="text/javascript"></script>
    <script src="js/codigoJQ.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    
  </body>
</html>

<?php 
  $pdo = null;
  $gsent = null;
  $gsent2 = null;
  $resultadoAlmacen = null;
 ?>
