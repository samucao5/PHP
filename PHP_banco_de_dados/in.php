 <?php
 $pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados','root','');
    $sql = $pdo->prepare("SELECT * FROM  `clientes` WHERE id IN (1,5)");
    $sql -> execute();
    $id = $sql -> fetchall();
    echo "<pre>";
    print_r($id);
    echo "</pre>";


?>