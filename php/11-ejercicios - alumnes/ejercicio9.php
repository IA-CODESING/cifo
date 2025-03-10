<?php
// session_start();  // Iniciar la sesión para mantener las palabras entre recargas de página

// Inicializar el arreglo de palabras en la sesión si no existe
if (!isset($_SESSION['words'])) {
    $_SESSION['words'] = ['prueba', 'texto'];
}

$words = &$_SESSION['words'];  // Referenciar el arreglo de palabras en la sesión

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros</title>
</head>

<body>

    <form method="post">
        <label for="word">Agregar palabra:</label>
        <input type="text" name="word" required>
        <button type="submit">Añadir</button>
    </form>

    <?php
    // Comprobar si se envió una palabra por el formulario
    if (isset($_POST['word']) && !empty($_POST['word'])) {
        $palabra = $_POST['word'];

        // Comprobar si el arreglo $words tiene menos de 15 elementos
        if (count($words) < 15) {
            array_unshift($words, $palabra);  // Añadir la palabra al principio del arreglo
            echo '<h3>Arreglo actualizado:</h3>';
            echo '<pre>';
            print_r($words);  // Mostrar el arreglo actualizado
            echo '</pre>';
        } else {
            echo "El arreglo ya tiene 15 palabras.";
        }
    }
    ?>

</body>

</html>