<?php

class Aluno extends Conn{


    //Parte da Conecção
    public object $connect;

    //Parte de atributos Necessarios
    public array $form_DT;
    
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

    public function cadastrar()
    {
        var_dump($this->form_DT);

        $this -> connect = $this -> conectar();

        //Query de cadastrar
        $q = "INSERT INTO aluno(id, matricula, nome, email) VALUES (:cod, :nome, :email)";

        //A conecção prepara
        $add = $this -> connect -> prepare($q);
        $add -> bindParam(':cod', $this->form_DT['cod']);
        $add -> bindParam(':nome', $this->form_DT['nome']);
        $add -> bindParam(':email', $this->form_DT['email']);
        $add->execute();

        if($add -> rowCount()){
            return true;
        }else{
            return false;
        }

    }
}


    
