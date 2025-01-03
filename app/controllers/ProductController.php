<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function listProducts()
    {
        $products = Product::getAll();
        include __DIR__ . '/../views/products.php';
    }
}
