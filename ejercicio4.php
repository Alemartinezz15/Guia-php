<?php
// Generar un número aleatorio entre 1 y 100
$num = rand(1, 100);

echo "El número generado es: $num <br>";

// Evaluar si es menor o mayor a 50
if ($num <= 50) {
    echo "El número es menor o igual a 50.";
} else {
    echo "El número es mayor a 50.";
}
?>
