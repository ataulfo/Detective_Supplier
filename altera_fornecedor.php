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
<?php
session_start();
if(!isset($_SESSION['ID'])):
  header('Location:login.php');
  endif;
  $nome = $_SESSION['nome'];
  $ID   = $_SESSION['ID'];
  if($_SESSION['Tipo'] != 'Admin'):
    header('Location:index2.php');
  endif;

  ?>
<form id="form-altera_dados" action="resposta-alteracao.php" method="post">
<fieldset>
<legend>Alterar dados do Fornecedor</legend><br/><br/>
ID: <input type="text" name="ID" id="input-ID-alterar">
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
Estado: <select name="ESTADO_TROCA" id="Estado_troca" onclick="escolher_opcao();">
<option name="COM_TROCA"   value="1">COM TROCA</option>
<option name="SEM_TROCA"   value="2">SEM TROCA</option>
<option name="EXCESSAO"    value="3">BONIFICAÇÃO</option> 
<option name="INATIVO"     value="4">INATIVO</option>   
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
STATUS:
<br/>
<input type="radio" name="STATUS_GERAL" value="Ativo">
<label for="Ativo">ATIVO</label><br/>
<input type="radio" name="STATUS_GERAL" value="Inativo">
<lable for="Inativo">INATIVO</lable>
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

<input type="submit" value="Deletar" name="Deletar" class="botao-deletar-estilo">
<input type="submit" value="Alterar" name="Alterar" class="botao-alterar-estilo">
</fieldset>
</form>
<script>

const parametros = new URLSearchParams(window.location.search)
const meuarray = Array.from(parametros.values())
 
//console.log(meuarray)

document.getElementById('input-ID-alterar').value = meuarray[0]
document.getElementById('pesquisar_estilo').value = meuarray[1]
document.getElementById('Status_Comprador').value = meuarray[2]
document.getElementById('Estado_troca').value     = meuarray[3]
document.getElementById('Estado_condicao').value  = meuarray[4]
document.getElementById('Estado_recolhimento').value = meuarray[5]

let Tela = document.getElementsByName('STATUS_TELA')
if(meuarray[6].toString() == "Movimentação"){
  Tela[1].checked = true
}else{
  Tela[0].checked = true  
}


let Status_geral = document.getElementsByName('STATUS_GERAL')

if(meuarray[8].toString() == "Ativo"){
Status_geral[0].checked = true;
}else{
Status_geral[1].checked = true  
}


document.getElementById('Estado_recebe').value = meuarray[7]

</script>
<script src="js/arquivo.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>