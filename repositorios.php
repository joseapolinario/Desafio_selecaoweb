<?php

include_once'./Pesquisa.php';

echo "<h2>Lista de respositorios</h1>";

$pesquisar = new Pesquisa;
$usuario = $_REQUEST['usuario'];

$result = $pesquisar->listarRespositorios($usuario);

foreach ($result as $f) {
    echo $f['name'] . "<br/>";
}
?>