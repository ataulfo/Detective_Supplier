<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

<?php

session_start();

require_once 'back-sistema/conexao.php';
if(!isset($_SESSION['ID'])):
  header('Location:login.php');
  endif;
  $nome = $_SESSION['nome'];
  $ID   = $_SESSION['ID'];

echo 'Bem vindo '.$nome.'<br/>';
echo 'Seu ID '.$ID;

  ?>


    
</body>
</html>