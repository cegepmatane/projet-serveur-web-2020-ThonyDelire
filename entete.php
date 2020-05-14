<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Wiki Sportive</title>
</head>
<body>
	<header>

    <nav>
        <div>
        <a href=""><h1 style="text-align: center; font-size: 45px; color: white; ">Wiki de la petite Sportive</h1></a>
        </div>
        <form id="rechercheRapide" action="resultatRechercheRapide.php" method="post" enctype="multipart/form-data">
		
			<div>
				<input type="text" name="recherche" id="recherche"/>			
            </div>
            <input id="buttonRecherche" type="submit" value="Recherche">
        </form>
        
        
        <a id="index" href="liste-voiture.php"><h1>Voitures</h1></a>
        <a id="index" href="membre.php"><h1>Membre</h1></a>
        <a style="float:right" class="buttonMembre" href="rechercheAvance.php">Recherche Avancée</a>
    </nav> 
    <section style="border: solid; background-color: #d1d1cf;" id="contenu">
		
	</section>
    
	</header> 
