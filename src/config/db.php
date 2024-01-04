<?php

class Db
{
    protected static $connection;

    public function connect()
    {
        try {
            if (!isset(self::$connection)) {
                $config = parse_ini_file("config.ini");
                self::$connection = new mysqli("localhost", $config["username"], $config["password"], $config["database"]);
            }
            if (self::$connection->connect_error) {
                throw new Exception('Connect Error (' . self::$connection->connect_errno . ') ' . self::$connection->connect_error);
            }
            return self::$connection;
        } catch (Exception $e) {
            // Handle connection error, log or return a message
            return false;
        }
    }

    public function query_execute($queryString)
    {
        $connection = $this->connect();
        $result = $connection->query($queryString);
        $connection->close();
        return $result;
    }

    public function select_to_array($queryString)
    {
        $rows = array();
        $result = $this->query_execute($queryString);
        if ($result == false) {
            return false;
        }
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }
        return $rows;
    }
}
