<?php
include 'conexion.php';

$sql = "SELECT id_membresia, tipo, precio FROM membresias";
$resultado = $conn->query($sql);

$membresias = array();

while ($fila = $resultado->fetch_assoc()) {
    $membresias[] = $fila;
}

echo json_encode($membresias);

$conn->close();
?>