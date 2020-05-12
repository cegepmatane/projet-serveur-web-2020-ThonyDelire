<?php

//print_r($_FILES);
$repertoire_illustration = 
$_SERVER['DOCUMENT_ROOT'] . "/TPhtml/projet-serveur-web-2020-ThonyDelire/illustration/";
//echo $repertoire_illustration;
$fichierDestination = 
$repertoire_illustration . $_FILES['illustration']['name'];

$fichierSource = $_FILES['illustration']['tmp_name'];
$illustration = $_FILES['illustration']['name'];

if(move_uploaded_file($fichierSource,$fichierDestination))
{?>
    Votre envoi de fichier a bien fonctionné
	<img src="../illustration/<?=$_FILES['illustration']['name']?>" alt=""/>
<?php
}



include "connexion.php"; 
//print_r($_POST);

$nom = addslashes($_POST['nom']);
$marque = $_POST['marque'];
$puissanceHp = $_POST['puissanceHp'];
$torque = $_POST['torque'];
$resume = $_POST['resume'];

//echo "<div>" . $titre . "</div>";

// INSERT into film(titre, resume, description, realisateur, producteur) VALUES('test','','','','')
//$SQL_AJOUTER_FILM = "INSERT into film(titre, resume, description, realisateur, producteur) VALUES('$titre','','','','')";
$SQL_AJOUTER_VOITURE = "INSERT into voiture(nom, marque, puissanceHp, torque, resume, illustration) VALUES('".$nom."','" . $marque . "','" . $puissanceHp . "','" . $torque . "','" . $resume . "', '" . $illustration . "')";
//echo $SQL_AJOUTER_VOITURE;


$requeteAjouterVoiture = $basededonnees->prepare($SQL_AJOUTER_VOITURE);
$reussiteAjout = $requeteAjouterVoiture->execute();

if($reussiteAjout) 
{
?>
	Votre voiture a été ajouté à la base de données
<?php	
}
?>