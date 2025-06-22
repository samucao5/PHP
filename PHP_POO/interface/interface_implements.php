<?php 
    include('interface.php');
    
    class teste implements interface_1{
        public $nome_usuario;

        public function Get_nome_usuario(){
            echo $this->Set_nome_usuario;
        }

        public function Set_nome_usuario($nome_usuario){
            $this-> Set_nome_usuario = $nome_usuario;
        }
        
        public function imprimir_na_tela($var){
            echo "<br />";
            echo $var;
        }
    }

    $teste_1 = new teste;
    $teste_1->Set_nome_usuario('samuel');
    $teste_1->Get_nome_usuario();
    $teste_1->imprimir_na_tela('ola')
    

?>