<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/authstyle.css">
    <title>register</title>
</head>
<body>

<div class="box"> 
    <form action="act_register.php" method="POST">
        <table>
            <tr>
                <td><label><b>Username</b></label></td>
                <td>:</td>
                <td><input name="username" type="text" required></td>
            </tr>
            <tr>
                <td><label><b>Password</b></label></td>
                <td>:</td>
                <td><input name="password" type="password" required></td>
            </tr>
            <tr>
                <td><label><b>Ulangi Password</b></label></td>
                <td>:</td>
                <td><input name="ulangipassword" type="password" required></td>
            </tr>
            <tr>
                <td><label><b>Nama Lengkap</b></label></td>
                <td>:</td>
                <td><input name="namalengkap" type="text" required></td>
            </tr>
            <tr>
                <td><label><b>Email</b></label></td>
                <td>:</td>
                <td><input name="email" type="email" required></td>
            </tr>
            <tr>
                <td><label><b>Level</b></label></td>
                <td>:</td>
                <td>  
                       <select name="level">
                        <option value="Admin">Admin</option>
                        <option value="Pengguna">Pengguna</option>
                    </select>
                </td>
            </tr>
            <tr class="button">
                <td colspan="3"> 
                    <input  type="submit" value="Submit" class="tombol"> 
                    <input  type="reset" value="Reset" class="tombol">
                </td>
            </tr>
        </table>
    </form>
    <p>already have an account? <a href="../login/form_login.php">login</a></p>
</div>

</body>
</html>