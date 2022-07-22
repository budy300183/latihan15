<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_latihan');

if (!$conn) {
	die("Koneksi Tidak Berhasil: ".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Peserta Kursus</title>
</head>
<body>
<center>
	<h2>Peserta Kursus</h2>
	<table border="1">
		<tr>
			<td>No.</td>
			<td>Nama</td>
			<td>Jender</td>
			<td>Tanggal_lahir</td>
			<td>Email</td>
			<td>Alamat</td>
			<td>No_hp</td>
			<td>Jenis_kursus</td>
			<td>Jadwal</td>
			<td>Action</td>
		</tr>
		<?php
		$tb = "SELECT * FROM tb_latihan";
		$query = mysqli_query($conn, $tb);
		while ($data = mysqli_fetch_row($query)){	
		?>
		<tr>
			<td><?= $data[0]; ?></td>
			<td><?= $data[1]; ?></td>
			<td><?= $data[2]; ?></td>
			<td><?= $data[3]; ?></td>
			<td><?= $data[4]; ?></td>
			<td><?= $data[5]; ?></td>
			<td><?= $data[6]; ?></td>
			<td><?= $data[7]; ?></td>
			<td><?= $data[8]; ?></td>
			<td><a href='edit_peserta.php?id=<?=$data['0'];?>'>Edit</a> | <a href='delete_peserta.php?id=<?=$data['0'];?>'>Delete</a></td>
		</tr>
		<?php
	}
	?>
	</table>
</center>
</body>
</html>