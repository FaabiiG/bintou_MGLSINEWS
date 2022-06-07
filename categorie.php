<!--connection à la base   -->
<?php
include_once('BDconnexion/connexion.php');

//--Ecrire la requete
$sql= "SELECT * FROM categorie ";

//execution de la requete
$requete = $connexion->query($sql);

//recuperation des données
$categories= $requete ->fetchAll();

?>
