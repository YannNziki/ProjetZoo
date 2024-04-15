<?php
session_start();
?>

<html>
    <body>
        <?php
        @include("connexion.php");
        $a= $_POST["login"];
        $b= $_POST["password"];
        $c= $_POST["fonctions"];
        $_SESSION["log"]=$a;

        
        $requete="SELECT * from personnels where login='$a' and password= '$b' ";
        $resultat=mysqli_query($conn, $requete);
        $ligne=mysqli_num_rows($resultat);
        $enreg=mysqli_fetch_array($resultat);

        if ($ligne==1){
            if ($enreg["fonctions"]=="employe")
                header("location:employe/accueil.php");

            else
                header("location:directeur/accueil_directeur.php");
            }
        else {
            header("location:userfail.html");
        }
        ?>
    </body>
</html>
