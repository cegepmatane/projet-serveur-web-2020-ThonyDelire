 
<?php include "entete.php" ?>
	<a href="inscription.php">Inscrivez-vous dès maintenant!</a>
<?php include "pied-page.php"?>
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
 
