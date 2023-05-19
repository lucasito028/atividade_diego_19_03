<?php
/*Na parte de alterar só está funcionando a parte do processamento(falo da Classe) mas não está 
consegundo colocar os dados querendo alterar dentro do "Input"

Ou seja na parte de alterar somente a função(alterar()) da classe aluno está funcionando
Mas a parte de colocar os dados no input Não
*/

require './classes/Conn.php';
require './classes/Aluno.php';

session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade do Diego AI</title>
    <link rel="stylesheet" href="">
</head>
<body>

<?php
    
    //Cadastrar

    $ac = new Aluno();

    $form_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($form_data);

    if(!empty($form_data['cad'])){

        $ac->form_DT = $form_data;

        $value = $ac->cadastrar();

        if($value){
            $_SESSION['msg'] = "<h1>Cadastrado</h1>";
           
        }else{
            $_SESSION['msg'] = "Deu ruim<br>";

        }

    }
    

    ?>

<?php
    
    //Alterar
    $at = new Aluno();

    $form_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($form_data);

    if(!empty($form_data['alt'])){

        $at -> form_DT = $form_data;

        $value = $at -> alterar();

        if($value){
            $_SESSION['msg'] = "<h1>Alterado</h1>";
           
        }else{
            $_SESSION['msg'] = "Deu ruim<br>";

        }

    }
    

    ?>

    <form name="cre" id="cre" method="post">

        <p>
        <span>Codigo</span>
        <input type="number" id="cod" name="cod" value = "" required></p>

        <p>
        <span>Nome</span>
        <input type="text" id="nome" name="nome" value = "" required></p>

        <p>
        <span>Email</span>
        <input type="text" id="email" name="email" value = "" required></p>

        <p>
        <input type="submit" values="cadastrar" id="cad" name="cad">
        </p>

        <h3>Se quiser alterar um cadastro tem que clicar num botão</h3>
        <button onclick="alt()">Alterar</button>
    </form>


    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>

    <?php

    //Selecionar
    $al = new Aluno();

    $resp = $al->selecionar();

    foreach($resp as $have){

        extract($have);
        echo '<div id = "sele">';
        echo '<p id="p">'.$id.'</p>';
        echo '<p>'.$cod.'</p>';
        echo '<p>'.$nome.'</p>';
        echo '<p>'.$email.'</p>';
        echo '</div>';
        echo '<br>';


    }
    
    ?>

<script>


//Parte de mudar para alterar
function alt(){
    document.getElementById("cre").innerHTML = `
        <p>
        <span>ID:</span>
        <input type="number" id="id" name="id" value = "" required></p>

        <p>
        <span>Codigo</span>
        <input type="number" id="cod" name="cod" value = "" required></p>

        <p>
        <span>Nome</span>
        <input type="text" id="nome" name="nome" value = "" required></p>

        <p>
        <span>Email</span>
        <input type="text" id="email" name="email" value = "" required></p>

        <p>
        <input type="submit" values="cadastrar" id="cad" name="alt">
        </p>
        
        <h3>Se quiser alterar um cadastro tem que clicar num botão</h3>
        <button onclick="cad()">Cadastrar</button>`;
}


//Parte de mudar Cadastrar
function cad(){
    document.getElementById("cre").innerHTML = `
    <p>
        <span>Codigo</span>
        <input type="number" id="cod" name="cod" value = "" required></p>

        <p>
        <span>Nome</span>
        <input type="text" id="nome" name="nome" value = "" required></p>

        <p>
        <span>Email</span>
        <input type="text" id="email" name="email" value = "" required></p>

        <p>
        <input type="submit" values="cadastrar" id="cad" name="cad">
        </p>

        <h3>Se quiser alterar um cadastro tem que clicar num botão</h3>
        <button onclick="alterar()">Alterar</button>`;
}

</script>

</body>
</html>