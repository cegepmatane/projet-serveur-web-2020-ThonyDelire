
<?php include "entete.php"?>


    
    <section id="contenu">
		<header><h2 style="margin-top: 10px;">Recherche Avancée</h2></header>
		
		<form id="menuRechercheAvance" action="resultatRechercheAvance.php" method="post" enctype="multipart/form-data">
		
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
                    <option value="1980-a-1989">1980 &agrave; 1989</option>
                    <option value="1990-a-1999">1990 &agrave; 1999</option>
                    <option value="2000-a-2009">2000 &agrave; 2009</option>
                </select>
            </div>
            
            <div class="champs">
                <p>
                    <label style="font-size: 20px;">Nationalité :</label><br> 
                    Française :<input type="checkbox" name="categorie[francaise]"/><br>
                    Allemande :<input type="checkbox" name="categorie[allemande]"/><br>
                    Japonaise :<input type="checkbox" name="categorie[japonaise]"/>	
                </p>	
            </div>

			
								
			
			<input class="buttonMembre" id="buttonRecherche" type="submit" value="Recherche">
		</form>
	
	</section>

    <?php include "pied-page.php"?>