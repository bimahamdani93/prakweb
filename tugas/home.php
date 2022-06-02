<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "koneksi.php";
$username = $_SESSION['username'];
$sql = "SELECT * from register where username = '$username'";
$query = $koneksi->query($sql);
$data = $query->fetch_array();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homestyle.css">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <h1>Selamat Datang</h1>
        <table cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td><strong>Username</strong></th>
                <td><?php echo $data['username'] ?></td>
            </tr>
            <tr>
                <td><strong>Nama Lengkap</strong></th>
                <td><?php echo $data['namalengkap'] ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></th>
                <td><?php echo $data['email'] ?></td>
            </tr>
            <tr>
                <td><strong>Level</strong></th>
                <td><?php echo $data['level'] ?></td>
            </tr>
        </table>
    </div>
    <div class="menu">
        <h2>Pilih Menu</h2>
        <?php
        if (isset($_SESSION['username'])) {
            if ($_SESSION['level'] == 'Admin') {
                echo '<div class="container-menu">
                            <a href="pages/form_pembelian.php" class="button-menu">Input Data Pembelian</a>
                            <a href="pages/form_tambah_barang.php" class="button-menu">Input Barang</a>
                            </div>';
            } elseif ($_SESSION['level'] == 'Pengguna') {
                echo '<div class="container-menu">
                            <a href="pages/form_penjualan.php">Input Data Penjualan</a>
                            <a href="pages/tabel_barang.php" class="button-menu">Data Barang</a>
                            </div>';
            }
        } else {
            echo '<h2>Tolong login dulu</h2>';
            echo '<a href="form_login.php" class="button-item">Login</a>';
        }
        ?>
    </div>
    <div class="tombol"><a href="login/form_login.php" class="button-logout">Logout</a></div>
</body>

</html>