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
        
        $result = $pesquisar->detalher($usuario);
        
        foreach ($result as $res){
            echo "<div>";
            echo "<li>";
            echo "<img src=".$res['avatar_url']."</img>";
            echo "<p>".$res['username']."</p>";
            echo "<a class='login' href='respositorios.php?usuario=".$usuario."'</a>";
            echo "</li>";
            echo "</div>";
        }
        ?>
    </body>
</html>