<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="formulaire.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
</head>
<body>
<center>

    <h1>Formulaire d'ajouts</h1>
<form action="ajout_animaux.php" method="post">
<div>

  <label for="birthdate">Nom animal:</label><br>
  <input type="date" id="nom_animal" name="nom_animal"><br>
  
  <label for="phone"> Especes:</label><br>
  <input type="text" id="id_Especes" name="id_Especes"><br>

  <label for="firstname">Année de naissancce:</label><br>
  <input type="text" id="date_de_naissance" name="date_de_naissance"><br>
  
  <label for="profilepic">Sexe :</label><br>
  <input type="file" id="sexe" name="sexe"><br>
  
  </select><br>
  
  
  <label for="comments">Commentaire:</label><br>
  <textarea id="comments" name="comments"></textarea><br>
  
  <input type="submit" value="Ajouter"><br>
  <input type="button" value="Annuler">
  <input type="button" value="Afficher la liste" onclick="window.location='/list';">
  <div>
</form>
</center>
</body>
</html>