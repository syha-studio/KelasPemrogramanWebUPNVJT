<?php
//koneksi ke database ============================================================================
$conn = mysqli_connect("localhost","root","","latihan");
//umum ===========================================================================================
function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}
//Aduan ======================================================================================
function tambahAdu ($data) {
    global $conn;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $namaLengkap = htmlspecialchars($data["namaLengkap"]);
    $NPM = htmlspecialchars($data["NPM"]);
    $programStudi = htmlspecialchars($data["programStudi"]);
    $aduan = htmlspecialchars($data["aduan"]);
    $query = "INSERT INTO usersadu VALUES (
        '$username','$password','$email','$namaLengkap','$NPM','$programStudi','$aduan')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>