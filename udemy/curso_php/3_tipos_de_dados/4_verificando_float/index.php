<?php

if(is_float(1.3)){
    echo "e um float";
}
$isa = 1;
if(is_float($isa)){
    echo "e um float";
}
echo "<br>";
$cao = 2.3;
if(is_float($cao)){
    echo "e um float", "<br" ,$cao;
    
}

$porquin = "olhos";
if (is_float($porquin)){
    echo "<br> e um float";
}


?>