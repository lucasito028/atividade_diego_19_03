<?php
require './Conn.php';
require './Aluno.php';
session_start();
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
    
    $al = new Aluno();

    $form_data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //var_dump($form_data);

    if(!empty($form_data['cad'])){
        $a1->form_DT = $form_data;
        $value = $a1->cadastrar();

        if($value){
            echo "AEEEEE";
        }else{
            echo "Deu pau";
        }

    }
    

    ?>

    <form name="cre" method="post">

        <input type="number" name="cod" required>
        <input type="text" name="nome" required>
        <input type="text" name="email" required>
        <input type="submit" values="cadastrar" name="cad">

    </form>

    <?php
    
    $resp = $al->selecionar();

    foreach($resp as $have){

        extract($have);

        echo"ID $id <br>";
        echo"Codigo $matricula <br>";
        echo"Nome $nome <br>";
        echo"Email $email <br>";


    }
    
    ?>

</body>
</html>