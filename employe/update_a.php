<?php
    @include('../connexion.php');
    $id = $_POST['id'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $nom_animal = $_POST['nom_animal'];
    $commentaire = $_POST['commentaire'];
    $id_Especes = $_POST['id_Especes'];
    $sexe = $_POST['sexe'];

    $requete = "UPDATE animaux SET id='$id', date_de_naissance='$date_de_naissance' ,nom_animal='$nom_animal', commentaire='$commentaire', id_Especes='$id_Especes',sexe='$sexe' WHERE nom_animal='$nom_animal'";
    $resultat = mysqli_query($conn,$requete);

    if($resultat){
        echo "Modification effectuee avec succes!";
    } else {
        echo "Echec de la modification.";
}

    mysqli_close($conn);
?>