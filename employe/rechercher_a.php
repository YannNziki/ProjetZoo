<?php
session_start();
?>
<html>
    <head>
        <title>Gestion de base de données MYSQL en php</title>
        <meta charset='UTF-8'>
</head>
<body>
<?php
            echo "<center>Bienvenue : " . $_SESSION["log"]. "</center>";
        ?>
    <?php
     @include("../connexion.php");
    $d= $_POST['id'];
    $requete="select * from animaux where id='$d';";
    $resultat=mysqli_query($conn, $requete);
    echo mysqli_num_rows($resultat);
    ?>

    <center><h1>Liste des animaux </h1> </center>
    <center><table border="1">
        <tr><td>identifiant</td><td>date_de_naissance</td><td>nom_animal</td><td>commentaire</td><td>id_Especes</td><td>sexe</td></tr>

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
    echo '<center><a href="accueil.php">retour</a></center>';
    mysqli_close($conn);
    ?>
    </body>
    </html>
    