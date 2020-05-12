<?php

$repertoire_illustration = 
$_SERVER['DOCUMENT_ROOT'] . "/TPhtml/projet-serveur-web-2020-ThonyDelire/illustration/";
//echo $repertoire_illustration;
//print_r($_FILES);
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

$id = $_POST['id'];
$nom = addslashes($_POST['nom']);
$marque = addslashes($_POST['marque']);
$puissanceHp = addslashes($_POST['puissanceHp']);
$torque = addslashes($_POST['torque']);
$resume = addslashes($_POST['resume']);

//echo "<div>" . $titre . "</div>";

$SQL_MODIFIER_VOITURE = "UPDATE voiture SET nom='$nom', marque='$marque', puissanceHp='$puissanceHp', torque='$torque', resume='$resume', illustration='$illustration' WHERE id = " . $id;
//echo $SQL_MODIFIER_VOITURE;

 
$requeteModifierVoiture = $basededonnees->prepare($SQL_MODIFIER_VOITURE);
$reussiteModification = $requeteModifierVoiture->execute();



if($reussiteModification) 
{
?>
	Votre voiture a été modifié dans la base de données
<?php	
}
?>