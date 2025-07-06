<?php
    date_default_timezone_set('America/Sao_Paulo');
    
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    if(isset($_POST['acao'])){
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $id = $_POST['id'];
    $momento_registro = date('Y-m-d H:i:s');

    #o metodo abaixo funciona porem e menos seguro
    #$sql = $pdo->prepare("INSERT INTO `clientes` Values (1,$nome,$sobrenome,$momento_registro)");

    $sql = $pdo->prepare("INSERT INTO `clientes` Values (?,?,?,?)");
    #maneira mais segura que a anterior
    $sql->execute(array($id,$nome,$sobrenome,$momento_registro));
    echo 'cliente inserido com sucesso!';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>cadastra no banco</title>
    </head>

    <body>
        <form method="post">
            nome:
            <input type="text" name="nome" required />
            sobrenome:
            <input type="text" name="sobrenome" required/>
            id:
            <input type="number" name="id" required/>
            <input type="submit" name="acao" value="enviar!" />

        </form>
    </body>

</html>