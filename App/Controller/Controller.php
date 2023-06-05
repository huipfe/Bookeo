<?php 


namespace App\Controller;

Class Controller
{
    public function route() : void
    {
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    // Charger page controller
                    $pageController = new PageController();
                    $pageController->route();
                    break;
                case 'category':
                    // Charger category controller
                    // $categoryController = new CategoryController();
                    // $categoryController->route();
                    break;
                case 'book':
                    // Charger Book controller
                    // $bookController = new BookController();
                    // $bookController->route();
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

    protected function render(string $path, array $params = []):void
    {
        // _ROOTPATH_.'/templates/page/about.php';
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';

        try {
        if (!file_exists($filePath)) {
            // Générer Erreur
            throw new \Exception('Le fichier '.$filePath.' n\'existe pas');
        } else {
        // On extrait les paramètres
        extract($params);
            // On inclut le template
            require_once $filePath;
        }
        }catch(\Exception $e) {
            echo $e->getMessage();
        }



        // // On démarre le buffer de sortie
        // ob_start();
        // // On inclut le template
        // require_once 'templates/' . $path . '.php';
        // // On stocke le contenu du buffer dans une variable
        // $content = ob_get_clean();
        // // On inclut le template qui utilise le layout
        // require_once 'templates/layout.php';
    }
}



?>