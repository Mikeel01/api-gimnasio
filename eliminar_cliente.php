<?php
include 'conexion.php';

$id_cliente = $_POST['id_cliente'] ?? '';

if ($id_cliente == '') {
    echo "Falta el id del cliente";
    exit;
}

$sql = "DELETE FROM clientes WHERE id_cliente = '$id_cliente'";

if ($conn->query($sql) === TRUE) {
    echo "Cliente eliminado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>