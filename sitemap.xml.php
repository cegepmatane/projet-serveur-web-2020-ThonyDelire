<?php
include "connexion.php"; 
$MESSAGE_SQL_LISTE_VOITURE = "SELECT id, marque, puissanceHp, torque, resume, nom FROM voiture";
$requeteListeVoiture = $basededonnees->prepare($MESSAGE_SQL_LISTE_VOITURE);
$requeteListeVoiture->execute();
$listeVoitures = $requeteListeVoiture->fetchAll();
print_r($listeVoitures);

// https://support.google.com/webmasters/answer/183668?hl=en
?>

<xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"> 
  <url>
    <loc>http://localhost/cinema-referencement/</loc>
    <lastmod>2019-03-23</lastmod>
  </url>
  <url>
    <loc>http://localhost/cinema-referencement/liste-films.php</loc>
    <lastmod>2019-03-23</lastmod>
  </url>

  <?php 
  foreach($listeVoitures as $voiture)
  {
  ?>
  <url>
    <loc>http://localhost/cinema-referencement/film.php?film=<?=$voiture['id']?></loc>
    <lastmod>2019-03-23</lastmod>
  </url>  
  <?php 
  }
  ?>
  
  
  
</urlset>