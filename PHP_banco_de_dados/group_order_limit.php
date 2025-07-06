<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    #LIMIT 0, 4 começa no 0 e vai ate o 4
    $sql = $pdo->prepare("SELECT * FROM `funcionarios` GROUP BY cargo ORDER by cargo ASC LIMIT 4");
    #$sql = $pdo->prepare("SELECT * FROM `funcionarios` ORDER BY nome DESC LIMIT 2");
    $sql ->execute();
    $funcionarios = $sql -> fetchall();
    foreach($funcionarios as $key => $value){
        echo $value['nome'];
        echo '<hr>';
    }





?>