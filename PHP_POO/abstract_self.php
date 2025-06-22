<?php 
//a classe abstract serve apenas para ser herdada 
    abstract class teste{
        public function func_1(){
            echo 'chamando funcao 1';
        }

        abstract function func_2();


    }

    class principal_2{
        public static function metodo_2(){
            echo 'meu outro metodo static';
        }
    }

    class Principal extends teste{
        
        public function func_2(){
            echo '<br />';
            echo 'metodo abstrato';
        }

        public static function metodo_static(){
            echo '<br />';
            echo 'metodo static';
        }

        public function teste(){
            //principal::metodo_static(); tambem funciona
            echo "<br />";
            //usado para classes estrangeiras 
            principal_2::metodo_2();
            echo "<br />";
            //serve somente para metodos static dentro da propria classe
            self::metodo_static();

        }
    }

    $principal = new principal;

    $principal->func_1();
    $principal->func_2();
    principal::metodo_static();
    $principal->teste();

?>