<?php
require_once __DIR__ . '/../app/controllers/ProductController.php';
require_once __DIR__ . '/../app/controllers/CartController.php';
require_once __DIR__ . '/../app/controllers/ThankYouController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        (new ProductController())->index();
        break;
    case '/add-to-cart':
        (new CartController())->add();
        break;
    case '/thank-you':
        (new ThankYouController())->index();
        break;
    default:
        http_response_code(404);
        echo 'Página não encontrada!';
        break;
}
