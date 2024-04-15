<?php
@include("connexion.php");
$a= $_POST["login"];
$b= $_POST["password"];
$c= $_POST["fonctions"];
$d= $_POST["sexe"];

$reql= "INSERT INTO personnels VALUES ('','','','','$a','$b','','$d','$c')";
$rl= mysqli_query($conn,$reql); 

echo "<center><p>Enregistrement OK</p></center>";
echo '<center><a href="index.html">Retour</a></center>';

mysqli_close($conn)

?>




