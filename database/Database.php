<?php
    require "D:\Web Project\Pet-Shop_HCN-NDT\config\config.php";
    Class Database {
        public static $link;

        public static function connect () {
            if (self::$link === null) {
                self::$link = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
                if (self::$link->connect_error) {
                    die("Failed to connect with MySQL: ".self::$link->connect_error);
                }
                else {
                    // echo "Connected successfully!";
                }
                self::$link->set_charset("utf8");
            } 
        }

        public static function close() {
            if (self::$link !== null) {
                self::$link->close();
                self::$link = null;
            }
        }
    }
?>