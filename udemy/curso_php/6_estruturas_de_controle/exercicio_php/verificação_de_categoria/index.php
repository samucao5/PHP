<?php
    $categoria;
    function verificar_categoria($categoria){
        switch($categoria){
            case "eletronico";
            echo "esta categoria e de produtos eletronicos";
            break;

            case "vestuario";
            echo "esta categoria e de produtos de vestuario";
            break;

            case "alimento";
            echo "esta categoria e de produtos alimenticios";
            break;

            default:
            echo "esta categoria não foi encontrada";
            break;
        }
    }
        verificar_categoria("eletronico");
?>


