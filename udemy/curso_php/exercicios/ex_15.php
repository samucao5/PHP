<?php
$isa = 5;
$cao = 4;

if($isa == $cao){
    echo "sao iguais <br>";
}
else{
    echo"não sao iguais, faltou: " . $isa - $cao . "<br>" ;
    $cao++;
}
if($isa == $cao){
    echo "sao iguais, faltou: " . $isa - $cao . "<br>";
}





?>