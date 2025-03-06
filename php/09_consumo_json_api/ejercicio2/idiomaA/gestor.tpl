<?php

session_start();

if (isset($_GET['lang'])) { 
    if("esp" == $_GET["lang"]){
        $_SESSION["idioma"] = "esp";
    } elseif("cat" == $_GET["lang"]){
        $_SESSION["idioma"] = "cat";
    }
} elseif (!isset($_SESSION['idioma'])) {
    $_SESSION["idioma"] = "cat";
}

require "lang/".$_SESSION["idioma"].".php";

function cabecera($langhome){
    require_once "principal.tpl"
?>
<?php
}



function menu($langhome){
    echo "<a href='index.php' >". $langhome['m1'] . "</a> ||  <a href='producto.php'>" . $langhome['m2'] . "</a>" ;
}

function principal($lang){
    ?>
    <div class="container-fluid">
        <h1> <?php echo $lang["titular"];?> </h1>
        <p> <?php echo $lang['cont1'];?>   </p>
        <p>  <?php echo $lang['cont2'];?>        </p>
        <p>  <?php echo $lang['cont3'];?>        </p>
    </div>
    <?php
}

function footer($lang){
    ?>
    <footer class="contaner-fluid">
        <h2> <?php echo $lang["foot"];?></h2>
        <a href="?lang=esp">esp</a> || <a href="?lang=cat">cat</a>
    </footer>
    <?php
}

