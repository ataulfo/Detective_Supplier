<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta lang="pt-br">
    <meta name="Autor" content="Vilagrant Ataulfo">
    <link href="../diretorio_html/imagens/detective-16.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/config.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/color.css" media="screen"/>
    <title>Lista de fornecedores</title>
</head>
<body>
<?php

session_start();
if(!isset($_SESSION['ID'])):
  header('Location:login.php');
  endif;
  $nome = $_SESSION['nome'];
  $ID   = $_SESSION['ID'];

  ?>
    <br/>
<h3 id="texto-titulo">Bem vindo ao Detective Supplier <img src="imagens/detective-64.png"></h3>
<span class="meuspan">PREVENÇÃO DE PERDAS</span>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 210px; margin-top:-90px">
  <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi me-2" width="32" height="32">
      <path style="fill:#000000; stroke:none;" d="M0 0L0 32L32 32L32 0L0 0z"/>
<path style="fill:#4294ff; stroke:none;" d="M1 1L1 15L15 15L15 1L1 1M17 1L17 15L31 15L31 1L17 1M1 17L1 31L15 31L15 17L1 17M17 17L17 31L31 31L31 17L17 17z"/>

    
    
    </svg>
    <span class="fs-4">PAINEL</span>
  </a>
  <hr>
  <ul class=" nav nav-pills flex-column mb-auto">
    <li class="selecionar dropdown-item">
      <a href="cadastro.php" class="nav-link text-white" aria-current="page">
        <svg class="bi me-2" width="32" height="32">

          <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)"
          fill="#000000" stroke="none">
          <path d="M86 305 c-8 -8 -19 -15 -25 -15 -13 0 -14 -20 -2 -38 5 -9 24 -12 57
          -10 57 4 70 26 32 58 -28 24 -42 25 -62 5z"/>
          <path d="M12 268 c-16 -16 -16 -200 0 -216 7 -7 34 -12 61 -12 40 0 54 5 73
          25 l23 25 -59 0 c-32 0 -62 5 -65 10 -4 6 17 10 54 10 48 0 61 3 61 15 0 12
          -13 15 -61 15 -37 0 -58 4 -54 10 3 6 35 10 71 10 36 0 64 4 64 10 0 6 -30 10
          -70 10 -40 0 -70 4 -70 10 0 14 137 13 142 -1 6 -19 48 13 48 36 0 21 -25 65
          -32 55 -2 -3 -8 -14 -14 -25 -9 -16 -23 -21 -72 -23 -58 -3 -62 -2 -68 23 -7
          28 -14 31 -32 13z"/>
          <path d="M198 144 c-9 -20 -9 -30 0 -45 17 -27 15 -37 -10 -41 -17 -2 -24 -11
          -26 -30 l-3 -28 81 0 81 0 -3 28 c-2 19 -9 28 -25 30 -26 4 -28 14 -11 41 9
          15 9 25 0 45 -16 37 -68 37 -84 0z"/>
          </g>



        </svg>
        Cadastro
      </a>
    </li>
    <li class="selecionar dropdown-item">
      <a href="lista_compradores.php" class="nav-link text-white">
        <svg class="bi me-2" width="32" height="32">

          <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)"
          fill="#000000" stroke="none">
          <path d="M122 278 c-5 -7 -13 -27 -16 -44 -5 -24 -3 -33 9 -38 13 -4 15 -13 10 -36 -5 -23 -3 -30 8 -30 9 0 18 -6 21 -12 5 -10 7 -10 12 0 3 6 12 12 21 12 11 0 13 7 8 30 -5 23 -3 32 10 36 12 5 14 14 9 38 -9 43 -22 56 -54 56 -15 0 -32 -6 -38 -12z m57 -57 c21 -14 5 -43 -21 -39 -29 4 -39 48 -11 48 10 0 24
          -4 32 -9z m5 -60 c3 -5 -1 -14 -9 -21 -12 -10 -18 -10 -30 0 -18 15 -11 30 15
          30 10 0 21 -4 24 -9z"/>
          <path d="M71 126 c-7 -8 -13 -34 -14 -57 -2 -34 2 -44 15 -47 12 -2 18 5 21
          30 l4 33 1 -33 c2 -26 6 -33 20 -30 26 5 30 85 5 104 -23 17 -38 17 -52 0z"/>
          <path d="M197 126 c-24 -19 -21 -99 5 -104 12 -2 18 5 21 30 l4 33 1 -33 c2
          -26 6 -33 20 -30 13 3 17 13 15 47 -3 65 -28 86 -66 57z"/>
          <path d="M150 60 c0 -22 5 -40 10 -40 6 0 10 18 10 40 0 22 -4 40 -10 40 -5 0
          -10 -18 -10 -40z"/>
          </g>




        </svg>
        Compradores
      </a>
    </li>
    <li class="selecionar dropdown-item">
      <a href="#" class="nav-link text-white">
        <svg class="bi me-2" width="32" height="32">
          <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)"
          fill="#000000" stroke="none">
          <path d="M62 308 c-19 -19 -14 -37 13 -44 32 -8 32 -24 0 -54 l-25 -24 37 -38
          c21 -22 47 -38 59 -38 13 0 29 -9 37 -20 13 -18 16 -16 72 40 58 58 58 60 40
          80 -23 25 -41 26 -48 0 -7 -26 -33 -36 -53 -19 -21 17 -14 51 13 65 21 10 21
          12 7 32 -19 27 -36 28 -59 2 -24 -27 -44 -25 -55 5 -11 28 -20 31 -38 13z"/>
          <path d="M0 65 c0 -58 2 -65 20 -65 18 0 20 7 20 65 0 58 -2 65 -20 65 -18 0
          -20 -7 -20 -65z"/>
          <path d="M50 66 l0 -56 80 0 c75 0 83 2 137 37 64 41 58 52 -14 30 -57 -18
          -145 -28 -137 -16 3 5 19 9 35 9 44 0 31 24 -17 32 -21 3 -49 9 -61 13 -22 7
          -23 5 -23 -49z"/>
          </g>

        </svg>
        Fornecedores
      </a>
    </li>
    
  </ul>

  <hr>
  <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://avatars.githubusercontent.com/u/13712902?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo $nome;?></strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        
      <li><a class="dropdown-item" href="formulario.php">Cadastrar conta</a></li>
        <li><a class="dropdown-item" href="minhaconta.php">Configurações</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="login.php">Sair</a></li>
      </ul>
    </div>
  </div>

  <h4 class="titulo-lista-fornecedores">LISTA DE FORNECEDORES CADASTRADOS <br/>  PESQUISA AVANÇADA</h4>

<div class="posicao-filtro">
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Comprador: <select name="COMPRADOR" id="Status_Comprador">
<option name="COMP00"    value=""></option>
<option name="COMP01"    value="Marcio">MARCIO</option>
<option name="COMP02"    value="Helton Jhon">HELTON JHON</option>
<option name="COMP03"    value="Leonardo">LEONARDO</option>
<option name="COMP04"    value="Pablo">PABLO</option>
<option name="COMP05"    value="Thays">THAYS</option>
</select>
<input type="submit" class="botao-estilo" name="Pesquisar" value="Pesquisar" onclick="nome_comprador();">
</form>
</div>
<br/>
<br/>

<div class='VIEW-Lista-Fornecedor redireciona'>
<div class="container">
  <div class="row row-cols-7">
    <div class="col">ID</div>
    <div class="col">FORNECEDOR</div>
    <div class="col">RECOLHIMENTO</div>
    <div class="col" title="[P/P : Produto por Produto] [Ava/Venc : Avaria e Vencimento]">CONDIÇÃO</div>
    <div class="col">COMPRADOR</div>
    <div class="col">QUEM RECEBE</div>
</div>
  </div>
</div>
<?php
require_once 'back-sistema/conexao.php';

if(isset($_POST['Pesquisar'])):
    $COMPRADOR = $_POST['COMPRADOR'];
    //"<script>nome</script>" = $COMPRADOR;
    $sql = "SELECT * FROM Fornecedor_lista where COMPRADOR ='$COMPRADOR' order by ESTADO"; 
    $consulta_sql_index = mysqli_query($conectar,$sql);
    if(mysqli_num_rows($consulta_sql_index) == 0):
      echo '<div class="colorido5">'.
     '<pre>      Error, registro não encontrado.</pre>';
    else:

  
  while($contagem = mysqli_fetch_array($consulta_sql_index)):
  if($contagem['ESTADO'] == 1):
        echo "<div class='colorido1 redireciona'>".
        '<div class="container">'.
        '<div class="row row-cols-7">'.
        '<div class="col">'.$contagem['ID'].'</div>'.
        '<div class="col">'.$contagem['NOME_FORNECEDOR'].'</div>'.
        '<div class="col">'.$contagem['RECOLHIMENTO'].'</div>'.
        '<div class="col">'.$contagem['TROCA_COND'].'</div>'.
        '<div class="col">'.$contagem['COMPRADOR'].'</div>'.
        '<div class="col">'.$contagem['QUEM_RECEBE'].'</div>';
        echo '</div>'.'</div>'.'</div>'.'<br/>';
  
  elseif($contagem['ESTADO'] == 2):
        echo "<div class='colorido2 redireciona'>".
        '<div class="container">'.
        '<div class="row row-cols-7">'.
        '<div class="col">'.$contagem['ID'].'</div>'.
        '<div class="col">'.$contagem['NOME_FORNECEDOR'].'</div>'.
        '<div class="col">'.$contagem['RECOLHIMENTO'].'</div>'.
        '<div class="col">'.$contagem['TROCA_COND'].'</div>'.
        '<div class="col">'.$contagem['COMPRADOR'].'</div>'.
        '<div class="col">'.$contagem['QUEM_RECEBE'].'</div>';
        echo '</div>'.'</div>'.'</div>'.'<br/>';
        
  elseif($contagem['ESTADO'] == 3):
        echo "<div class='colorido3 redireciona'>".
        '<div class="container">'.
        '<div class="row row-cols-7">'.
        '<div class="col">'.$contagem['ID'].'</div>'.
        '<div class="col">'.$contagem['NOME_FORNECEDOR'].'</div>'.
        '<div class="col">'.$contagem['RECOLHIMENTO'].'</div>'.
        '<div class="col">'.$contagem['TROCA_COND'].'</div>'.
        '<div class="col">'.$contagem['COMPRADOR'].'</div>'.
        '<div class="col">'.$contagem['QUEM_RECEBE'].'</div>';
        echo '</div>'.'</div>'.'</div>'.'<br/>';
   
elseif($contagem['ESTADO'] == 4):
  echo "<div class='colorido4 redireciona'>".
  '<div class="container">'.
  '<div class="row row-cols-7">'.
  '<div class="col">'.$contagem['ID'].'</div>'.
  '<div class="col">'.$contagem['NOME_FORNECEDOR'].'</div>'.
  '<div class="col">'.$contagem['RECOLHIMENTO'].'</div>'.
  '<div class="col">'.$contagem['TROCA_COND'].'</div>'.
  '<div class="col">'.$contagem['COMPRADOR'].'</div>'.
  '<div class="col">'.$contagem['QUEM_RECEBE'].'</div>';
  echo '</div>'.'</div>'.'</div>'.'<br/>';     
  
  endif;
  endwhile;
  endif; 
endif;

?>
<script src="js/arquivo.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>