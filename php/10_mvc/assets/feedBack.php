<?php
require_once "funciones.php";

session_start();

if(isset($_POST['error'])){
    $error = $GET['error'];

    $nombre = $_SESSION['nombre'];
    $apellidos = $_SESSION['apellidos'];
    $edad = $_SESSION['edad'];
    $email = $_SESSION['email'];
    $pass = $_SESSION['pass'];

    pDump($nombre);
    pDump($apellidos);
    pDump($edad);
    pDump($email);
    pDump($pass);

    echo ('ERRORUM' == $error)? '<trong stryle="color:red;">Introduce todos los datos en todos los campos del formulario</trong>' : '';
    echo ('nombre' == $error)? '<trong stryle="color:red;">Introduce El nombre</trong>' : '';
    echo ('apellido' == $error)? '<trong stryle="color:red;">Introduce El apellido</trong>' : '';
    echo ('edad' == $error)? '<trong stryle="color:red;">Introduce tu edad</trong>' : '';
    echo ('password' == $error)? '<trong stryle="color:red;">Introduce una contraseña valida</trong>' : '';

}
?>

