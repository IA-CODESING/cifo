<?php

require 'assets/funciones.php';



// Sesion: Almacena y mantiene datos (los que querramos) del usuario mientras navega en un sitio web, hasta que cierra session, sale del dominio que la generó o cierra el navegador.
//Las variables de sesión son accesibles desde cualquier script de nuestro sitio web, siempre y cuando se haya iniciado la sesión con session_start().
//las variables de sesión se almacenan en el servidor, no en el cliente.
session_start();

echo $nomar_var;
echo '<br>';
echo "SOY LA PRIMER PAGINA DE VARIABLES DE SESION";

$_SESSION['session_var1'] = "yo soy una variable de sesion";
pdump($_SESSION);

echo "<br>";

echo $_SESSION['session_var1'];
echo "<br>";


echo $_SESSION['session_var2'];


pdump($_SESSION);   

?>

<a href="mas_var_session.php">segunda pagina</a> || <a href="uso_var_session.php">ultima pagina</a>