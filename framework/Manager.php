<?php

namespace Pierre\P4\Framework;
use Pierre\P4\Framework\Configuration;

abstract class Manager
{
    protected $_db;

    public function __construct()
    {
        $this->setDb();
    }

    public function setDb()
    {
        try
        {

        $dsn = Configuration::get("dsn");
        $login = Configuration::get("login");
        $password = Configuration::get("password");
        $db = new \PDO($dsn, $login, $password);
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->_db = $db;
        }
        catch (\PDOException $e)
        {
                die('Erreur : ' . $e->getCode());
        }
}
}