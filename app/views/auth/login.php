<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Login - Sistem Informasi Akademik</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: #f5f7f6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #496a5a;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 11px;
            background: #496a5a;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #385044;
        }

        .error {
            color: red;
            background: #ffecec;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>
        Sistem Informasi Akademik
    </h1>

    <h2>
        Login
    </h2>


    <?php if (!empty($error)): ?>

        <div class="error">
            <?= htmlspecialchars($error) ?>
        </div>

    <?php endif; ?>


    <form
        method="POST"
        action="/si-akademik4/public/login/process"
    >

        <label>
            Username
        </label>

        <input
            type="text"
            name="username"
            placeholder="Masukkan username"
            required
        >


        <label>
            Password
        </label>

        <input
            type="password"
            name="password"
            placeholder="Masukkan password"
            required
        >


        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>

</html>