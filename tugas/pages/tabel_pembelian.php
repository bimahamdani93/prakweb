<!DOCTYPE html>
<html lang="en">
<?php
    include "../koneksi.php";
    $sql = "SELECT nm_barang, jumlah,tanggal FROM dt_pembelian, barang where dt_pembelian.id_barang = barang.id_barang";
    $query = $koneksi->query($sql);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Data Pembelian</title>
</head>
<body>
    <div class="container-tabel">
        <a href="../home.php">Kembali</a>
        <h1>Data Pembelian Barang</h1>
        <table class="tabel" >
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah Pembelian Barang</th>
                <th>Tanggal Pembelian</th>
            </tr>
            <?php while($data = $query->fetch_array()) :?>
                <tr>
                    <td><?php echo $data['nm_barang'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td><?php echo $data['tanggal'] ?></td>
                </tr>
            <?php endwhile?>
        </table>
        <a href="form_pembelian.php">Beli Barang</a>
    </div>
</body>
</html>