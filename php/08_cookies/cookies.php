<?php

/* 
Cookie es un fichero que se almacena en el ordenador del usuario que visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web
*/

// Crear cookie
// setcookie("nombre","valor que solo puede ser texto",caducidad,ruta,dominio);

//Cookie basica, dura lo que dura una sesion
/* setcookie("mycookie","valor de mi galleta"); */

// Cookie con expiracion
setcookie("oneyear","Cookie de 365 dias",time() + (60 * 60 * 24 * 365));

setcookie("contador",$_COOKIE['contador'] + 1,time() + 10);
var_dump($_COOKIE);

?>