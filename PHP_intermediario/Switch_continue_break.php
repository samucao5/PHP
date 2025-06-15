<?php 
    $nome = 'samuel';

    switch($nome){
        case 'samuel':
            echo 'Meu nome e samuel';
            break;
        case 'joao':
            echo 'meu nome e joao';
            break;
        case 'allan':
            echo 'meu nome e allan';
            break;
    }
    #break 
    for($i = 0;$i <= 10;$i++){
        echo $i;
        echo '<br />';
        if($i == 10){
            echo 'terminou a execução do codigo';
            break;
        }
    }
    #continue
     for($i = 1;$i <= 10;$i++){
        echo '<br />';
        #obs:o if sem as chaves so funciona caso o codigo so possua uma linha
        if($i == 5)
            continue;

        echo $i;
        echo '<br />';
    }



?>