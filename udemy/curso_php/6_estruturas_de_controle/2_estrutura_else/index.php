<?php
$cao = 10;
$isa = 11;
#true
if($isa > $cao){
    echo "$isa maior que $cao<br>";
}
else{
    echo "$isa e menor que $cao<br>";
}
unset($isa);

$isa = 10;
$cao += 2;

if($isa > $cao){
    echo "$isa maior que $cao<br>";
}
else{
    echo "$isa e menor que $cao<br>";
}
$isa += 2;
if($isa > $cao && 0){#true , false
    echo "$isa true<br>";
}
else{
    echo "$isa false<br>";
}


if($isa == $cao || 0){#true , false
    echo "$isa igual ha $cao<br>";
}
else{
    echo "$isa e menor que $cao<br>";
}



?>