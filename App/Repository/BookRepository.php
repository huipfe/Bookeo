<?php
namespace App\Repository;

use App\Modele\Book;
use App\Db\Mysql;
use App\Tools\StringTools;
class BookRepository
{
    public function findOneById(int $id)
    {
        //Appel à la BDD
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM book WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        $book = $query->fetch($pdo::FETCH_ASSOC);
        $bookEntity = new Book();

        foreach ($book as $key => $value) {
                $setter = 'set'.StringTools::toPascalCase($key);
                $bookEntity->$setter($value);
            }


        return $bookEntity;
    }
} 