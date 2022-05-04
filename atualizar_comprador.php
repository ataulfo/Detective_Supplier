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
  $nome        = $_SESSION['nome'];
  $ID          = $_SESSION['ID'];
  $TIPO        = $_SESSION['Tipo'];
  $FOTO_PERFIL = $_SESSION['Foto'];
  
  if($TIPO != 'Admin'):
    header('Location:index2.php');
  endif;

?>
<h3>Alterar dados do comprador</h3>
<form id="form-altera_dados" action="" method='post'><br/>
ID: <input type="text"id="input-ID-alterar"><br/><br/>
NOME: <input type="text" name="nome" id='nome'><br/><br/>
Telefone: <input type="text" name="telefone" id='telefone'><br/><br/>
Email:     <input type="text" name="email" id='email'><br/><br/>
Ativo:
 <select name="status" id='status'>
 <option value="Ativo">SIM</option>
 <option value="Inativo">NAO</option> 
 </select>   
 <br/>
 <br/>
Situação: <select name="situacao" id='situacao'>
<option value="FERIAS">FERIAS</option>
<option value="OPERCAO_SIM">EM OPERAÇÃO</option>
<option value="AVISO">AVISO</option>
<option value="SUSPENSO">SUSPENSO</option>
</select>     
<br/><br/>
<input type="submit" value="Deletar" name="Deletar" class="botao-deletar-estilo">
<input type="submit" name="alterar" value="alterar" class="botao-alterar-estilo">
</form>
<script>

            const parametros = new URLSearchParams(window.location.search)
            const meuarray = Array.from(parametros.values())
             
            //console.log(meuarray)
            
            document.getElementById('input-ID-alterar').value = meuarray[0]
            document.getElementById('nome').value             = meuarray[1]
            document.getElementById('telefone').value         = meuarray[2]
            document.getElementById('email').value            = meuarray[3]
            document.getElementById('status').value           = meuarray[4]
            document.getElementById('situacao').value         = meuarray[5]
            
            let STATUS = document.getElementsByName('status')
            if(meuarray[4].toString() == "Inativo"){
              STATUS[1].checked = true
            }else{
              STATUS[0].checked = true  
            }

            let TIPO = document.getElementsByName('situacao')
            if(meuarray[5].toString() == "EM OPERACAO"){
              TIPO[1].checked = true
            }else{
              TIPO[0].checked = true  
            }
            
            </script>

<script src="js/arquivo.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>