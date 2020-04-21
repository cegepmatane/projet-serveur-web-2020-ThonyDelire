<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Création d'un compte</title>
	<style>
		* {margin:0;padding:0;}
		* {font-family:Verdana;}
		body > header, body > section {padding:2em;}
		h2 {color:#fffdf7; text-transform: uppercase;}
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
<body style="background-color:#2a3c4d;">
	<header>
		<h1>Création d'un compte</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		<header><h2>Complete les champs</h2></header>
		
		<form action="traitement-inscription.php" method="post" enctype="multipart/form-data">
		
			<div class="champs">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">			
			</div>
		
			<div class="champs">
                <label for="pseudonyme">Pseudonyme</label>
                <input type="text" name="pseudonyme" id="pseudonyme"/>			
			</div>

			<div class="champs">
                <label for="motDePasse">Mot de passe</label>
                <input type="password" name="motDePasse" id="motDePasse"/>			
			</div>
					
			
			<input id="buttonEnregistrer" type="submit" value="Enregistrer">
		</form>
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>