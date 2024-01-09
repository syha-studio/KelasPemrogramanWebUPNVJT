<?php
if (empty($_POST['nama']) || empty($_POST['email'])
|| empty($_POST['NPM']) || empty($_POST['TempatLahir']) 
|| empty($_POST['TanggalLahir']) || empty($_POST['Alamat'])
|| empty($_POST['Pendidikan']) || empty($_POST['Telp'])){
    header("Location:redirect2.php");
}
?>

<html lang="en">
<head>
    <title>Biodata Mahasiswa</title>
</head>
<body align = "center">
        <h1>Biodata Mahasiswa</h1>
        <p>Waktu Submit</p>
        <p><?= $_POST['time']?></p>
        <table width="400" align="center" cellpadding="5" cellspacing="2">
            <tr>
                <td width="130">Nama</td>
                <td><?= $_POST['nama']?></td>
            </tr>
            <tr>
                <td width="130">Email</td>
                <td><?= $_POST['email']?></td>
            </tr>
            <tr>
                <td width="130">NPM</td>
                <td><?= $_POST['NPM']?></td>
            </tr>
            <tr>
                <td width="130">Tempat Lahir</td>
                <td><?= $_POST['TempatLahir']?></td>
            </tr>
            <tr>
                <td width="130">Tanggal Lahir</td>
                <td><?= $_POST['TanggalLahir']?></td>
            </tr>
            <tr>
                <td width="130">Alamat</td>
                <td><?= $_POST['Alamat']?></td>
            </tr>
            <tr>
                <td width="130">Pendidikan Terakhir</td>
                <td><?= $_POST['Pendidikan']?></td>
            </tr>
            <tr>
                <td width="130">No Telepon</td>
                <td><?= $_POST['Telp']?></td>
            </tr>
        </table>
    </div>
</body>
</html>

<?php
include "Isidata.php";
?>