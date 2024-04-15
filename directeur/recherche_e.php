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
    @include('../connexion.php');
    $d= $_POST["s1"];
    $requete="SELECT * FROM personnels WHERE nom='$d';";
    $resultat=mysqli_query($conn, $requete);
    ?>
    <center><h3>Employe</h3></center>
    <center><table border="1">
    <tr><th>Identifiant</th><th>Nom</th><th>Prenom</th><th>Date de naissance</th><th>Login</th><th>Mot de passe</th><th>Salaire</th><th>Sexe</th><th>Fonction</th><th>Supprimer</th></tr>

    <?php while($enreg=mysqli_fetch_array($resultat))
    {
    ?>
    <tr>
    <td><?php echo $enreg["id"];?></td>
    <td><?php echo $enreg["nom"];?></td>
    <td><?php echo $enreg["prenom"];?></td>
    <td><?php echo $enreg["date_de_naissance"];?></td>
    <td><?php echo $enreg["login"];?></td>
    <td><?php echo $enreg["password"];?></td>
    <td><?php echo $enreg["salaire"];?></td>
    <td><?php echo $enreg["sexe"];?></td>
    <td><?php echo $enreg["fonctions"];?></td>
    

    </tr>
    <?php  } ?>
    </table></center>
    <?php
    echo '<center><a href="recherche_employe.php">retour</a></center>';
    mysqli_close($conn);
    ?>
   </body>
</html>