<?php
include "connexion.php";
//print_r($_GET);
$id = $_GET["id"];
//echo $id;

$MESSAGE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, illustration FROM voiture WHERE id=".$id.";";

$requeteVoiture = $basededonnees->prepare($MESSAGE_VOITURE);
$requeteVoiture->execute();
$voiture = $requeteVoiture-> fetch();
//print_r($voiture);
/*<div class="illustation"><?=$voiture["illustration"];?> </div>*/
 ?>
 <?php
    require_once "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";


    $listeVisite = VoitureDAO::listerVisiteJournee();

    foreach($listeVisite as $jourVisite)
    {
        $texteJour = $jourVisite["journee"];
    }
    
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $jour = $texteJour;
    $clic = 1;
  
    
    $SQL_AJOUTER_VISITEUR = "INSERT into visite(journee, clic, ip, explorateur) VALUES('".$jour."','" . $clic . "','" . $ip . "','" . $browser . "')";
    $requeteListeVisite = BaseDeDonnees::getConnexion()->prepare($SQL_AJOUTER_VISITEUR);
    $requeteListeVisite->execute();

?>
<!--<!doctype html>
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
    </header> -->
    <?php include "entete.php"?>

    <section id="contenu">

        <div class="voiture">
        <a href="voiture.php?id=<?=$voiture["id"];?>"></a>
        <h3 style="margin-top: 60px;" id="titre" class="nom"><?=$voiture["nom"];?></h3>
        <p class="puissanceHp"><?=$voiture["puissanceHp"];?></p>
        <p class="torque"><?=$voiture["torque"];?></p>
        <p id="resumePara" class="resume"><?=$voiture["resume"];?></p>
        <img id="image" class="illustration" src="illustration/<?=$voiture["illustration"]; ?>" alt=""/>
        
        </div>

    </section>

    <?php include "pied-page.php";?>

