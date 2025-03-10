<?php
session_start();

require_once 'function.php';

echo '<p>Ejercicio 8. Hacer un programa en PHP que tenga un array con 8 numeros enteros no consecutivos ni ordenados y crear una función  que haga lo siguiente:</p>';
$nums = [1, 6, 7, 9, 8, 0, 3, 2];

echo '<h3>Ejercicio 8.1</h3>';
echo '<p>Recorrerlo y mostrarlo al final del bucle imprimiendo la variable que contiene todo el recorrido</p>';
pDump($nums);

echo '<h3>Ejercicio 8.2</h3>';
foreach ($nums as $key) {
    echo "$key </br>";
};
echo '<h3>Ejercicio 8.3</h3>';
echo count($nums, COUNT_RECURSIVE);


echo '<h3>Ejercicio 8.4 y 8.5</h3>';
require 'delOchoalOnceparams.php';

echo '<h3>Ejercicio 9.</h3>';
echo '<p Escribir un programa con PHP que añada valores a un array ya existente ,mientras que su longuitud sea menor a 15 y luego mostrarlo por pantalla.</p>';

require_once 'ejercicio9.php';

echo '<a href="ejercicio10.php">Ir al ejercicio 10</a><br>';

echo '<a href="ejercicio11/ejercicio11.php">Ir al ejercicio 11</a>';
