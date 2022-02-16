<?php

//Para cada conjunto de páginas de um mesmo grupo ou tópico relativo ao site, temos uma única controller, que terá seus métodos

Class noticiasController extends Controller{ //Outras controllers podem ter método index, mas a homeController deve obrigatoriamente ter o método index 

    public function index()
    {
        //1) chamar um model (não é obrigatório pois nem toda página vai buscar info no banco de dados)
        //2) chamar uma view
        //3) fazer a junção de back end com front end usando o template
        
        $dados['nome'] = 'Gleison'; //exemplo de dados que podem ser extraídos do banco para serem exibidos na view
        $dados['idade'] = 22;

        $this->carregarTemplate('noticias',$dados);
    }

    public function getNoticia() //uma segunda pagina no mesmo controller, que utilizando dados do model, exibi uma noticia
    {
        //1) chamar um model (não é obrigatório pois nem toda página vai buscar info no banco de dados)
        //2) chamar uma view
        //3) fazer a junção de back end com front end usando o template
    
        $this->carregarTemplate('getNoticia');//necessário criar esta view
    }

}