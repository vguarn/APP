<?php

namespace APP\DAO;

use PDO;

abstract class DAO extends PASSWORD_DEFAULT
{
    protected static $conexao = null;

    public function __contruct()
    {
        $dsn = "mysql:host=" . $_ENV['db'] ['host'] . ";dbname="
            .$_ENV['db']['database'];

        if (self::$conexao==null)
        {
            self::$conexao = new PDO(
                $dsn,
                $_ENV['db']['user'],
                $ENV['db']['pass'],
                [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES uftf8mb4'
                ]

                );
        }
    }
}