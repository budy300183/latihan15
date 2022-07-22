<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_latihan');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (!empty($_GET['id']))
    {
      $id = $_GET['id'];
      $query = "DELETE FROM tb_latihan WHERE id ='$id'";
      $result = mysqli_query($conn, $query) or die(mysql_error()); 
      echo'<script>alert("Data telah terhapus!!")</script>';
      echo '<meta http-equiv="refresh" content="0; url=peserta.php">';
    }  
?>
