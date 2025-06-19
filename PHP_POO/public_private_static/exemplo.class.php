<?php 
    include('public_private_static.php');
    $exemplo_1 = new exemplo();

    $exemplo_1->var2 = 'samuel';
    echo 'var2: '.$exemplo_1->var2;

    $exemplo_2 = new exemplo();
    $exemplo_2->var2 = 'felipe';
    echo "<br />";
    echo 'var2: '.$exemplo_2->var2;
    echo "<br />";
    //para instaciar um atributo static devemos colocar
    //nome_da_classe::$nome_Do_atributo_static;
    echo exemplo::$var3;
    echo "<br />";
    exemplo::$var3 = 'outro nome';
    echo exemplo::$var3;
    echo "<br />";
    //nomeando a var1 privada
    $exemplo_1 -> set_var1('maria');
    //imprimindo na tela a var1 privada
    echo $exemplo_1 -> get_var1();
    echo "<br />";
    $exemplo_2 -> set_var1('fernando');
    echo $exemplo_2 -> get_var1();
    echo "<br />";
    //exibindo o metodo static
    exemplo::mensagem3();
    echo "<br />";
    //exibindo o metodo publico e privado
    $exemplo_1->mensagem();
?>