<?php
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $suma += $i;
        echo "$i - Suma acumulada: $suma<br>";
    }
}
?>


