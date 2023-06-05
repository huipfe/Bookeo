<?php

    // require_once 'templates/header.php';

    // require_once 'templates/home.php';

    // require_once 'templates/footer.php';
    
    // var_dump(__DIR__);
    define ('_ROOTPATH_', __DIR__);

    spl_autoload_register();

    use App\Controller\Controller;

    $controller = new Controller();
    $controller->route();

?>