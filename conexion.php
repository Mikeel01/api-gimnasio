<?php

$host = "b2qzpzudk8jpiyl55t4h-mysql.services.clever-cloud.com";
$user = "uimdfhls5kqswxnz";
$password = "9h81qtBRdLPL2wFyFCcM";
$database = "b2qzpzudk8jpiyl55t4h";
$port = "3306";

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>