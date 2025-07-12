<?php
class isa{

    function falar(){
        echo'opa,bom';
    }


}
$cao = new isa();
$cao -> nome = "samuel";
echo $cao-> nome;
echo "<br>";
$cao -> falar();


?>