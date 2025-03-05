<?php
require "./assets/libreria.php";
require "./views-vistas/header.tpl";
?>

<!-- Contenido -->
<main>
  <h1>Pagina Index</h1>
  <h2></h2>
  <p>Texto de prueba de la página de inicio</p>
  <p><?= $content_nosotros ?></p>
</main>

<p>Contacta con nosotros</p>

<?php
include "./views-vistas/contactar.php";
?>

<?php
require "./views-vistas/footer.tpl";
?>