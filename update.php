<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

$query = "UPDATE warga SET nama='$nama', alamat='$alamat', umur='$umur' WHERE id=$id";
mysqli_query($koneksi, $query);

header('Location: index.php');
?>
