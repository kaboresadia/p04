<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date_de_naissance=$_POST['date_de_naissance'];

include('connexion.php');
$reponse=$bdd->query("INSERT INTO `simploniens` (`nom`, `prenom`, `date_de_naissance`) VALUES ('$nom', '$prenom', '$date_de_naissance')");
$reponse->closeCursor();

echo('Enregistrement effectué avec succès!');

?>