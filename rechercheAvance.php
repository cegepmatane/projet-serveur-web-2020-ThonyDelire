
<?php include "entete.php"?>


    
    <section id="contenu">
		<header><h2 style="margin-top: 10px;">Recherche Avancée</h2></header>
		
		<form id="menuRechercheAvance" action="traitement-ajouter-voiture.php" method="post" enctype="multipart/form-data">
		
			<div class="champs">
				<label for="nom">Nom</label><br>
				<input class="champAComplet" type="text" name="nom" id="nom"/>			
			</div>
		
			<div class="champs">
				<label for="marque">Marque</label><br>
				<input class="champAComplet" type="text" name="marque" id="marque"/>			
            </div>
            
            <div class="champs">
                <label for="annee">Année de sortie</label><br>
                <select name= "annee">
                    <option value="1980">1980</option>
                    <option value="1990">1990</option>
                    <option value="2000">2000</option>
                </select>
            </div>
            
            <div class="champs">
                <p>
                    <label style="font-size: 20px;">Nationalité :</label><br> 
                    Française :<input type="checkbox" name="française"/><br>
                    Allemande :<input type="checkbox" name="allemande"/><br>
                    Japonaise :<input type="checkbox" name="japonaise"/>	
                </p>	
            </div>

			
								
			
			<input class="buttonMembre" id="buttonRecherche" type="submit" value="Recherche">
		</form>
	
	</section>

    <?php include "pied-page.php"?>