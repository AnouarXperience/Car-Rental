<!-- Ceci utile pour verifier si user a bien connecte avant acces au site -->
<?php
//appel connection base donne
include("includes/db.php");
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['customer_email'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: login.php');
  exit();
  }
?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Rotation Navigation</title>
  </head>
  <body>
    <!-- grand "container 1" -->
    <div class="container">
      <!-- "cercle container" dans le "container 1" -->
      <div class="circle-container">
        <!-- "cercle" est dans le "cercle container"  -->
        <div class="circle">
          <!-- button 1 dans le "cercle" -->
          <button id="close">
            <!-- image -->
            <i class="fas fa-times"></i>
          </button>
          <!-- button 2 dans le "cercle" -->
          <button id="open">
              <!-- image -->
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
      <div class="content">
                          <span style="float: right; font-size: 18px; padding: 5px; line-height: 40px">

              <?php

// Ici on est bien loggué, on affiche un message

                         if(isset($_SESSION['customer_email']))
                            {
                               echo "<h1 style='color:red; margin-top:-75px'>Welcome &emsp;</h1>".$_SESSION['customer_email'];

                            }


                      
                    ?>
                  </span>
                  <br/>
        <h1>Location de voitures - Tunisie</h1>
        <small>Anouar Abdallah</small>
        <p>
        Nos services supplémentaires:<br>Location de voitures - Tunisie vous offre ce dont vous avez besoin pour vos visites en Tunisie et aux tarifs pas cher. Nous pouvons vous assurer que vous trouverez les meilleures offres. N’oubliez pas de gérer votre réservation en ligne.Explorer la Tunisie! Vivez votre voyage et ne ratez aucun lieu à visiter. Vous n’êtes pas obligé de compter sur les circuits organisés en bus. Avec une voiture de location, vous avez l’autonomie d’explorer les sites les plus magnifiques et zones touristiques de la Tunisie.</br>
        </p>

        <h3>My Car</h3>
        <div>
        <img src="Voiture.jpg" alt="Voiture" />
        </div>
        <p>
        Optez pour Location de voitures - Tunisie (LVT), votre meilleure agence de LVT, avec ses offres irrésistibles et vous découvrirez ce qui nous distingue des autres courtiers :<br>Si vous préférez une voiture compacte pour une location longue durée (six mois et plus) au tarif préférentiel, on vous propose la PROMOTION LVT 2021 à partir de 48 Dinar Tunisien par jour TTC.</br>
        Renouvelez votre réservation avec LVT et devenez parmi nos clients fidèles pour profiter des points MERCI LVT et touchez jusqu’à -200 Dinars Tunisiens de réduction sur la location de votre voiture en Tunisie.<br>N’attendez plus et gérez votre prochaine location avec LVT pour augmenter vos points MERCI et vous serez le bienvenu dans notre espace réservation client (contact).</br>LVT vous offre l’entière liberté pour prolonger la période de la location de voiture en Tunisie sans aucun frais supplémentaire, il suffit d'informer nos agents à l'avance et nous nous occupons du reste.</br>En cas où vous n’aurez plus besoin du véhicule et voulez le restituer avant la date prévue, LVT est en mesure d’accepter votre choix et elle garde le reste du montant de la location pour une prochaine fois.
      </div>
    </div>

    <nav>
<ul>
   <a href="#"><li><i class="fas fa-home"></i>Home</li></a>
   <a href="les Marques des Voitures/index2.php"><li><i class="fas fa-user-alt"></i>About</li></a>
   <a href="les Marques des Voitures/index.php"><li><i class="fas fa-envelope"></i>Contact</li></a> 

                <?php

                   if(!isset($_SESSION['customer_email']))
                   {
                     
                     echo "<a href='login.php'> <li><i class='fas fa-user-lock'></i>Login</li></a>";


                   }

                   else
                   {
                      
                       echo "<a href='logout.php'><li><i class='fas fa-user-times'></i>Logout</li></a>";
                   }
               ?>
</ul>
    </nav>

    <script src="script.js"></script>
  </body>
</html>
