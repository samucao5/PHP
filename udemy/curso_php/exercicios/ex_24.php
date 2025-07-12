<?php
$isa = (int) 24;
$teste1 = gettype($isa);

if(is_float($isa)){
    echo "$isa e float<br>";
}
else{
    echo "na verdade o tipo e $teste1<br>";
}

$cao = (string) "amar";
$teste2 = gettype($cao);

if(is_string($cao)){
    echo "$cao e $teste2<br>";
}
else{
    echo"o valor de $cao e $teste2<br>";
}

$ana = (bool) 1;
$teste3 = gettype($ana);

if(is_bool($ana)){
    echo "$ana e $teste3<br>";
}
else{
    echo"o valor de $ana e float<br>";
}

$sam = (float) 5.55;
$teste4 = gettype($sam);

if(is_int($sam)){
    echo "$sam e inteiro<br>";
}
else{
    echo"o valor de $sam e $teste4<br>";
}



?>