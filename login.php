 <!DOCTYPE html>
<html>
<head>
<title>Sistema de Login</title>
<style>
body{
     background-color:blue;
}
</style>
</head>
<body>
<h1><strong>Sistema de Login</strong></h1>
<br>
<form method="POST">
<label>Nome</label>
<input type="text" name="nome">
<br><br>
<label>Senha</label>
<input type="password" name="senha">
<br><br>
<input type="submit" value="Iniciar sessao">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];


        if($nome == "Justin" && $senha == "2222"){
                 echo "<h1>Login feito com sucesso</h1>";
      } else {
                 echo "<h1>Usuário ou senha errada!</h1>";
}

}
?>
</body>
</html>
