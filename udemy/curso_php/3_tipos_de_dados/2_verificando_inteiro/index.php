<?php 
$isa = 8;
$cao = 7;

if($isa > $cao){
    echo "isa maior que cao";
}
else{
    echo"cao maior que isa";
}

echo "<br>";

if(is_int(6)){//um numero inteiro, por isso true
    echo "e um inteiro";
}

echo "<br>";

if(is_int(7.6)){//nao e um inteiro e sim um float, por isso false
    echo "e um inteiro";
}

if(is_int($isa)){
 echo "e um inteiro 3";
}

?>