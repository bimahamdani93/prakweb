<!DOCTYPE html>
<html lang="en">
<?php
    include "../koneksi.php";
    $sql_select = "SELECT * FROM barang";
    $query = $koneksi->query($sql_select);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Pembelian</title>
</head>
<body>
    <div class="container-form">
    <div>
        <h2>Pembelian Barang</h2>
    </div>
    <form action="act_pembelian.php" method="POST">
        <label><b>Nama Barang</b></label><br>
        <select name="id_barang">
            <?php while($data = $query->fetch_array()) :?>
                <option value="<?php echo $data['id_barang'];?>"><?php echo $data['nm_barang']." (Rp".$data['harga']."/pcs)"; ?></option>
            <?php endwhile?>
        </select><br>
        <label><b>Jumlah Barang</b></label>
        <input name="jumlah" type="text" placeholder="masukkan jumlah barang"> 
        <label><b>Tanggal Pembelian</b></label>
        <input name="tanggal" type="date">
        <br>
        <input type="submit" value="Beli" >
        <a href="../home.php" >Kembali</a>
    </form>
    </div>
</body>
</html>