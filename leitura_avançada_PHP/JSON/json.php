<?php  
    $json = '{"numero":5,"nome":"samuel","idade": 19,"array":{"nome":"joao","idade":16},"esporte":"futebol"}';
    //variavel(json_decode($variavel_escolhida));
    //formato de objeto
    $obj = json_decode($json);
    //formato de array
    $arr = json_decode($json,true);
    echo $obj->nome;
    echo "<br />";
    echo $arr['array']['nome'];
    echo "<br />";
    echo "<br />";
    $arr1 = ['nome'=>'samuel', 'idade'=>'19'];
    $json1 = json_encode($arr1);
    echo $json1;
?>