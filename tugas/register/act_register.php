<?php
    include "../koneksi.php";
    $username = $_POST['username'];
    $pwd = md5($_POST['password']);
    $cekPwd = md5($_POST['ulangipassword']);
    $level = $_POST['level'];
    $email = $_POST['email'];
    $nmLengkap = $_POST['namalengkap'];
    
    if ($pwd == $cekPwd) {
        $sql = "INSERT INTO `si_jualbeli`.`register` (`username`, `password`, `email`,`namalengkap`, `level`) 
                VALUES ('$username', '$pwd', '$email', '$nmLengkap','$level');";
        $query = $koneksi->query($sql);
        if ($query == true) {
            echo "
                <script>
                    alert('Anda Sukses Registrasi');
                    window.location.href = ('form_register.php');
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Error');
                    window.location.href = ('form_register.php');
                </script>
            ";
        }
   }else{
        echo "
            <script>
                alert('Ulangi, Password Anda tidak sama');
                window.location.href = ('form_register.php');
            </script>
        ";
   }

?>