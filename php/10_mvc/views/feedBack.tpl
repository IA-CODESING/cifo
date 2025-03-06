<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios PHP</title>
</head>
<body>
    <?php  if('ok' === $error);?>

    <h1>Datos validados correctamente</h1>
    <p><?=isset($_SESSIONES['nombre]) ? $_SESSION['nombre'] : '';?></p>
    <p><?=isset($_SESSIONES['apellido]) ? $_SESSION['apellido'] : '';?></p>
    <p><?=isset($_SESSIONES['edad]) ? $_SESSION['edad'] : '';?></p>
    <p><?=isset($_SESSIONES['email]) ? $_SESSION['email'] : '';?></p>
    <p><?=isset($_SESSIONES['pass]) ? $_SESSION['pass'] : '';?></p>
</body>
</html>