<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <div align="center">
        <h1>FORM LOGIN</h1>
        <hr>
        <form action="proses_login.php" method="post">
            <table>
                <tr>
                    <td> Username </td>
                    <td><input name="username" size="10"></td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td><input type="password" name="password" size="10"></td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="LOGIN">
            <a href="daftar_admin.php">Daftar</a>
        </form>

        <?php
        if (!empty($_GET["pesan"])) { 
            // Jika pesan gagal
            if ($_GET["pesan"] == "gagal"){ 
                echo "<p>Username dan Password wajib diisi</p>"; 
            } else if ($_GET["pesan"] == "tidak_cocok"){ 
                echo "<p>Username dan Password tidak cocok</p>"; 
            } 
        }
        ?>
    </div>
</body>
</html>

  
