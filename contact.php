
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/user.css" />
    </head>
    <body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <section class="top-nav">
    <div>
      <img href="../images/LogoP.png">
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
    <div class='menu-button'></div>
  </label>
    <ul class="menu">
        <li><a class="hover-underline-animation" href="Accueil.html">Accueil</li>
      <li><a class="hover-underline-animation" href="occasion.php">Occasion</li>
      <li><a class="hover-underline-animation" href="reparation.html">Réparation</li>
      <li><a class="hover-underline-animation" href="a-propos.html">A propos</li>
      <li><a class="hover-underline-animation" >Contact</li>
    </ul>
  </a>
  </section>
      <section>
      <h1>Nous contacter</h1>

<div class="album py-5 bg-light">
<div class="container">

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

  <form method="post">
<div class="mb-3">
<label for="username" class="form-label">Votre nom:</label>
<input type="name" class="form-control" name="image"required>

<label for="username" class="form-label">Votre numéro de téléphone:</label>
<input type="name" class="form-control" name="image"required>

</div>
<div class="mb-3">
<label for="Nom du produit" class="form-label">Nom du produit:</label>
<input type="text" class="form-control" name="nom" required>
</div>

<div class="mb-3">
<label for="Commentaire" class="form-label">Votre commentaire:</label>
<input type="text" class="form-control" name="desc" required>
</div>

<button type="submit" class="btn btn-primary" name="valider">Envoyer votre commentaire</button>
 
</form>
      </section>

      <footer>
        <link rel="stylesheet" href="css/footer.css" />
        <div class="footer-line"></div>
        <div class="footer-wrapper">
            <div class="footer-columns">
                <section class="footer-logo">
                    <h2>
                        <img src="images/LogoP.png" alt="LogoP">
                    </h2>
                </section>
                <section>
                    <h3>Vincent Parrot</h3>
                    <ul>
                        <li>
                            <a href="reparation.html" title="Réparation">
                                Réparation
                            </a>
                        </li>
                        <li>
                            <a href="occasion.php" title="Occasion">
                                Occasion
                            </a>
                        </li>
                        <li>
                            <a href="a-propos" title="A propos">
                                A propos
                            </a>
                        </li>
                        <li>
                          <a href="contact.php" title="Contact">
                              Nous Contacter
                          </a>
                      </li>
                        <li>
                            <a href="login.php" title="EspaceAdmin">
                                Espace Administrateur
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="footer-bottom">
                <div class='social-links'>
                    <ul>
                        <li>
                            <a href="#" title="Instagram">
                                <img src="images/instagram.png" alt='Instagram'>                       
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Facebook">
                                <img src="images/facebook.png" alt='Linkedin'>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Twitter">
                                <img src="images/twitter.png" alt='Twitter'>
                            </a>
                        </li>
                    </ul>
                </div>

                <small>© Garage V Parrot. <span id="year"></span>, Tout droit réservé</small>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
</body>
