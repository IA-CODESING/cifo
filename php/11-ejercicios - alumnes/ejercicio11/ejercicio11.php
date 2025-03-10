<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <?php
                require_once './cabecera.php';

                foreach ($cabecera as $key) {
                    echo '<th>' . $key . '</th>';
                };
                ?>
            </tr>
        </thead>
        <tbody>

            <tr>
                <?php
                require_once './tabla1.php';

                foreach ($rowOne as $key) {
                    echo '<th>' . $key . '</th>';
                };
                ?>
            </tr>
            <tr>
                <?php
                require_once './tabla2.php';

                foreach ($rowTwo as $key) {
                    echo '<th>' . $key . '</th>';
                };
                ?>
            </tr>
            <tr>
                <?php
                require_once './tabla3.php';

                foreach ($rowthree as $key) {
                    echo '<th>' . $key . '</th>';
                };
                ?>
            </tr>

        </tbody>
    </table>

</body>

</html>