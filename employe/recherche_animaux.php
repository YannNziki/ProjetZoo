<?php
session_start();
?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style_recherche_a.css">
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
     echo "<center>Bienvenue :". $_SESSION["log"]."</center>";

@include("../connexion.php");
$requete = "SELECT * FROM animaux";
$resultat = mysqli_query($conn, $requete);
?>
<center>

<form action="recherche_a.php" method="POST">
<h3>Animal</h3>
<select name="s1" style="text-align: center; font-weight: bold;" class="style2">
<option value="">--Choisissez un animal--</option>
<?php
$i = 1;
while($enre = mysqli_fetch_array($resultat))
{
    ?>
    <option><?php echo utf8_encode($enre['nom_animal'])?></option>
<?php
$i++;
}?>
</select>
<input type="submit" name="b1" value="Recherchez l'animal">
</form></center>
<?php
echo '<center><a href="accueil.php">retour</a></center>';
mysqli_close($conn)?>
</body>
</html>