<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    $pdo-> exec("LOCK TABLES `clientes` WRITE");
    sleep(10);
?>