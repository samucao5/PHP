<?php 
    $nome = "samuel";

    function mostrar_dados($nome, $idade){
        echo "<h2>nome e: $nome</h2>";
        echo "<br />";
        echo "<h2>Idade: $idade</h2>";
    }

    mostrar_dados($nome, 19);

    function calcular($numero1 = 5, $numero2 = 5){
        echo "<br />";
        echo "o resultado e: ".($numero1 + $numero2);
    }

    calcular(50,5);

    



?>