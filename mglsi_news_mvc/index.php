<?php
 //models

 require 'models/database.php';
 require 'models/categoriemodel.php';
 require 'models/articlemodel.php';

 //controllers
 require 'controllers/categoriecontroller.php'; 
 require 'controllers/articlecontroller.php';

 $connexion = database::connect_db();
 $categoriecontroller =new categoriecontroller();
 $categoriecontroller->ShowCategories($connexion);

 $articlecontroller = new articlecontroller();
//$articlecontroller->Accueil($connexion);


 if(!isset($_GET['id']))
 {
    $articlecontroller->Accueil($connexion);
 }
 else
 {
    $id=$_GET['id'];
    $articlecontroller->pages($connexion,$id);
 }
 ?>
 