<?php

Class Controller {
    
    public $dados;
    
    public function __construct()
    {
        $this->dados = array();
    }

    public function carregarTemplate($nomeView,$dadosModel = array()) //$dadosModel é atribuído um array, ou seja, não é obrigatório passar um parâmetro para este método
    {
        $this->dados = $dadosModel;
        require 'Views/template.php';
    }

    public function carregarViewNoTemplate($nomeView,$dadosModel = array())
    {
        extract($dadosModel); //explicação do extract abaixo 
        require 'Views/'.$nomeView.'.php'; //é necessário fazer o require pois as views não são classes logo não pode ser vista pelo spl_autoload
    }

}

/*
arrays são estruturas da seguinte forma

[0] = 1;
[1] = 'texto';

mas podem ser também

['nome'] = 'Gleison'
['ano'] = '1999'

e o extract() faz:

$nome = 'Gleison'
$ano = '1999'
*/


