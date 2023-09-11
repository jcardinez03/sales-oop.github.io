<?php

include '../classes/Product.php';

$product = new Product;

$product->editProducts($_GET['product_id'], $_POST);

?>