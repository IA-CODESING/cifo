<?php

require 'assets/funciones.php';

echo '<br>';
echo "SOY LA segunda PAGINA DE VARIABLES DE SESION";
session_start();
// echo $nomar_var;
// echo "<br>";
echo $_SESSION['session_var1'];
$numero = 5645645645.4578;
echo "<br>";

$_SESSION['session_var2'] = $numero;
pdump($_SESSION);
echo "<br>";

// echo "Ya me aburri de las variables de sesion";

?>

<a href="intro_variables_sesion.php">primera pagina</a> || <a href="uso_var_session.php">tercera pagina</a>
<?php session_destroy(); ?>
