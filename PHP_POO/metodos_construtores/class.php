<?php 
    
    class classe_1{
        private $nome;
        private $idade;
//o __construct e o primeiro metodo ao qual irar ser procurado
        public function __construct($nome, $idade){
            $this-> nome = $nome;
            $this-> idade = $idade;
    }
        Public function get_nome(){
            return $this->nome;
        }

        Public function get_idade(){
            return $this->idade;
        }

    }




?>