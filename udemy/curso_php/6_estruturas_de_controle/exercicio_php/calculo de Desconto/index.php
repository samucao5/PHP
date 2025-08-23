<?php
    $valor_do_produto;
    $categoria;
    function calcular_desconto($valor_do_produto,$categoria){
        switch($categoria){
            case "eletronico";
            $desconto = 10;
            break;

            case "vestuario";
            $desconto = 20;
            break;

            case "alimento";
            $desconto = 50;
            break;

            default:
            echo "esta categoria não foi encontrada";
            $desconto = 0;
            break;
        }
            $valor_final = $valor_do_produto - (($valor_do_produto * $desconto) / 100);
            $valor_do_produto = $valor_final;
            return $valor_do_produto;
    }

        $valor_do_produto = calcular_desconto(10,"alimento");
        echo "este e o valor do produto: ". $valor_do_produto;





?>


