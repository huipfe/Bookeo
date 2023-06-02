<?php 


namespace App\Controller;

Class Controller
{
    public function route() : void
    {
        if (isset($_GET['controller'])) {
        switch ($_GET['controller']) {
            case 'category':
                // Charger category controller
                var_dump('On charge CategoryController');
                // $categoryController = new CategoryController();
                // $categoryController->index();
                break;
            case 'book':
                // Charger Book controller
                var_dump('On charge BookController');
                // $bookController = new BookController();
                // $bookController->index();
                break;
            case 'page':
                // Charger page controller
                var_dump('On charge PageController');
                // $pageController = new PageController();
                // $pageController->index();
                break;
            default:
                   //Error 404
                break;
            }
        } else {
            // Charger la page d'acceuil du site
            // $homeController = new HomeController();
            // $homeController->index();
        }
    } 
}



?>