<?php
// Session akan dibahas pada materi selanjutnya
include "session_check.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus</title>
</head>
<body>
    <center>
    <?php
    require('dbconfig.php');

    $id_tamu = $_GET["id"];

    // Jika ID Tamu tidak ditemukan
    if ($id_tamu == "") {
        header("location:input_daftar_tamu.php");
        die;
    }

    $data = mysqli_query($mysqli, "SELECT * FROM buku_tamu WHERE id = $id_tamu LIMIT 1");
    ?>

    <form action="proses_hapus.php?id=<?php echo $id_tamu ?>" method="post">
        <h1>Konfirmasi Hapus</h1>
        <h2>Universitas Komputer Indonesia</h2>
        <hr>

        <table border="1">
            <?php
            while ($res = mysqli_fetch_assoc($data)) {
                echo "
                <tr>
                    <td> Nama </td>
                    <td>" . $res['nama_tamu'] . "</td>
                </tr>
                <tr>
                    <td> No. Telp </td>
                    <td>" . $res['notelp_tamu'] . "</td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td>" . $res['alamat_tamu'] . "</td>
                </tr>
                <tr>
                    <td> Pesan </td>
                    <td>" . $res['pesan_tamu'] . "</td>
                </tr>";
            }
            ?>
        </table>
        <br>
        <input type="submit" value="Konfirmasi Hapus">
    </form>
    <hr>
    <br>
    </center>
</body>
</html>
