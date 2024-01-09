<html lang="en">
<head>
    <title>Isi Data</title>
</head>
<body>
    <h1 align="center">Isi Data Diri</h1>
    <form action="biodata.php" method="POST">
        <input type="text" name="time" value="<?= date ("D, m-F-Y [ g:i:s a ]") ?>" hidden>
        <table width="400" align="center" cellpadding="5" cellspacing="2">
            <tr><td width="150">Nama</td>   <td><input type="text" name="nama"></td></tr>
            <tr><td width="150">Email</td>  <td><input type="text" name="email"></td></tr>
            <tr><td width="150">NPM</td>    <td><input type="text" name="NPM"></td></tr>
            <tr><td width="150">Tempat Lahir</td>   <td><input type="text" name="TempatLahir"></td></tr>
            <tr><td width="150">Tanggal Lahir</td>  <td><input type="date" name="TanggalLahir"></td></tr>
            <tr><td width="150">Alamat</td> <td><textarea name="Alamat" cols="20" rows="10"></textarea></td></tr>
            <tr><td width="150">Pendidikan Terakhir</td>    <td><input type="text" name="Pendidikan"></td></tr>
            <tr><td width="150">No Telepon</td> <td><input type="text" name="Telp"></td></tr>
            <tr><td align="center"><input type="submit" name="btnLogin" value="Submit"></td>
                <td align="center"><input type="reset" name="reset" value="Reset"></td></tr>
        </table>
    </form>
</body>
</html>
