<?php
// json_encode() // metodo para codificar en json 

function pDump($variable)
{
  echo "<pre>";
  var_dump($variable);
    echo "</pre>";
}


$prueba2 = json_encode([0 => "Gato", 1 => "Perro", 2 => "Caballo"]);
pDump($prueba2);
echo "$prueba2<br/>";

$prueba3 = json_encode(["Animal1" => "Gato", "Animal2" => "Perro", "Animal3" => "Caballo"]);
pDump($prueba3);
echo "$prueba3<br/>";

$prueba4 = json_encode(["Gato" => true, "Perro" => 6, "Caballo" => null, "Otro" => ["Gato", "Perro", "Caballo"]]);
pDump($prueba4);
echo "$prueba4<br/>";

class User 
{
public $nombre = "Oscar";
public $apellidos = "Perolillos";
public $direccion = "Mi calle";
public $poblacion = "Ullastrel";
}

$user = new User();
$printUser = json_encode($user);
pDump($printUser);
echo "$printUser<br/>";

// json_decode() // metodo para convertir texto json en codigo php
$string = '{"0":"Isidoro","1":"Pepe"}';

$resul = json_decode($string);
pDump($resul);
echo "$resul<br/>";




?>