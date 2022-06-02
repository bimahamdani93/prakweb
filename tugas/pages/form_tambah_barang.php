<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>tambah-barang</title>
</head>
<body>
    <div class="container-form">
    <div>
        <h2>Tambah Barang</h2>
    </div>
    <form action="act_tambah_barang.php" method="POST">
        <label><b>Nama Barang</b></label>
        <input name="nm_barang" type="text" placeholder="masukkan nama barang">
        <label><b>Harga</b></label>
        <input name="harga" type="text" placeholder="masukkan harga">
        <label><b>Stok</b></label>
        <input name="stok" type="text" placeholder="masukkan stok">
        <br>
        <input type="submit" value="Tambah">
        <a href="../home.php" class="w3-btn w3-blue-grey">Kembali</a>
    </form>
    </div>
</body>
</html>