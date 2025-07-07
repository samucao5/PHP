<?php 
    if(file_exists('file.txt')){
        echo 'o arquivo existe';
        echo "<br />";
        $nome = file_get_contents('file.txt');
        $link = file_get_contents('https://uk.pinterest.com/pin/165718461275947250/');
        echo $nome;
        echo $link;
    }
    else{
        $nome = "meu nome e samuel";
        file_put_contents('file.txt',$nome);
    }
    #quebra de linha automatica
    #echo nl2br($nome);
    #deleta o arquivo
    #unlink('file.txt');
?>