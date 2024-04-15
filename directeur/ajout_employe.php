<?php
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style_ajout_d.css">
        <meta charset="utf-8">
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


        <center>
        <?php
            echo "<center>Bienvenue : " . $_SESSION["log"]. "</center>";
        ?>
        
            <h3>Employé: </h3>
            </center>
            <form action="ajout_e.php" method="post">
            <table>

                <tr>                    
                    <td>Nom:<input type= "text" name= "nom"></td>
                  
                </tr>
                <tr>
                <td>Prenom:<input type= "text" name= "prenom"></td>
                </tr>

                <tr>
                    <td>Année de Naissance:<input type= "date" name= "date_de_naissance"></td>                  
                    
                </tr>

                <tr>
                <td>Sexe:<select name="sexe" class="style2">
                        <option value ="M">Male
                        <option value ="F">Femelle</select> <br>
                </tr>


                <tr>                    
                    <td>Login:<input type= "text" name= "login"></td>
                    
                </tr>
                <tr>
                <td>Password:<input type= "text" name= "password"></td>
                </tr>
                <tr>
                    <td>Fonction:<select name="fonctions" class="style2">
                        <option value ="employe">Employé</select> <br>
                </tr>   
        
                <center><tr>
                    <td><input type="submit" value="valider" class="style3"><input type="reset" name= "annuler" class="style4"></td>
               
                </tr> </center>
            </table>
    

        <center><a href="accueil_directeur.php">Retour</a></center>
    </body>
</html>