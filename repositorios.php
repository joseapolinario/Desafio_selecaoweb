<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" type="text/css" href="css/todos.css">

    </head>
    <body>
        <?php
        include_once'./Pesquisa.php';

        echo "<h2>Lista de respositorios</h1>";

        $pesquisar = new Pesquisa;
        $usuario = $_REQUEST['usuario'];

        $result = $pesquisar->listarRespositorios($usuario);

        foreach ($result as $f) {
          //  echo "<p class='login'>" . $f['name'] . "<a href='" . $f['html_url'] . "'>Ver</a></p>";
            echo "<li>" . $f['name'] . "<a  class='login' href='" . $f['html_url'] . "'> Ver</a></li>";
        }
        ?>
    </body>
</html>