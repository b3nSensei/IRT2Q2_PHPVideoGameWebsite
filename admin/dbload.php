<?php
//Setting up the connection to the database
class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "vglib";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";
    private static $conn = null;
    public static function connect()
    {
        if(self::$conn == null)
        {
            try
            {
              self::$conn = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }
    public static function disconnect()
    {
        self::$conn = null;
    }
}
?>