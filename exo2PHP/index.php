<?php
require_once("bank_Account.php");
$Compte1 = new Bank_Account('Chère petite Madame', 100000, 6.7, '€');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/style.css">
  <title>BankAccount</title>
</head>

<body>
  <div id="header"><span id="title1"> Bank Account</span>
  </div>

  <section>
    <h1>Votre Compte</h1>
    <div>

      Bonjour <?= $Compte1->get_holder(); ?> <br><br>

      Votre compte présente un solde de <?= number_format($Compte1->get_balance(), 2, ',', ' '); ?><?= $Compte1->get_currency(); ?> <br>
      <b>ATTENTION !!</b> Si votre solde est <span style="color: red;">négatif</span>, le taux d'aggio est de : <?= $Compte1->get_interest_rate(); ?> %. <br>
      <BR>
    </div>

    <div>
      <?php $credit = 1250;
      $debit = 500; ?>
      Votre compte a été crédité de
      <?= $credit . '' . $Compte1->get_currency();
      $Compte1->Credit($credit); ?>
      , votre nouveau solde est de : <?= number_format($Compte1->get_balance(), 2, ',', ' '); ?><?= $Compte1->get_currency(); ?> <br>

      Votre compte a été débité de
      <?= $debit . '' . $Compte1->get_currency();
      $Compte1->Debit($debit); ?>
      , votre nouveau solde est de :
      <?= number_format($Compte1->get_balance(), 2, ',', ' '); ?><?= $Compte1->get_currency(); ?>
    </div>
    <br><br>
    Bonne journée à vous ...
    <br><br>
  </section>
</body>

</html>