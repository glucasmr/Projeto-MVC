<?php

spl_autoload_register(function($nome_arquivo) //a função spl é realizada sempre que uma classe é instanciada
{
    if(file_exists('Controllers/'.$nome_arquivo.'.php')) //vai verificar se o arquivo(controller,core ou model) existe, e fazer o require
    {
        require 'Controllers/'.$nome_arquivo.'.php'; 
    
    }elseif(file_exists('Core/'.$nome_arquivo.'.php'))
    {    
        require 'Core/'.$nome_arquivo.'.php';

    }elseif(file_exists('Models/'.$nome_arquivo.'.php'))
    {
        require 'Models/'.$nome_arquivo.'.php';
    }
});
?>