<?php
$isa = 5;
$cao = 2;

if($isa > $cao){
    echo"$isa e maior que $cao<br>";
}
unset($isa, $cao);

$isa = "matheus";
$cao = "pedro";

if($isa != $cao){
echo "$isa e diferente de $cao<br>";
}
unset($isa, $cao);

$isa = 12;
$cao = 11;

if($isa <= $cao){
    echo "$cao e menor que $isa";
}
unset($isa, $cao);






?>