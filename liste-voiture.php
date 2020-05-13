<?php
    require_once "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";


    $listeVoiture = VoitureDAO::listerVoiture();
/*include "connexion.php";
$MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom, miniature FROM voiture;";
//echo $MESSAGE_SQL_LISTE_FILM;


$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURE);
$requeteListeVoiture->execute();
$listeVoiture = $requeteListeVoiture->fetchAll();
//print_r($listeFilm);*/

?>

<?php include "entete.php";?>

    <section id="contenu">
        <a class="buttonMembre" href="excel.php">Exporte en Excel</a>
        <?php
        foreach($listeVoiture as $voiture)
        {
            //echo $film["titre"];
        ?>
        <div class="listeBox">
            <div class="voiture" id="menu">
            <a href="voiture.php?id=<?=$voiture["id"];?>">
            <h3 class="nom"><?=$voiture["nom"];?></h3>
            </a>
            <span class="marque"><?=$voiture["marque"];?></span>
            <img id="miniature" class="miniature" src="mini/<?=$voiture["miniature"]; ?>" alt=""/>
            </div>
        </div>

        <?php
        }
        ?>

        
    </section>

    <?php include "pied-page.php";?>
