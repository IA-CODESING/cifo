
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Weater PHP</title>
</head>
<body>

<main class="w3-container 3w-display middle">
    <h1>¿Que tiempo hace?</h1>
    <form  class="3w-margin">
        <fieldset class="w3-padding w3-margin">
            <label for="cuidad">Introduce el nombre de una ciudad</label>
            <input type="text" name="ciudad" id="ciudad" class="w3-input w3-border" placeholder="Ejemplo: Madrid" value="">
        </fieldset>
        <button type="submit" class="w3-button w3-black">Buscar</button>
    </form>

    <div id="previsionTiempo">
        <?php
            if($prevision){
                echo '<div class="w3-panel w3-green w3-padding-24" role="alert">' . $prevision  .  '</div>';
            }else if($error != ""){
                echo  '<div class="w3-panel w3-red w3-padding-24" role="alert">' . $error  . '</div>';
            };
        ?>
        </div>
</main>
    
</body>
</html>