<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
   
    <h2>REGISTER</h2>
   
    <form action="aksi_register.php" method="post">
        <table>
            <tr>
            <td><label><b>Username :</b></label></td>
            <td><input name="username" type="text" required></td>
            </tr>
            <tr>
            <td><label><b>Password :</b></label></td>
            <td><input name="password" type="password" required></td>
            </tr>
            <tr>
            <td><label><b>Ulangi Password :</b></label></td>
            <td><input name="ulangipassword" type="password" required></td>
            </tr>
            <tr>
            <td><label><b>Nama Lengkap :</b></label></td>
            <td><input name="namalengkap" type="text" required></td>
            </tr>
            <tr>
            <td><label><b>Email :</b></label></td>
            <td><input name="email" type="email" required></td>
            </tr>
            <tr>
            <td><label><b>Level :</b></label></td>
            <td>  
                <select name="level">
                    <option value="Admin">Admin</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Dosen">Dosen</option>
                </select>
            </td>
            </tr>
            <tr>
            <td> 
                <input  type="submit" value="Submit"> 
                |
                <input  type="reset" value="Reset">
            </td>
            <td></td>
            </tr>
        </table>
    </form>
</body>
</html>