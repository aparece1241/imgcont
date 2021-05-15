<?php
    class Database {

        private $server_name   =  "localhost"; //for now since it is in local
        private $username      =  "root";      //for now since it is in local
        private $password      =  "";          //for now since it is in local
        private $dbname        =  "";
        private $conn_name     = "mysql"; 
        private $connection;

        function __construct() {
            try {
                $connection_string = $this->conn_name.":host=".$this->server_name.";dbname=".$this->dbname;
                $this->connection = new PDO($connection_string, $this->username, $this->password);
                // create response class to get the responses 
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected!";
            } catch (PDOException $e) {
                // create response class to get the responses
                echo $e->getMessage();
            } 
        } 

        public function getConnection()
        {
            return $this->connection;
        }
    }

?>