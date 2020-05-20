 <?php 
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $listeContenu = VoitureDAO::listerContenu();


    $nombreJaponaise = 0;
    $nombreAllemande = 0;
    $nombreFrancaise = 0;
?>
 
 <!DOCTYPE html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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

          if($resultat["nationalite"] == "japonaise")
          {
            $nombreJaponaise = $resultat["COUNT(id)"];
          }
          if($resultat["nationalite"] == "francaise")
          {
            $nombreFrancaise = $resultat["COUNT(id)"];
          }
          if($resultat["nationalite"] == "allemande")
          {
            $nombreAllemande = $resultat["COUNT(id)"];
          }

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

<div class="chart-container" style="position: relative; height:20vh; width:40vw">
      <canvas id="graphique" ></canvas>
    </div>

<script>
var donnees = [<?php echo $nombreJaponaise; ?>, <?php echo $nombreFrancaise; ?>, <?php echo $nombreAllemande; ?>];
var etiquettes = ['japonaise', 'française', 'allemande'];
var couleurs = ['rgba(255, 99, 132, 0.9)','rgba(54, 162, 235, 0.9)', 'rgba(255, 206, 86, 0.9)']

var cible = document.getElementById('graphique');
var graphiqueTarte = new Chart(cible, {
    type: 'pie',
    data: {
        labels: etiquettes,
        datasets: [{
            label: 'Contenu par catégorie',
            data: donnees,
            backgroundColor: couleurs
        }]
    },
    options: {
        responsive: true
    }
});


</script>

</body>
</html>