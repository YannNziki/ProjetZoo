<html>
    <?php
        @include("../connexion.php");
        $code=$_GET['id'];
        $rql= "DELETE FROM personnels WHERE id='$code'";
        mysqli_query($conn, $rql);

        header('location:liste_employe.php');
        exit;
        mysqli_close($conn);
    ?>
</html>