<?php
require_once('layout/_koneksi.php');
if(isset($_POST['berita'])){
    date_default_timezone_set("Asia/Jakarta");
    $isi = $_POST['isi'];
    $judul = $_POST['judul'];
    $waktu = date("Y/m/d H:i:s");
    
    $namaFile = date('YmdHis').'.jpg';
    $namaSementara = $_FILES['foto_berita']['tmp_name'];
    $dirUpload = "foto_berita/";
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    $query = "INSERT INTO berita VALUES('','$isi','$namaFile','$judul','$waktu')";
    mysqli_query($conn,$query);

    echo "<script> window.location.href = 'berita_harian_admin.php'; </script>";
}

if(isset($_GET['hapus'])){
    $foto_berita = $_GET['hapus'];
    $query = "DELETE from berita where foto_berita='$foto_berita'";
    unlink('foto_berita/'.$foto_berita);
    mysqli_query($conn, $query);

    echo "<script> alert('Data anda berhasil di hapus'); </script>"; 
    echo "<script> window.location.href = 'berita_harian_admin.php'; </script>";
}

if (isset($_POST['update_berita'])){
    $id_berita = $_POST['id_berita'];
    $isi = $_POST['isi'];
    $judul = $_POST['judul'];
    $namaFile = date('YmdHis').'.jpg';
    $namaSementara = $_FILES['foto_berita']['tmp_name'];
    $dirUpload = "foto_berita/";
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    $query = "UPDATE berita SET 
    isi = '$isi',
    judul = '$judul',foto_berita = '$namaFile' WHERE  id_berita ='$id_berita'";
   
    mysqli_query($conn, $query);
    header("Location: berita_harian_admin.php");   
}
?>