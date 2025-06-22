<?php
//serve para chamar as classes automaticamente
function my_auto_load($class){
    //a funcao le a pasta classes/arquivo_que_esta_sendo_chamado.php
    //class = str_replace(search,replace,subject);
        $class = str_replace('\\','/',$class);
        echo $class;
        echo "<br />";
        if(file_exists('classes/'.$class.'.php')){
            include('classes/'.$class.'.php');
        }
    }
    spl_autoload_register('my_auto_load');
?>