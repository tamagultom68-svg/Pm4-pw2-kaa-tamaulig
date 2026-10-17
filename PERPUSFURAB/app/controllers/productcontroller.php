<?php
require_once __DIR__ . '/../../config/database.php';

class ProductController
{
    public function index()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: /login');
            exit;
        }

        global $pdo;
        $stmt = $pdo->query("SELECT * FROM products");
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        require __DIR__ . '/../../views/pages/products/index.php';
    }
}
