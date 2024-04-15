<?php
session_start();
?>
<html>
    <head>
        <title>Gestion de base de données MYSQL en php</title>
        <meta charset='UTF-8'>
</head>
<body bgcolor='green'>
<?php
            echo "<center>Bienvenue : " . $_SESSION["log"]. "</center>";
        ?>
    <?php
     @include("../connexion.php");
    $d= $_POST['s1'];
    $requete="SELECT * FROM personnels WHERE nom='$d';";
    $resultat=mysqli_query($conn, $requete);
    echo mysqli_num_rows($resultat);
    ?>

    <center><h1>Liste de nos employés </h1> </center>
    <center><table border="1">
    <tr><td>Identifiant</td><td>Nom</td><td>Prenom</td><td>Date_de_naissance</td><td>Login</td><td>Mot de Passe</td><td>Salaire</td><td>Sexe</td><td>Fonction</td></tr>
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
    echo '<center><a href="accueil_directeur.php">retour</a></center>';
    mysqli_close($conn);
    ?>
    </body>
    </html>
    