<?php
require 'conexion1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_POST['usuario_id'];
    $vehiculo_id = $_POST['vehiculo_id'];
    $fecha_compra = date('Y-m-d');

    $sql = "INSERT INTO compras (usuario_id, vehiculo_id, fecha_compra) VALUES ('$usuario_id', '$vehiculo_id', '$fecha_compra')";

    if (mysqli_query($conn, $sql)) {
        echo "Compra registrada correctamente.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
