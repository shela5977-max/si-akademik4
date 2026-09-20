<?php

require_once __DIR__ . '/../app/controllers/authcontroller.php';
require_once __DIR__ . '/../app/controllers/mahasiswacontroller.php';
require_once __DIR__ . '/../app/controllers/dosencontroller.php';
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

$url = trim($_GET['url'] ?? '', '/');
$auth = new AuthMiddleware();

switch ($url) {
 case '':
 case 'login':
	(new AuthController())->showLogin();
	break;
 case 'login/process':
	(new AuthController())->login();
	break;
 case 'logout':
	(new AuthController())->logout();
	break;
 case 'dashboard':
		$auth->handle();
	require_once __DIR__ . '/../app/views/dashboard/index.php';
	break;
 case 'mahasiswa':
		$auth->handle();
	(new MahasiswaController())->index();
	break;
 case 'mahasiswa/detail':
		$auth->handle();
	(new MahasiswaController())->detail();
	break;
 case 'dosen':
		$auth->handle();
	(new DosenController())->index();
	break;
 case 'dosen/create':
		$auth->handle();
	(new DosenController())->create();
	break;
 case 'dosen/store':
		$auth->handle();
	(new DosenController())->store();
	break;
 case 'dosen/edit':
		$auth->handle();
	(new DosenController())->edit();
	break;
 case 'dosen/update':
		$auth->handle();
	(new DosenController())->update();
	break;
 case 'dosen/delete':
		$auth->handle();
	(new DosenController())->delete();
	break;
 default:
	http_response_code(404);
	echo 'Halaman tidak ditemukan.';
}
