
// error_reporting(E_ERROR);
// Ya no recibiremos ninguna notificacion de error en pantalla
// error_reporting(0);

// Notificar solamente errores de ejecuciones
// error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Notificar E_NOTICE tambien puede ser bueno (para informar de variables no inicializadas, etc)
// error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
// error_reporting(E_ALL  ^ E_NOTICE);

// Notificar todos los errores de PHP (ver el registro de cambios)
// error_reporting(E_ALL);

// Notificar todos los errores de PHP
// error_reporting(-1);

// lo mismo que error_reporting(E_ALL);
// ini_set('error_reporting', E_ALL);


// header("content=type:text/html;charset=\UTF-8\");
