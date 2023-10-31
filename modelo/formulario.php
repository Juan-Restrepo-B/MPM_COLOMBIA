<?php

include("conexion.php");

$base = mysqli_query($conn, "SELECT * FROM Formulario");
if (!$base) {
    echo "No se encontro base de datos";
}

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$empresa = $_POST['empresa'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$file2 = $_POST['file_2'];

$sql = "INSERT INTO Formulario VALUES 
(null, '$nombres', '$apellidos', '$empresa', '$ciudad', 
'$correo', '$telefono', '$descripcion', '$file2')";

$ejecutar = mysqli_query($conn, $sql);
if (!$ejecutar) {
    echo "Hubo un error al enviar el Formulario por favor vuelvalo a intentar";
} else {
    echo '<script language="javascript">alert("Formulario Enviado Correctamente");
    window.location.href="../index.php"</script>';
}
?>