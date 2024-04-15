<?php
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style_ajout_a.css">
        <meta charset="utf-8">
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




        <center>
        <?php
            echo "<center>Bienvenue : " . $_SESSION["log"]. "</center>";
        ?>
            <h3>Animal</h3>
            <form action="ajout_a.php" method="post">
 
          
                    <label><p>Identifiant:</p><input type="int" name= "id"  class="style1"></label>
                    <label>Nom:<input type= "text" name= "nom_animal"  class="style1"></label>
                    <label>Année de Naissance:<input type= "date" name= "date_de_naissance"  class="style1"></label>


                   
                    <label>Especes:</label><select name="id_Especes" class="style2">
                            <option value ="23">Mammifère(Carnivore)
                            <option value ="24">Oiseau <br>
                            <option value ="25">Reptile(Herbivore) <br>
                            <option value ="26">Mammifère(Herbivore) <br>
                            <option value ="27">Reptile(Carnivore)</select> <br>
                    
                    <label>Sexe:</label><select name="sexe" class="style2">
                            <option value ="M">Male
                            <option value ="F">Femelle</select> <br>
             
                <label for="comments">Commentaire:</label><br>
                <textarea id="comments" name="commentaire"></textarea><br>        
  
                    <label><input type="submit" value="Valider" class="style3"></label>
                    <label><input type="reset" name= "annuler" class="style4"></label>

        
        </center>

        <center><a href="accueil.php">Retour</a></center>
    </body>
</html>