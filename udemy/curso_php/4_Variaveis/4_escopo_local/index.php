<?php
$isa = 5;
echo "escopo global: $isa <br>";
function teste(){
    $isa = 10;
    echo "escopo local: $isa <br>";
}

function testando(){
    $isa = 11;
    echo "escopo local 2: $isa <br>";
}
$isa = 99;
teste();
testando();

echo "escopo global: $isa <br>";
?>