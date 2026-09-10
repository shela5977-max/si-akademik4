<?php
$mahasiswa = $mahasiswa ?? null;
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Detail Mahasiswa</title>

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
            width: 200px;
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

        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 9px 15px;
            background: #496a5a;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .back:hover {
            background: #385044;
        }

    </style>

</head>

<body>

    <div class="container">

        <h1>
            Sistem Akademik
        </h1>

        <h2>
            Detail Mahasiswa
        </h2>

        <?php if (!empty($mahasiswa)): ?>

            <table>

                <tr>

                    <th>NIM</th>

                    <td>
                        <?= htmlspecialchars($mahasiswa['nim']) ?>
                    </td>

                </tr>

                <tr>

                    <th>Nama</th>

                    <td>
                        <?= htmlspecialchars($mahasiswa['nama']) ?>
                    </td>

                </tr>

                <tr>

                    <th>Program Studi</th>

                    <td>
                        <?= htmlspecialchars($mahasiswa['prodi']) ?>
                    </td>

                </tr>

            </table>

        <?php else: ?>

            <p>
                Data mahasiswa tidak ditemukan.
            </p>

        <?php endif; ?>


        <a
            class="back"
            href="mahasiswa"
        >
            Kembali ke Mahasiswa
        </a>

    </div>

</body>

</html>