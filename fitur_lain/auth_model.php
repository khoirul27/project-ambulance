<?php
    $namahost = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "ambulance";
    $conn = mysqli_connect($namahost, $user, $password, $database);
    if (!$conn) {
        echo "Database tidak terhubung";
    }
?>
<?php

session_start();
session_destroy();
header('Location: login.php');

if (isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $password = md5($_POST['password']);
    $no_tlp = $_POST['no_tlp'];
    
    $query = "INSERT INTO penjual VALUES('','$nama','$nik','$password','$no_tlp')";
    mysqli_query($conn,$query);
}

if (isset($_POST['login_penjual'])) {
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM penjual where nama= '$nama'";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);

    if ($password == $data['password']) {
        session_start();
        $_SESSION['nama'] = $data['nama'];
        header("Location: login.php");
    } else {
        header("Location: barang.php");
    }
}
?>