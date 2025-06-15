<?php 
$array = ["nome1" => "samuel", "nome2" => "allan"];
$array2 = array("nome3" => "pedro", "nome4" => "maria");
$array3 = array("data" => "27/03/2023");
#junta os arrays
$resultado = array_merge($array,$array2,$array3);
print_r($resultado);
echo "<br>";

$idade = array("idade1" => 21,"idade2" => 54 );
$idade2 = array("idade1" => 19, "idade3" => 24);
//array_intersect_key serve para retornar valores com a mesma chave em 1 ou mais arrays.
print_r(array_intersect_key($idade,$idade2));

$nomes = ['<p>samuel</p>','maria','<h1> allan</h1>'];
print_r($nomes);
echo "<br>";
#array_map serve para aplicar uma função em todos os valores do array.
#print_r(array_map(funcao_desejada,nome_do_array);
print_r(array_map('strip_tags',$nomes));

?>