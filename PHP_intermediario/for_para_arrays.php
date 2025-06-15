<?php 
    $nome = ['samuel', 'isa', 'maria', 'allan'];


//foreach (nome_do_array as $key => $values){}
//$key imprimi na tela, a localizacao do array ex array[0]
//$values mostra o conteudo daquele array
foreach ($nome as $key => $values  ){
    echo $key;
    echo "<br />";
    echo $values;
    echo '<hr>';
}

$valor_array = count($nome);

for($num = 0;$num < $valor_array; $num++){
    echo $nome[$num]."<br />";
}

?>