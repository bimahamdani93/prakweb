<?php
    session_start();
    include "../koneksi.php";
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    if (isset($_SESSION['username'])) {
        if ($_SESSION['level'] == 'Admin') {
            $sql = "INSERT INTO dt_pembelian (id_barang,tanggal,jumlah) values ('$id_barang','$tanggal','$jumlah')";
            $query = $koneksi->query($sql);
            if ($query == true) {
                echo "<script>
                        alert('Data Barang berhasil dibeli');
                        window.location.href = ('tabel_pembelian.php');
                    </script>";
            }else {
                echo "<script>
                        alert('Pembelian Gagal');
                        window.location.href = ('form_pembelian.php');
                    </script>";
            }
        }
       
    }
?>

