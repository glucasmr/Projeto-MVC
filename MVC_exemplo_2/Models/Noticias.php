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
       $dados = array();
       $cmd = $this->con->query('SELECT id_noticia,titulo,nome_imagem, texto FROM NOTICIAS'); //como não existe placeholder, não é necessário usar o método prepare e execute. Utiliza-se o query que realiza ambas as funções
       $dados = $cmd -> fetchall(PDO::FETCH_ASSOC);
       return $dados;
    }

}