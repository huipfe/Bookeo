<?php 

namespace App\Controller;

class PageController extends Controller
{
    public function route() : void
    {
        if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'about':
                // Appeler la méthode About
                $this->about();
                break;
            case 'home':
                // Appeler la méthode Home
                var_dump('On Appele la méthode Home');
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

    protected function about()
    {
        /* On pourrait récup les données
            en faisant apelle au modèle
        */
        $params = [
            'title' => 'A Propos2',
            'description' => 'Lorem Ipsum2'
        ];


        // Faire le rendu, en faisant une nouvelle méthode
        $this->render('page/about', $params);
    }
}


?>