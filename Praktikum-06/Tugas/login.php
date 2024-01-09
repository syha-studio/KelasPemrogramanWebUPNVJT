<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1 align="center">LOGIN</h1>
    <form action="dashboard.php" method="POST">
        <input type="text" name="time" value="<?= date ("D, m-F-Y [ g:i:s a ]") ?>" hidden>
        <table width="400" align="center" cellpadding="5" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="btnLogin" value="Login">
                </td>
                <td align="center">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
