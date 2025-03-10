

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
   $server = "localhost";
   $user = "root";
   $password = "la.1951.pa";
    $database = "gestion_coches";

    $conn = mysqli_connect($server, $user, $password, $database);
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>

</body>
</html>