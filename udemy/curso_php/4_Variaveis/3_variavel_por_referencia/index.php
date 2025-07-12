<?php
$isa = 5;
$cao =& $isa;
echo $isa,"<br>";
echo $cao,"<br>";
echo "mudança de valor so que pelo referenciado<br>";
$cao = 18;
echo $isa,"<br>";
echo $cao,"<br>";



?>