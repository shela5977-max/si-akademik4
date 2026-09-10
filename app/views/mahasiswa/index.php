<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Daftar Mahasiswa</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #333;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
        }

        h1 {
            color: #496a5a;
            margin-bottom: 5px;
        }

        h2 {
            color: #555;
            font-size: 22px;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #dce9df;
            color: #385044;
            padding: 12px;
            text-align: left;
            border: 1px solid #b8c9bc;
        }

        td {
            padding: 12px;
            border: 1px solid #d6d6d6;
        }

        tr:hover {
            background: #f5f8f5;
        }

        .detail {
            color: #496a5a;
            text-decoration: none;
        }

        .detail:hover {
            text-decoration: underline;
        }

        .button-area {
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 9px 15px;
            margin-right: 8px;
            text-decoration: none;
            border-radius: 4px;
        }

        .button-new {
            background: #496a5a;
            color: white;
        }

        .button-dosen {
            background: #dce9df;
            color: #385044;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>
            Sistem Akademik
        </h1>

        <h2>
            Daftar Mahasiswa
        </h2>

        <table>

            <thead>

                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach (($mahasiswa ?? []) as $mhs): ?>

                    <tr>

                        <td>
                            <?= htmlspecialchars($mhs['nim']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($mhs['nama']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($mhs['prodi']) ?>
                        </td>

                        <td>

                            <a
                                class="detail"
                                href="mahasiswa/detail?nim=<?= urlencode($mhs['nim']) ?>"
                            >
                                Lihat Detail
                            </a>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

        <div class="button-area">

            <a
                class="button button-new"
                href="mahasiswa/detail?nim=23002"
            >
                Halaman Baru
            </a>

            <a
                class="button button-dosen"
                href="dosen"
            >
                Daftar Dosen
            </a>

        </div>

    </div>

</body>

</html>