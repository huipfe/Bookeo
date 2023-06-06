<?php 

namespace App\Controller;

use App\Repository\BookRepository;

class BookController extends Controller
{
    public function route() : void
    {
        try {
            if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'show':
                    // Afficher un livre
                    $this->show();
                    break;
                case 'list':
                    // Pour afficher tout les livres, list()
                    break;
                case 'edit':
                    // Pour modifier un livre, edit()
                    break;
                case 'add':
                    // Pour ajouter un livre, add()
                    break;   
                case 'delete':
                    // Pour supprimer un livre, delete()
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

    protected function show()
    {
        try {
            if (isset($_GET['id'])){
            // On récup l'ID
            $id = (int)$_GET['id'];
            // Charger le livre, par un appel au repository
            $bookRepository = new BookRepository();
            $book = $bookRepository->findOneById($id);
            /* On passe en premier le para à charger
            et en deuxième un tableau associatif de paramètres
            */
            $params = [
                'book' => $book
            ];
            // Faire le rendu, en faisant une nouvelle méthode
            $this->render('book/show', $params);                
            }else {
            throw new \Exception('Aucun id détecté');
            }
        }catch(\Exception $e) {
            $this->render('error/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
}





?>