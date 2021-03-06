<?php
    require_once "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";


    $listeVoiture = VoitureDAO::listerVoiture();
    $listeVisite = VoitureDAO::listerVisiteJournee();

    foreach($listeVisite as $jourVisite)
    {
        $texteJour = $jourVisite["journee"];
    }
    
    
/*include "connexion.php";
$MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, miniature FROM voiture;";
//echo $MESSAGE_SQL_LISTE_FILM;


$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURE);
$requeteListeVoiture->execute();
$listeVoiture = $requeteListeVoiture->fetchAll();
//print_r($listeFilm);*/
    $ip = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $jour = $texteJour;
    $clic = 1;
    //print_r($browser);
    //$dateTime = date('Y/m/d');
    
    $SQL_AJOUTER_VISITEUR = "INSERT into visite(journee, clic, ip, explorateur) VALUES('".$jour."','" . $clic . "','" . $ip . "','" . $browser . "')";
    $requeteListeVisite = BaseDeDonnees::getConnexion()->prepare($SQL_AJOUTER_VISITEUR);
    $requeteListeVisite->execute();

?>

<?php include "entete.php";?>

    <section id="contenu">
        <a style="margin-buttom: 10px" id="buttonRecherche" href="excel.php">Exporte en Excel</a>
        <?php
        foreach($listeVoiture as $voiture)
        {

        ?>
        <div class="listeBox">
            <div class="voiture" id="menu">
            <ul>
            <li class="li-liste-voiture">
            <img id="miniature" class="miniature" src="mini/<?=$voiture["miniature"]; ?>" alt=""/>
            <a href="voiture-<?=$voiture["id"];?>">
            <h3 class="nom"><?=$voiture["nom"];?></h3>
            </a>
            <p class="marque"><?=$voiture["marque"];?></p>
            </li>
            </ul>
            </div>
        </div>

        <?php
        }
        ?>

        
    </section>

    <?php include "pied-page.php";?>
