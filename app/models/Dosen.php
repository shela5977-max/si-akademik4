<?php
class Dosen
{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function getAll()
	{
		$stmt = $this->pdo->query(
			"SELECT * FROM dosen ORDER BY nama ASC"
		);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getById($id)
	{
		$stmt = $this->pdo->prepare(
			"SELECT * FROM dosen WHERE id = :id"
		);
		$stmt->execute(['id' => $id]);

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function create($nidn, $nama, $bidangKeahlian)
	{
		$stmt = $this->pdo->prepare(
			"INSERT INTO dosen (nidn, nama, bidang_keahlian)
			 VALUES (:nidn, :nama, :bidang_keahlian)"
		);

		return $stmt->execute([
			'nidn' => $nidn,
			'nama' => $nama,
			'bidang_keahlian' => $bidangKeahlian
		]);
	}

	public function update($id, $nidn, $nama, $bidangKeahlian)
	{
		$stmt = $this->pdo->prepare(
			"UPDATE dosen
			 SET nidn = :nidn, nama = :nama,
				 bidang_keahlian = :bidang_keahlian
			 WHERE id = :id"
		);

		return $stmt->execute([
			'id' => $id,
			'nidn' => $nidn,
			'nama' => $nama,
			'bidang_keahlian' => $bidangKeahlian
		]);
	}

	public function delete($id)
	{
		$stmt = $this->pdo->prepare(
			"DELETE FROM dosen WHERE id = :id"
		);

		return $stmt->execute(['id' => $id]);
	}
}