<?php

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','academy');

    define('BASE_URL', 'https://localhost/minha_pasta/academy_project/');

    define('NOME_PROJETO', 'Cururuquara Academy');
    define('DEBUG_MODE', true);

    spl_autoload_register(function ($class){
        include 'classes/' . $class . '.class.php';
    });

?>