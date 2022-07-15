<?php

    class Database{
        public function __construct(){

            $this->conn = new mysqli(BD_HOST, DB_USER, DB_PASS, DB_NAME);
            $this->conn ->set_charset("utf8");

            if($this->conn->connect_error){
                die("Connection failed: ". $this->conn->connect_error);
            }
        }
    }

?>