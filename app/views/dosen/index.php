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

		.button-dashboard {
			background: #496a5a;
			color: white;
		}

		.button-mahasiswa {
			background: #dce9df;
			color: #385044;
		}

		.button-add,
		.button-edit {
			background: #496a5a;
			color: white;
		}

		.button-delete {
			background: #f3d7d7;
			color: #8a3030;
			border: 0;
			cursor: pointer;
			font: inherit;
		}

		.inline-form {
			display: inline;
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
					<th>No</th>
					<th>NIDN</th>
					<th>Nama</th>
					<th>Bidang Keahlian</th>
					<th>Aksi</th>
				</tr>

			</thead>

			<tbody>

				<?php foreach (($dosen ?? []) as $index => $item): ?>

					<tr>

						<td>
							<?= $index + 1 ?>
						</td>

						<td>
							<?= htmlspecialchars($item['nidn'], ENT_QUOTES, 'UTF-8') ?>
						</td>

						<td>
							<?= htmlspecialchars($item['nama'], ENT_QUOTES, 'UTF-8') ?>
						</td>

						<td>
							<?= htmlspecialchars($item['bidang_keahlian'], ENT_QUOTES, 'UTF-8') ?>
						</td>

						<td>
							<a
								class="button button-edit"
								href="/si-akademik4/public/dosen/edit?id=<?= htmlspecialchars(urlencode($item['id']), ENT_QUOTES, 'UTF-8') ?>"
							>
								Edit
							</a>

							<form
								class="inline-form"
								action="/si-akademik4/public/dosen/delete"
								method="post"
								onsubmit="return confirm('Hapus data dosen ini?');"
							>
								<input type="hidden" name="id" value="<?= htmlspecialchars($item['id'], ENT_QUOTES, 'UTF-8') ?>">
								<button class="button button-delete" type="submit">Hapus</button>
							</form>
						</td>

					</tr>

				<?php endforeach; ?>

			</tbody>

		</table>

		<div class="button-area">

			<a
				class="button button-add"
				href="/si-akademik4/public/dosen/create"
			>
				Tambah Dosen
			</a>

			<a
				class="button button-dashboard"
				href="/si-akademik4/public/dashboard"
			>
				Dashboard
			</a>

			<a
				class="button button-mahasiswa"
				href="mahasiswa"
			>
				Daftar Mahasiswa
			</a>

		</div>

	</div>

</body>

</html>