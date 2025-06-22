<?php
    include('classe_1.php');
    include('classe_2.php');
    //tambem funciona para definir 
    //igual no sql o as serve mudar o nome e quando for instanciar voce deverar chamar pelo nome escolhido dentro do as
    use \sessao2\classe_2 as classe2;

    $class_1 = new \sessao1\classe_1();
    $class_2 = new classe2();

?>