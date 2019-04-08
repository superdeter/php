<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=personnages;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//Exemple de requete simple:

$requete = $bdd->query("SELECT * FROM personnages");

//Permet de stocker les lignes une a une
while($donnees = $requete->fetch())
{
  echo "$donnees['id']" . "<br />"
}

$requete->closeCursor();


$req = $bdd->prepare("SELECT * FROM personnages WHERE possesseur = :possesseur");
$req->execute(array('possesseur' => $_GET['possesseur']));


?>
