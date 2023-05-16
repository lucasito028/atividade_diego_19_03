<?php

class Aluno extends Conn{

    //Parte da Conecção
    public object $connect;

    //Parte de atributos Necessarios
    public $cod;
    public $nome;
    public $email;
    
    public function selecionar():array
    {
        
        $this -> connect = $this -> conectar();
        //Query de selecionair
        $query = "select * from aluno order by id";

        //Parte de preparação banco de dados
        $result = $this->connect->prepare($query);
        $result->execute();
        $resultado = $result->fetchAll();
        
        return $resultado;

    }
}
