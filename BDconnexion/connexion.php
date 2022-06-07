<?php
$user= 'root';
$pass='';


try{
    $connexion = new PDO ('mysql:host=localhost; dbname=mglsi_news', $user,$pass);
    $connexion-> exec("SET NAMES utf8");
   
} catch(PDOException $e) 
{
    print"Erreur :";
    die;
}



 