<?php
function cao(){
    $isa = 0;
    $isa++;
    echo "$isa<br>";
}
cao();
cao();
cao();
echo "<br>";
function caostatic(){
    static $isa = 0;
    $isa++;
    echo "$isa<br>";
}
caostatic();
caostatic();
caostatic();




?>