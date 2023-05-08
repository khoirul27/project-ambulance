<?php
require_once('layout/_koneksi.php');
if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $namaFile = date('YmdHis').'.jpg';
    $namaSementara = $_FILES['foto_ambulance']['tmp_name'];
    $dirUpload = "foto_ambulance/";
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    $query = "INSERT INTO data_ambulance VALUES('','$nama','$alamat','$no_tlp','$namaFile')";
    mysqli_query($conn,$query);

    echo "<script> window.location.href = 'data_ambulance.php'; </script>";
}

if(isset($_GET['hapus'])){
    $foto_ambulance = $_GET['hapus'];
    $query = "DELETE from data_ambulance where foto_ambulance='$foto_ambulance'";
    unlink('foto_ambulance/'.$foto_ambulance);
    mysqli_query($conn, $query);

    echo "<script> alert('Data anda berhasil di hapus'); </script>"; 
    echo "<script> window.location.href = 'data_ambulance.php'; </script>";
}

if (isset($_POST['update_ambulance'])){
    $id_ambulance = $_POST['id_ambulance'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];
    $namaFile = date('YmdHis').'.jpg';
    $namaSementara = $_FILES['foto_ambulance']['tmp_name'];
    $dirUpload = "foto_ambulance/";
    move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    
    $query = "UPDATE data_ambulance SET 
    nama = '$nama',
    alamat = '$alamat',no_tlp ='$no_tlp',foto_ambulance = '$namaFile' WHERE  id_ambulance ='$id_ambulance'";
   
    mysqli_query($conn, $query);
    header("Location: data_ambulance.php");   
}

?>