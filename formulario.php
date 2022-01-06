<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="autor" content="Vilagrant Ataulfo">
    <meta name="">
    <title>Cadastro analista de quebra</title>
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <div id="cadastro">

    <fieldset>
        <legend>CADASTRO ANALISTA</legend>
    <form action="dados.php" method="post">
        [Imagem de perfil]<br/><input type="file" name="arquivo"accept="image/png"><br/><br/>
Nome:<br/><input  type="text"      maxlength="20" name="nome" autofocus="on"><br/>
Email:<br/><input type="email"     maxlength="40" name="email"><br/>
Senha:<br/><input type="password"  maxlength="12" name="senha"><br/>
Tipo de conta:<br/>
<select name="opcao-conta">

 <option value="0">Comum</option>
 <option value="1">Administradora</option>   
</select>
<br/>
<br/>
<input type="submit" name="botao-cadastrar" value="Cadastrar">
    </form>
    </fieldset>
</div>
</body>
</html>