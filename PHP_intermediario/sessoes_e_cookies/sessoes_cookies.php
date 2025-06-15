<?php 
    session_start();
    //setcookie('nome_do_array','valor_do_array',time() + (tempo_em_segundos), '/')
    //'/' serve para deixar acessivel a todas as paginas
    #caso deseje destruir o cookie e so fazer colocar o tempo negativo
    //ex: setcookie('nome1','maria',time() - (60*60*24), '/');
    setcookie('nome1','maria',time() + (60*60*24), '/');
    echo $_COOKIE['nome1'];
?>