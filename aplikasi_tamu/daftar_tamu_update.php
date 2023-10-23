<?php
// Session akan dibahas pada materi selanjutnya
include "session_check.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Tamu</title>
</head>
<body>
    <center>
    <?php
    require('dbconfig.php');

    $id_tamu = $_GET["id"];

    // Jika ID Tamu tidak ada
    if ($id_tamu == "") {
        header("location:input_daftar_tamu.php");
        die;
    }

    // Mengambil data tamu berdasarkan ID
    $data = mysqli_query($mysqli, "SELECT * FROM buku_tamu WHERE id = $id_tamu LIMIT 1");

    // Memeriksa apakah data ditemukan
    if (mysqli_num_rows($data) == 0) {
        header("location:daftar_tamu.php"); // Jika data tidak ditemukan, arahkan ke halaman daftar tamu
        die;
    }

    // Memproses data tamu yang ditemukan
    $res = mysqli_fetch_assoc($data);
    $nama_tamu = $res['nama_tamu'];
    $alamat_tamu = $res['alamat_tamu'];
    $notelp_tamu = $res['notelp_tamu'];
    $pesan_tamu = $res['pesan_tamu'];
    ?>

    <!-- Buat formulir untuk mengedit data tamu -->
    <form action="proses_update_tamu.php?id=<?php echo $id_tamu; ?>" method="post">
        <h1>Edit Data Tamu</h1>
        <h2>Universitas Komputer Indonesia</h2>
        <hr>
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_tamu" value="<?php echo $nama_tamu; ?>"></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td><input type="number" name="notelp_tamu" value="<?php echo $notelp_tamu; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat_tamu" rows="4" cols="50"><?php echo $alamat_tamu; ?></textarea></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan_tamu" rows="4" cols="50"><?php echo $pesan_tamu; ?></textarea></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Simpan Perubahan">
    </form>
    <hr>
    <br>
    </center>
</body>
</html>
