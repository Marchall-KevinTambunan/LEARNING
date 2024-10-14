<?php include 'db_connect.php'; ?>

<form method="post" action="">
    Fullname: <input type="text" name="fullname"><br>
    Address: <textarea name="address"></textarea><br>
    Gender: <select name="gender">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    Position: <input type="text" name="position"><br>
    Handphone: <input type="text" name="handPhone"><br>
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    Role: <select name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select><br>
    <input type="submit" name="submit" value="Simpan">
</form>

<?php
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $handPhone = $_POST['handPhone'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
    $role = $_POST['role'];

    $sql = "INSERT INTO AS_INDIVIDU (fullname, address, gender, position, handPhone, username, password, role)
            VALUES ('$fullname', '$address', '$gender', '$position', '$handPhone', '$username', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
