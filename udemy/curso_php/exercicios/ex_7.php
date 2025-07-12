<?php
$isa = ['nome' => 'Samuel', 'idade' => 18, 'salario' => 2500];
print_r($isa);
$cao = $isa['nome'];
$angel = $isa['idade'];
$devil = $isa['salario'];


echo "<br>seu nome e $cao voce tem $angel anos e ganha R$ $devil";

if($angel >= 18){
    echo "<br>voce tem mais de 18 anos";
}


?>