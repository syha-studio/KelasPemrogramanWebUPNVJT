<?php
include "login.php";
if (empty($_POST['nama']) || empty($_POST['email'])){
    header("Location:redirect.php");
}
?>

<html lang="en">
<head>
    <title>Dashboard</title>
</head>
<body align = "center">
        <h1>DETAIL LOGIN</h1>
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
                <td width="130">Waktu Login</td>
                <td><?= $_POST['time']?></td>
            </tr>
        </table>
    </div>
</body>
</html>