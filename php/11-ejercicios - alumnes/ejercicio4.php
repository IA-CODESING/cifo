
<?php

require "./ejercicio5.php";

$num1 = intval($_GET['num1']);
$num2 = intval($_GET['num2']);

function calculadora($num1, $num2) {

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multi = $num1 * $num2;
    $division = $num1 / $num2;
    
    $cadena_texto = "";
    
    $cadena_texto .= "Suma de $num1 + $num2 es igual a $suma <br>";
    $cadena_texto .= "Resta de $num1 -  $num2 es igual a $resta <br>";
    $cadena_texto .= "Multiplicación de $num1 y $num2 es igual a $multi <br>";
    $cadena_texto .= "división de $num1 y $num2 es igual a $division <br>";
    
    $cadena_texto .= "<hr>";
    
    return $cadena_texto;

};
$rsultado = calculadora($num1, $num2); 
echo $rsultado;


function numerominmax($num1, $num2) {
    if ($num1 < $num2) {
        for ($i = $num1; $i <= $num2; $i++) {
            echo $i . '<br>';
        }
    } else {
        echo 'El primer número debe ser menor que el segundo';
    }
};
$resultado2 = numerominmax($num1, $num2);

?>








