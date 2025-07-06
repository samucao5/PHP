<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    $sql = $pdo-> prepare("SELECT * FROM `clientes`");
    $sql ->execute();
    $clientes = $sql->fetchall();
    foreach($clientes as $key => $value){
        echo $value['nome'];
        echo '<hr>';
    }


?>