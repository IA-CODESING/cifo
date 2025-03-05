<?php

$primera_var = "String o Literal"; //string
$primer_numero = 50;  //number
$otro_numero = 30.32; //number
$numero_o_no = "50"; // litereal o string

print  ($primera_var);
echo '<br>';
echo $primer_numero;

$verdadero_o_no = true; //boolean
$falso_o_no = false;  //boolean
echo '<br>';
echo $verdadero_o_no; //devuelve un "1"
echo $falso_o_no; //no devuelve nada 

$nombre = "pepe";

$parrafada = '<h1 style="font-size:30px; font-family:Arial;">Ejemplo</h1><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ad mollitia ducimus consequatur molestiae quaerat quis, fugiat in, nesciunt modi accusantium! Consectetur praesentium consequatur facere quod blanditiis eius, sed neque. </p> <strong>'. $nombre . '</strong>Lo haremos con un &lt;br&gt <br><strong><em>tag</em></strong></br><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, omnis quibusdam. Nisi, impedit? Exercitationem, dignissimos repellat. Provident repellendus laudantium dicta quod, fugiat velit rerum quis quae accusamus laborum distinctio fuga!</p>';
echo $parrafada;
$html = "<br> en HTML";


const NOMBRECONSTANTE = "javier";
echo NOMBRECONSTANTE;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer documento en Php y Html</title>
    <style> 
    p{
        color: red;
        font-family: Arial;
    }
    pre{
        border: 1px solid black;
        padding: 10px;
        margin: 10px;
        background-color: #EEE;
    }
    </style>
</head>
<body>
    <h1>Introduccion a Php embebido <?php echo $html; ?></h1>
    <h2>Introduccion a PHp embebido <?= $html; ?></h2>

    <?= $primera_var .  "<br>" . $primera_var . "-" . $primer_numero . "-" . $otro_numero . "-" . $falso_o_no . "-" . $verdadero_o_no . "-" . $numero_o_no . "<br>";

    echo "<p>" .  gettype($primera_var) . "</p><br>";
    echo   gettype($primer_numero) . "<br>";
    echo   gettype($otro_numero) . "<br>";
    echo   gettype($falso_o_no) . "<br>";
    echo   gettype($verdadero_o_no) . "<br>";
    echo   gettype($numero_o_no) . "<br>";

    echo print_r($primera_var) . "<br>";  //es un tipo de typeOff
    echo var_dump($primera_var) . "<br>";  //es la sustitucion de length en php


    $non = "Pepom";
    define("nombre", $non); //pareceido a un objeto
    define("APELLIDOS", "Garcia");
    const OTRACONS = "Otra constante";

    echo "<p>" . nombre . " " . APELLIDOS . " " . OTRACONS . "</p><br>";
    
    ?>
    
    <pre>
        <code>
        <?php
            $a = "Hola";

            echo "<br>
            
            1-" , $a , "<br>",
            "2- $a  = Hola <br>",
            '3-  $a   = "Hola" . <br>',
            "4-\$a = hola<br>",
            "5- \$a = \"hola\"<br>",
            "6- \$a = 'hola'<br>";
        ?>
        </code>
    </pre>


</body>
</html>