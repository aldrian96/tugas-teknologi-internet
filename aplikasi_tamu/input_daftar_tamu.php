<?php
// Session akan dibahas pada materi selanjutnya
include "session_check.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku Tamu</title>
</head>
<body>
    <center>
    <h1>FORM BUKU TAMU</h1>
    <h2>Universitas Komputer Indonesia</h2>
    <hr>
    <form action="proses_input_tamu.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td><input type="number" name="notelp"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="4" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" rows="4" cols="50"></textarea></td>
            </tr>
        </table>
        <input type="submit" value="Simpan">
        <input type="reset" value="Reset">
    </form>
    <hr>
    <a href="daftar_tamu.php">Kembali ke Daftar Tamu</a>
    <br>
    <?php
    if (!empty($_GET["pesan"])) {
        // Jika pesan gagal
        if ($_GET["pesan"] == "gagal") {
            echo "<p>Form wajib diisi semua</p>";
        }
    }
    ?>
    </center>
</body>
</html>
