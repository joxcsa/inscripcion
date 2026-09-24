<?php
include_once "../modelo/conexion.php";

// Recoger datos del formulario
$nombAlu    = $_POST['nombAlu'];
$id_alumno  = $_POST['id_alumno'];
$nomAdmin   = $_POST['nomAdmin'];
$ventanilla = $_POST['ventanilla'];
$fecha      = $_POST['fecha'];
$hora       = $_POST['hora'];

// Preparar la consulta de inserción
$consulta = "INSERT INTO citas (
    id_cita, nombAlu, id_alumno, nomAdmin, ventanilla, fecha, hora
) VALUES ('', '$nombAlu', '$id_alumno', '$nomAdmin', '$ventanilla', '$fecha', '$hora')";

// Ejecutar la consulta
$inserta = mysqli_query($conectar, $consulta);

// Verificar resultado
if ($inserta) {
    echo "<script>
        alert('Cita agendada correctamente');
        location.href = '../Vista/citas.php';
    </script>";
} else {
    echo "<script>
        alert('Error al agendar la cita');
        location.href = '../Vista/citas.php';
    </script>";
}
?>
