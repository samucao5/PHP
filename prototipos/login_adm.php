<!DOCTYPE html>
<html>
    <head>
        <title>login adm</title>
    </head>

    <body>
        <form method="post">
        usuario:
        <input type="text" name="usuario" required/>
        senha:
        <input type="password" name="senha" required/>
        <input type="submit" name="enviar" value="login" />
        </form>
    </body>
</html>

<?php 
function login(){
    $valor = FALSE;
    include '../cadastro_de_produtos/banco_de_dados_aquarius/codigos/conexao.php';
    if(isset($_POST['enviar'])){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = $pdo -> prepare(" SELECT usuario_adm FROM administrador where usuario_adm = ? AND senha_adm = ?");
        $sql -> execute([$usuario, $senha]);
        $resultado = $sql->fetchall();

        if(count($resultado) > 0){
            $valor = TRUE;

        }
        else{
            echo "Usuario ou senha incorretos.";
        }
    }
    return $valor;
}
?>

