<?php
include '../Modelo/conexion.php';

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$rfc = $_POST['rfc'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
$carrera = $_POST['carrera'];
$experiencia = $_POST['experiencia'];
$cuenta_banco = $_POST['cuenta_banco'];
$correo = $_POST['correo'];
$curp = $_POST['curp'];
$ventana = $_POST['ventana'];

// Consulta SQL para insertar los datos
$consulta = "INSERT INTO administrativo 
(nombre, apellido1, apellido2, rfc, telefono, sexo, carrera, experiencia, cuenta_banco, correo, curp)
VALUES ('$nombre', '$apellido1', '$apellido2', '$rfc', '$telefono', '$sexo', '$carrera', '$experiencia', '$cuenta_banco', '$correo', '$curp', '$vetana')";

// Ejecutar la consulta
$inserta = mysqli_query($conectar, $consulta);

// Verificar si se insertó correctamente
if ($inserta) {
    echo "<script> alert('¡Administrativo guardado correctamente!');
        location.href = '../Vista/guardar_administrativo.php';
    </script>";
} else {
    echo "<script> alert('¡Error al guardar el administrativo!');
        location.href = '../Vista/guardar_administrativo.php';
    </script>";
}
?>
