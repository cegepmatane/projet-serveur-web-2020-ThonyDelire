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
<header><h2 style="margin-top: 10px;">Résultat de la recherche</h2></header>

<?php
    foreach($listeResultatRecherche as $resultat)
    {
?>

<div id="resultatRecherche">
    <a style="font-size: 30px; color: yellow;" href="voiture.php?id=<?= $resultat["id"];?>">
            <?= $resultat["nom"]; ?> <?= $resultat["marque"]; ?>
    </a>

    <p><?= $resultat["resume"];?></p>
</div>

<?php } ?>
