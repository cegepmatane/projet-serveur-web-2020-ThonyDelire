 
 <?php 
    require "configuration.php";
    require CHEMIN_ACCESSEUR . "VoitureDAO.php";

    $listeJour = VoitureDAO::listerVisite();


 
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
            }
            if($resultat["journee"] == 2)
            {
                $resultat["journee"] = "Lundi";
            }
            if($resultat["journee"] == 3)
            {
                $resultat["journee"] = "Mardi";
            }
            if($resultat["journee"] == 4)
            {
                $resultat["journee"] = "Mercredi";
            }
            if($resultat["journee"] == 5)
            {
                $resultat["journee"] = "Jeudi";
            }
            if($resultat["journee"] == 6)
            {
                $resultat["journee"] = "Vendredi";
            }
            if($resultat["journee"] == 7)
            {
                $resultat["journee"] = "Samedi";
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

</body>
</html>