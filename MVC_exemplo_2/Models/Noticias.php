<?php
require_once 'Conexao.php'; //o autoload não faz o require de Conexao.php pois a classe não pode ser instanciada

Class Noticias{

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao(); //assim que a classe é instanciada, realiza a conexão 
    }


    public function getNoticias()
    {
        
    }

}