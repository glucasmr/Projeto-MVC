<?php

//Para cada conjunto de páginas de um mesmo grupo ou tópico relativo ao site, temos uma única controller, que terá seus métodos

Class noticiasController extends Controller{ //Outras controllers podem ter método index, mas a homeController deve obrigatoriamente ter o método index 

    public function index()
    {
        //1) chamar um model (não é obrigatório pois nem toda página vai buscar info no banco de dados)
        $n = new Noticias(); //instancia o model criado
        $dados = $n ->getNoticias();
        
        //2) chamar uma view
        //3) fazer a junção de back end com front end usando o template
        
        //$dados['nome'] = 'Gleison'; //exemplo de dados que podem ser extraídos do banco para serem exibidos na view
        //$dados['idade'] = 22;

        $this->carregarTemplate('noticias',array(),$dados);
    }

    public function entretenimento($id_noticia) //uma segunda pagina no mesmo controller, que utilizando dados do model, exibi uma noticia
    {
        echo 'Entrou em entretenimento com sucesso';
        //1) chamar um model (não é obrigatório pois nem toda página vai buscar info no banco de dados)
        //2) chamar uma view
        //3) fazer a junção de back end com front end usando o template
        exit;
        $this->carregarTemplate('entretenimento');//necessário criar esta view
    }

    public function futebol() //uma segunda pagina no mesmo controller, que utilizando dados do model, exibi uma noticia
    {
        
        echo 'Entrou em futebol com sucesso';
        //1) chamar um model (não é obrigatório pois nem toda página vai buscar info no banco de dados)
        //2) chamar uma view
        //3) fazer a junção de back end com front end usando o template
        exit;
        $this->carregarTemplate('futebol');//necessário criar esta view
    }

}