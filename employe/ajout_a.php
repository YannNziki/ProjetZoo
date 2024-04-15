<html>
<html>


<head>
<link rel="stylesheet" type="text/css" href="style_liste_a.css">
<meta charset="UTF-8">
</head>
<body>



<nav>
    
    <div class="logo-name">
    <span class="logo_name">Gestion Animaux</span>
    </div>
    
    <div class="menu-items">
    <ul class="nav-links">
            <li><a href="liste_animaux.php">
                <i class="uil uil-estate"></i>
                <span class="link-name">Dahsboard</span>
            </a></li>
            <li><a href="modifier_animaux.php">
                <i class="uil uil-files-landscapes"></i>
                <span class="link-name">Modifier</span>
            </a></li>
            <li><a href="ajout_animaux.php">
                <i class="uil uil-chart"></i>
                <span class="link-name">Ajouter</span>
            </a></li>
            <li><a href="recherche_animaux.php">
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
$a = $_POST["id"];
$b = $_POST["date_de_naissance"];
$c = $_POST["nom_animal"];
$d = $_POST["commentaire"];
$e = $_POST["id_Especes"];
$f = $_POST["sexe"];



$reql= "INSERT INTO animaux VALUES ('$a','$b','$c','$d','$e','$f')";
$rl= mysqli_query($conn,$reql); 

echo "<center><h3>Ajout OK</h3></center>";
echo '<center><a href="accueil.php">Retour</a></center>';

mysqli_close($conn)

?>
</body>
</html>