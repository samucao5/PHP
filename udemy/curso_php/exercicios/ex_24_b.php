<?php
$isa = 70;
$cao = 90;
$ana = 24;
$opa = 81;
$pesado = 80;
$sub = $pesado - $isa;
if($isa > $pesado){
    echo "o armazenamento esta pesado<br>";
}
else{
    echo "falta $sub para poder encher o armazenamento<br>";
}
unset($sub);

$sub = $pesado - $cao;
if($cao > $pesado){
    echo "o armazenamento esta pesado<br>";
    }
    else{
        echo "falta $sub para poder encher o armazenamento<br>";
    }
    unset($sub);

    $sub = $pesado - $ana;
if($ana > $pesado){
    echo "o armazenamento esta pesado<br>";
    }
    else{
        echo "falta $sub para poder encher o armazenamento<br>";
    }
    unset($sub);

    $sub = $pesado - $opa;
if($opa > $pesado){
    echo "o armazenamento esta pesado<br>";
    }
    else{
        echo "falta $sub para poder encher o armazenamento<br>";
    }
    unset($sub);





?>