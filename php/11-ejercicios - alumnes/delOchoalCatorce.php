<?php

function pDump($variable) {
    echo "<pre>";
    var_dump($variable) ;
    echo "</pre>";
}

$nums = [1,6,7,9,8,0,3,2];

pDump($nums);

foreach ($nums as $key) {
    echo "$key </br>";
};

echo count($nums, COUNT_RECURSIVE);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>

    <form action="">
        
    </form>
    
</body>
</html>
