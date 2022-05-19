<?php

// require MySQL connection
require ('./database/DBController.php');

// require Product Class
require ('./database/Product.php');

// require Cart class
require ('./database/Cart.php');

// require Message Class
require ('./database/Message.php');


// DBController obj
$db = new DBController();

// Product obj
$product = new Product($db);

// Cart obj
$Cart = new Cart($db);
// print_r($Cart->getItemId($product->getData('cart')));

// Message obj
$msg = new Message($db);
