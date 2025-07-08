<?php 
    //lendo arquivo XML
    $xml = simplexml_load_file('arquivo.xml');
    //imprimir todas as informaçoes do xml
    print_r($xml);
    echo "<br />";
    //caso queira uma informação especifica
    echo $xml->usuario->item->nome;
    echo "<br />";
    echo "<br />";
    //criando um arquivo XML a partir de um array
    //criando um array com nome e idade
    $arq = ['samuel' => 'nome', 19 => 'idade'];
    //criamos um variavel $xml para instanciar a classe do PHP
    //ao qual ira criar um array com base neste <root/>
    $xml = new simpleXMLElement('<root/>');
    //passamos o primeiro parametro no caso o array ou $arq
    //e o segundo parametro o segundo array que criamos no $xml
    //'addChild' e uma maneira de dizer que e do formato XML
    array_walk_recursive($arq,array($xml,'addChild'));
    //nomeando o arquivo XML e jogando o array $xml dentro dele
    file_put_contents('arquivo2.xml',$xml->asXML());

    //imprimir na tela o que tem dentro do XML
    $ler = simplexml_load_file('arquivo2.xml');
    echo $ler -> nome;

    echo "<br />";
    
    escreverXML(array('joao'=>'nome', '16'=>'idade','futebol,basquete'=>'esportes'),'arquivo3.xml');
    $ler2 = simplexml_load_file('arquivo3.xml');
    echo $ler2 -> esportes;

    //de forma mais personalizada 
    function escreverXML($arq,$nome_do_arquivo){
        $xml = new simpleXMLElement('<root/>');
        array_walk_recursive($arq,array($xml,'addChild'));
        file_put_contents($nome_do_arquivo,$xml->asXML());
    }
?>