<?php 
    require "configuration.php";
    $dateTime = date('Y/m/d G:i:s');
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
* {
  box-sizing: border-box;
}


.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px;
  margin-top: 2rem;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<h1 style="border: solid black; background-color: #4889d9; text-align: center;">Panneau d'administration</h1>

<div class="row">
   <a class="column" href="liste-voiture.php" style="text-decoration: none;">
   <div>
         <img style="width:100%; height:120%;" src="image/listeVoiture.png" id="dashboardVignette" alt="Norway">
      </div>
   </a>
   <a class="column" style="text-decoration: none;">
   <div style="width:100%; height:120%;" id="dashboardVignette">
      <p style="color: white; font-size: 50px; text-align: center;">Date d'aujourd'hui :</p>
      <p style="color: white; font-size: 30px; text-align: center;"><?php echo $dateTime; ?></p>
      </div>
   </a>
   <a class="column" href="pageVisite.php" style="text-decoration: none;">
   <div>
      <img style="width:100%; height:120%;" src="image/tableau1.png" id="dashboardVignette" alt="Norway">
      </div>
   </a>
</div>
<div class="row">
   <a class="column" href="pageContenu.php" style="text-decoration: none;">
   <div>
         <img style="width:100%; height:120%;" src="image/graphique.png" id="dashboardVignette" alt="Norway">
      </div>
   </a>
   <a class="column" style="text-decoration: none;">
   <div style="width:100%; height:120%; background-color: #01628a; opacity:85%;" id="dashboardVignette" >
      <p style="color: white; font-size: 50px; text-align: center;">Phrase de motivation</p>
      <p style="color: white; font-size: 30px; text-align: center;">L’action est la clé fondamentale de tout succès.</p>
   </div>
   </a>
   <a class="column" href="pageVisite.php" style="text-decoration: none;">
   <div>
         <img style="width:100%; height:120%;" src="image/tableau2.png" id="dashboardVignette" alt="Norway">
      </div>
   </a>
</div>




</body>
</html>