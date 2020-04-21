<?php
include "connexion.php";
//print_r($_GET);
$id = $_GET["id"];
//echo $id;

$MESSAGE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, illustration FROM voiture WHERE id=".$id.";";

$requeteVoiture = $connexion->prepare($MESSAGE_VOITURE);
$requeteVoiture->execute();
$voiture = $requeteVoiture-> fetch();
//print_r($voiture);
/*<div class="illustation"><?=$voiture["illustration"];?> </div>*/
 ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" />
    <title>Wiki Sportive</title>
</head>
<body>
    <header>
        <h1>Detail du la voiture</h1>
        <nav></nav>
    </header>

    <section id="contenu">
        <header><h2>Liste des voitures</h2></header>

        <div class="voiture">
        <a href="voiture.php?id=<?=$voiture["id"];?>"></a>
        <a id="button" href="http://localhost/TPhtml/projet-serveur-web-2020-ThonyDelire/liste-voiture.php">Accueil</a>
        <h3 id="titre" class="nom"><?=$voiture["nom"];?></h3>
        <p class="puissanceHp"><?=$voiture["puissanceHp"];?></p>
        <p class="torque"><?=$voiture["torque"];?></p>
        <p class="resume"><?=$voiture["resume"];?></p>
        <img class="illustration" src="illustration/<?=$voiture["illustration"]; ?>" alt=""/>
        
        </div>

    </section>

    <footer><span id="signature"></span></footer>
</body>
</html>

