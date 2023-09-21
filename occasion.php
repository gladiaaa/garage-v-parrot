<?php
//require("admin/config/commandehoraire.php");
require("admin/config/commande.php");



$Produits = afficher();
//$Horaires = mettreajourhoraire($id, $hrouvlun, $hrpauselun, $hrfpauselun, $hrfermeturelun, $hrouvmar, $hrpausemar, $hrfpausemar, $hrfermeturemar, $hrouvmer, $hrpausemer, $hrfpausemer, $hrfermeturemer, $hrouvjeu, $hrpausejeu, $hrfpausejeu, $hrfermeturejeu, $hrouvven, $hrpauseven, $hrfpauseven, $hrfermetureven);

//$Horaires = array(
//    'id' => $id,
//    'hrouvlun' => $hrouvlun,
//    'hrpauselun' => $hrpauselun, 
//    'hrfpauselun' => $hrfpauselun, 
//    'hrfermeturelun' => $hrfermeturelun,
//    'hrouvmar' => $hrouvmar,
//   'hrpausemar' => $hrpausemar, 
//    'hrfpausemar' => $hrfpausemar,
//    'hrfermeturemar' => $hrfermeturemar,
//    'hrouvmer' => $hrouvmer,
//    'hrpausemer' => $hrpausemer,
//    'hrfpausemer' => $hrfpausemer, 
//    'hrfermeturemer' => $hrfermeturemer,
//    'hrouvjeu' => $hrouvjeu,
//    'hrpausejeu' => $hrpausejeu,
//    'hrfpausejeu' => $hrfpausejeu,
//    'hrfermeturejeu' => $hrfermeturejeu,
//    'hrouvven' => $hrouvven,
//    'hrpauseven' => $hrpauseven,
//    'hrfpauseven' => $hrfpauseven, 
//   'hrfermetureven&' => $hrfermetureven, 
//);
//return $Horaires;
?>
<!doctype html>
<html lang="en">
<body>

<!DOCTYPE html>
<html lang="en">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
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
      <li>Accueil</li>
      <li><a class="hover-underline-animation" href="occasion.php">Occasion</li>
      <li><a class="hover-underline-animation" href="reparation.php">Réparation</li>
      <li><a class="hover-underline-animation" href="a-propos">A propos</li>
      <li><a class="hover-underline-animation" href="contact.php">Contact</li>
    </ul>
  </a>
  </section>
      <section>
        <div>
          <p>Bienvenue au garage V Parrot</p>
        </div>
      </section>
      <main>

    <h1>Système de filtre par prix</h1>

    <label for="min-price">Prix minimum:</label>
    <input type="number" id="min-price" placeholder="Min">

    <label for="max-price">Prix maximum:</label>
    <input type="number" id="max-price" placeholder="Max">

    <div class="products">
    </div>

    <script src="script.js"></script>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php foreach ($Produits as $unProduit): ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <title><?= $unProduit->nom ?></title>
                            <img src="<?= $unProduit->image ?>">

                            <div class="card-body">
                                <p class="card-text"><?= substr($unProduit->description, 0 , 250) ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted"><?= $unProduit->prix ?>€</small>
                                    <small class="text-muted"><?= $unProduit->km ?>km</small>
                                    <small class="text-muted"><?= $unProduit->annee ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
      <?php foreach ($Horaires as $uneHoraire): ?>
        <div class="col">
            <div class="card shadow-sm">
                <h2><?= $uneHoraire->hrouvlun ?>€</h2>
                <p><?= $uneHoraire->hrpauselun ?>km</p>
                <p><?= $uneHoraire->hrfpauselun ?></p>
                <p><?= $uneHoraire->hrfermeturelun ?></p>
                <p><?= $uneHoraire->hrouvmar ?>€</p>
                <p><?= $uneHoraire->hrpausemar ?>km</p>
                <p><?= $uneHoraire->hrfpausemar ?></p>
                <p><?= $uneHoraire->hrfermeturemar ?></p>
                <p><?= $uneHoraire->hrouvmer ?>€</p>
                <p><?= $uneHoraire->hrpausemer ?>km</p>
                <p><?= $uneHoraire->hrfpausemer ?></p>
                <p><?= $uneHoraire->hrfermeturemer ?></p>
                <p><?= $uneHoraire->hrouvjeu ?>€</p>
                <p><?= $uneHoraire->hrpausejeu ?>km</p>
                <p><?= $uneHoraire->hrfpausejeu ?></p>
                <p><?= $uneHoraire->hrfermeturejeu ?></p>
                <p><?= $uneHoraire->hrouvven ?>€</p>
                <p><?= $uneHoraire->hrpauseven ?>km</p>
                <p><?= $uneHoraire->hrfpauseven ?></p>
                <p><?= $uneHoraire->hrfermetureven ?></p>
            </div>
        </div>
    <?php endforeach; ?>
      <footer>
        <link rel="stylesheet" href="css/footer.css" />
        <div class="footer-line"></div>
        <div class="footer-wrapper">
            <div class="footer-columns">
                <section class="footer-logo">
                    <h2>
                        <svg width="1103" height="996" viewBox="0 0 1103 996" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z" fill="#FAFBFC"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z" fill="#FAFBFC"/>
                        </svg>
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