<?php
    session_start();
    include "../koneksi.php";
    $user = $_POST['username'];
    $psw = md5($_POST['psw']);
    $op = $_GET['op'];

    if ($op == "in") {
        $query1 = "SELECT * FROM register where username = '$user' AND password = '$psw';";
        $query = $koneksi->query($query1);
        if (mysqli_num_rows($query) == 1) {
            $data = $query->fetch_array();
            $_SESSION['username'] = $data['username'];
            $_SESSION['level'] = $data['level'];
            if ($data['level'] == "Admin") {
                header("location:../home.php");
            }elseif ($data['level'] == "Mahasiswa") {
                header("location:../home.php");
            }elseif ($data['level'] == "Dosen") {
                header("location:../home.php");
            }else{
                die("Password salah <a href=\"javascript:history.back()\">kembali</a>");
            }
        }
    }else if($op == "out"){
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        header("location:formlogin.php");
    }
?>