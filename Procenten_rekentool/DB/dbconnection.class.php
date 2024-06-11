<?php

class dbconnection extends PDO
{
    private $host = "database-5015937861.webspace-host.com";
    private $dbname = "dbs12990284";
    private $user = "dbu4850378";
    private $pass = "Jaartal19319";
    public function __construct()
    {
        parent::__construct("mysql:host=".$this->host.";dbname=".$this->dbname."; charset=utf8", $this->user, $this->pass);
        $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}