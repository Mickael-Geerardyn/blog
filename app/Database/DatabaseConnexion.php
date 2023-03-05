<?php

namespace App\Database;

use PDO;
use PDOException;

class DatabaseConnexion
{
    /**
     * @var PDO
     */
    private PDO $pdo;

    /**
     * @var object
     */
    private static object $_instance;

    /**
     * At each call, the constructor will be call first and if $pdo is empty,
     * it's trying to do a database connection with PDO object and storage
     * it in $pdo attribute to be used by getPDOInstance method
     */
    private function __construct()
    {
        if (empty($this->pdo))
        {
            try {
                $this->pdo = new PDO(
                    'mysql:host=localhost;dbname=portfolio;charset=utf8',
                    'mickael',
                    'XQXTqt!n8r!8ePHq',
                );
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo `L'erreur suivante est survenue: `. $exception->getMessage();
            }
        } else {
			$this->getPDOInstance();
		}
    }

    /**
     * This method allows to get a PDO instance with database connection
     * @return PDO
     */
    public static function getPDOInstance(): object
    {
        /*
         * If $_instance not contain a PDO instance, then create and storage
         * a new database connection in this private attribute
         */
        if (empty(self::$_instance))
        {
            self::$_instance = new DatabaseConnexion();
        }

        /*
         * In all cases, return a PDO instance of database connection
         */
        return self::$_instance->pdo;
    }
}
