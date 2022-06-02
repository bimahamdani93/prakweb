<?php
    session_start();
    include "../koneksi.php";
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    if (isset($_SESSION['username'])) {
        if ($_SESSION['level'] == 'Pengguna') {
            $sql = "INSERT INTO dt_penjualan (id_barang,tanggal,jumlah) values ('$id_barang','$tanggal','$jumlah')";
            $query = $koneksi->query($sql);
            if ($query == true) {
                echo "<script>
                        alert('Data Penjualan berhasil dinput');
                        window.location.href = ('tabel_penjualan.php');
                    </script>";
            }else {
                echo "<script>
                        alert('Pembelian Gagal');
                        window.location.href = ('form_penjualan.php');
                    </script>";
            }
        }
       
    }
?>

