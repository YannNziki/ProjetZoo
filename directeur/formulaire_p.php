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
    <h1>Formulaire d'inscription Officielle</h1>
<form action="ajout_employe.php" method="post">
<div>

  
  <label for="login">Login:</label><br>
  <input type="text" id="login" name="login"></input><br>

  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom"><br>
  
  <label for="prenom">Prenom:</label><br>
  <input type="text" id="prenom" name="prenom"><br>
  
  <label for="date_de_naissance">Date de Naissance:</label><br>
  <input type="date" id="date_de_naissance" name="date_de_naissance"><br>

  
  <label for="password">password:</label><br>
  <input type="text" id="password" name="password"><br>
  
  <label for="sexe">Sexe :</label><br>
  <select name="sexe" class="style2">
  <option value ="M">Monsieur<option value ="F">Madame</select> <br>

  <label for="salaire">Salaire :</label><br>
  <input type="int" id="salaire" name="salaire"><br>

  <label for="fonction">Fonction :</label><br>
  <select name="fonction" class="style2">
  <option value ="directeur">Directeur<option value ="employe">Employé</select> <br>
  
  </select><br>
  
  

  <input type="submit" value="Valider"><br>
  <input type="button" value="Annuler">
  <input type="button" value="Afficher la liste" onclick="window.location='/list';">
  <div>
</form>
</center>
</body>
</html>