<?php


require("config/commande.php");
?>
<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>
<section>
        <div class="sucess">   
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <a href="add_user.php">Add user</a> | 
    <a href="#">Update user</a> | 
    <a href="#">Delete user</a> | 
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>
      </section>
      

      <h1>Modifier les horaires du site web</h1>
    <form action="traitement_horaires.php" method="POST">
        <label for="heure_ouverture_lun">Heure d'ouverture lun :</label>
        <input type="time" name="heure_ouverture_lun">

        <label for="heure_pause_lun">Heure pause lun :</label>
        <input type="time" name="heure_pause_lun">

        <label for="heure_reprise_lun">Heure reprise lun :</label>
        <input type="time" name="heure_fpause_lun">

        <label for="heure_fermeture_lun">Heure de fermeture lun :</label>
        <input type="time" name="heure_fermeture_lun"><br>
        
        <label for="heure_ouverture_mar">Heure d'ouverture mar :</label>
        <input type="time" name="heure_ouverture_mar">

        <label for="heure_pause_mar">Heure pause mar:</label>
        <input type="time" name="heure_pause_mar">

        <label for="heure_reprise_mar">Heure reprise mar :</label>
        <input type="time" name="heure_fpause_mar">

        <label for="heure_fermeture_mar">Heure de fermeture mar :</label>
        <input type="time" name="heure_fermeture_mar"><br>

        <label for="heure_ouverture_mer">Heure d'ouverture mer :</label>
        <input type="time" name="heure_ouverture_mer">

        <label for="heure_pause_mer">Heure pause mer :</label>
        <input type="time" name="heure_pause_mer">

        <label for="heure_reprise_mer">Heure reprise mer :</label>
        <input type="time" name="heure_fpause_mer">

        <label for="heure_fermeture_mer">Heure de fermeture mer :</label>
        <input type="time" name="heure_fermeture_mer"><br>

        <label for="heure_ouverture_jeu">Heure d'ouverture jeu :</label>
        <input type="time" name="heure_ouverture_jeu">

        <label for="heure_pause_jeu">Heure pause jeu :</label>
        <input type="time" name="heure_pause_jeu">

        <label for="heure_reprise_jeu">Heure reprise jeu :</label>
        <input type="time" name="heure_fpause_jeu">

        <label for="heure_fermeture_jeu">Heure de fermeture jeu :</label>
        <input type="time" name="heure_fermeture_jeu"><br>

        <label for="heure_ouverture_ven">Heure d'ouverture ven :</label>
        <input type="time" name="heure_ouverture_ven">

        <label for="heure_pause_ven">Heure pause ven :</label>
        <input type="time" name="heure_pause_ven">

        <label for="heure_reprise_ven">Heure reprise ven :</label>
        <input type="time" name="heure_fpause_ven">

        <label for="heure_fermeture_ven">Heure de fermeture ven :</label>
        <input type="time" name="heure_fermeture_ven">

        <input type="submit" value="horaire_valide">
    </form>

    <?php
    
 require("config/commandehoraire.php");
    if(isset($_POST['horaire_valide']))
    {
        if(isset($_POST['heure_ouverture_lun']) AND isset($_POST['heure_pause_lun']) AND isset($_POST['heure_fpause_lun']) AND isset($_POST['heure_fermeture_lun']) AND isset($_POST['heure_ouverture_mar']) AND isset($_POST['heure_pause_mar']) AND isset($_POST['heure_fpause_mar']) AND isset($_POST['heure_fermeture_mar']) AND isset($_POST['heure_ouverture_mer']) AND isset($_POST['heure_pause_mer']) AND isset($_POST['heure_fpause_mer']) AND isset($_POST['heure_fermeture_mer']) AND isset($_POST['heure_ouverture_jeu']) AND isset($_POST['heure_pause_jeu']) AND isset($_POST['heure_fpause_jeu']) AND isset($_POST['heure_fermeture_jeu']) AND isset($_POST['heure_ouverture_ven']) AND isset($_POST['heure_pause_ven']) AND isset($_POST['heure_fpause_ven']) AND isset($_POST['heure_fermeture_ven']))
        {
        if(!empty($_POST['heure_ouverture_lun']) AND !empty($_POST['heure_pause_lun']) AND !empty($_POST['heure_fpause_lun']) AND !empty($_POST['heure_fermeture_lun']) AND !empty($_POST['heure_ouverture_mar']) AND !empty($_POST['heure_pause_mar']) AND !empty($_POST['heure_fpause_mar']) AND !empty($_POST['heure_fermeture_mar']) AND !empty($_POST['heure_ouverture_mer']) AND !empty($_POST['heure_pause_mer']) AND !empty($_POST['heure_fpause_mer']) AND !empty($_POST['heure_fermeture_mer']) AND !empty($_POST['heure_ouverture_jeu']) AND !empty($_POST['heure_pause_jeu']) AND !empty($_POST['heure_fpause_jeu']) AND !empty($_POST['heure_fermeture_jeu']) AND !empty($_POST['heure_ouverture_ven']) AND !empty($_POST['heure_pause_ven']) AND !empty($_POST['heure_fpause_ven']) AND !empty($_POST['heure_fermeture_ven']))
         {
           //Affiche les horaires d'ouverture pauses et fermeture du garage
            $hrouvlun = htmlspecialchars(strip_tags($_POST['heure_ouverture_lun']));
            $hrpauselun = htmlspecialchars(strip_tags($_POST['heure_pause_lun']));
            $hrfpauselun = htmlspecialchars(strip_tags($_POST['heure_fpause_lun']));
            $hrfermeturelun = htmlspecialchars(strip_tags($_POST['heure_fermeture_lun']));
            $hrouvmar = htmlspecialchars(strip_tags($_POST['heure_ouverture_mar']));
            $hrpausemar = htmlspecialchars(strip_tags($_POST['heure_pause_mar']));
            $hrfpausemar = htmlspecialchars(strip_tags($_POST['heure_fpause_mar']));
            $hrfermeturemar = htmlspecialchars(strip_tags($_POST['heure_fermeture_mar']));
            $hrouvmer = htmlspecialchars(strip_tags($_POST['heure_ouverture_mer']));
            $hrpausemer = htmlspecialchars(strip_tags($_POST['heure_pause_mer']));
            $hrfpausemer = htmlspecialchars(strip_tags($_POST['heure_fpause_mer']));
            $hrfermeturemer = htmlspecialchars(strip_tags($_POST['heure_fermeture_mer']));
            $hrouvjeu = htmlspecialchars(strip_tags($_POST['heure_ouverture_jeu']));
            $hrpausejeu = htmlspecialchars(strip_tags($_POST['heure_pause_jeu']));
            $hrfpausejeu = htmlspecialchars(strip_tags($_POST['heure_pause_jeu']));
            $hrfermeturejeu = htmlspecialchars(strip_tags($_POST['heure_fermeture_jeu']));
            $hrouvven = htmlspecialchars(strip_tags($_POST['heure_ouverture_ven']));
            $hrpauseven = htmlspecialchars(strip_tags($_POST['heure_pause_ven']));
            $hrfpauseven = htmlspecialchars(strip_tags($_POST['heure_pause_ven']));
            $hrfermetureven = htmlspecialchars(strip_tags($_POST['heure_fermeture_ven']));

            try {
                ajouter($hrouvlun, $hrpauselun, $hrfpauselun, $hrfermeturelun, $hrouvmar, $hrpausemar, $hrfpausemar, $hrfermeturemar, $hrouvmer, $hrpausemer, $hrfpausemer, $hrfermeturemer,$hrouvjeu, $hrpausejeu, $hrfpausejeu, $hrfermeturejeu, $hrouvven, $hrpauseven, $hrfpauseven, $hrfermetureven);
            } catch (Exception $e) 


            {
                $e->getMessage();
            }
            
         }
        }
    }

?>

    <h1>Ajouter une annonce</h1>

    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de l'image</label>
    <input type="name" class="form-control" name="image"required>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" name="nom" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">année de mise en circulation</label>
    <textarea class="form-control" name="annee" required></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kilométrage</label>
    <textarea class="form-control" name="km" required></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <textarea class="form-control" name="prix" required></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description du produit</label>
    <input type="text" class="form-control" name="desc" required>
  </div>

  <button type="submit" class="btn btn-primary" name="valider">Ajouter un nouveau produit</button>
</form>

      </div>
     </div>
 </div>
 

    <a href="home.php">retour menu principal</a>
</body>
</html>

<?php

    if(isset($_POST['valider']))
    {
        if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['km']) AND isset($_POST['annee']) AND isset($_POST['desc']))
        {
        if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['km'])  AND !empty($_POST['annee']) AND !empty($_POST['desc']))
         {
            $image = htmlspecialchars(strip_tags($_POST['image']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prix = htmlspecialchars(strip_tags($_POST['prix']));
            $km = htmlspecialchars(strip_tags($_POST['km']));
            $annee = htmlspecialchars(strip_tags($_POST['annee']));
            $desc = htmlspecialchars(strip_tags($_POST['desc']));

            try {
                ajouter($image, $nom, $prix, $km, $annee, $desc);
            } catch (Exception $e) 


            {
                $e->getMessage();
            }
            
         }
        }
    }

?>