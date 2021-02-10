<?php
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "AdminDAO.php";
    $dateTime = date('Y/m/d G:i:s');
    //require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $estConnecte = false;
if(isset($_SESSION["pseudonyme"])) $estConnecte = true;

$membre = [];

//print_r($_POST);

if(!$estConnecte && isset($_POST["action-connexion"])){
    $membre = AdminDAO::validerConnexion($_POST);
    //si connecter afficher profile membre
    
    $estConnecte = isset($membre["id"]);
    if(!$estConnecte) {
    $_SESSION["estConnecte"] = true;
    $_SESSION["pseudonyme"] = $membre["pseudonyme"];
    }else{
        $membre = AdminDAO::lireMembreParPseudonyme($_SESSION["pseudonyme"]);
        print_r($membre);
    }
}
if(!$estConnecte) {


include "authentification.php";

} else {

    include "panneauAdmin.php";

}


?>
 