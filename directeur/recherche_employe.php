<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style_recherche_d.css">
    <meta charset="UTF-8">
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
     echo "<center>Bienvenue :". $_SESSION["log"]."</center>";

@include("../connexion.php");
$requete = "SELECT * FROM personnels";
$resultat = mysqli_query($conn, $requete);
?>


<center>
 
<form action="recherche_e.php" method="POST">
<h3>Employe</h3>
<select name="s1" style="text-align: center; font-weight: bold;">
<option value="">--Choisissez un employé--</option>
<?php
$i = 1;
while($enre = mysqli_fetch_array($resultat))
{
    ?>
    <option><?php echo utf8_encode($enre['nom'])?></option>
<?php
$i++;
}?>
</select>
<input type="submit" name="b1" value="recherchez l'employé">
</center>
</form>
<?php
echo '<center><a href="accueil_directeur.php">retour</a></center>';
mysqli_close($conn)?>
</body>
</html>