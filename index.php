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

    require './classes/Aluno.php';
    require './classes/Conn.php';
    
    $al = new Aluno();
    $resp = $al->selecionar();

    foreach($resp as $have){

        extract($have);

        echo"ID $id <br>";
        echo"Codigo $cod <br>";
        echo"Nome $nome <br>";
        echo"Email $email <br>";


    }
    
    ?>
</body>
</html>