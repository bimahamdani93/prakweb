<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/authstyle.css">
    <title>Login</title>
</head>
<body>

    <div class="box">
    <form action="act_login.php?op=in" method="POST">
        <table>
            <tr>
                <td><label>Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td>:</td>
                <td><input type="password" name="psw"></td>
            </tr>
            <tr class="button">
            <td colspan="3"> 
                <input  type="submit" value="Login" class="tombol"> 
                <input  type="reset" value="Reset" class="tombol">
            </td>
            </tr>
        </table>
    </form>
    <p>don't have any account? <a href="../register/form_register.php">register</a></p>
    </div>

</body>
</html>