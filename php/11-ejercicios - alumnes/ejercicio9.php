<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros</title>
</head>
<body>
    
    <form method="post">    
        <label for="word">Buscar numero:</label>
        <input type="text" name="word" required>
        <button type="submit">Añadir</button>
    </form>

<?php
    if (isset($_POST['word']) && !empty($_POST['word'])) {
        $palabra = $_POST['word'];

        
        for ($i=0; $i <= 15; $i++) { 
            
        }

    }

?>

</body>
</html>
