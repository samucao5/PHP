<?php
#+=
$isa = 5;
$isa += 7;
echo $isa;
echo "<br>";
unset($isa);
#-=
$isa = 7;
$isa -= 2;
echo $isa;
echo "<br>";
unset($isa);
#*= 
$isa = 2;
$isa *= 7;
echo $isa;
echo "<br>";
unset($isa);
#/= 
$isa = 10;
$isa /= 2;
echo $isa;
echo "<br>";
unset($isa);
#%= 
$isa = 7;
$isa %= 3;
echo $isa;
echo "<br>";
unset($isa);

$isa = 10;
$cao = 5;
$isa += $cao;
echo $isa;

?>