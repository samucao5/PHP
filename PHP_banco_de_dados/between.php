<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE momento_registro BETWEEN '2025-04-09' AND '2025-07-06'");
    $sql -> execute();
    $clientes = $sql ->fetchall();
    echo "<pre>";
    print_r($clientes);
    echo "</pre>";



?> 