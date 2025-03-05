<?php

function pDump($param){
    echo "<pre> <code>";
    var_dump($param);
    echo "<pre> <code>";
}

$cantantes = ['josele', 'el fary', 'el brevas', 'juanito', 'maria la del barrio'];
$numeros = [1, 2, 63, 3, 48, 5, 6, 7, 8, 9, 10];
$abece = ['a','d', 'e', 'f', 'g', 'h', 'b', 'c',  'i', 'j'];
pDump($abece);


// ordenar arrays

sort($abece);
pDump($abece);

pdump($cantantes);
sort($cantantes);
pdump($cantantes);


// Añadir elementos a un array
// #1
$cantantes[] = 'el chaval de la peca';
pdump($cantantes);

// #2
array_push($cantantes, 'gaspar');
pdump($cantantes);
// #3
$cantantes[] = 'fracisco de asis';
pdump($cantantes);



// Eliminar elementos de un array

array_pop($cantantes);
pdump($cantantes);

unset($cantantes[2]);
pdump($cantantes);


// Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// Clorar arrays

$original = ['a', 'b', 'c'];
$copy = array_merge([], $original);
pdump($original);
pdump($copy);


// Clonar con slice
$original = ['a', 'b', 'c'];
$copy = array_slice($original, 0);
pdump($original);
pdump($copy);


?>