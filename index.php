<?php

    require_once 'templates/header.php';

    require_once 'templates/home.php';

    require_once 'templates/footer.php';

    spl_autoload_register();

    use App\Controller\Controller;

    $controller = new Controller();
    $controller->route();

?>