<?php

require_once __DIR__ . '/../app/controllers/authcontroller.php';
require_once __DIR__ . '/../app/controllers/mahasiswacontroller.php';
require_once __DIR__ . '/../app/controllers/dosencontroller.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

$url = $_GET['url'] ?? 'login';

$url = trim($url, '/');

$auth = new AuthController();
$middleware = new AuthMiddleware();

switch ($url) {

    // =========================
    // LOGIN
    // =========================
    case 'login':

        $auth->showLogin();

        break;


    // =========================
    // PROSES LOGIN
    // =========================
    case 'login/process':

        $auth->login();

        break;


    // =========================
    // LOGOUT
    // =========================
    case 'logout':

        $auth->logout();

        break;


    // =========================
    // DASHBOARD
    // =========================
    case 'dashboard':

        $middleware->handle();

        require_once __DIR__ . '/../app/views/dashboard/index.php';

        break;


    // =========================
    // MAHASISWA
    // =========================
    case 'mahasiswa':

        $middleware->handle();

        $controller = new MahasiswaController();

        $controller->index();

        break;


    // =========================
    // DETAIL MAHASISWA
    // =========================
    case 'mahasiswa/detail':

        $middleware->handle();

        $controller = new MahasiswaController();

        $controller->detail();

        break;


    // =========================
    // DOSEN
    // =========================
    case 'dosen':

        $middleware->handle();

        $controller = new DosenController();

        $controller->index();

        break;


    // =========================
    // 404
    // =========================
    default:

        http_response_code(404);

        echo "<h1>404 - Halaman tidak ditemukan</h1>";

        break;
}