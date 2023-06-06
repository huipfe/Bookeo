<?php 

namespace App\Repository;

use App\Modele\Book;

class BookRepository
{
    public function findOneById(int $id)
    {
        //Appel à la BDD
        $book = [
        'id' => 1,   
        'title' => 'Titre du livre', 
        'description' => 'Description du livre',
        ];

        $bookEntity = new Book();
        $bookEntity->setId($book['id']);
        $bookEntity->setTitle($book['title']);
        $bookEntity->setDescription($book['description']);

        /*
            foreach ($book as $key => $value) {
                $setter = 'set'.ucfirst($key);
                $bookEntity->$setter($value);
            }
        */

        return $bookEntity;
    }
} 