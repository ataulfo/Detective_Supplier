<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta lang="pt-br">
<meta name="Autor" content="Vilagrant Ataulfo">
<link href="../diretorio_html/imagens/detective-16.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/config.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/color.css" media="screen"/>
<title>Sistema Detective Supplier</title>
</head>
<body>
<br/>
<h3 id="texto-titulo">Bem vindo ao Detective Supplier <img src="imagens/detective-64.png"></h3>
<span class="meuspan">PREVENÇÃO DE PERDAS</span>
<br>
<input type="search" name="pesquisar" placeholder="Nome do fornecedor" autofocus="on"> 
<input type="submit" name="Pesquisar" class="botao-estilo" value="Pesquisar">
<br>
<br>
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 210px; margin-top:-80px">
  <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi me-2" width="20" height="32"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-4">PAINEL</span>
  </a>
  <hr>
  <ul class=" nav nav-pills flex-column mb-auto">
    <li class="selecionar dropdown-item">
      <a href="cadastro.html" class="nav-link text-white" aria-current="page">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="cadastro.html"/></svg>
        Cadastro
      </a>
    </li>
    <li class="selecionar dropdown-item">
      <a href="lista_compradores.html" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
        Compradores
      </a>
    </li>
    <li class="selecionar dropdown-item">
      <a href="lista_fornecedores.html" class="nav-link text-white">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
        Fornecedores
      </a>
    </li>
    
  </ul>

  <hr>
  <div class="dropdown">
      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://avatars.githubusercontent.com/u/13712902?v=4" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Ataulfo</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        
        <li><a class="dropdown-item" href="#">Configurações</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="login.html">Sair</a></li>
      </ul>
    </div>
  </div>

<br/>
<br/>
<div class="padrao">
<div class="foo blue">COM TROCA</div>
<div class="foo green">BONIFICADO</div>
<div class="foo red"> SEM TROCA </div>
<div class="foo yellow">EXCESSÃO</div>
</div>
<br>
<br/>
<table  class="estado-tabela table table-dark">
        <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">FORNECEDOR</th>
              <th scope="col">RECOLHIMENTO</th>
              <th scope="col">TROCA COND</th>
              <th scope="col">TELA</th>
              <th scope="col">PROCEDIMENTO</th>
              <th scope="col">COMPRADOR</th>
              <th scope="col">QUEM RECEBE</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
      </table>



<div class="colorido1" id="meuid">1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAMIL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;Troca entre locais&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helthon Jhon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CD</div>

<div class="colorido3" id="meuid">2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COCA COLA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NÃO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;Movimentação estoque&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Helthon Jhon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nenhum Recebimento</div>

<div class="colorido2">3  <br/></div>

<div class="colorido4">4  <br/></div>

<script src="js/arquivo.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>


