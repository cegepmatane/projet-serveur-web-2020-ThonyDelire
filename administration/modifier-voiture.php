<?php

	//print_r($_GET);
	$noVoiture = $_GET['voiture'];

	$SQL_VOITURE = "SELECT * from voiture WHERE id = " . $noVoiture;
	//echo $SQL_FILM;
	
	include "connexion.php";
	$requeteVoiture = $basededonnees->prepare($SQL_VOITURE);
	$requeteVoiture->execute();
	$voiture = $requeteVoiture->fetch();
	//print_r($film);
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css" />
	<title>Panneau d'administration du Wiki de la petite sportive</title>
	<style>
		* {margin:0;padding:0;} /* CSS reset pour uniformiser les navigateurs */
		* {font-family:Verdana;}
		body > header, body > section {padding:2em;}
		h2 {color:white; text-transform: uppercase;}
		h1 {background-color:#034c7a;color:white;padding:1em;text-transform: uppercase;}
		#contenu {padding:2em;}
		form {border:solid #034c7a 2px; background-color:lightblue; padding:1em;}
		form > div {margin-top:1em;}
		form > div > label {display:block; font-weight:bold; color:#476e87;}
		form input, form textarea, form select {width: 39em;}
		form input[type=submit] {margin-top:2em;}
		form textarea {height:5em;}
	</style>
</head>
<body>
	<header>
		<h1>Panneau d'administration du Wiki de la petite sportive</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Modifier une voiture</h2></header>
		
		<form action="traitement-modifier-voiture.php" method="post" enctype="multipart/form-data">
		
			<div class="champs">
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom" value="<?php echo $voiture['nom']?>"/>			
			</div>
			<div class="champs">
				<label for="marque">Marque</label>
				<input type="text" name="marque" id="marque" value="<?php echo $voiture['marque']?>"/>			
			</div>
			<div class="champs">
				<label for="puissanceHp">Puissance Hp</label>
				<input type="text" name="puissanceHp" id="puissanceHp" value="<?php echo $voiture['puissanceHp']?>"/>			
			</div>
			<div class="champs">
				<label for="torque">torque</label>
				<input type="text" name="torque" id="torque" value="<?php echo $voiture['torque']?>"/>			
			</div>
		
			<div class="champs">
				<label for="resume">Resume</label>
				<textarea name="resume" id="resume"><?php echo $voiture['resume']?></textarea>			
			</div>
			<div class="champs">
				<label for="illustration">Illustration</label>
				<input type="file" name="illustration" id="illustration"/>			
			</div>
											
			
			<input id="buttonEnregistrer" type="submit" value="Enregistrer">
			<input type="hidden" name="id" value="<?=$voiture['id']?>"/>
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>