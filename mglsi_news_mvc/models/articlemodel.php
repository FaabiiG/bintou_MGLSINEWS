<?php
class articleModel
{
    private $connexion;
        public function __construct($connexion)
        {
            $this->connexion = $connexion;
        }
       


        public function getAllArticles()
        {
           
                $requete = $this->connexion -> query('SELECT * FROM article ');
                $article = $requete -> fetchAll();  
                return $article;    
            
        }

        public function getArticlesbyCategory($id)
        {
            $requete = $this->connexion -> query('SELECT * FROM article WHERE categorie='.$id.'');
            $articles= $requete -> fetchAll();
            return $articles;
        }

       
    }  


?>
