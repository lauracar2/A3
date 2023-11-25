<?php

session_start();

include('conexao.php');
include('validar.php');

$nivel = $_SESSION['nivel'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>                                                               
</head>
<body>
    <center>
        <?php
        if($nivel < 3) { ?>
        <a href="addusuarios.php">
        Adicionar Usuário</a> 
        <?php }
      
        if($nivel == 1){ ?>
        |  <a href = "mudaracesso.php" > Mudar Acesso </a>
        <?php } ?>

         <?php
        if($nivel > 1){ ?>
       | <a href="alterardados.php">Alterar Dados</a>
       <br>
      <?php } ?>
       
      | <a href="logout.php">Sair</a>

    </center>
    
</body>
</html>