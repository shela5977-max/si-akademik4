<!DOCTYPE html>
<html lang="id">

<?php
$action = $action ?? 'store';
$dosen = $dosen ?? null;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $action === 'update' ? 'Edit Dosen' : 'Tambah Dosen' ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #333;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
        }

        h1 {
            color: #496a5a;
        }

        label {
            display: block;
            color: #385044;
            font-weight: bold;
            margin: 16px 0 6px;
        }

        input {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border: 1px solid #b8c9bc;
            border-radius: 4px;
        }

        .button-area {
            margin-top: 24px;
        }

        .button {
            display: inline-block;
            padding: 9px 15px;
            margin-right: 8px;
            border: 0;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            font: inherit;
        }

        .button-save {
            background: #496a5a;
            color: white;
        }

        .button-cancel {
            background: #dce9df;
            color: #385044;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><?= $action === 'update' ? 'Edit Dosen' : 'Tambah Dosen' ?></h1>

        <form
            action="/si-akademik4/public/dosen/<?= htmlspecialchars($action, ENT_QUOTES, 'UTF-8') ?>"
            method="post"
        >
            <?php if ($action === 'update'): ?>
                <input
                    type="hidden"
                    name="id"
                    value="<?= htmlspecialchars($dosen['id'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                >
            <?php endif; ?>

            <label for="nidn">NIDN</label>
            <input
                id="nidn"
                name="nidn"
                type="text"
                value="<?= htmlspecialchars($dosen['nidn'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                required
            >

            <label for="nama">Nama</label>
            <input
                id="nama"
                name="nama"
                type="text"
                value="<?= htmlspecialchars($dosen['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                required
            >

            <label for="bidang_keahlian">Bidang Keahlian</label>
            <input
                id="bidang_keahlian"
                name="bidang_keahlian"
                type="text"
                value="<?= htmlspecialchars($dosen['bidang_keahlian'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
                required
            >

            <div class="button-area">
                <button class="button button-save" type="submit">Simpan</button>
                <a class="button button-cancel" href="/si-akademik4/public/dosen">Batal</a>
            </div>
        </form>
    </div>
</body>

</html>