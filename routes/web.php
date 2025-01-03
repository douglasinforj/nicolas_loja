<?php

require_once __DIR__ . '/../app/controllers/ProductController.php';
require_once __DIR__ . '/../app/controllers/CartController.php';
require_once __DIR__ . '/../app/controllers/ThankYouController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        (new App\Controllers\ProductController())->listProducts();
        break;
    case '/add-to-cart':
        (new App\Controllers\CartController())->add();
        break;
    case '/cart':
        (new App\Controllers\CartController())->viewCart();      //Atualizando a rota aqui para o carrinho
        break;
    case '/thank-you':
        (new App\Controllers\ThankYouController())->index();
        break;
    default:
        http_response_code(404);
        echo 'Página não encontrada!';
        break;
}
