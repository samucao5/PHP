<?php 
//final class não permite o compartilhamento de atributos e metodos
//extends pega os atributos e metodos da classe pai
    final class filha extends pai{


        public function exibir_ola(){
            echo 'ola mundo';
            echo '<br />';
            $this -> funcao_teste();
        }
        
        public function exibir_tchau(){
    #podemos tamber colocar a funcao original da classe pai na classe filha
    #usando o parent::nome_do_atributo_original;
            parent::exibir_tchau();
            echo '<br />';
            echo "funcao nova";
        }
    }

    class pai{
    //nao podemos passar uma funcao private para uma subclasse diretamente
        private function nome(){
            echo 'meu nome e samuel';
        }

        public function exibir_tchau(){
            echo 'tchau mundo';
            echo '<br />';
            $this-> nome();

        }
    //permite o acesso de uma subclasse que herda o pai
        protected function funcao_teste(){
            echo 'chamando funcao teste';
        }
    //mas podemos armazenar o private numa publica e passar pela subclasse
        public function exibir_nome(){
            $this -> nome();
        }

    }

    $pai = new pai;
    $pai -> exibir_tchau();
    echo "<br />";
    $filha = new filha;
    $filha -> exibir_ola();
    echo "<br />";
    $filha -> exibir_tchau();
    echo "<br />";
    $filha -> exibir_nome();


?>
