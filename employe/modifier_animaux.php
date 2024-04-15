<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style_modifier_a.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<nav>
        
        <div class="logo-name">
        <span class="logo_name">Gestion Animaux</span>
        </div>
        
        <div class="menu-items">
        <ul class="nav-links">
                <li><a href="liste_animaux.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="modifier_animaux.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Modifier</span>
                </a></li>
                <li><a href="ajout_animaux.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Ajouter</span>
                </a></li>
                <li><a href="recherche_animaux.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Rechercher</span>
                </a></li>
        </ul>
    
        <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Deconnexion</span>
                </a></li>

        </ul>
        </div>
        </nav>




    <form action="modifier_a.php" method="post">
    <center><h3>Animal</h3></center>
    <center><div>
        <p>Entrez le nom l'animal</p> <input type="text" name="nom_animal" class="style1"> <br>
        <input type="submit" value="Rechercher" class="style3"><br>
        <center><a href="accueil.php">Retour</a></center>
    </div>
    </center>


    </form>
    
</body>
</html>