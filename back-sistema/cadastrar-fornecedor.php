<?php

define('CSS_COLOR','css/color.css');

$NOME_FORNECEDOR = $_POST["FORNECEDOR"];
$TESTE_COMPRADOR = $_POST["COMPRADOR"]; 
$TESTE_TROCA     = $_POST["TROCA"];
$STATUS_RECOLHIMENTO = $_POST["STATUS_RECOLHIMENTO"];
$tela = $_POST['STATUS_TELA'];
$QUEM_RECEBE = $_POST['QUEM_RECEBE']; 

    echo 'FORNECEDOR '.ucfirst($NOME_FORNECEDOR).'<br>';
    

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
        echo '<div style="background:#0649c5;font-weight:bold;color:white;">';
        echo "COM TROCA";
        echo '</div>';
        
        elseif($_POST["TROCA"] == '2'):
            echo '<div style="background:#bd0306;font-weight:bold;color:white;">';
            echo "SEM TROCA";
            echo '</div>';
            elseif($_POST["TROCA"] == '3'):
                echo '<div style="background:#11a504;font-weight:bold;color:white;">';
                echo "BONIFICAÇÃO";
                echo '</div>';
                elseif($_POST["TROCA"] == '4'):
                    echo '<div style="background:#cad803;font-weight:bold;color:white;">';
                    echo "EXCESSÃO";
                    echo '</div>';
                endif;
echo '<br>';
if($_POST['STATUS_RECOLHIMENTO'] == '1'):
    echo "SIM";
    elseif($_POST['STATUS_RECOLHIMENTO'] == '0'):
        echo "NÃO";
    endif;

    echo '<br>';
    if($_POST['STATUS_TELA'] == '1'):
        echo "TROCA ENTRE LOCAIS";
        elseif($_POST['STATUS_TELA'] =='2'):
            echo "MOVIMENTAÇÃO";
        endif; 
echo "<br>";
        if($_POST['QUEM_RECEBE'] == '1'):
            echo "QUEM RECEBE: CD";
            elseif($_POST['QUEM_RECEBE'] =='2'):
                echo "QUEM RECEBE:  FORNECEDOR LOCAL";
                elseif($_POST['QUEM_RECEBE'] =='3'):
                    echo "QUEM RECEBE: SEM RECEBIMENTO";
            endif;

?>