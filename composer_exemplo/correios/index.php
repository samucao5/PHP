<?php 
    include('vendor/autoload.php');

    use FlyingLuscas\Correios\Client;
    use FlyingLuscas\Correios\Service;

    $correios = new client;

    print_r($correios->freight()
    ->origin('53424-265')//cep do remetente
    ->destination('87412-523')//cep do destinatário 
    ->services(Service::sedex,Service::PAC)
    ->item(12,10,14,.5,1)//largura, altura, comprimento, peso e quantidade
    ->calculate());
?>