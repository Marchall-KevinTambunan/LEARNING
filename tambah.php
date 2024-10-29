<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

$query = "INSERT INTO warga (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
mysqli_query($koneksi, $query);

header('Location: index.php');
?>
