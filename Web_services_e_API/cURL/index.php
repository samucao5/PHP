<?php
    //inicia o cURL numa variavel
    $curl = curl_init();
    //O curl_setopt é uma função do PHP usada para configurar opções de uma sessão cURL. 
    //Ela permite personalizar o comportamento de uma requisição HTTP
    //CURLOPT_URL: Define a URL para a requisição
    curl_setopt($curl, CURLOPT_URL,"http://localhost/PHP/Web_services_e_API/cURL/request.php/");
    //CURLOPT_POST: Indica que a requisição será do tipo POST.
    curl_setopt($curl,CURLOPT_POST,1);

    //na vida real voce pode usar passando como array e usar a funcao http_build_query
    //CURLOPT_POSTFIELDS: Define os dados a serem enviados em uma requisição POST.
    curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('request' => 'name_return')));
    //CURLOPT_RETURNTRANSFER: Retorna a resposta como string em vez de exibi-la.
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Executa a requisição
    $server_output = curl_exec($curl);
    // Fecha a conexão
    curl_close($curl);

    echo $server_output;
?>