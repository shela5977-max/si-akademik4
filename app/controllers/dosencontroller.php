<?php
require_once __DIR__ . '/../models/Dosen.php';

class DosenController
{
	private function model()
	{
		global $pdo;

		return new Dosen($pdo);
	}

	public function index()
	{
		$dosen = $this->model()->getAll();
		require_once __DIR__ . '/../Views/dosen/index.php';
	}

	public function create()
	{
		$dosen = null;
		$action = 'store';
		require_once __DIR__ . '/../Views/dosen/form.php';
	}

	public function store()
	{
		$this->model()->create(
			trim($_POST['nidn'] ?? ''),
			trim($_POST['nama'] ?? ''),
			trim($_POST['bidang_keahlian'] ?? '')
		);

		header('Location: /si-akademik4/public/dosen');
		exit;
	}

	public function edit()
	{
		$dosen = $this->model()->getById((int) ($_GET['id'] ?? 0));

		if (!$dosen) {
			http_response_code(404);
			echo 'Data dosen tidak ditemukan.';
			return;
		}

		$action = 'update';
		require_once __DIR__ . '/../Views/dosen/form.php';
	}

	public function update()
	{
		$this->model()->update(
			(int) ($_POST['id'] ?? 0),
			trim($_POST['nidn'] ?? ''),
			trim($_POST['nama'] ?? ''),
			trim($_POST['bidang_keahlian'] ?? '')
		);

		header('Location: /si-akademik4/public/dosen');
		exit;
	}

	public function delete()
	{
		$this->model()->delete((int) ($_POST['id'] ?? 0));

		header('Location: /si-akademik4/public/dosen');
		exit;
	}
}
