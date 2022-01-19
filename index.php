<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/CreditCard.php";
require_once __DIR__ . "/classes/Cliente.php";
require_once __DIR__ . "/classes/ClientePremium.php";

// clienti
$cliente = new Cliente("Giuseppe" , "Verdi");
$clientePremium = new ClientePremium("Giuseppe" , "Verdi");
// utente
$new_user = new User("piero@gmail.com" , "Piero");

// prodotto
$new_product = new Product("iphone 13 pro" , 1290);

// carta di credito
$new_creditCard = new CreditCard("Mario Rossi", 4357 , 123456789123);


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
<h1>ciao</h1>
</body>
</html>