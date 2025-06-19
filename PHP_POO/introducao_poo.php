<?php 
    class pessoa{
        //objeto pessoa
        private $nome = 'samuel';
        //atributos
        private $idade = '19';
        private $peso = '50kg';

        //metodos
        public function crescer(){
            $this->comer();
            echo "<br />";
            echo 'estou crescendo';
        }

        private function comer(){
            echo 'estou comendo';
        }
    }
    //Instanciar
    $pessoa1 = new pessoa;
    $pessoa1 -> crescer();
?>