<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar conta</title>
</head>
<body>
    <form method="post" action="">
    <label for="usuario">nome de usuario:</label>
    <br>
    <input type="text" name="usuario" placeholder="digite seu nome de usuario" required style="text-transform: lowercase;"/>
    <br><br>
    <label for="email">email:</label>
    <br>
    <input type="email" name="email" placeholder="digite seu email" required/>
    <br><br>
    <label for="senha">senha:</label>
    <br>
    <input type="password" name="senha" placeholder="digite sua senha:" required/>
    <br><br>
    <input type="submit" name="enviar" value="criar conta">
    </form>
</body>
</html>

<?php
    include __DIR__ . '/../../Controle_de_Estoque/Cadastro_de_Produtos/Banco_de_dados_aquarius/codigos/conexao.php';
    if(isset($_POST['enviar'])){
        $usuario = trim(strtolower($_POST['usuario']));
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $criado_em = date('Y-m-d H:i:s');

        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = $pdo->prepare("INSERT INTO `login` (usuario, email, senha, criado_em) VALUES (?, ?, ?, ?)");
        $sql->execute(array($usuario,$email,$senha_hash,$criado_em));
        echo 'conta criada';
    }







?>