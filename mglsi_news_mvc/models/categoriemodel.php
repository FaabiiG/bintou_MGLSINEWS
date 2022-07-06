<?php
class categorieModel
{
    public function getAllCategories($connexion)
    {
       
      $sql= "SELECT * FROM categorie ";
      $requete =  $connexion->query($sql);
      return  $requete ->fetchAll();
    }
}

     


?>