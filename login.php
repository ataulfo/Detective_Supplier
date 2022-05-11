<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="autor" content="Vilagrant Ataulfo">
   
    <title>Login Detective Supplier</title>



    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    
  </head>
  <link href="css/signin.css" rel="stylesheet">
  <body class="text-center">
    
<main class="form-signin">
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <img class="mb-4" src="imagens/detective-64.png"id="imagem-login" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Detective Supplier - Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Password" maxlength="14">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"name="logar">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
  </form>
</main>
<?php

session_start();
require_once 'back-sistema/conexao.php';

$email = mysqli_escape_string($conectar,$_POST['email']);
$senha = mysqli_escape_string($conectar,$_POST['senha']);
$sql   = "select * from conta where EMAIL='$email' and SENHA = md5($senha)";
$resultado = mysqli_query($conectar,$sql);

if(isset($_POST['logar'])):


if(mysqli_num_rows($resultado)== 1):
    $conta =  mysqli_fetch_array($resultado);
    $_SESSION['ID']     =  $conta[0];
    $_SESSION['nome']   =  $conta[1];
    $_SESSION['email']  =  $conta[2];
    $_SESSION['Tipo']   =  $conta[4];
    $_SESSION['Status'] =  $conta[5];
    $_SESSION['Foto']   =  $conta[6];

if($_SESSION['Status'] == 'Ativo'):
    if($_SESSION['Tipo'] == 'Admin'):
    header('Location:index.php');
    else:
      header('Location:index2.php');
    endif;
  else:
    echo '<script>alert("Sua conta está inativa")</script>';
  endif;

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


