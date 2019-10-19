<?php


require_once($_SERVER['DOCUMENT_ROOT'] . "SCM_SI/init.php");

class Banco
{

    private static $_instance;
    private $_connection;
    public static function getInstance()
    {

        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct()
    {
        $dsn = 'mysql:dbname=SI; host=127.0.0.1';
        $user = 'root';
        $password = '12345';
        try {
            $this->_connection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    private function clone()
    { }

    public function getConnection()
    {
        return $this->_connection;
    }
}
