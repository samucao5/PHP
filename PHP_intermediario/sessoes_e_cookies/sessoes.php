<?php 
    #sempre deve ter session_start para que a sessao funcione
    session_start();
    $_SESSION['nome'] = "samuel";
    $_SESSION['idade'] = 19;
    #serve para verificar se uma sessao existe
    #caso queira tirar o nome e so fazer $_SESSION['nome'] = '';
    #outra maneira tambem e usar o unset($_SESSION['nome']);
    #caso queira deletar todas as sessoes session_destroy();

    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
        echo "<br />";
        echo $_SESSION['idade'];
    }
?>