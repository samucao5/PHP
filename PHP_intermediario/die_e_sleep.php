<?php
//sleep permite colocar um tempo para que o codigo execute
//sleep(tempo_em_segundo);
    sleep(3);
    echo "um <br />";
    sleep(3);
    echo "dois <br />";
    sleep(3);
    echo "tres <br />";

    $nome = 'allan';
    if($nome == 'samuel'){
        echo "tudo certo";
    }else{
        //a funcao die(); acaba com a execucao do codigo
        die("programa encerrado");
    }

    echo "nao imprimi nada apos o die";
?>