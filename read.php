<?php
include 'db_connect.php';

$sql = "SELECT * FROM AS_INDIVIDU";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>UserID</th>
                <th>Fullname</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>HandPhone</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['userID']}</td>
                <td>{$row['fullname']}</td>
                <td>{$row['address']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['position']}</td>
                <td>{$row['handPhone']}</td>
                <td>{$row['username']}</td>
                <td>{$row['role']}</td>
                <td>
                    <a href='update.php?id={$row['userID']}'>Edit</a> | 
                    <a href='delete.php?id={$row['userID']}'>Hapus</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data";
}
?>
