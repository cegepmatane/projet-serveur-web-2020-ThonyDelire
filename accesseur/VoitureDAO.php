<?php
require "BaseDeDonnees.php";

class VoitureDAO{
  public static function lireVoiture($id){
    $MESSAGE_SQL_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom FROM voiture WHERE id=:id;";
    $requeteVoiture = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_VOITURE);
    $requeteVoiture->bindParam(':id', $id, PDO::PARAM_INT);
    $requeteVoiture->execute();

    $voiture = $requeteVoiture->fetch();
    return $voiture;
  }

  public static function listerVoiture(){
    $MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom FROM voiture;";

    $requeteListeVoiture = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_VOITURE);
    $requeteListeVoiture->execute();
    $listeVoiture = $requeteListeVoiture->fetchAll();
    return $listeVoiture;
  }

  public static function ajouterVoiture($voiture){
    $MESSAGE_SQL_AJOUTER_VOITURE =
      "INSERT INTO voiture (marque, puissanceHp, torque, resume, nom) VALUES(" .
      ":marque," .
      ":puissanceHp," .
      ":torque," .
      ":resume," .
      ":nom" .
      ");";

    $requeteAjouterVoiture = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_AJOUTER_VOITURE);

    $requeteAjouterVoiture->bindParam(':titre', $voiture['titre'], PDO::PARAM_STR);
    $requeteAjouterVoiture->bindParam(':resume', $voiture['resume'], PDO::PARAM_STR);
    $requeteAjouterVoiture->bindParam(':description', $voiture['description'], PDO::PARAM_STR);
    $requeteAjouterVoiture->bindParam(':realisateur', $voiture['realisateur'], PDO::PARAM_STR);
    $requeteAjouterVoiture->bindParam(':producteur', $voiture['producteur'], PDO::PARAM_STR);
    $requeteAjouterVoiture->bindParam(':illustration', $voiture['illustration'], PDO::PARAM_STR);

    $reussiteAjout = $requeteAjouterVoiture->execute();
    return $reussiteAjout;
  }

}
?>
