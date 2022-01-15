<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta lang="pt-br">
<meta name="Autor" content="Vilagrant Ataulfo">
<link href="../diretorio_html/imagens/detective-16.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/config.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/color.css" media="screen"/>
</head>
<body>
    

<form id="form-altera_dados" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<fieldset>
<legend>Alterar dados do Fornecedor</legend><br/><br/>
ID: <input type="text" name="ID" id="input-ID-alterar" disabled>
<br/>
Fornecedor: <input type="text" name="FORNECEDOR" class="teste_classe" id="pesquisar_estilo" maxlength="25" autofocus="on" pattern="[ABCDEFGHIJLMNOPQRSTUVXZabcdefghijlmnopqrstuvxz' ']+$">
<br/>
<br/>
Comprador: <select name="COMPRADOR" id="Status_Comprador">
<option name="COMP01"    value="Marcio">MARCIO</option>
<option name="COMP02"    value="Helton Jhon">HELTON JHON</option>
<option name="COMP03"    value="Leonardo">LEONARDO</option>
<option name="COMP04"    value="Pablo">PABLO</option>
<option name="COMP05"    value="Thays">THAYS</option>
</select>
<br/>
<br/>
Estado: <select name="ESTADO_TROCA" id="Estado_troca">
<option name="COM_TROCA"   value="1">COM TROCA</option>
<option name="SEM_TROCA"   value="2">SEM TROCA</option>
<option name="EXCESSAO"    value="3">BONIFICAÇÃO</option> 
   
</select>
<br/>
<br>
Condição da Troca: 
<input type="text" maxlenght="15" id="Estado_condicao" name="TROCA_MEDIANTE">
<br/>
<br/>
Recolhimento: <select name="STATUS_RECOLHIMENTO" id="Estado_recolhimento">
<option value="Sim">SIM</option>
<option value="Não">NÃO</option>    
</select>
<br/>
<br/>
Tela:
<br/>
<input type="radio"  name="STATUS_TELA" value="Transf / Locais">
<label for="Transf / Locais">TROCA ENTRE LOCAIS</label><br/>
<input type="radio"  name="STATUS_TELA" value="Movimentação">
<label for="Movimentação">MOVIMENTAÇÃO ESTOQUE</label><br/><br/>
QUEM RECEBE:

<select name="QUEM_RECEBE" id="Estado_recebe">
<option value="CD">CD</option>
<option value="F/L">F/L</option>
<option value="S/R">S/R</option>
</select>
<br/>
<br/>
<input type="submit" value="Alterar" name="Adicionar" class="botao-estilo">
</fieldset>
</form>


<script>
//let String_ID = window.location.search.replace('?','')

const parametros = new URLSearchParams(window.location.search)
const meuarray = Array.from(parametros.values())
 
 console.log(meuarray)

document.getElementById('input-ID-alterar').value = meuarray[0]
document.getElementById('pesquisar_estilo').value = meuarray[1]
document.getElementById('Status_Comprador').value = meuarray[2]
document.getElementById('Estado_troca').value     = meuarray[3]
document.getElementById('Estado_condicao').value  = meuarray[4]
document.getElementById('Estado_recolhimento').value = meuarray[5]

//document.getElementById('Transferencia').value = meuarray[6]
let Tela = document.getElementsByName('STATUS_TELA')

if(meuarray[6].toString() == "Movimentação"){
  Tela[1].checked = true
}else{
  Tela[0].checked = true  
}


document.getElementById('Estado_recebe').value = meuarray[7]

</script>

<?php
require_once 'back-sistema/conexao.php';

if(!isset($_POST['Adicionar'])):
  if(empty($TROCA_COND)):
  $TROCA_COND = 'Nenhum';
  endif;

$ID                  = $_POST['ID'];
$NOME_FORNECEDOR     = ucfirst($_POST['FORNECEDOR']); //OK
$STATUS_RECOLHIMENTO = $_POST["STATUS_RECOLHIMENTO"]; //OK
$TROCA_COND          = $_POST['TROCA_MEDIANTE'];//OK
$STATUS_TELA         = $_POST['STATUS_TELA']; //OK
$COMPRADOR           = $_POST["COMPRADOR"];//OK
$ESTADO_TROCA        = $_POST["ESTADO_TROCA"];//OK
$QUEM_RECEBE         = $_POST['QUEM_RECEBE'];//OK


$sql_consulta_verificacao = "SELECT NOME_FORNECEDOR FROM Fornecedor_lista where NOME_FORNECEDOR = '$NOME_FORNECEDOR'";
$verifica_registro_existente = mysqli_query($conectar,$sql_consulta_verificacao);

//Caso não houver registro executará a condição
if(mysqli_num_rows($verifica_registro_existente) == 0):



$sql = "UPDATE Fornecedor_lista SET `ID`='$ID',`NOME_FORNECEDOR`='$NOME_FORNECEDOR', `RECOLHIMENTO`='$STATUS_RECOLHIMENTO', `TROCA_COND`='$TROCA_COND', `TELA`='$STATUS_TELA', `COMPRADOR`='$COMPRADOR', `QUEM_RECEBE`='$QUEM_RECEBE', `ESTADO`='$ESTADO_TROCA'";
$Inserir_dados = mysqli_query($conectar,$sql);

if($Inserir_dados == true):
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-success d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
  echo '<div>';
  echo "Dados do fornecedor $NOME_FORNECEDOR alterados com sucesso!";
  echo '</div>';
  echo '</div>';
else:
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Erro na alteração do fornecedor $NOME_FORNECEDOR";
  echo '</div>';
  echo '</div>';

endif;
else:
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-warning d-flex align-items-center" role="alert" autofocus="on">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Aviso o fornecedor $NOME_FORNECEDOR já se encontra registrado!";
  echo '</div>';
  echo '</div>';

endif;
else:

endif;

?>




<script src="js/arquivo.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>