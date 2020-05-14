<?php
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $filtreNom = [];

    $filtreNom['nom'] = FILTER_SANITIZE_ENCODED;

    $arrayNom = filter_input_array(INPUT_POST, $filtreNom);
    
    $texteNom = implode($arrayNom);



    $filtreMarque = [];

    $filtreMarque['marque'] = FILTER_SANITIZE_ENCODED;

    $arrayMarque = filter_input_array(INPUT_POST, $filtreMarque);
    
    $texteMarque = implode($arrayMarque);



    $filtreAnnee = [];

    $filtreAnnee['annee'] = FILTER_SANITIZE_ENCODED;

    $arrayAnnee = filter_input_array(INPUT_POST, $filtreAnnee);
    
    $texteAnnee = implode($arrayAnnee);
    
    //$filtreAnnee = VoitureDAO::lireRechercheAvance($texteAnnee);

        switch($texteAnnee)
        {
        case "1980-a-1989" :
            $min = 1980;
            $max = 1989;
        break;
        case "1990-a-1999" :
            $min = 1990;
            $max = 1999;
        break;
        case "2000-a-2009" :
            $min = 2000;
            $max = 2009;
        break;
        }

        if(!empty($_POST))
        {
            //echo '<pre>'.print_r($_POST,true).'</pre>'; 
        
            foreach($_POST["categorie"] as $nom => $valeur)
            {
                if("on" == $valeur)
                {
                    $categorie_liste[] = "nationalite = '$nom'";
                }
            }
            //echo '<pre>'.print_r($categorie_liste,true).'</pre>'; 
            $condition = "(" . implode (" OR ", $categorie_liste) . ")";
            //echo $condition;
        }

    $listeResultatRecherche = VoitureDAO::lireRechercheAvance($texteNom, $texteMarque, $min, $max, $condition);

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

