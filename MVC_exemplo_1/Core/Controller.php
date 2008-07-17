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
        extract($dadosModel);
        require 'Views/'.$nomeView.'.php';
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


