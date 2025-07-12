<?php
$cao = 5;
echo"$cao escopo global <br>";

if( 5>2 ){
    $cao = 10;
    echo"$cao if <br>";
}

echo "$cao escopo global 2 <br>";

function devil(){
    $cao = 6;
    echo"$cao escopo local <br>";
}

devil();

function testandoglobal(){


    global $cao;
    $cao = 7;
    echo"$cao escopo global 3 <br>";
}

testandoglobal();

echo "$cao escopo global 4 <br>";
?>