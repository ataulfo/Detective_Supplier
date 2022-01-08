<?php


$NOME_FORNECEDOR = $_POST["FORNECEDOR"];
$TESTE_COMPRADOR = $_POST["COMPRADOR"]; 
$TESTE_TROCA     = $_POST["TROCA"];
$STATUS_RECOLHIMENTO = $_POST["STATUS_RECOLHIMENTO"];
$tela = $_POST['STATUS_TELA'];
$QUEM_RECEBE = $_POST['QUEM_RECEBE']; 

echo 'FORNECEDOR '.ucfirst($NOME_FORNECEDOR).'<br>';




echo $TESTE_COMPRADOR.'<br/>';
echo $TESTE_TROCA.'<br/>';
echo $STATUS_RECOLHIMENTO.'<br/>';
echo $tela.'<br/>'; 
echo $QUEM_RECEBE.'<br/>';






?>