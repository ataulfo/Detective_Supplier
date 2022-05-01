<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta lang="pt-br">
<meta name="Autor" content="Vilagrant Ataulfo">
<link href="../diretorio_html/imagens/detective-16.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/config.css" rel="stylesheet">
<link href="css/color.css" rel="stylesheet">
<title>Sistema Detective Supplier</title>
</head>
<body>

<?php
session_start();
if(!isset($_SESSION['ID'])):
  header('Location:login.php');
  endif;
  $nome = $_SESSION['nome'];
  $ID   = $_SESSION['ID'];
  $TIPO = $_SESSION['Tipo'];

?>
<h3>Alterar dados do comprador</h3>
<form id="form-altera_dados" action="" method='post'><br/>
ID: <input type="text"id="input-ID-alterar"><br/><br/>
NOME: <input type="text" name="nome"><br/><br/>
Telefone: <input type="text" name="telefone"><br/><br/>
Email: <input type="text" name="email"><br/><br/>
Ativo:
 <select name="Ativo">
 <option value="SIM">SIM</option>
 <option value="NAO">NAO</option> 
 </select>   
 <br/>
 <br/>
Situação: <select name="situacao">
<option value="FERIAS">FERIAS</option>
<option value="OPERCAO_SIM">EM OPERAÇÃO</option>
<option value="AVISO">AVISO</option>
<option value="SUSPENSO">SUSPENSO</option>
</select>     
<br/><br/>
<input type="submit" value="Deletar" name="Deletar" class="botao-deletar-estilo">
<input type="submit" name="alterar" value="alterar" class="botao-alterar-estilo">
</form>








</body>
</html>