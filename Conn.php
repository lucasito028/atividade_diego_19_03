<?php

    abstract class Conn{

        public $host = "localhost";
        public $user = "root";
        public $pass = "";
        public $dbname = "atividade_de_diego_19";
        public $port = 3307;
        public object $connect;

        public function conectar(){
            try{

                $this->connect = new PDO("mysql:host=".$this->host.";port=".$this->port.
                ";dbname=".$this->dbname,$this->user, $this->pass);

                return $this->connect;
                echo"Bananada";
                
            }catch(Exception $err){

                die("Morri");
                return false;

            }

        }

    }

