<?php

require 'assets/funciones.php';

    echo "SOY LA tercera PAGINA DE VARIABLES DE SESION";
    echo '<br>';
session_start();
// echo $nomar_var;
echo $_SESSION['session_var1'];
echo "<br>";
// $numero = 5645645645.4578;
echo "<br>";

$_SESSION['session_var2'];;
pdump($_SESSION);
echo "<br>";

?>

<a href="intro_variables_sesion.php">primera pagina</a> || <a href="mas_var_session.php">segunda pagina</a>
<?php session_destroy(); ?>