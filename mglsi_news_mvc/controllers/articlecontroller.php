<?php

 class articlecontroller {

   

    public function Accueil($connexion){
      
        $model= new articleModel($connexion);
        $articles= $model->getAllArticles();
        require('views/Accueil.php');
    }
    
    public function pages($connexion,$id)
    {
        
        $model=new articleModel($connexion);
        $articles= $model->getArticlesbyCategory($id);
        require('views/pages.php');
    }


 }
