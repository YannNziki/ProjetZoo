
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style_enregistrer_d.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    

    <div class="te"> 
    <center><h1>Directeur</h1></center>

    </div>        
    <center>
        <form action="new_user.php" method="post">
            <div class="tr">
            Nom de Login : <input type="text" name="login" class="style1"><br>
            Mot de passe : <input type="password" name="password" class="style2"><br>
            Sexe : <select name="sexe" class="style2"><option value ="M">Monsieur
                        <option value ="F">Madame</select> <br>
            Fonction : <select name="fonctions" class="style2"><option value ="directeur">Directeur</select> <br>
    
            <input type="submit" value="enregistrez vous" class="style3"><br>
            <input type="reset" value="annuler" class="style4"><br>
            <a href="index.html">Se connecter</a>
            </div>
    </center>
    <div class="bg"></div>
        </form>
        
    
</body>
</html>
