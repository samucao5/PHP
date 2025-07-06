<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');

    $sql = $pdo-> prepare("SELECT * FROM categoria");
    $sql -> execute();
    $info = $sql->fetchall();
    
    foreach($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'exibindo posts de: '.$value['nome'];
        echo '<br />';
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql -> execute();
        $info_posts = $sql->fetchall();
        foreach($info_posts as $key => $value ){
            echo 'titulo: '.$value['titulo'];
            echo'<br />';
            echo 'noticia: '.$value['conteudo'];
            echo '<hr>';
            echo'<br />';
        }
    }   
    echo'<br />';
    echo'<br />';

    $sql = $pdo ->prepare("SELECT * FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id` = `categoria`.`id`");
    $sql-> execute();
    $info_inner = $sql-> fetchall(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($info_inner);
    echo "</pre>";



?>