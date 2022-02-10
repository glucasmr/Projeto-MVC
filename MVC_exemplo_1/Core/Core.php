<?php

/* site exemplo para url amigável
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
        if(isset($_GET['pag'])) 
        {
            $url= $_GET['pag'];
        }
        
        if(!empty($url))//possui info apos o dominio. www.site.com/classe/metodo/parametros
        {
            $url = explode('/',$url);  //função explode faz a quebra de uma string em um array apartir de delimitadores
            $controller = $url[0].'Controller'; // noticiaController
            array_shift($url); //remove o item da posição [0] e reorganiza o array (o item [1] vira o item [0], o item [2] vira o item [1]...)
            
            if(isset($url[0]) && !empty($url[0])) //verifica se mandou método
            {
                $metodo = $url[0];
                array_shift($url);
            }
            else
            {
                $metodo = 'index';  //enviou somente classe
            }

            if(count($url) > 0 )
            {
                $parametros = $url;
            }
        }
        else //não possui info após o dominio. www.site.com/
        {
            $controller = 'homeController';
            $metodo = 'index';
        }
        
        $caminho = 'MVCexemplo_1/Controllers/'.$controller.'.php';
        
        if(!file_exists($caminho) && !method_exists($controller, $metodo))
        {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $c = new $controller;
        call_user_func_array(array($c,$metodo),$parametros);
    }
}
?>