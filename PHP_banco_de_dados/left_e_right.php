<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    #o inner join so vai pegar caso ambos tenha os dados solicitados
    #o left vai pegar o valor da esquerda como principal
    $sql = $pdo->prepare("SELECT * FROM `funcionarios` LEFT JOIN `cargo` ON `funcionarios`.`cargo` = `cargo`.`id` ");
    $sql ->execute();
    $funcionario = $sql-> fetchall();
    foreach($funcionario as $key => $value){
        echo $value['nome'];
        echo " - ";
        echo $value['nome_cargo'];
        echo '<hr>';
    }
    echo "<br />";
    echo "<br />";
    #o right vai pegar o valor da direita como principal
    $sql = $pdo->prepare("SELECT * FROM `funcionarios` RIGHT JOIN `cargo` ON `funcionarios`.`cargo` = `cargo`.`id` ");
    $sql ->execute();
    $funcionario = $sql-> fetchall();
    foreach($funcionario as $key => $value){
        echo $value['nome'];
        echo " - ";
        echo $value['nome_cargo'];
        echo '<hr>';
    }






?>