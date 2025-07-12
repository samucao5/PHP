<?php
echo 5 / 2;
echo "<br>";
if(is_float(5/2)){
    echo "e float <br>";
}

echo 4 . 5;
echo "<br>";
if(is_string(4 . 5)){
    echo "e string <br>";
}

$isa = "samuel";
$ana = "felipe";
$cao = $isa . " " . $ana;
echo $cao;
echo "<br>";



?>