<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Création d'un compte</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>

	</style>
</head>
<body style="background-color:#2a3c4d;">
	<header>
		<h1 id="titreMembre">Création d'un compte</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
		
		<div id="menuMembre">
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
		</div>	
	
	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>