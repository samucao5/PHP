<?php
$cao = 5;
$aba = 8;

if($cao > 4 && $aba > 5){ #true, true
    echo "opa";
}
if($cao > 6 && $aba > 5){#false,true
    echo "opa2";
}
$cao = $cao + 2;
$aba = $aba - 3;
if($cao > 6 && $aba > 5){#true,false
    echo "opa3";
}
$cao--;
if($cao > 6 && $aba > 5){#false,false
    echo "opa3";
}





?>