<?php
session_start();
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/ProductController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        $controller = new HomeController();
        $controller->index();
        break;

    case '/login':   // ← case login ditambahkan di sini
        $controller = new AuthController();
        $controller->login();
        break;

        case '/products':
        $controller = new ProductController();
        $controller->index();
        break;

    case '/logout':  // ← case logout juga di sini
        $controller = new AuthController();
        $controller->logout();
        break;

    default:
        http_response_code(404);
        echo "404 - Halaman tidak ditemukan";
}
