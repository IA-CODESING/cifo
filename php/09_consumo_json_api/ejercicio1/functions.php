<?php
error_reporting(0);
function pDump($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
}

$prevision = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['ciudad'])){
    $ciudad = $_GET['ciudad'];
    $ciudad = isset($ciudad) ? $ciudad : "";
    $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $ciudad . '&appid=61b1ef1bbdead1137b27bd8addf995af&units=metric&lang=es');

    if(!$urlContents){
        $error = "La ciudad no se ha encontrado";
    }else{
        $array = json_decode($urlContents, true);
        $prevision = "El tiempo en " . $ciudad . " es actualmente " . $array['weather'][0]['description'] . ".";
        $temperaturaEnCelsius = $array['main']['temp'];
        $prevision .= "La termperatura es "  . intval($temperaturaEnCelsius) . "&deg;C";
        $tempMin = $array['main']['temp_min'];
        $tempMax = $array['main']['temp_max'];
        $prevision .= "oscilando entre " . intval($tempMin) . "&deg;C y " . intval($tempMax) . "&deg;C";
    }
}

?>