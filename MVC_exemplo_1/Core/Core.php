<?php

/* 
    O arquivo core.php é onde irá ser criado a URL amigável

    site exemplo para url amigável
    www.site.com/noticia/entretenimento/10

    /noticia            classe
    /entretenimento     método
    /10                 parâmetro



*/   

Class Core{

    public function __construct() //construtor é o metodo realizado assim que a classe é instanciada
    {
        $this->run(); //executa o método assim que é instanciado
    }

    public function run()
    {
        if(isset($_GET['pag']))  //usa o método GET para pegar o endereço que esta na url do htacess 
        {
            $url= $_GET['pag'];
        }
        
        if(!empty($url))// se !empty significa que possui info apos o dominio. www.site.com/classe/metodo/parametros
        {
            $url = explode('/',$url);  //função explode faz a quebra de uma string em um array apartir de delimitadores
            $controller = $url[0].'Controller'; // noticiaController
            array_shift($url); //remove o item da posição [0] e reorganiza o array (o item [1] vira o item [0], o item [2] vira o item [1]...)
            
            if(isset($url[0]) && !empty($url[0])) //verifica se existe informação em $url[0] e não está vazio
            {
                $metodo = $url[0];
                array_shift($url);
            }
            else //enviou somente classe
            {
                $metodo = 'index';  // é o metodo padrão
            }

            if(count($url) > 0 ) //verifica se ainda tem posições no array
            {
                $parametros = $url; //guarda os parametros
            }
        }
        else //não possui info após o dominio. www.site.com/
        {
            $controller = 'homeController'; // é o controller padrão
            $metodo = 'index';
        }
        
        $caminho = 'MVC_exemplo_1/Controllers/'.$controller.'.php'; //faz a construção do endereço do arquivo
        
        if(!file_exists($caminho) && !method_exists($controller, $metodo)) //verifica se o arquivo e o método existem
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $c = new $controller; //instancia o controller
        
        // faz $c->$metodo();
        call_user_func_array(array($c,$metodo),$parametros); //acessa o determinado controller e executa o $metodo (podem ser diferentes metodos, então é preciso usar call_user_func_array )
    }
}