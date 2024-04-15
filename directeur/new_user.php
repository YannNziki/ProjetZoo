<?php
@include("../connexion.php");
$a= $_POST["login"];
$b= $_POST["password"];
$c= $_POST["fonctions"];

$reql= "INSERT INTO personnels VALUES ('$a','$b','$c')";
$rl= mysqli_query($conn,$reql); 

echo "<center><p>Enregistrement OK</p></center>";
echo '<center><a href="index.html">Retour</a></center>';

mysqli_close($conn)

?>