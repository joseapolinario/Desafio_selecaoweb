<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" type="text/css" href="css/todos.css">
        
    </head>
    <body>

        <form action="" method="post">
            <input type="text" name="txtUsuario" class="inputBuscar"/>
            <input type="submit" value="Pesquisar" class="botao"/>
        </form>

        <ul>
            <?php
            include_once('./Pesquisa.php');
            if (isset($_POST['txtUsuario'])) {
                $usuario = $_POST['txtUsuario'];
                $pesquisar = new Pesquisa;
                $result = $pesquisar->pesquisarUsuario($usuario);

                foreach ($result as $a) {
                    foreach ($a as $s) {
                        echo "<li><a  class='login' href='detalhes.php?".$s['username']."'>". $s['fullname'] . " - " . $s['repos'] ." repositórios</a></li>";
                    }
                }
            }
            ?>
        </ul>
    </body>
</html>