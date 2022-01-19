<?php

use FFI\Exception;

require_once __DIR__ . "/classes/Cliente.php";
require_once __DIR__ . "/classes/ClientePremium.php";
require_once __DIR__ . "/showcase.php";

$customer = new Cliente("Gerry", "Scotti");
$customer->setCreditCard('Gerry Scotti', 444, 123456789012);
$customer->route = 'Viale Dante';
$customer->town = 'Sassari';
$customer->country = 'Italia';
$customer->setCart($product1, $product2, $product3);


$customer_premium = new ClientePremium("Ezio", "Greggio");
$customer_premium->setCreditCard('Ezio Greggio', 231, 222222234567);
$customer_premium->route = 'Viale Marconi';
$customer_premium->town = 'Torino';
$customer_premium->country = 'Italia';
$customer_premium->setCart($product4);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <h1>Cliente</h1>
    <h2> <?php echo $customer->getFullName() ?> </h2>
    <h3> <?php echo $customer->route ?> </h3>
    <h4> <?php echo $customer->town ?> </h4>
    <h5> <?php echo $customer->country ?> </h5>
    <p>carrello:</p>
    <?php foreach ($customer->getCart() as $product){
        echo "<br>" . $product->title. "<br> Prezzo: ". $product->price. "€ <br> Descrizione: ". $product->description; 
    } ?>

    <h1>Cliente Premium</h1>
    <h2> <?php echo $customer_premium->getFullName() ?> </h2>
    <h3> <?php echo $customer_premium->route ?> </h3>
    <h4> <?php echo $customer_premium->town ?> </h4>
    <h5> <?php echo $customer_premium->country ?> </h5>
    <p>carrello:</p>
    <?php foreach ($customer_premium->getCart() as $product){
        echo "<br>" . $product->title. "<br> Prezzo: ". $product->price. "€ <br> Descrizione: ". $product->description; 
    } ?>
</body>
</html>