<?php

require_once __DIR__ . '/../models/mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        $model = new Mahasiswa();

        $mahasiswa = $model->getAll();

        require_once __DIR__ . '/../views/mahasiswa/index.php';
    }


    public function detail()
    {
        $model = new Mahasiswa();

        $nim = $_GET['nim'] ?? '';

        $mahasiswa = $model->getByNim($nim);

        require_once __DIR__ . '/../views/mahasiswa/detail.php';
    }
}