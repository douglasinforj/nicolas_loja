<?php

namespace App\Controllers;

use App\Models\Product;

class CartController
{
    public function add()
    {
        session_start();

        $productId = $_POST['product_id'] ?? null;

        if (!$productId) {
            echo "ID do produto não fornecido.";
            return;
        }

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]++;
        } else {
            $_SESSION['cart'][$productId] = 1;
        }

        header('Location: /');
        exit;
    }
}
