<?php

class AuthController
{
    // Menampilkan halaman login
    public function showLogin()
    {
        $error = $_SESSION['error'] ?? null;

        unset($_SESSION['error']);

        require_once __DIR__ . '/../views/auth/login.php';
    }


    // Memproses login
    public function login()
    {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Username dan password sesuai tugas dosen
        if ($username === 'admin' && $password === '12345') {

            $_SESSION['login'] = true;

            $_SESSION['username'] = 'admin';

            // Setelah berhasil login
            header('Location: /si-akademik4/public/dashboard');

            exit;
        }

        // Jika login salah
        $_SESSION['error'] = 'Username atau password salah.';

        header('Location: /si-akademik4/public/login');

        exit;
    }


    // Logout
    public function logout()
    {
        // Hapus semua session
        session_unset();

        // Hancurkan session
        session_destroy();

        // Kembali ke halaman login
        header('Location: /si-akademik4/public/login');

        exit;
    }
}