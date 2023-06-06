<?php 


namespace App\Controller;

Class Controller
{
    public function route() : void
    {
        try {
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
                        $bookController = new BookController();
                        $bookController->route();
                        // var_dump('On charge Book controller');
                        break;
                    default:
                        throw new \Exception('Le controller n\'existe pas');
                    break;
                }
            } else {
                // Charger la page d'acceuil du site, si pas de controleur dans l'url.
                $homeController = new PageController();
                $homeController->home();
            }
        }  catch(\Exception $e) {
            $this->render('error/default', [
                'error' => $e->getMessage()
            ]);
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
            $this->render('error/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
}



?>