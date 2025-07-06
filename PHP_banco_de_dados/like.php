<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    if(isset($_POST['enviar']))
    $nome = $_POST['nome'];
    #`` e para quando o nome da tabela tenha algum caractere especial
    $sql = $pdo -> prepare("SELECT * FROM `clientes` WHERE nome LIKE ?");
    $sql->execute(array($nome,));
    echo $sql->fetch()['nome'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>procurando o cliente</title>
    </head>

    <body>
        <form method="post">
            digite o nome do cliente:
            <input type="text" name="nome" required/>
            <input type="submit" name="enviar" value="enviar!"/>
        </form>
    </body>

</html>
