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

        $usuario = $_REQUEST['usuario'];
        $pesquisar = new Pesquisa;
        
        $res = $pesquisar->detalher($usuario);
        
        print_r($res);
        
            echo "<div>";
            echo "<li>";
            echo "<img src=".$res['avatar_url']."</img>";
            echo "<p>".$usuario."</p>";
            echo "<p>".$res['location']."</p>";
            echo "<a class='login' href='repositorios.php?usuario=".$usuario."'>Ver Repositorios</a>";
            echo "</li>";
            echo "</div>";
        
        ?>
    </body>
</html>