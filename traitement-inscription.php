<?php

include "connexion.php"; 

$pseudonyme = addslashes($_POST['pseudonyme']);
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];

//echo "<div>" . $titre . "</div>";

// INSERT into film(titre, resume, description, realisateur, producteur) VALUES('test','','','','')
//$SQL_AJOUTER_FILM = "INSERT into film(titre, resume, description, realisateur, producteur) VALUES('$titre','','','','')";
$SQL_AJOUTER_MEMBRE = "INSERT into membre(pseudonyme, email, motDePasse) VALUES('".$pseudonyme."','" . $email . "','" . $motDePasse . "')";
//echo $SQL_AJOUTER_MEMBRE;


$requeteAjouterMembre = $basededonnees->prepare($SQL_AJOUTER_MEMBRE);
$reussiteAjout = $requeteAjouterMembre->execute();

if($reussiteAjout) 
{
?>
	Votre compte a bien été créer!
<?php	
}
?>
