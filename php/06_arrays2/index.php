<?php
function pDump($param)
{
  echo "<pre><code>";
  var_dump($param);
  echo "</code></pre>";
}

/*
ARRAYS.
*/

$pelicula = "Airbag";
$peliculas = ["Airbag", "Abierto hasta el amanecer", "The Bad Taste"];
$cantantes = ["Josele Santiago", "Justin Sullivan", "Chrissie Hynde"];

// Array asociativo
$personas = [
  'nombre' => 'Oscar',
  'apellidos' => 'Eroles',
  'web' => 'myweb.com'  
];

echo $personas['apellidos'];

// Recorrer con FOR
echo "<h1>Listado de películas</h1>";
echo "<ul>";

for ($i = 0; $i < count($peliculas); $i++) {
  echo "<li> . $peliculas[$i] . </li>";
}

echo "</ul>";

// Recorrer con FOREACH
echo "<h1>Listado de cantantes</h1>";
echo "<ul>";

foreach ($cantantes as $cantante) {
  echo "<li>" . $cantante . "</li>";
}

echo "</ul>";

echo "<h1>Listado de personas</h1>";
echo "<ul>";

foreach ($personas as $key => $value) {
  echo "<li>" . $key = $value . "</li>";
}

echo "</ul>";


// ARRAYS MULTIDIMENSIONALES
$agenda = [
'uno' => 
['nombre' => 'Pepe', 'apellidos' => 'Perez', 'email' => 'email@email.com'],
['nombre' => 'Pepon', 'email' => 'otro@email.com'],
['nombre' => 'Jose', 'email' => 'mas@email.com'],
'nombre' => 'Antonio',
5
];

foreach ($agenda as $key => $value) {
  if (is_array($value)) {
    foreach ($value as $indice => $valor) {
      echo "Indice: " . $key . " - SubIndice: " . $indice . " - Valor: " . $valor . "<br>";
    }
  }
  else {
    echo "Indice: " . $key . " - Valor: " . $value . "<br>";
    }
  }
  



?>