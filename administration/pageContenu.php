 <?php 
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $listeContenu = VoitureDAO::listerContenu();
?>
 
 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
table, th, td {
  border: 1px solid black;
}
th{
    background-color: #4287f5;
    font-size: 25px;
}
td{
    background-color: #b8d3fc;
    color: black;
    font-size: 20px;
}
</style>
</head>
<body>

<h1>Contenu Voiture</h1>
<table style="width:1900px">
  <tr>
    <th>Nationalite</th>
    <th>Nombre</th>
    <th>Écart-type</th>
    <th>Année de production</th>
    <th>Nombre année produit</th>
    <th>Année max</th>
    <th>Année min</th>

  </tr>
  <?php
        foreach($listeContenu as $resultat)
        {

  ?>
  <tr>
    <td><?= $resultat["nationalite"]; ?></td>
    <td><?= $resultat["COUNT(id)"]; ?></td>
    <td><?= $resultat["annee"]; ?></td>
    <td><?= $resultat["moyenne"]; ?></td>
    <td><?= $resultat["anneeTotal"]; ?></td>
    <td><?= $resultat["anneeMax"]; ?></td>
    <td><?= $resultat["anneeMin"]; ?></td>

  </tr>
    

  <?php } ?>
  
</table>

</body>
</html>