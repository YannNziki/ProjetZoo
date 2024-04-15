<html>
    <?php
        @include("../connexion.php");
        $code=$_GET['id'];
        $rql= "DELETE FROM animaux WHERE id='$code'";
        mysqli_query($conn, $rql);

        header('location:liste_animaux.php');
        exit;
        mysqli_close($conn);
    ?>
</html>