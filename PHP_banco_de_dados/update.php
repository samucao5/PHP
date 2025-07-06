<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $id = $_POST['id'];
        $sql = $pdo->prepare("UPDATE `clientes` SET nome=?, sobrenome=? WHERE id=?");
        $sql->execute(array($nome,$sobrenome,$id));
        echo 'cliente atualizado com sucesso'
    }





?>

<!DOCTYPE html>
<html>
    <head>
        <title> mudando o nome e sobrenome</title>
    </head>

    <body>
        <form method="post">
            nome:
            <input type="name" name="nome" required/>
            sobrenome:
            <input type="name" name="sobrenome" required/>
            id:
            <input type="number" name="id" required/>

            <input type="submit" name="enviar" value="enviar!" />
        </form>

    </body>



</html>
