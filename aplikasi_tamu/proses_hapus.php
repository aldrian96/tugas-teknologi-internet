<?php
require('dbconfig.php');

$id_tamu = $_GET["id"];

// Melakukan query untuk menghapus data tamu
$query = "DELETE FROM `buku_tamu` WHERE id = $id_tamu";

$result = mysqli_query($mysqli, $query);

if ($result) {
    // Jika penghapusan berhasil
    header("location: daftar_tamu.php");
    exit;
} else {
    echo "Error: " . "<br>" . mysqli_error($mysqli);
}
?>
