<!DOCTYPE html>
<html lang="en">
<?php
    include "../koneksi.php";
    $sql = "SELECT nm_barang, jumlah,tanggal FROM dt_penjualan, barang where dt_penjualan.id_barang = barang.id_barang";
    $query = $koneksi->query($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Data Penjualan</title>
</head>
<body>
<div class="container-tabel">
    <h1>Data Penjualan Barang</h1>
    <table class="tabel">
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah Barang Terjual</th>
            <th>Tanggal Terjual</th>
        </tr>
        <?php while($data = $query->fetch_array()) :?>
            <tr>
                <td><?php echo $data['nm_barang'] ?></td>
                <td><?php echo $data['jumlah'] ?></td>
                <td><?php echo $data['tanggal'] ?></td>
            </tr>
        <?php endwhile?>
    </table>
    <a href="../home.php">Kembali</a>
</div>
</body>
</html>