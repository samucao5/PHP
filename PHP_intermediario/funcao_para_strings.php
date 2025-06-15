<?php 
    $texto = "Texto é uma forma de nos expressarmos, ou seja, de transmitir uma mensagem a alguém. Os textos podem ser verbais, quando utilizam palavras, e podem ser não-verbais, quando utilizam cores, texturas, gestos e sons em vez de palavras.";
    #substr(nome_da_variavel,onde_começa,quantas_letras_ele_deverar_ler)
    echo substr($texto,0,15);
    echo "<br />";
    $nome = "Samuel Felipe";
    #separa por espaços e mostrar os nomes por array
    $nome = explode(' ',$nome);
    print_r($nome);
    echo "<br />";
    #junta os nomes pelo espaço
    $nome = implode(' ',$nome);
    echo $nome;
    echo "<br />";

    $conteudo = '<h1>samuel</h1>';
    echo $conteudo. "<br />";
    #strip_tags serve para retirar todo codigo em html
    echo strip_tags($conteudo);
    #htmlentities que mostra o codigo html na pagina
    echo htmlentities('<div></div>');
    
?>