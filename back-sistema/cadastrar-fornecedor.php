<?php

$NOME_FORNECEDOR = $_POST["FORNECEDOR"];
$TESTE_COMPRADOR = $_POST["COMPRADOR"]; 
$TESTE_TROCA     = $_POST["TROCA"];
$STATUS_RECOLHIMENTO = $_POST["STATUS_RECOLHIMENTO"];
$tela = $_POST['STATUS_TELA'];
$QUEM_RECEBE = $_POST['QUEM_RECEBE']; 

    echo 'FORNECEDOR '.strtoupper($NOME_FORNECEDOR).'<br>';

if($_POST["COMPRADOR"] == '1'):
        echo "COMPRADOR MARCIO";
    elseif($_POST["COMPRADOR"] == '2'):
        echo "COMPRADOR HELTHON JHON";
        elseif($_POST["COMPRADOR"] == '3'):
            echo "COMPRADOR LEONARDO";    
            elseif($_POST["COMPRADOR"] == '4'):
                echo "COMPRADOR PABLO";
                elseif($_POST["COMPRADOR"] == '5'):
                     echo "COMPRADOR THAYS";
                
    endif;

echo '<br>';

    if($_POST["TROCA"] == '1'):
        echo "COM TROCA";
        elseif($_POST["TROCA"] == '2'):
            echo "SEM TROCA";
            elseif($_POST["TROCA"] == '3'):
                echo "BONIFICAÇÃO";
                elseif($_POST["TROCA"] == '4'):
                    echo "EXCESSÃO";
                endif;
echo '<br>';
if($_POST['STATUS_RECOLHIMENTO'] == '1'):
    echo "RECOLHIMENTO SIM";
    elseif($_POST['STATUS_RECOLHIMENTO'] == '0'):
        echo "RECOLHIMENTO NÃO";
    endif;

    echo '<br>';
    if($_POST['STATUS_TELA'] == '1'):
        echo "TELA TROCA ENTRE LOCAIS";
        elseif($_POST['STATUS_TELA'] =='2'):
            echo "TELA MOVIMENTAÇÃO";
        endif; 
echo "<br>";
        if($_POST['QUEM_RECEBE'] == '1'):
            echo "QUEM RECEBE: CD";
            elseif($_POST['QUEM_RECEBE'] =='2'):
                echo "QUEM RECEBE:  FORNECEDOR LOCAL";
            endif;

?>