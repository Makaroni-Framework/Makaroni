<?php
namespace Makaroni\Framework\Database;

class Connection
{

    public static function connect()
    {
        try {
            $connection = new \PDO("mysql:host=" . config('database.host') . ";dbname=" . config('database.name') . ";charset=utf8", config('database.user_name'), config('database.password'));
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (\PDOException$exception) {
            die($exception->getMessage());
        }
    }
}
