<?php 
    include('class.php');
    $classe = new classe_1('samuel',19);
    echo 'nome: '.$classe->get_nome();
    echo "<br />";
    echo 'idade: '.$classe->get_idade();

?>