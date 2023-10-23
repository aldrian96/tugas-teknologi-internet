<?php
// Menyisipkan file konfigurasi database
require('dbconfig.php');

// Mengambil data dari formulir input
$nama_tamu = $_POST['nama'];
$alamat_tamu = $_POST['alamat'];
$notelp_tamu = $_POST['notelp'];
$pesan_tamu = $_POST['pesan'];

// Form validasi
if ($nama_tamu == "" || $alamat_tamu == "" || $notelp_tamu == "" || $pesan_tamu == "") {
    header("location:input_daftar_menu.php?pesan=gagal");

    // Menghentikan proses ke bawah
    exit;
}

// Membuat waktu sekarang
$date = date("Y-m-d H:i:s");

// Melakukan query untuk memasukkan data ke database
$query = "INSERT INTO `buku_tamu` (`id`, `nama_tamu`, `alamat_tamu`, `notelp_tamu`, `pesan_tamu`, `tanggal_bertamu`) 
          VALUES (NULL, '$nama_tamu', '$alamat_tamu', '$notelp_tamu', '$pesan_tamu', '$date')";

$result = mysqli_query($mysqli, $query);

if ($result) {
    // Jika berhasil
    header("location:daftar_tamu.php");
    exit;
} else {
    echo "Error: " . "<br>" . mysqli_error($mysqli);
}
?>
