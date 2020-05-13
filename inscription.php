
<?php include "entete.php"?>	
	<section id="contenu">
		
		<div id="menuInscription">
		<header><h2>Complete les champs</h2></header>	
			<form action="traitement-inscription.php" method="post" enctype="multipart/form-data">
			
				<div class="champs">
					<label for="email">Email</label><br>
					<input type="text" name="email" id="email">			
				</div>
			
				<div class="champs">
					<label for="pseudonyme">Pseudonyme</label><br>
					<input type="text" name="pseudonyme" id="pseudonyme"/>			
				</div>

				<div class="champs">
					<label for="motDePasse">Mot de passe</label><br>
					<input type="password" name="motDePasse" id="motDePasse"/>			
				</div>
						
				
				<input class="buttonMembre" id="buttonEnregistrer" type="submit" value="Enregistrer">
			</form>
		</div>	
	
	</section>
	<?php include "pied-page.php"?>