<?php
// Incluye el archivo de conexión
include 'conexion.php';
// Función para hacer el backup
function hacerBackup() {
    global $pdo;
    $fecha = date('YmdHis');
    $archivo = 'backup_' . $fecha . '.sql';
    $comando = "mysqldump -h " . HOST . " -u " . USUARIO . " -p" . PASS . " " . DBNAME . " > " . $archivo;
    system($comando);
    return $archivo;
}

// Verifica si se ha enviado el formulario
if (isset($_POST['backup'])) {
    $archivo = hacerBackup();
    echo "Backup creado con éxito: <a href='" . $archivo . "'>" . $archivo . "</a>";
}

?>