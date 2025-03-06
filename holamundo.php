<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MI weB</title>
</head>
<body>

<?php
   
    print ("¡Hola, mundo! from IES Poligono Sur");
    echo "<br>";
    define ("APELLIDO", "Garcia Perez");
    echo APELLIDO;


    $frase = "Instituto Poligono Sur";
    $edad = 25;            
    $esEstudiante = true;
          
    echo "<h2>Información de las Variables</h2>";
    echo "<br>";
    var_dump($frase);
    var_dump($edad);
    var_dump($esEstudiante);
    echo "<br>";



?>

</body>
</html>
