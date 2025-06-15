<!DOCTYPE html>
    <html>
    <head>
        <title>Formularios</title>
    </head>
    <body>
        <?php 
            #caso de algum problema uma gambiarra e colocar o $nome = @$_GET['nome'];

            #get ele pega o dado e armazena e mostra na URL do site
            /*
            $nome = $_GET['nome'];
            $email = $_GET['email'];

            echo $nome;
            echo "<br>";
            echo $email;
            */
            #o post ele recebe o dado e amrmazena e nao mostra na URL do site, sendo mais dinamico
            if(isset($_POST['acao'])){
                $nome = @$_POST['nome'];
                $email = @$_POST['email'];
                echo $nome;
                echo "<br />";
                echo $email;
            }
            echo "<br />";
            if(isset($_POST['acao'])){
                echo $_POST['nomes'];
            }

        ?>
        <form method ="post">
            <input type="text" name="nome" />
            <input type="text" name="email" />
            <input type="submit" name="acao" values="enviar" />
            <select name="nomes">
                <option value="fernando">fernando</option>
                <option value="allan">allan</option>
            </select>
        </form> 
    </body>





    </html>
