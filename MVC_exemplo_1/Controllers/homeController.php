<?php

Class homeController extends Controller(){ //Outras controllers podem ter método index, mas a homeController deve obrigatoriamente ter o método index 

    public function index()
    {
        //1) chamar um model (não é obrigatório pois nem toda página vai buscar info no banco de dados)
        //2) chamar uma view
        //3) fazer a junção de backe nd com front end usando o template
    
        $this->carregarTemplate('home',$dados);
    }




}