<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga Desa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Warga Desa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM warga");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>
                <td>{$no}</td>
                <td>{$data['nama']}</td>
                <td>{$data['alamat']}</td>
                <td>{$data['umur']}</td>
                <td>
                    <a href='edit.php?id={$data['id']}'>Edit</a> |
                    <a href='hapus.php?id={$data['id']}' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                </td>
            </tr>";
            $no++;
        }
        ?>
    </table>

    <h2>Tambah Data Warga</h2>
    <form action="tambah.php" method="POST">
        <input type="text" name="nama" placeholder="Nama" required><br>
        <textarea name="alamat" placeholder="Alamat" required></textarea><br>
        <input type="number" name="umur" placeholder="Umur" required><br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
