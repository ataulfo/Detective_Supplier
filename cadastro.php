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
  $nome        = $_SESSION['nome'];
  $ID          = $_SESSION['ID'];
  $TIPO        = $_SESSION['Tipo'];
  $FOTO_PERFIL = $_SESSION['Foto'];
  
  if($TIPO != 'Admin'):
    header('Location:index2.php');
  endif;

  ?>
<br>
<h3 id="texto-titulo">Bem vindo ao Detective Supplier<img src="imagens/detective-64.png"></h3>
<span class="meuspan">PREVENÇÃO DE PERDAS</span>
<br>
<br>
<br>
<br>
<br>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 210px; margin-top:-66px">
  <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-incognito" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z"/>
</svg>
    <span class="fs-4">PAINEL</span>
  </a>
  <hr>
  <ul class=" nav nav-pills flex-column mb-auto">
    <li class="selecionar dropdown-item">
      <a href="cadastro.php" class="nav-link text-white" aria-current="page">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>

    </svg>
        Cadastro
      </a>
    </li>
    <li class="selecionar dropdown-item">
      <a href="lista_compradores.php" class="nav-link text-white">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
        Compradores
      </a>
    </li>
    <li class="selecionar dropdown-item">
      <a href="lista_fornecedores.php" class="nav-link text-white">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg>
        Fornecedores
      </a>
    </li>
    
  </ul>

  <hr>
  <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img alt="" width="32" height="32" class="rounded-circle me-2" src="<?php echo $FOTO_PERFIL; ?>"/>
          
        <strong><?php echo $nome;?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><a class="dropdown-item"><strong><?php echo $TIPO;?></strong></a></li>
      <li><a class="dropdown-item" href="formulario.php">Cadastrar conta</a></li>
      <li><a class="dropdown-item" href="gerenciador.php">Gerenciador de contas</a></li>
        <li><a class="dropdown-item" href="minhaconta.php">Configurações</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="login.php">Sair</a></li>
      </ul>
    </div>
  </div>

<br/>

<form class="input-cadastro" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
  <fieldset>
<legend>Cadastro Fornecedor</legend><br/><br/>

Fornecedor: <input type="text" name="FORNECEDOR" maxlength="25" autofocus="on" pattern="[ABCDEFGHIJLMNOPQRSWYTKÇUVXZabcdefghijlmnopqrysktwuvxzç' ']+$">
<br/>
<br/>
Comprador: <select name="COMPRADOR">
<option name="COMP01"    value="Marcio">MARCIO</option>
<option name="COMP02"    value="Helton Jhon">HELTON JHON</option>
<option name="COMP03"    value="Leonardo">LEONARDO</option>
<option name="COMP04"    value="Pablo">PABLO</option>
<option name="COMP05"    value="Thays">THAYS</option>
</select>
<br/>
<br/>
Estado: <select name="ESTADO_TROCA" id="estado_troca">
<option name="COM_TROCA"   value="1">TROCA/DEV</option>
<option name="SEM_TROCA"   value="2">QUEBRA OP</option>
<option name="EXCESSAO"    value="3">BONIFICAÇÃO</option> 
   
</select>
<br/>
<br>
Condição De Troca: 
<input type="text" maxlenght="15" id="estado_input" name="TROCA_MEDIANTE">
<br/>
<br/>
Recolhimento: <select name="STATUS_RECOLHIMENTO">
<option value="Sim">SIM</option>
<option value="Não">NÃO</option>    
</select>
<br/>
<br/>
Tela:
<br/>
<input type="radio" id="teste" name="STATUS_TELA" value="Transf / Locais" checked>
<label for="Troca">TROCA ENTRE LOCAIS</label><br/>
<input type="radio" id="teste" name="STATUS_TELA" value="Movimentação">
<label for="Movimentacao">MOVIMENTAÇÃO ESTOQUE</label><br/><br/>
QUEM RECEBE:

<select name="QUEM_RECEBE">
<option value="CD">CD</option>
<option value="F/L">F/L</option>
<option value="S/R">S/R</option>
</select>
<br/>
<details>
  <summary>Instruções</summary>
 <h5><span style="color:blue;">CD</span></h5>
 <p><span style="color:blue;"> Centro de Distribuição</span></p> 
 <h5><span style="color:green;">F/L</span></h5>
 <p><span style="color:green;"> Fornecedor Local </span></p>
 <h5><span style="color:red"> S/R </span></h5>
 <p><span style="color:red">Sem Recebimento </span></p>
</details>
<br/>
<br/>
<input type="submit" value="Cadastrar" name="Adicionar" class="botao-estilo">
</fieldset>
</form>

<?php
require_once 'back-sistema/conexao.php';

if(isset($_POST['Adicionar'])):

  $NOME_FORNECEDOR     = ucfirst($_POST['FORNECEDOR']); //OK
  $STATUS_RECOLHIMENTO = $_POST["STATUS_RECOLHIMENTO"]; //OK
  $TROCA_COND          = filter_input(INPUT_POST,'TROCA_MEDIANTE',FILTER_SANITIZE_SPECIAL_CHARS);//OK
  $STATUS_TELA         = $_POST['STATUS_TELA']; //OK
  $COMPRADOR           = $_POST["COMPRADOR"];//OK
  $ESTADO_TROCA        = $_POST["ESTADO_TROCA"];//OK
  $QUEM_RECEBE         = $_POST['QUEM_RECEBE'];//OK
  $STATUS_GERAL        = 'Ativo';

  if($ESTADO_TROCA == 1):
  $OPERACAO = 'Loja / Avaria';
  elseif($ESTADO_TROCA == 2):
  $OPERACAO = 'Quebra Operacional';
  elseif($ESTADO_TROCA == 3):
  $OPERACAO = 'Quebra Bonificada';
  endif;

if(empty($TROCA_COND)):
$TROCA_COND = 'Nenhum';
endif;

$sql_consulta_verificacao = "SELECT NOME_FORNECEDOR FROM Fornecedor_lista where NOME_FORNECEDOR = '$NOME_FORNECEDOR'";
$verifica_registro_existente = mysqli_query($conectar,$sql_consulta_verificacao);

//Caso não houver registro executará a condição
if(mysqli_num_rows($verifica_registro_existente) == 0 && $NOME_FORNECEDOR != ''):
    $sql = "INSERT INTO Fornecedor_lista(`NOME_FORNECEDOR`, `RECOLHIMENTO`, `TROCA_COND`, `TELA`, `COMPRADOR`, `QUEM_RECEBE`, `ESTADO`,`STATUS_GERAL`,`OPERACAO`)VALUES('$NOME_FORNECEDOR', '$STATUS_RECOLHIMENTO', '$TROCA_COND', '$STATUS_TELA', '$COMPRADOR','$QUEM_RECEBE','$ESTADO_TROCA','$STATUS_GERAL','$OPERACAO');";
    $Inserir_dados = mysqli_query($conectar,$sql);
if($Inserir_dados == true):
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-success d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>';
  echo '<div>';
  echo "Dados do fornecedor $NOME_FORNECEDOR adicionados com sucesso!";
  echo '</div>';
  echo '</div>';

elseif($Inserir_dados == false || empty($Inserir_dados)):
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Erro na gravação do fornecedor $NOME_FORNECEDOR campo nome vazio ou erro na conexão";
  echo '</div>';
  echo '</div>'; 
endif;
elseif($NOME_FORNECEDOR == ''):
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">';
  echo '<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">';
  echo '<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>';
  echo '</symbol>';
  echo '<div class="alert alert-danger d-flex align-items-center" role="alert">';
  echo '<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>';
  echo '<div>';
  echo "Erro na gravação do fornecedor $NOME_FORNECEDOR campo nome vazio ou erro na conexão";
  echo '</div>';
  echo '</div>';
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
endif;

?>
<script src="js/arquivo.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>