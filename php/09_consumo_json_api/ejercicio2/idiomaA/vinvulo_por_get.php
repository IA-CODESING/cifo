<?php

$lang = "";

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'esp') {
        $lang = "Variable escrita en castellano";
    }
    if ($_GET['lang'] == 'cat') {
        $lang = "Variable escrita en Catala";
    }
    if ($_GET['lang'] == 'ing') {
        $lang = "Variable escrita en English";
    }
};

echo "<br>";
echo $lang;
echo "<br>";
?>

<a href="?lang=esp">es</a> || <a href="?lang=cat">cat</a> || <a href="?lang=ing">ing</a>