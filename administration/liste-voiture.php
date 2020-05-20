<?php

include "connexion.php";
$MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom FROM voiture;";

$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURE);
$requeteListeVoiture->execute();
$listeVoiture = $requeteListeVoiture->fetchAll();

?>

<?php 
	// exercice d'acces dans le tableau
	//echo "Le titre du second film est " . $listeFilms[1]['titre'];
	//echo "Le realisateur du troisieme film est " . $listeFilms[2]['realisateur'];
?>


<a id="button" href="ajouter-voiture.html">Ajouter</a>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 	
	// la possibilite de boucle la plus utilisée
	foreach($listeVoiture as $voiture)
	{
		//print_r($voiture);
		//echo $film['titre'];
		?>
		<div class="voiture" style="border:solid 1px black; margin:5px; padding:5px; background-color:#4889d9;">
			<?php echo $voiture['nom']; ?> (<?php echo $voiture['marque']; ?>)
			<a id="buttonModifier" href="modifier-voiture.php?voiture=<?php echo $voiture['id']; ?>" title="">
				Modifier
			</a>
			<a id="buttonSupprimer" href="traitement-supprimer-voiture.php?id=<?php echo $voiture['id']; ?>" title="">
				Supprimer
			</a>
		</div>		
		<?php 		
	}
?>

<a id="button" href="pageContenu.php">Tableau Contenu</a>
