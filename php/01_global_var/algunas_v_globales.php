<?php

function pDump($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
//! Ejemplos de variables globales

// echo var_dump($_SERVER);

echo "<h2>" . $_SERVER['SERVER_NAME']  . "</h2>";
echo "<h2>" . $_SERVER['SERVER_SOFTWARE']  . "</h2>";
echo "<h2>" . $_SERVER['HTTP_USER_AGENT']  . "</h2>";
echo "<h2>" . $_SERVER['SERVER_PORT']  . "</h2>";


pDump($_SERVER);

?>