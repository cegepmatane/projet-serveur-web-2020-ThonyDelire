<?php
include "connexion.php";
$MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, miniature FROM voiture;";
//echo $MESSAGE_SQL_LISTE_FILM;


$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURE);
$requeteListeVoiture->execute();
$listeVoiture = $requeteListeVoiture->fetchAll();
//print_r($listeFilm);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Wiki Sportive</title>
</head>
<body>
    <header>
        <h1 id="menuTitle">Wiki de la petite Sportive</h1>
        <nav></nav>
    </header>

    <section id="contenu">
        <header id="menuTitle"><h2>Liste des voitures</h2></header>
        <?php
        foreach($listeVoiture as $voiture)
        {
            //echo $film["titre"];
        ?>
        <div class="listeBox">
            <div class="voiture" id="menu">
            <a href="voiture.php?id=<?=$voiture["id"];?>">
            <h3 class="nom"><?=$voiture["nom"];?></h3>
            </a>
            <span class="marque"><?=$voiture["marque"];?></span>
            <img id="miniature" class="miniature" src="mini/<?=$voiture["miniature"]; ?>" alt=""/>
            </div>
        </div>

        <?php
        }
        ?>
    
    </a>
    </section>

    <footer><span id="signature"></span></footer>
</body>
</html>
