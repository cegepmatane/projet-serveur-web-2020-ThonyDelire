<?php
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $listerRechercheVoiture = [];

    $listerRechercheVoiture['recherche'] = FILTER_SANITIZE_ENCODED;

    $arrayRecherche = filter_input_array(INPUT_POST, $listerRechercheVoiture);

    $texteRecherche = implode($arrayRecherche);

    $listeResultatRecherche = VoitureDAO::lireRechercheRapide($texteRecherche);
    
?> 
<?php include "entete.php"?>
<header><h2 style="margin-top: 10px; color: white;">Résultat de la recherche</h2></header>

<?php
    foreach($listeResultatRecherche as $resultat)
    {
?>

<div id="resultatRecherche">
    <a style="font-size: 30px; color: #009ab5; background-color: rgb(24, 24, 24);" href="voiture.php?id=<?= $resultat["id"];?>">
            <?= $resultat["nom"]; ?> <?= $resultat["marque"]; ?>
    </a>

    <p class="text-resume"><?= $resultat["resume"];?></p>
</div>

<?php } ?>
