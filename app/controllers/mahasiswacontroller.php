<?php

require_once __DIR__ . '/../models/mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        global $pdo;

        $model = new Mahasiswa($pdo);

        $mahasiswa = $model->getAll();

        require_once __DIR__ . '/../views/mahasiswa/index.php';
    }

    public function detail()
    {
        global $pdo;

        $model = new Mahasiswa($pdo);

        $nim = $_GET['nim'] ?? '';

        $mahasiswa = $model->getByNim($nim);

        require_once __DIR__ . '/../views/mahasiswa/detail.php';
    }
}