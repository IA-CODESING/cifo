<?php

function pDump($param){
    echo "<pre> <code>";
    var_dump($param);
    echo "<pre> <code>";
}

pDump('Carlos');
// Arrays 
// Un array es un avariable que almacena una coleccion de datos o valores, bajo un unico nombe, para acceder a esos valores podemos usar un indice numerico o alfanumerico.

$pelicula = "Airbag";
$peliculas = ['airbag', 'el señor de los anillos', 'gran torino', 'the bigban teory'];
$cantantes = ['josele', 'el fary', 'el brevas'];
$personas = [
    'nombre' => 'josele',
    'apellidos' => 'el fary',
    'web' => 'josele.com',
    'nombre' => 'maria',
    'apellidos' => 'trejo',
    'web' => 'trejo.com',
    'nombre' => 'romeo',
    'apellidos' => 'trus',
    'web' => 'romeo.com'
];

echo $personas['nombre'] . '<br>';

// Recorrer un array con bucle for
echo '<h3>Listado de Peliculas</h3>';
echo '<ul>';
    for($i = 0; $i < count($peliculas); $i++){ // count() devuelve la cantidad de elementos que tiene un array funciona como el .length
        echo '<li>' . $peliculas[$i] . '</li>';
    };
echo '</ul>';


// forEach
echo '<h3>Listado de Cantantes</h3>';
echo '<ul>';
    foreach($cantantes as $cantante){
        echo '<li>' . $cantante . '</li>';
    };
echo '</ul>';

echo '<h3>Listado de Personas</h3>';
echo '<ul>';
foreach ($personas as $key => $value) {
    echo '<li>' . $key . ' - ' . $value . '</li>';
};
echo '</ul>';




$agenda = [
    'uno' => [
        'nombre' => 'josele',
        'apellidos' => 'el fary',
        'web' => 'josele.com',
        'email' => 'jose@gmail.com',
        'telefono' => '123456789'
    ],
    [
        'nombre' => 'maria',
        'apellidos' => 'trejo',
        'web' => 'trejo.com'
    ],
    [
        'nombre' => 'romeo',
        'apellidos' => 'trus',
        'web' => 'romeo.com'
    ],
    'numero' => 123,
    4,
    'nombre' => 'josele',
    5
];

foreach ($agenda as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $indice => $valor) {
            echo $indice . ' - ' . $valor . '<br>';
        }
    }else{
        echo $key . ' - ' . $value . '<br>';
    }
}

?>