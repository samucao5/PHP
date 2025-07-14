<?php 
//colocar cd:/ local_onde_esta_seu_arquivo
//colocar este codigo no cmd ao qual o composer require nome_do_diretorio
//composer require nesbot/carbon
//fazem a mesma coisa
//required('');
//require('');
    include('vendor/autoload.php');
    use Carbon\Carbon;
    printf("ATUAL: %s", Carbon::now());
    echo "<br />";
    $semana_passada = Carbon::now()->subWeek();
    echo "SEMANA PASSADA:".$semana_passada;
?>