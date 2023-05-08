<?php
require_once('layout/_koneksi.php');

session_start();
session_destroy();
header('Location: login.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM admin where username= '$username'";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);

    if ($password == $data['password']) {
        session_start();
        $_SESSION['username'] = $data['username'];
        header("Location: admin.php");
    } else {
        header("Location: login.php");
    }
}

?>