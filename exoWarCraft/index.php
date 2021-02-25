<?php
require_once("Model/Character.php");
$perso1 = new Character( 'Char1',500, 1000);
require_once("Model/Hero.php");
$Hero1= new Character('Char2',400, 2000);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>WarCraft</title>
</head>

<body>
  <header><span id="title1">  </span>
  </header>

<!-- 
voir : https://www.alsacreations.com/article/lire/1621-responsive-images-srcset.html
  <img src="assets/img/worldOfWarcraftheader.jpg"
     srcset="assets/img/worldOfWarcraftheader_340.jpg 340w
     assets/img/worldOfWarcraftheader_640.jpg 640w"
      sizes="100vw"
      alt=""> -->

  <section>
  <?php


  // affichage des attributs de $compte1 avec leurs valeurs
  //$Compte1->test();
  ?>
    <h1>Votre Character basic</h1>
    <div>

      Bonjour truc <br><br>

      Votre personnage <b><?= $perso1->get_name(); ?></b> présente une  health de  <?= $perso1->get_health(); ?> <br>
      et une rage de <?= $perso1->get_rage(); ?> <br>
 <br>
      <BR>
    </div>

    <div>
     
    </div>
    <br><br>
    Bon combat à vous ...<B> Que le sort vous soit favorable!!!</B>
  <br>
    Oupsssss, c'est un autre univers <img src="assets/img/clin_oeil.png" width="30px" style =" vertical-align: middle;" >
    <br><br>
  </section>
</body>

</html>