<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    <title>Wiki Sportive</title>
</head>
<body>

	<header>
        <a href="index.php"><h1 style="text-align: center; font-size: 45px; color: white; ">Wiki de la petite Sportive</h1></a>
    <nav>
        <ul class="nav_top">
        <li><a id="index" href="liste-voiture.php"><h1>Voitures</h1></a></li>
        <li><a id="index" href="membre.php"><h1>Membre</h1></a></li>
        </ul>
    </nav>
    <form id="rechercheRapide" action="resultatRechercheRapide.php" method="post" enctype="multipart/form-data">
		
			<div style="display: inline-block;">
				<input style="background-color: white;" type="text" name="recherche" id="recherche"/>			
            </div>
            <input style="color: white;" id="buttonRecherche" type="submit" value="Recherche">
    </form>
    
	</header>
