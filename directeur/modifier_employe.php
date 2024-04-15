<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="style_modifier_d.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>




<nav>
        
        <div class="logo-name">
        <span class="logo_name">Gestion Employe</span>
        </div>
        
        <div class="menu-items">
        <ul class="nav-links">
                <li><a href="liste_employe.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="modifier_employe.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Modifier</span>
                </a></li>
                <li><a href="ajout_employe.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Ajouter</span>
                </a></li>
                <li><a href="recherche_employe.php">
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





    <form action="modifier_e.php" method="post">
    <center><h3>Employé</h3></center>
    <center><div>
        <p>Entrez le nom de l'employé</p> <input type="text" name="nom" class="style1"> <br>
        <input type="submit" value="Rechercher" class="style3"><br>
        <center><a href="accueil_directeur.php">Retour</a></center>
    </div>
    </center>


    </form>
    
</body>
</html>