<?php
require CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class AdminDAO{
  public static function validerConnexion($admin){
    $MESSAGE_SQL_VALIDER_CONNEXION = "SELECT id, pseudonyme, motDePasse FROM admin WHERE pseudonyme=:pseudonyme AND motDePasse = :motDePasse;";
    $requeteValiderConnexion = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_VALIDER_CONNEXION);
    $requeteValiderConnexion->bindParam(':pseudonyme', $admin["pseudonyme"], PDO::PARAM_STR);
    $requeteValiderConnexion->bindParam(':motDePasse', $admin["motDePasse"], PDO::PARAM_STR);
    $requeteValiderConnexion->execute();

    $admin = $requeteValiderConnexion->fetch();
    //return isset($admin["id"]);
    return $admin;
  } 

  public static function lireMembreParPseudonyme($pseudonyme){
    $MESSAGE_SQL_LIRE_MEMBRE_PAR_PSEUDONYME = "SELECT id, pseudonyme FROM admin WHERE pseudonyme=:pseudonyme;";
    $requeteLireMembreParPseudonyme = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LIRE_MEMBRE_PAR_PSEUDONYME);
    $requeteLireMembreParPseudonyme->bindParam(':pseudonyme', $admin["pseudonyme"], PDO::PARAM_STR);
    $requeteLireMembreParPseudonyme->execute();

    $admin = $requeteLireMembreParPseudonyme->fetch();
    //return isset($admin["id"]);
    return $admin;
  } 
}