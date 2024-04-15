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
    $d = $_POST['nom_animal'];
    $requete = "SELECT * FROM animaux WHERE nom_animal= '$d';";
    $resultat=mysqli_query($conn,$requete);
    session_start();

   

    $enreg=mysqli_fetch_array($resultat);
?>


    <center><table border="1">
    <tr><td>Identifiant</td><td>Date de Naissance</td><td>Nom de l'animal</td><td>Commentaire</td><td>Identifiant Especes</td><td>Sexe</td></tr>

   
  
    <?php echo '<form action="update_a.php" method="post">';?>
    <tr>
    <td><?php echo '<input type="text" name="id" value="'.$enreg['id'].'">';?></td>
    <td><?php echo '<input type="date" name="date_de_naissance" value="'.$enreg['date_de_naissance'].'">';?></td>
    <td><?php echo '<input type="text" name="nom_animal" value="'.$enreg['nom_animal'].'">';?></td>
    <td><?php echo '<input type="text" name="commentaire" value="'.$enreg['commentaire'].'">';?></td>
    <td><?php echo '<input type="text" name="id_Especes"  value="'.$enreg['id_Especes'].'">';?></td>
    <td><?php echo '<input type="text" name="sexe"  value="'.$enreg['sexe'].'">';?></td>
    </tr>
    </table></center>
    
    <center><?php
    echo '<input type="submit" value="modifier">'; 
    echo '<br><a href="accueil.php">Retour</a>';
    mysqli_close($conn);
    echo '</form>'
    ?></center>

</body>
</html>