<?php 
    class exemplo
    {  
        //private so conseguimos acessar dentro da classe
        private $var1;
        //public funciona em qualquer lugar
        public $var2;

        public static $var3 = 'ola';

        public function mensagem(){
            $this->mensagem2();
            echo "<br />";
            echo "mensagem";
        }

        public static function mensagem3(){
            echo "epa";
        }

        private function mensagem2(){
            echo "opa";
        }

        public function set_var1($var1){
            $this->var1 = $var1;
        }

        public function get_var1(){
            return $this->var1;
        }
    }



?>