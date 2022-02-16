<?php

Class Conexao{//utilizar o padrão Singleton para fazer a conexão com o banco

    private static $instancia;

    private static function __construct(){} //construct privado para que não possa ser instanciado no código, e static para que se possa acessar os atributos e métodos sem precisar instanciar a classe

    public static function getConexao() // static faz com que o método/atributo da classe seja compartilhado por todods os objetos dessa classe, ou seja, se alterar em um, altera em todos
    {
        if(!isset(self::$instancia))// se ela não existe, então cria a variável
        {
            $dbname = '';
            $host = 'localhost';
            $user = 'root';
            $senha = '';
            
            try
            {
                self::$instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);//é utilizado o self pois é uma variável estática, é acessada utilizando :: ao invés de ->
            }catch(Exception $e)
            {
                echo 'Erro: '.$e;
            }
        }
    return self::$instancia; //retorna a conexão que foi estabelecida uma única vez
    }
}

?>