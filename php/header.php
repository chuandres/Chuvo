
<script>//clock
      function mueveReloj(){ 
      momentoActual = new Date() 
      hora = momentoActual.getHours() 
      minuto = momentoActual.getMinutes() 
      segundo = momentoActual.getSeconds() 
      horaImprimible = hora + " : " + minuto + " : " + segundo 
      document.form_reloj.reloj.value = horaImprimible 
      setTimeout(mueveReloj,1000)
  }
</script>

<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Guaraguao Center C,A</title>
   
    <link rel="icon" type="image/x-icon" href="../../favicon.ico">
    <link rel="stylesheet" href="../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/jquery-confirm.min.css">
    <link rel="stylesheet" href="../../css/alertify.min.css">
    <link rel="stylesheet" href="../../css/fullcalendar.min.css">

  </head>