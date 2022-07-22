<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi Kursus</title>
</head>
<body>
<h2>Registrasi Kursus</h2>
<form action="tampil.php" method="POST">
	Nama : <input type="text" name="Nama"><br>
	Jender : <input type="text" name="Jender"><br>
	Tanggal_Lahir : <input type="date" name="Tanggal_lahir"><br>
	Email : <input type="email" name="Email"><br>
	Alamat : <input type="text" name="Alamat"><br>
	No_Hp : <input type="char" name="No_hp"><br>
	Jenis_Kursus : <input type="text" name="Jenis_kursus"><br>
	Jadwal : <input type="text" name="Jadwal"><br>
	<input type="submit" name="Simpan" value="Send">
	<input type="reset" name="Cancel" value="Cancel">        
</form>
</body>
</html>