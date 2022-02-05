<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="Autor" content="Vilagrant Ataulfo">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/config.css" rel="stylesheet">
<link href="css/color.css" rel="stylesheet">
<title>Detective Suplier Login</title>
</head>
<body style="background:rgb(46, 44, 44);">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="controle">
  <form id="input-login" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <img src="imagens/detective-64.png"id="imagem-login">
    <h6 class="h3 mb-6 fw-normal" style="color:white;">Detective Supplier Login</h1>
<br>
    <div class="col-md-3">
      <input type="email" class="form-control" style="margin-bottom: 2px;" placeholder="Email" name="email" required>
     
    </div>

    <div class="col-md-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="senha" required>
<br>
    </div>
    <button class="w-45 btn btn-lg btn-dark" style="background:black;" type="submit" name="logar">Logar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021 - 2022</p>
  </form>
</div>
<?php

session_start();
require_once 'back-sistema/conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$sql   = "select * from usuario where EMAIL='$email' and SENHA = md5($senha)";
$resultado = mysqli_query($conectar,$sql);

if(isset($_POST['logar'])):
if(mysqli_num_rows($resultado)== 1):
    $conta =  mysqli_fetch_array($resultado);
    $_SESSION['ID']    = $conta[0];
    $_SESSION['nome']  = $conta[1];
    $_SESSION['email'] = $conta[2];
    header('Location:index.php');
else:
  echo '<script>alert("Senha ou email Não correspondem");</script>';
endif;
else:
  session_unset();
  session_destroy();
endif;
?>


</body>
</html>
