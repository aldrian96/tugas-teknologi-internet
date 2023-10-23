<?php
// Import file config untuk koneksi ke database
require('dbconfig.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

// Form validasi
if ($username == "" || $password == "" || $password2 == "") {
    header("location: daftar_admin.php?pesan=gagal");
    // Menghentikan proses ke bawah
    die;
}

// Jika password dan ulangi password berbeda
if ($password != $password2) {
    header("location: daftar_admin.php?pesan=password");
    // Menghentikan proses ke bawah
    die;
}

// Cek username
$data = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username'");
$cek = mysqli_num_rows($data);

// Jika username sudah terdaftar, maka kembali ke form pendaftaran
if ($cek > 0) {
    header("location: daftar_admin.php?pesan=username");
    // Menghentikan proses ke bawah
    die;
}

// Membuat SHA1 Password
$password_new = sha1($password);

$result = mysqli_query($mysqli, "INSERT INTO `admin` (`username`, `password`) VALUES ('$username', '$password_new')");

if ($result) {
    // Jika berhasil
    header("location: login.php");
    exit;
} else {
    echo "Error: " . "<br>" . mysqli_error($mysqli);
}
?>
