<?php
require_once("layout/_koneksi.php");

session_start();
$query = "SELECT * FROM pasien order by id_pasien ASC";
$output = mysqli_query($conn, $query);

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Wiuwiu</title>

    <?php require_once('layout/_css.php'); ?>

</head>

<body>

    <?php require_once('layout/_header_admin.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">WAKTU</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">NO TELFON</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">KASUS</th>
                                <th scope="col">FOTO</th>
                                <th scope="col">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($output as $id_pasien) { ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                    </td>
                                    <td>
                                        <?= $id_pasien['waktu'] ?>
                                    </td>
                                    <td>
                                        <?= $id_pasien['nama'] ?>
                                    </td>
                                    <td>
                                        <?= $id_pasien['no_tlp'] ?>
                                    </td>
                                    <td>
                                        <?= $id_pasien['alamat'] ?>
                                    </td>
                                    <td>
                                        <?= $id_pasien['kasus'] ?>
                                    </td>
                                    <td><img src="foto/<?= $id_pasien['foto'] ?>" style="width: 250px;"></td>
                                    <td><a href="_data_laporan.php?hapus=<?= $id_pasien['foto']; ?>"
                                            onclick="return confirm('yakin mo hapus')">
                                            <button type="button" class="btn btn-danger">hapus</button></a></td>
                                </tr>
                                <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                    <!-- ***** Featured Start ***** -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feature-banner header-text">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="assets/images/2.png" width="50" alt="" style="border-radius: 23px;">
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="thumb">
                                            <im src="assets/images/feature-right.jpg" alt=""
                                                style="border-radius: 23px;">
                                                <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i
                                                        class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Featured End ***** -->
                </div>
            </div>
        </div>
    </div>

    <?php require_once('layout/_footer.php'); ?>

    <?php require_once('layout/_js.php'); ?>

</body>

</html>