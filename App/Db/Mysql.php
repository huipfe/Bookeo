<?php

namespace App\Db;

use PDO;

// Fichier qui va instancier PDO 

class Mysql
{
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_port;
    private $db_host; 
    private $pdo = null;
    private static $_instance = null;

    // Constructeur de la classe
    private function __construct()
    {
        $conf = require_once _ROOTPATH_ . '/config.php';
        if (isset($conf['db_name']) && isset($conf['db_user']) && isset($conf['db_password'])
            && isset($conf['db_port']) && isset($conf['db_host'])) {
        $this->db_name = $conf['db_name'];
        $this->db_user = $conf['db_user'];
        $this->db_password = $conf['db_password'];
        $this->db_port = $conf['db_port'];
        $this->db_host = $conf['db_host'];
        }

    }

    // Méthode qui va créer une instance de PDO

    public static function getInstance():self
    {
        // Si l'instance n'existe pas
        if (is_null(self::$_instance)) {
            // On se crée une instance
            self::$_instance = new Mysql();
            // Sinon
        }
            // On retourne l'instance
            return self::$_instance;
    }

    public function getPDO():PDO
    {
            if (is_null($this->pdo)){
            $this->pdo = new \PDO("mysql:dbname" . $this->db_name . ';charset=utf8;host' .
                $this->db_host.':'.$this->db_port, $this->db_user, $this->db_password);
            }
            return $this->pdo;
    }  
}







?>

