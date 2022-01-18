<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/CreditCard.php";

$new_user = new User("piero@gmail.com" , "Piero");
$new_user->setSurname("Ferretti");
$new_user->setAddress("Via Verdi");

$new_product = new Product("iphone 13 pro" , 1290);
$new_product->setDescription("Apple iPhone 13 Pro è uno degli smartphone iOS più avanzati e completi che ci siano in circolazione. Dispone di un grande display da 6.1 pollici.");
$new_product->setDiscount(10);

$new_creditCard = new CreditCard(4357 , "0000IL84393700000IO");
$new_creditCard->setHolder("Gino Giuliani");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>

<h2> nome: <?php echo $new_user->getName() ?> </h2>
<h3> cognome: <?php echo $new_user->getSurname() ?> </h3>
<p> mail: <?php echo $new_user->getMail() ?> </p>
    
<h2> 
    titolare carta: <?php echo $new_creditCard->getHolder() ?> 
</h2>
<h3> iban: <?php echo $new_creditCard->getIban() ?></h3>
<p> codice: <?php echo $new_creditCard->getCode() ?> </p>

<h2> Prodotto: <?php echo $new_product->getTitle() ?> </h2>
<h3> prezzo: <?php echo $new_product->getPrice() ?> </h3>
<p> descrizione: <?php echo $new_product->getDescription() ?> </p>
<p> sconto: <?php echo $new_product->getDiscount() ?> </p>

</body>
</html>