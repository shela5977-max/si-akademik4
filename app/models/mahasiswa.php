<?php

class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Ingka Jivanda',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Kristanto EKa',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'nim' => '23003',
                'nama' => 'Della Dwi',
                'prodi' => 'Teknik Komputer'
            ],
            [
                'nim' => '23004',
                'nama' => 'Nila Agustin',
                'prodi' => 'Teknik Elektro'
            ],
            [
                'nim' => '23005',
                'nama' => 'Rizki Yudha',
                'prodi' => 'Teknik Mesin'
            ],
            [
                'nim' => '23006',
                'nama' => 'Sheryn Febrylia',
                'prodi' => 'Teknik Sipil'
            ],
            [
                'nim' => '23007',
                'nama' => 'Fajar Rizki',
                'prodi' => 'Manajemen Informatika'
            ],
            [
                'nim' => '23008',
                'nama' => 'Dinda Febiola',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23009',
                'nama' => 'Alya',
                'prodi' => 'Sistem Informasi'
            ]
        ];
    }


    public function getByNim($nim)
    {
        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {

            if ($mhs['nim'] == $nim) {

                return $mhs;
            }
        }

        return null;
    }
}