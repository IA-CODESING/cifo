<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros</title>
</head>
<body>
    
    <form method="post">    
        <label for="num">Buscar numero:</label>
        <input type="number" name="num" required>
        <button type="submit">Buscar</button>
    </form>

<?php
if (isset($_POST['num']) && !empty($_POST['num'])) {
    $param = $_POST['num'];

    // Función para buscar el número en el arreglo
    function buscarNum($param) {
        // require_once 'delOchoalCatorce.php';
        global $nums;
        // Verificar si el arreglo $nums está definido correctamente
        if (isset($nums) && is_array($nums)) {
            $dato = array_search($param, $nums);

            // Si se encuentra el número, devuelve su posición, si no, un mensaje
            if ($dato !== false) {
                return "Número encontrado en la posición: " . $dato;
            } else {
                return 'Valor no encontrado';
            }
        } else {
            return 'El arreglo $nums no está definido correctamente';
        }
    }

    // Llamar a la función y mostrar el resultado
    echo buscarNum($param);
} else {
    echo 'Por favor, ingresa un número válido';
}
?>

</body>
</html>
