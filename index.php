
<?php

include 'Product.php';

// Test the Product class
$products = new Product(1, 'T-shirt', 19.99);
$products->showDetails();