<?php
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    if(isset($_POST['mandar'])){
        $id = $_POST['id'];
        $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
        $sql->execute(array($id));
        echo "cliente deletado com sucesso";
    }


?>



<!DOCTYPE html>
<html>
    <head>
        <title>deletando um usuario</title>
    </head>

    <body>
        <form method="post">
            id:
            <input type="number" name="id" required/>
            <input type="submit" name="mandar" value="enviar"/>
        </form>
    </body>




</html>
