<?php

//print_r($_POST);

$id = $_GET['id'];

//echo "<div>" . $titre . "</div>";

$SQL_SUPPRIMER_VOITURE = "DELETE FROM voiture WHERE id = " . $id;
//echo $SQL_MODIFIER_FILM;

include "connexion.php"; 
$requeteSupprimerVoiture = $basededonnees->prepare($SQL_SUPPRIMER_VOITURE);
$reussiteSuprimmer = $requeteSupprimerVoiture->execute();
?>


<?php
if($reussiteSuprimmer) 
{
?>
	Votre voiture a été supprimer dans la base de données
<?php	
}
?> 
