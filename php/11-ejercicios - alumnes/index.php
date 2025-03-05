<?php
require "./planteamientos.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>

    <h2>Ejercicio #1</h2>
    <p><?= $ejercicio1;?></p>
    <p> <?= require "./ejercicio1.php"; ?>> </p>
    
    
    <h2>Ejercicio #2</h2>
    <p><?= $ejercicio2 ?></p>
    <p> <?= require "./ejercicio2.php"; ?> </p>


    <h2>Ejercicio #3</h2>
    <p><?= $ejercicio3 ?></p>
    <p> <?= require "./ejercicio3.php"; ?> </p>
    
    
    <h2>Ejercicio #4 y #5</h2>
    <p><?= $ejercicio4 ?></p>
    <p><?= $ejercicio5 ?></p>

    <form action="" name="calculadora">
        <input type="number" name="num1" id="num1" placeholder="Introduce el primer número">
        <input type="number" name="num2" id="num2" placeholder="Introduce el segundo número">
        <input type="submit" value="Calcular">
    </form>
    <p><?= require "./ejercicio4.php";?></p>

    <!-- <h2>Ejercicio #5</h2>
    <p></p>
    <form action="ejercicio5.php" name="calculo">
        <input type="number" name="num3" id="num4" placeholder="Introduce el primer número">
        <input type="number" name="num3" id="num4" placeholder="Introduce el segundo número">
        <input type="submit" value="Calcular">
    </form>
    <p><?= require "./ejercicio5.php";?></p> -->
</body>
</html>