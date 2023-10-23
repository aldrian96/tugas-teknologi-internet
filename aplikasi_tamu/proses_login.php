<?php
session_start();

// Import file config untuk koneksi ke database
require('dbconfig.php');

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
    header("location: login.php?pesan=gagal");
    // Menghentikan proses ke bawah
    exit;
}

// Mengubah password menjadi SHA1
$password_new = sha1($password);

// Cari data ke dalam db dengan username dan password yang sama
$data = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password_new'");

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: daftar_tamu.php");
} else {
    header("location: login.php?pesan=tidak_cocok");
}
?>
