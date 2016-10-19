<?php
interface IPesquisa {
    
    public function pesquisarUsuario($usuario);
    public function listarRespositorios($usuario);
    public function detalher($usuario);
}