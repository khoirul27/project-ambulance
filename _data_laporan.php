<?php
require_once('layout/_koneksi.php');

if(isset($_POST['lapor'])){
    date_default_timezone_set("Asia/Jakarta");
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $waktu = date("Y/m/d H:i:s");
    $kasus = $_POST['kasus'];

    $namaFile = date('YmdHis').'.jpg';
    $namaSementara = $_FILES['foto']['tmp_name'];
    $dirUpload = "foto/";
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    $no_tlp = $_POST['no_tlp'];
    
    $query = "INSERT INTO pasien VALUES('','$nama','$alamat','$waktu','$kasus','$namaFile','$no_tlp')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}

if(isset($_GET['hapus'])){
    $foto = $_GET['hapus'];
    $query = "DELETE from pasien where foto='$foto'";
    unlink('foto/'.$foto);
    mysqli_query($conn, $query);

    echo "<script> alert('Data anda berhasil di hapus'); </script>"; 
    echo "<script> window.location.href = 'admin.php'; </script>";
}

?>