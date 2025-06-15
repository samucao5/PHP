<?php
    $nome = 'samuel';

    if($nome == 'samuel'):
        echo "o nome esta correto";
    endif;
    echo "<br />";

    $i = 1;
    while($i <= 10):
        echo $i;
        echo "<br />";
        $i++;
    endwhile;

    $idade = [19,42,45];
    foreach($idade as $key => $values):

    endforeach;

    for($s = 0;$s <= 5;$s++):
        echo "oi";
        echo "<br />";
    endfor;

?>