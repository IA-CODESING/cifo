<?php

/* 
 Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
 (un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
 PD: Utilizar bucle while y for.
 */

echo '<h4>Utilizando el bucle while:</h4> <br>';
$numero = 0;
while($numero <= 40){
    echo "El cuadrado de $numero es: ".($numero*$numero)."<br>";
    $numero++;
}
echo "<br>";

echo '<h4>Utilizando el bucle for:</h4> <br>';
for($i = 0; $i <= 40; $i++){
    echo "El cuadrado de $i es: ".($i*$i)."<br>";
}

?>



