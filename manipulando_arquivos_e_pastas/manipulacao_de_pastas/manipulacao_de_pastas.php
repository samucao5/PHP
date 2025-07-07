<?php
    if(is_dir('pasta')){
        echo 'e uma pasta valida';

    }else{
        mkdir('pasta');
    }

    echo '<br />';
    if($pasta = opendir('pasta')){
        while($file = readdir($pasta)){
            if($file == '.' || $file == '..'){
                continue;
            }
            echo $file;
            echo '<br />';
        }

        closedir($pasta);
    }
    /*verificar se e uma pasta ou um arquivo
    if(is_dir('pasta/'.$file) == false){
        //e um arquivo
    }else{
        //e uma pasta
    }
    */    
    #deleta a pasta
    #rmdir('pasta')
?>
