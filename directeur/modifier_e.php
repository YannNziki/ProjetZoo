<html>
<head>
    <link rel="stylesheet" type="text/css" href="style_liste_e.css">
        <title>Gestion de base de données MYSQL en php</title>
        <meta charset='UTF-8'>
</head>
<body >



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
    $d = $_POST['nom'];
    $requete = "SELECT * FROM personnels WHERE nom = '$d';";
    $resultat=mysqli_query($conn,$requete);
    session_start();


    $enreg=mysqli_fetch_array($resultat);
?>

    <center><table border="1">
    <tr><th>Identifiant</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Login</th><th>Mot de passe</th><th>Salaire</th><th>Sexe</th><th>Fonction</th>
    </tr>
    <?php echo '<form action="update_e.php" method="post">';?>
    <td><?php echo '<input type="int" name="id" value="'.$enreg['id'].'">';?></td>
    <td><?php echo '<input type="text" name="nom" value="'.$enreg['nom'].'">';?></td>
    <td><?php echo '<input type="text" name="prenom" value="'.$enreg['prenom'].'">';?></td>
    <td><?php echo '<input type="date" name="date_de_naissance" value="'.$enreg['date_de_naissance'].'">';?></td>
    <td><?php echo '<input type="text" name="login"  value="'.$enreg['login'].'">';?></td>
    <td><?php echo '<input type="password" name="password" value="'.$enreg['password'].'">';?></td>
    <td><?php echo '<input type="int" name="salaire" value="'.$enreg['salaire'].'">';?></td>
    <td><?php echo '<input type="text" name="sexe"  value="'.$enreg['sexe'].'">';?></td>    
    <td><?php echo '<input type="text" name="fonctions"  value="'.$enreg['fonctions'].'">';?></td>
    </tr>
   

    </table></center>
    <center><?php
    echo '<input type="submit" value="modifier">'; 
    echo '<br><a href="accueil_directeur.php">Retour</a>';
    mysqli_close($conn);
    echo '</form>'
    ?></center>


</body>
</html>