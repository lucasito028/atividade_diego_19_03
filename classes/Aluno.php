<?php

include("../conn/Conn.php");

class Aluno extends Conn{

    //Parte da Conecção
    public object $connect;

    //Parte de atributos Necessarios
    public $cod;
    public $nome;
    public $email;

    public function __construct($cod, $nome, $email){
        $this->cod = $cod;
        $this->nome = $nome;
        $this->email = $email;
    }
    
}