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
    @include('../connexion.php');
    $d= $_POST["s1"];
    $requete="SELECT * FROM animaux WHERE nom_animal='$d';";
    $resultat=mysqli_query($conn, $requete);
    ?>
        <center><h3>Animal</h3> </center>
    <center><table border="1">
    <tr><th>Identifiant</th><th>Date de Naissance</th><th>Nom de l'animal</th><th>Commentaire</th><th>Identifiant Especes</th><th>Sexe</th></tr>

    <?php while($enreg=mysqli_fetch_array($resultat))
    {
    ?>
    <tr>
    <td><?php echo $enreg["id"];?></td>
    <td><?php echo $enreg["date_de_naissance"];?></td>
    <td><?php echo $enreg["nom_animal"];?></td>
    <td><?php echo $enreg["commentaire"];?></td>   
    <td><?php echo $enreg["id_Especes"];?></td>
    <td><?php echo $enreg["sexe"];?></td>
  
    

    </tr>
    <?php  } ?>
    </table></center>
    <?php
    echo '<center><a href="recherche_animaux.php">retour</a></center>';
    mysqli_close($conn);
    ?>
   </body>
</html>