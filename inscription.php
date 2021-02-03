
<?php include "entete.php"?>	
	<section id="contenu">
		
		<div class="menuMembre">
		<header><h2>Complete les champs</h2></header>	
			<form action="traitement-inscription.php" method="post" enctype="multipart/form-data">
			
				<div class="champs">
					<label class="textMembre" for="email">Email</label><br>
					<input class="champText" type="text" name="email" id="email">			
				</div>
			
				<div class="champs">
					<label class="textMembre" for="pseudonyme">Pseudonyme</label><br>
					<input class="champText" type="text" name="pseudonyme" id="pseudonyme"/>			
				</div>

				<div class="champs">
					<label class="textMembre" for="motDePasse">Mot de passe</label><br>
					<input class="champText" type="password" name="motDePasse" id="motDePasse"/>			
				</div>
						
				
				<input style="margin-top: 30px;" id="buttonRecherche" type="submit" value="Enregistrer">
			</form>
		</div>	
	
	</section>
	<?php include "pied-page.php"?>