<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM warga WHERE id=$id");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Warga</title>
</head>
<body>
    <h1>Edit Data Warga</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        <textarea name="alamat" required><?= $data['alamat'] ?></textarea><br>
        <input type="number" name="umur" value="<?= $data['umur'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
