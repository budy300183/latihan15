<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_latihan');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = isset($_GET['id']);
$query = "SELECT * FROM tb_latihan WHERE id = '$id'";
$hasil = mysqli_query($conn, $query);
$isi = mysqli_fetch_array($hasil);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Edit Peserta Kursus</title>
</head>
<body>
	<h1>Edit Peserta Kursus</h1>
<form action="peserta.php" method="GET">
<table>

	<tr>
		<input type="hidden" name="id" value="<?=$isi['id'];?>">
		<td>Nama : </td>
		<td><input type="text" name="Nama" value="<?=$isi['Nama'];?>"></td>
	</tr>
	<tr>
		<td>Jender : </td>
		<td><input type="text" name="Jender" value="<?=$isi['Jender'];?>"></td>
	</tr>
	<tr>
		<td>Tanggal_lahir : </td>
		<td><input type="Date" name="Tanggal_lahir" value="<?=$isi['Tanggal_lahir'];?>"></td>
	</tr>
	<tr>
		<td>Email : </td>
		<td><input type="email" name="Email" value="<?=$isi['Email'];?>"></td>
	</tr>
	<tr>
	<td>Alamat : </td>
		<td><input type="text" name="Alamat" value="<?=$isi['Alamat'];?>"></td>
	</tr>
	<tr>
	<td>No_hp : </td>
		<td><input type="text" name="No_hp" value="<?=$isi['No_hp'];?>"></td>
	</tr>
	<tr>
	<td>Jenis_kursus : </td>
		<td><input type="text" name="Jenis_kursus" value="<?=$isi['Jenis_kursus'];?>"></td>
	</tr>
	<tr>
	<td>Jadwal : </td>
		<td><input type="text" name="Jadwal" value="<?=$isi['Jadwal'];?>"></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="submit" name="edit" value="Edit">
			<input type="reset" name="cancel" value="Cancel">
		</td>
	</tr>
</table>	
</form>
</body>
</html>
