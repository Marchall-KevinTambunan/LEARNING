<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM AS_INDIVIDU WHERE userID=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $handPhone = $_POST['handPhone'];

    $sql = "UPDATE AS_INDIVIDU SET fullname='$fullname', address='$address', position='$position', handPhone='$handPhone' WHERE userID=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<form method="post" action="">
    Fullname: <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br>
    Address: <textarea name="address"><?php echo $row['address']; ?></textarea><br>
    Position: <input type="text" name="position" value="<?php echo $row['position']; ?>"><br>
    HandPhone: <input type="text" name="handPhone" value="<?php echo $row['handPhone']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>
