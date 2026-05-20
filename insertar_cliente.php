<?php
include 'conexion.php';

$nombre = $_POST['nombre'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$correo = $_POST['correo'] ?? '';
$id_membresia = $_POST['id_membresia'] ?? '';

if ($nombre == '' || $telefono == '' || $correo == '' || $id_membresia == '') {
    echo "Faltan datos";
    exit;
}

$sql = "INSERT INTO clientes(nombre, telefono, correo, id_membresia)
VALUES('$nombre', '$telefono', '$correo', '$id_membresia')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>