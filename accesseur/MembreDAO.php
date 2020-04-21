<?php
require CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class MembreDAO{
  public static function validerConnexion($membre){
    $MESSAGE_SQL_VALIDER_CONNEXION = "SELECT id, pseudonyme, motDePasse FROM membre WHERE pseudonyme=:pseudonyme AND motDePasse = :motDePasse;";
    $requeteValiderConnexion = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_VALIDER_CONNEXION);
    $requeteValiderConnexion->bindParam(':pseudonyme', $membre["pseudonyme"], PDO::PARAM_STR);
    $requeteValiderConnexion->bindParam(':motDePasse', $membre["motDePasse"], PDO::PARAM_STR);
    $requeteValiderConnexion->execute();

    $membre = $requeteValiderConnexion->fetch();
    //return isset($membre["id"]);
    return $membre;
  } 

  public static function lireMembreParPseudonyme($pseudonyme){
    $MESSAGE_SQL_LIRE_MEMBRE_PAR_PSEUDONYME = "SELECT id, pseudonyme FROM membre WHERE pseudonyme=:pseudonyme;";
    $requeteLireMembreParPseudonyme = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LIRE_MEMBRE_PAR_PSEUDONYME);
    $requeteLireMembreParPseudonyme->bindParam(':pseudonyme', $membre["pseudonyme"], PDO::PARAM_STR);
    $requeteLireMembreParPseudonyme->execute();

    $membre = $requeteLireMembreParPseudonyme->fetch();
    //return isset($membre["id"]);
    return $membre;
  } 
}