<?php
require_once "configuration.php";
require CHEMIN_ACCESSEUR . "MembreDAO.php";

include "entete.php";
$estConnecte = false;
if(isset($_SESSION["pseudonyme"])) $estConnecte = true;

$membre = [];

//print_r($_POST);

if(!$estConnecte && isset($_POST["action-connexion"])){
    $membre = MembreDAO::validerConnexion($_POST);
    //si connecter afficher profile membre
    
    $estConnecte = isset($membre["id"]);
    if(!$estConnecte) {
    $_SESSION["estConnecte"] = true;
    $_SESSION["pseudonyme"] = $membre["pseudonyme"];
    }else{
        $membre = MembreDAO::lireMembreParPseudonyme($_SESSION["pseudonyme"]);
        print_r($membre);
    }
}
if(!$estConnecte) {


include "authentification.php";

} else {

    include "espace-membre.php";

}
include "pied-page.php";
?>