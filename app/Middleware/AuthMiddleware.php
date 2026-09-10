<?php

class AuthMiddleware
{
    public function handle()
    {
        // Mengecek apakah user sudah login
        if (
            !isset($_SESSION['login']) ||
            $_SESSION['login'] !== true
        ) {

            // Jika belum login,
            // arahkan ke halaman login
            header('Location: /si-akademik4/public/login');

            exit;
        }
    }
}