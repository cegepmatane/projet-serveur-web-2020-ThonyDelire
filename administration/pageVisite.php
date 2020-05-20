 
 <?php 
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $listeJour = VoitureDAO::listerVisite();

    $visiteDimanche = 0;
    $visiteLundi = 0;
    $visiteMardi = 0;
    $visiteMercredi = 0;
    $visiteJeudi = 0;
    $visiteVendredi = 0;
    $visiteSamedi = 0;

 
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

<h1>Visite Statistique</h1>
<table style="width:400px; position: absolute;">
  <tr>
    <th>Journée</th>
    <th>Clics</th>
    <th>Visites</th>

  </tr>
  <?php
        foreach($listeJour as $resultat)
        {
            if($resultat["journee"] == 1)
            {
                $resultat["journee"] = "Dimanche";
                $visiteDimanche = $resultat["clic"];
            }
            if($resultat["journee"] == 2)
            {
                $resultat["journee"] = "Lundi";
                $visiteLundi = $resultat["clic"];
            }
            if($resultat["journee"] == 3)
            {
                $resultat["journee"] = "Mardi";
                $visiteMardi = $resultat["clic"];
            }
            if($resultat["journee"] == 4)
            {
                $resultat["journee"] = "Mercredi";
                $visiteMercredi = $resultat["clic"];
            }
            if($resultat["journee"] == 5)
            {
                $resultat["journee"] = "Jeudi";
                $visiteJeudi = $resultat["clic"];
            }
            if($resultat["journee"] == 6)
            {
                $resultat["journee"] = "Vendredi";
                $visiteVendredi = $resultat["clic"];
            }
            if($resultat["journee"] == 7)
            {
                $resultat["journee"] = "Samedi";
                $visiteSamedi = $resultat["clic"];
            }
            


  ?>
  <tr>
    <td><?= $resultat["journee"]; ?></td>
    <td><?= $resultat["clic"]; ?></td>
    <td><?= $resultat["ip"]; ?></td>

  </tr>
    

  <?php } ?>
  
</table>

<table style="width:1200px; float:right; position: relative;">
  <tr>
    <th>Navigateur</th>
    <th>Clics</th>
    <th>Visites</th>

  </tr>
  <?php
        foreach($listeJour as $resultat)
        {
            

  ?>
  <tr>
    <td><?= $resultat["explorateur"]; ?></td>
    <td><?= $resultat["clic"]; ?></td>
    <td><?= $resultat["ip"]; ?></td>

  </tr>
    

  <?php } ?>
  
</table>

  <div class="chart-container" style="position: relative; height:40vh; width:80vw">
        <canvas id="graphique" ></canvas>
      </div>
  <script>
  var donnees = [<?php echo $visiteDimanche; ?>, <?php echo $visiteLundi; ?>, <?php echo $visiteMardi; ?>, <?php echo $visiteMercredi; ?>, <?php echo $visiteJeudi; ?>, <?php echo $visiteVendredi; ?>, <?php echo $visiteSamedi; ?>]; // Tableau des données
  var etiquettes = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'] // Tableau des étiquettes

  var cible = document.getElementById('graphique').getContext('2d');
  var graphiqueLigne = new Chart(cible, {
      type: 'line',

      data: {
          labels: etiquettes,
          datasets: [{
              label: 'Visite selon les jours',
              backgroundColor: '#b8d3fc',
              borderColor: '#4287f5',
              data: donnees
          }]
      },

      options: {}
  });


  </script>


</body>
</html>