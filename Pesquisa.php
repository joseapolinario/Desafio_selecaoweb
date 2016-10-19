<?php

require_once './vendor/autoload.php';
require_once './IPesquisa.php';

class Pesquisa implements IPesquisa {

    // objeto que ira interagir com github
    private $client;

    function __construct() {
        $this->client = new \Github\Client();
    }

    //Realizar a pesquisa por usuario dado um nome
    public function pesquisarUsuario($usuario) {
        $infor = $this->client->api('user')->find($usuario);
        return $infor;
    }
    
    public function detalher($usuario){
        $infor = $this->client->api('user')->show($usuario);
        return $infor;
    }

    //lista os repositorios de um usuario dado um nome
    public function listarRespositorios($usuario) {
        $repos = $this->client->api('user')->repositories($usuario);
        return $repos;
    }
}

?>