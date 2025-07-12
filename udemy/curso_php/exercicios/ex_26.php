<?php
$isa = 54;
$velo = 40;
if($isa < $velo){
    echo"o motorista esta na velocidade certa<br>";
}
else if($isa == $velo){
    echo"o motorista deve tomar cuidado<br>";
}
else{
    echo"o motorista esta em alta velocidade e levara uma multa<br>";
}
$cao = 39;

if($cao < $velo){
    echo"o motorista esta na velocidade certa<br>";
}
else if($cao == $velo){
    echo"o motorista deve tomar cuidado<br>";
}
else{
    echo"o motorista esta em alta velocidade e levara uma multa<br>";
}
$cao++;

if($cao < $velo){
    echo"o motorista esta na velocidade certa<br>";
}
else if($cao == $velo){
    echo"o motorista deve tomar cuidado<br>";
}
else{
    echo"o motorista esta em alta velocidade e levara uma multa<br>";
}

?>