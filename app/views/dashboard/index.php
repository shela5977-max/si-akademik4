<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

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
        }

        .menu {
            margin-top: 30px;
        }

        .menu a {
            display: inline-block;
            padding: 12px 20px;
            margin-right: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            background: #dce9df;
            color: #385044;
            border-radius: 5px;
        }

        .menu a:hover {
            background: #496a5a;
            color: white;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>
        Sistem Informasi Akademik
    </h1>

    <h2>
        Selamat datang,
        <?= htmlspecialchars($_SESSION['username']) ?>.
    </h2>


    <p>
        Silakan pilih menu:
    </p>


    <div class="menu">

        <a href="/si-akademik4/public/mahasiswa">
            Mahasiswa
        </a>

        <a href="/si-akademik4/public/dosen">
            Dosen
        </a>

        <a href="/si-akademik4/public/logout">
            Logout
        </a>

    </div>

</div>

</body>

</html>