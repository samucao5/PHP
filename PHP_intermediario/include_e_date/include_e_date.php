<?php 
#trabalhando com datas e horas 
    date_default_timezone_set('America/Sao_Paulo');
                                    #adicionando 10 min
    $data = date('d/m/Y H:i:s',time()+(60*10));

    echo $data;

    
    $titulo_site = 'este e o titulo do meu site';
    include('header.php')
?>

<h1>MEU conteudo da home </h1>

<?php
    include('footer.php')
?>