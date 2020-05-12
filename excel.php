<?php
    require_once 'lib/onesheet/autoload.php';  
    require_once "accesseur/VoitureDAO.php";

    $accesseurVoitures = new VoitureDAO();
    $listerVoitures = $accesseurVoitures->listerVoiture();

    $tableur = new OneSheet\Writer('');
    foreach($listerVoitures as $voiture)
    {
       
        $tableur->addRow(array($voiture["nom"], $voiture["marque"]));   
        
    }
    $tableur->writeToFile('voiture.xlsx');
    
?> 
