<?php
$cao = 19;

$mult = 2;
$valor = 100;
echo "teste1<br>";
if(is_int($cao)){
    $cao *= $mult;
    echo $cao . "<br>";
    if($cao > $valor){
        echo"$cao e maior que 100<br>";
    }
}
echo "teste2<br>";
$isa = 51;
if(is_int($isa)){
    $isa *= $mult;
    echo $isa . "<br>";
    if($isa > $valor){
        echo"$isa e maior que 100<br>";
    }
}

echo "teste3<br>";
$ana = "amei";
if(is_int($ana)){
    $isa *= $mult;
    echo $ana . "<br>";
    if($ana > $valor){
        echo"$isa e maior que 100<br>";
    }
}










?>