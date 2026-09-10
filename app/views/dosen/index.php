<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Daftar Dosen</title>

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
        Daftar Dosen
    </h2>


    <table>

        <thead>

            <tr>

                <th>
                    NIDN
                </th>

                <th>
                    Nama Dosen
                </th>

                <th>
                    Program Studi
                </th>

            </tr>

        </thead>


        <tbody>

            <?php foreach (($dosen ?? []) as $dataDosen): ?>

                <tr>

                    <td>
                        <?= htmlspecialchars($dataDosen['nidn']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($dataDosen['nama']) ?>
                    </td>

                    <td>
                        <?= htmlspecialchars($dataDosen['prodi']) ?>
                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>


    <br>


    <a
        class="back"
        href="/si-akademik4/public/dashboard"
    >
        Kembali ke Dashboard
    </a>


    <a
        class="back"
        href="/si-akademik4/public/mahasiswa"
    >
        Mahasiswa
    </a>


    <a
        class="back"
        href="/si-akademik4/public/logout"
    >
        Logout
    </a>

</div>

</body>

</html>