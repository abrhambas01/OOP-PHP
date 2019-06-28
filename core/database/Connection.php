<?php

namespace App\Core\Database;

use PDO;
use PDOException;


// this class will be used for connecting to the DB..

class Connection
{
    /**
     * Create a new PDO connection.
     *
     * @param array $config
     */
    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
