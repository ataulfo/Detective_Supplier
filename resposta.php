<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta lang="pt-br">
<meta name="Autor" content="Vilagrant Ataulfo">
<link href="../diretorio_html/imagens/detective-16.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/config.css" rel="stylesheet">
<link href="css/formulario.css" rel="stylesheet" >
<link rel="stylesheet" type="text/css" href="css/color.css" media="screen"/>
<body>
<?php
require_once 'back-sistema/conexao.php';

if(isset($_POST['botao-cadastrar'])):

  $NOME    = ucfirst($_POST['nome']); //OK
  $EMAIL   = $_POST['email'];//OK
  $SENHA   = $_POST['senha'];
  $TIPO    = $_POST['opcao-conta'];
  $STATUS  = 'Ativo';
  $defoto  = "";


  $uploaddir    = '/home/ataulfo/diretorio_html/Projeto_detective_supplier/perfil/';
  $uploadfile   = $uploaddir . basename($_FILES['foto']['name']);
  $nome_arquivo = basename($_FILES['foto']['name']);



   if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile)):

      $defoto  = 'perfil/'.$nome_arquivo;
  else:
       $defoto = 'imagens/utilizador.png';
  endif;

  if($TIPO == '1'):
    $TIPO = 'Admin';
  else:
    $TIPO = 'Usuario';
  endif;

$sql_consulta_verificacao = "SELECT NOME FROM conta where NOME = '$NOME'";
$verifica_registro_existente = mysqli_query($conectar,$sql_consulta_verificacao);

//Caso não houver registro executará a condição
if(mysqli_num_rows($verifica_registro_existente) == 0 && $NOME != ''):
    $sql = "INSERT INTO conta(`NOME`, `EMAIL`, `SENHA`,`TIPO`,`STATUS`,`FOTO`)VALUES('$NOME', '$EMAIL', md5($SENHA),'$TIPO','$STATUS','$defoto');";
    $Inserir_dados = mysqli_query($conectar,$sql);
if($Inserir_dados == true):
  echo '<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>';
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-success d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
  echo '<div>';
  echo "Dados da conta $NOME adicionados com sucesso!";
  echo '</div>';
  echo '</div>';

elseif($Inserir_dados == false || empty($Inserir_dados)):
  echo '<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>';
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Erro na gravação do $NOME campo nome vazio ou erro na conexão";
  echo '</div>';
  echo '</div>'; 
endif;
elseif($NOME_FORNECEDOR == ''):
  echo '<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>';
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Erro na gravação do $NOME campo nome vazio ou erro na conexão";
  echo '</div>';
  echo '</div>';
else:
  echo '<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>';
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-warning d-flex align-items-center" role="alert" autofocus="on">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Aviso o $NOME já se encontra registrado!";
  echo '</div>';
  echo '</div>';

endif;
endif;

?>
</body>

</html>