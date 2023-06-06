<?php 

namespace App\Controller;

class PageController extends Controller
{
    public function route() : void
    {
        try {
            if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    // Appeler la méthode About
                    $this->about();
                    break;
                case 'home':
                    // Charger controller Home
                    $this->home();
                    break;
                default:
                        throw new \Exception('L\'action demandée n\'existe pas : '   .$_GET['action']);
                    break;
                }
            } else {
                // S'il n'y a pas d'action
                throw new \Exception('Aucune action détectée');
            }
            }catch(\Exception $e) {
            $this->render('error/default', [
                'error' => $e->getMessage()
            ]);
        }
    } 

    protected function about()
    {
        /* On passe en premier le para à charger
            et en deuxième un tableau associatif de paramètres
        */
        $params = [
            'title' => 'A Propos2',
            'description' => 'Lorem Ipsum2'
        ];


        // Faire le rendu, en faisant une nouvelle méthode
        $this->render('page/about', $params);
    }


        protected function home()
    {

        // Faire le rendu, en faisant une nouvelle méthode
        $this->render('page/home', [

        ]);
    }

}





?>