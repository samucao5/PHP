<?php
$isa = (int) "testando";
echo $isa;
echo "<br>";
echo gettype($isa);
echo "<br>";
unset($isa);


$isa = (int) 12.9;
echo $isa;
echo "<br>";
echo gettype($isa);
echo "<br>";
unset($isa);

$isa = (int) true;
echo $isa;
echo "<br>";
echo gettype($isa);
echo "<br>";
unset($isa);

$isa = (int) [1,2,3];
echo $isa;
echo "<br>";
echo gettype($isa);
echo "<br>";
unset($isa);

?>