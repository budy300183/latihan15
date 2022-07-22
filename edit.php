<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_latihan');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET['id']; 
$n = $_GET['nama'];
$j = $_GET['jender'];
$t = $_GET['tanggal_lahir'];
$e = $_GET['email'];
$a = $_GET['alamat'];
$h = $_GET['no_hp'];
$k = $_GET['jenis_kursus'];
$d = $_GET['jadwal'];

if(isset($_GET["edit_peserta"])){
    $query = "UPDATE `tb_latihan` SET 
              `id`='$id',
              `nama`='$n',
              `jender`='$j',
              `tanggal_lahir`='$t',
              `email`='$e',
              `alamat`='$a',
              `no_hp`='$h',
              `jenis_kursus`='$k',
              `jadwal`='$d',
              WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                    alert('Data Berhasil di Update!');
                    document.location.href = 'peserta.php';
                </script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
  mysqli_close($conn);
?>
