<?php
    $numero1 = 5;
    $numero2 = 1;
    $numero3 = 2;

//and - so retorna 1 caso as duas condiçoes sejam verdadeiras
    if(($numero1 >= $numero2) && ($numero2 <= $numero3)){
        echo "verdade". "<br />";
    }
//or - retornar 1 se caso uma das condiçoes sejam verdaeiras
    if(($numero1 <= $numero2) || ($numero1 >= $numero3)){
        echo "verdade". "<br />";
    } 

//not - muda a condicao escolhida para o oposto, ex: se uma condicao for falsa
//e colocarmos o simbolo ! antes da condicao ela se tornara verdadeira o contrario tambem se aplica 
    if(($numero1 <= $numero2) || !($numero1 >= $numero3)){
        echo "verdade". "<br />";
    } 
    else{
        echo "falso". "<br />";
    }


?>