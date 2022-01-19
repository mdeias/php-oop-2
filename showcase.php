<?php

require_once __DIR__ . "/classes/Product.php";

$product1 = new Product;
$product1->title = ("Apple Watch serie 7");
$product1->price = (489);
$product1->description = ("Il miglior apple watch di sempre");

$product2 = new Product;
$product2->title = ("Iphone 13 pro");
$product2->price = (1289);
$product2->description = ("Il miglior iphone di sempre");

$product3 = new Product;
$product3->title = ("MacBook pro");
$product3->price = (489);
$product3->description = ("Il miglior macBook di sempre");

$product4 = new Product;
$product4->title = ("IPad pro");
$product4->price = (989);
$product4->description = ("Il miglior IPad di sempre");
