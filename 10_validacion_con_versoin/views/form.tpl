<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
<h1>Validar formulario en PHP</h1>

<form method="post" action="controller/validator.php" >
<!-- envia al controller la informacion  -->
<label for="nombre">Nombre</label><br>
<input type="text" name="nombre" value="<?= isset($nombre) ? $nombre : '';?>"><br>

<label for="nombre">Apellidos</label><br>
<input type="text" name="apellidos" value="<?= isset($apellidos) ? $apellidos : '';?>"><br>

<label for="nombre">Edad</label><br>
<input type="text" name="edad" value="<?= isset($edad) ? $edad : '';?>"><br>

<label for="email">Email</label><br>
<input type="text" name="email" value="<?= isset($email) ? $email : '';?>"><br>

<label for="email">Contraseña</label><br>
<input type="password" name="pass" value="<?= isset($pass) ? $pass : '';?>"><br>

<!-- los inputs a su vez recogen -->
 <input type="submit" name="enviar" value="Enviar">
</form>

</body>
</html>
