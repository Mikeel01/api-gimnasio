<?php
include 'conexion.php';

$sql = "SELECT 
            clientes.id_cliente,
            clientes.nombre,
            clientes.telefono,
            clientes.correo,
            membresias.tipo AS membresia
        FROM clientes
        INNER JOIN membresias 
        ON clientes.id_membresia = membresias.id_membresia";

$resultado = $conn->query($sql);

$clientes = array();

while ($fila = $resultado->fetch_assoc()) {
    $clientes[] = $fila;
}

echo json_encode($clientes);

$conn->close();
?>