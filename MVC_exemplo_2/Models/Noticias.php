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
       $dados = array();// cria dados como um array vazio 
       $cmd = $this->con->query('SELECT n.id_noticia --faz a busca dos dados no BD
                                      , n.titulo
                                      , n.nome_imagem
                                      , n.texto
                                      , t.descricao
                                    FROM noticias n INNER JOIN tipos_noticias t ON n.fk_id_tipo_noticia = t.id_tipo
                                    '); //como não existe placeholder, não é necessário usar o método prepare() e execute(). Utiliza-se o query() que realiza ambas as ações
       $dados = $cmd -> fetchall(PDO::FETCH_ASSOC);//dados recebe cmd fetchall()
       return $dados;
    }

}