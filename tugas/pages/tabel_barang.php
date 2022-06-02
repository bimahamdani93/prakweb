<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include "../koneksi.php";
    $sql = "SELECT * FROM barang";
    $query = $koneksi->query($sql);
    $no = 1;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container-tabel">
        <?php
            if(isset($_SESSION['username'])){
                if ($_SESSION['level'] == 'Admin') {
                    echo '<a href="../home.php">Kembali</a>';
                }
            }
        ?>
        <h1>Data Barang</h1>
        <table class="tabel">
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
            <?php while ($data = $query->fetch_array()) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nm_barang'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['stok'] ?></td>
                </tr>
            <?php endwhile?>
        </table>
        <?php
            if (isset($_SESSION['username'])) {
                if ($_SESSION['level'] == 'Admin') {
                    echo '<a href="form_tambah_barang.php">Tambah Barang</a>';
                }elseif ($_SESSION['level'] == 'Pengguna') {
                    echo '<a href="../home.php">Kembali</a>';
                }
            }else {
                echo '<h2>Tolong login dulu</h2>';
                echo '<a href="../login/form_login.php" class="button-item">Login</a>';
            }
        ?>
    </div>
</body>
</html>