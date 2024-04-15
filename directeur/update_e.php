<?php
    @include('../connexion.php');
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_de_naissance = $_POST['date_de_naissance'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $salaire = $_POST['salaire'];
    $sexe = $_POST['sexe'];
    $fonction = $_POST['fonctions'];

    $requete = "UPDATE personnels SET id='$id',nom='$nom', prenom='$prenom' , date_de_naissance='$date_de_naissance', login='$login', password='$password', salaire='$salaire',sexe='$sexe', fonctions='$fonctions' WHERE nom='$nom'";
    $resultat = mysqli_query($conn,$requete);

    if($resultat){
        echo "Modification effectuee avec succes!";
    } else {
        echo "Echec de la modification.";
}

    mysqli_close($conn);
?>