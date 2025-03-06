
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?php echo $langhome["title"]; ?></title>
</head>
<body>

<header>
    <nav class="navbar navbar-ligth bg-ligth justify-content-between" >

        <a class="navbar-brand">
            <?php echo $langhome["logo"];?>
        </a>

            <form class="form-inline">

                <label class="mr-sm-2">
                    <?php $langhome["cambiar_idioma"]; ?>
                </label>

                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="lang">
                        <option selected><?php echo $langhome["opcion_1"];?></option>
                        <option  value="esp"><?php echo $langhome["opcion_2"];?></option>
                        <option  value="cat"><?php echo $langhome["opcion_3"];?></option>
                    </select>

                    <button type="submit" class="btn btn-primary"><?php echo $langhome["cambiar"];?></button>
            </form>
    </nav>
</header>

<div class="container-fluid">
    <?php echo menu($langhome);?>
    <div class="row">
        <div class="col-8">
            <h3><?php echo $langhome["descripcion"];?></h3>
        </div>
    </div>
</div>