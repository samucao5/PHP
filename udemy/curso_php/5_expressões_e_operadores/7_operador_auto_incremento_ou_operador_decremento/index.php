<?php
$isa = 4;
$cao = 0;
$isa++;
$cao = $cao + 1;
echo "isa: " . $isa . "<br>";
echo "cao: " . $cao . "<br>";

$isa = 4;
$cao = 3;
$isa--;
$cao = $cao - 1;
echo "isa2: " . $isa . "<br>";
echo "cao2: " . $cao . "<br>";

$devil = 5;
$angel = 0;

if($devil > $angel){
    $angel++;
    $angel++;
    $angel++;
    $angel++;
    $angel++;
    $angel++;
    echo $angel;
}

?>