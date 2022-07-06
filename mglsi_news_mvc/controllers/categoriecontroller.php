<?php
class categoriecontroller{
    
    
    public function ShowCategories($connexion)
    {
        $model= new categorieModel();
        $categories= $model->getAllcategories($connexion);
        require('views/header.php');
    } 


}