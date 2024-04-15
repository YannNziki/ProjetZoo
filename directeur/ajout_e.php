<html>
<head>
       
       <link rel="stylesheet" type="text/css" href="style_liste_e.css">
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta charset='UTF-8'>
           <title> Bienvenue sur votre compte, vous êtes connectés </title>
       </head>
       <body>

           <nav>
           
           <div class="logo-name">
           <span class="logo_name">Gestion Employe</span>
           </div>
           
           <div class="menu-items">
           <ul class="nav-links">
                   <li><a href="liste_employe.php">
                       <i class="uil uil-estate"></i>
                       <span class="link-name">Dahsboard</span>
                   </a></li>
                   <li><a href="modifier_employe.php">
                       <i class="uil uil-files-landscapes"></i>
                       <span class="link-name">Modifier</span>
                   </a></li>
                   <li><a href="ajout_employe.php">
                       <i class="uil uil-chart"></i>
                       <span class="link-name">Ajouter</span>
                   </a></li>
                   <li><a href="recherche_employe.php">
                       <i class="uil uil-thumbs-up"></i>
                       <span class="link-name">Rechercher</span>
                   </a></li>
           </ul>
       
           <ul class="logout-mode">
                   <li><a href="logout.php">
                       <i class="uil uil-signout"></i>
                       <span class="link-name">Deconnexion</span>
                   </a></li>
   
           </ul>
           </div>
           </nav>




<?php


@include("../connexion.php");

$b = $_POST["nom"];
$c = $_POST["prenom"];
$d = $_POST["date_de_naissance"];
$e = $_POST["login"];
$f = $_POST["password"];
$h = $_POST["sexe"];
$i = $_POST["fonctions"];


$reql= "INSERT INTO personnels VALUES ('','$b','$c','$d','$e','$f','','$h','$i')";
$rl= mysqli_query($conn,$reql); 

echo "<center><h3>Ajout OK</h3></center>";
echo '<center><a href="accueil_directeur.php">Retour</a></center>';

mysqli_close($conn)

?>
</body>
<html>