<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');

    $sql = $pdo-> prepare("SELECT * FROM posts WHERE categoria_id = ?");

    $sql -> execute(array($_GET['categoria_id']));

    $info = $sql->fetchall();
    
    foreach($info as $key => $value){
        echo 'titulo: '.$value['titulo'];
        echo'<br />';
        echo 'noticia: '.$value['conteudo'];
        echo '<hr>';
        echo'<br />';
    }

    /*pelo for
    for($i = 0; $i < count($info); i++){
        echo 'titulo: '.$info[$i]['titulo'];
        echo'<br />';
        echo 'noticia: '.$info[$i]['conteudo'];
        echo '<hr>';
        echo'<br />';
    }
    */
?>