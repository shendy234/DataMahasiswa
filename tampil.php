<!DOCTYPE html>
<html>
<head>
	<title>Tampil Data Mahasiswa</title>
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<table border="1">
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Opsi</th>
		</tr>
		<?php
		require_once 'database.php';
		$database = new Database();
		$result = $database->tampil();
		$i = 1;
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $i++ . "</td>";
			echo "<td>" . $row['nama'] . "</td>";
			echo "<td>" . $row['alamat'] . "</td>";
			echo "<td>" . $row['umur'] . "</td>";
			echo '<td><a href="hapus.php?id=' . $row['id'] . '">Hapus</a></td>';
			echo "</tr>";
		}
		?>
	</table>
	<br>
	<h1>Tambah Data Mahasiswa</h1>
	<form action="simpan.php" method="post">
		<table>
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Alamat:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Umur:</td>
				<td><input type="number" name="umur" required></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>