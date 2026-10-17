<?php
class AuthController
{
    public function login()
    {
        // kalau GET → tampilkan form login
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require __DIR__ . '/../../views/pages/auth/login.php';
        }

        // kalau POST → proses login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($username === 'Admin' && $password === 'Josena') {
                $_SESSION['user_id'] = 1;
                header('Location: /products');
                exit;
            } else {
                echo "Login gagal, coba lagi.";
            }
        }
    }

    public function logout()
    {
        session_destroy(); // cukup destroy, tidak perlu start lagi
        header('Location: /login');
        exit;
    }
}
