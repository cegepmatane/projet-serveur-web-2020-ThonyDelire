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
    $MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, miniature FROM voiture;";

    $requeteListeVoiture = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_VOITURE);
    $requeteListeVoiture->execute();
    $listeVoiture = $requeteListeVoiture->fetchAll();
    return $listeVoiture;
  }

  public static function listerRechercheVoiture(){
    $MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, miniature FROM voiture;";

    $requeteListeVoiture = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_VOITURE);
    $requeteListeVoiture->execute();
    $listeVoiture = $requeteListeVoiture->fetchAll();
    return $listeVoiture;
  }
  
  public static function lireRechercheRapide($texteRecherche)
  {
    if(empty($texteRecherche))
      $MESSAGE_SQL_LISTE_RESULTAT_RECHERCHE = "SELECT id, nom, marque, resume, nationalite FROM voiture WHERE nom LIKE '%null%' OR marque LIKE '%null%' OR resume LIKE '%null%' OR nationalite LIKE '%null%';";
      else
      $MESSAGE_SQL_LISTE_RESULTAT_RECHERCHE = "SELECT id, nom, marque, resume, nationalite FROM voiture WHERE nom LIKE '%$texteRecherche%' OR marque LIKE '%$texteRecherche%' OR resume LIKE '%$texteRecherche%' OR nationalite LIKE '%$texteRecherche%';";
      $requeteListeRecherche = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_RESULTAT_RECHERCHE);
      $requeteListeRecherche->execute();
      $listeResultatRecherche = $requeteListeRecherche->fetchAll();

      return $listeResultatRecherche;
  }

  public static function lireRechercheAvance($texteNom, $texteMarque, $min, $max, $categorie)
  {

    $conditions = array();

    if(!empty($texteNom))
    {
        $conditions[ ] =  " nom LIKE $texteNom ";
    }
    if(!empty($texteNom))
    {
        $conditions[ ]  = " marque LIKE $texteMarque ";
    }
    if(!empty($min) && !empty($max))
    {
        $conditions[ ]  = "  annee BETWEEN $min AND $max ";
    }

    if(!empty($conditions))
    {
      $sql = "SELECT nom, marque, resume FROM voiture WHERE ";
      $sql = $sql . implode(' AND ', $conditions);

    }
    $MESSAGE_SQL_RECHERCHE_AVANCEE = $sql . "AND $categorie;";
    $requeteListeRechercheAvancee = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_RECHERCHE_AVANCEE);
    $requeteListeRechercheAvancee->execute();
    $listeResultatRecherche = $requeteListeRechercheAvancee->fetchAll();

    return $listeResultatRecherche;

   
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
