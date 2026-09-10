<?php

require_once __DIR__ . '/../models/dosen.php';

class DosenController
{
    public function index()
    {
        $model = new Dosen();

        $dosen = $model->getAll();

        require_once __DIR__ . '/../views/dosen/index.php';
    }
}