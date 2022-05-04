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
      <form id="form-altera_dados" action="alteracao-conta.php" method="post">
            <fieldset>
          <legend>Alterar conta</legend><br/><br/>
          ID:    <input type="text" name="ID" id="input-ID-alterar">
          <br>
          <br/>
          Nome:  <input type="text" name="NOME" id="NOME" autofocus="on" pattern="[ABCDEFGHIJLMNOPQRSWYTKÇUVXZabcdefghijlmnopqrysktwuvxzç' ']+$">
          <br/>
          <br/>
          Email: <input type="email" name="EMAIL" id="EMAIL" style="margin-left:-1px">
          <br/>
          <br/>
          Senha: <input type="password" name="SENHA" id="SENHA" style="margin-left:-1px">
          <br/>
          <br/>

          Conta: <select name="conta" id="TIPO_CONTA">
          <option value="Admin">Admin</option>
          <option value="Usuario">Usuario</option>      
          </select>
          <br/>
          <br/>
          Status: <select name="TIPO_STATUS" id="STATUS">
           <option value="Ativo">Ativo</option>
           <option value="Inativo">Inativo</option>     
          </select>
          <br/>
          <br/>
          <input type="submit" value="Deletar" name="Deletar" class="botao-deletar-estilo">
          <input type="submit" value="Alterar" name="Adicionar" class="botao-alterar-estilo">
          </fieldset>
          </form>


          <script>

            const parametros = new URLSearchParams(window.location.search)
            const meuarray = Array.from(parametros.values())
             
            //console.log(meuarray)
            
            document.getElementById('input-ID-alterar').value = meuarray[0]
            document.getElementById('NOME').value             = meuarray[1]
            document.getElementById('EMAIL').value            = meuarray[2]
            document.getElementById('TIPO_CONTA').value       = meuarray[3]
            document.getElementById('STATUS').value           = meuarray[4]
            
            let CONTA = document.getElementsByName('conta')      
            if(meuarray[3].toString() == 'Usuario'){
            CONTA[1].checked = true      
            }else{
            CONTA[0].checked = true      
            }


            let TIPO = document.getElementsByName('TIPO_STATUS')
            if(meuarray[4].toString() == "Ativo"){
              TIPO[1].checked = true
            }else{
              TIPO[0].checked = true  
            }
            
            
            </script>



<script src="js/arquivo.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>