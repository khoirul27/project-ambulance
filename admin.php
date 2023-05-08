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
    <script type="text/javascript">

        function displayTime() {
            var clientTime = new Date();
            var time = new Date(clientTime.getTime());
            var sh = time.getHours().toString();
            var sm = time.getMinutes().toString();
            var ss = time.getSeconds().toString();
            document.getElementById("jam").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
            document.getElementById("jaminput").value = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
        }
    </script>

</head>

<body onload="setInterval('displayTime()', 1000);">

    <?php require_once('layout/_header_admin.php'); ?>

    <!-- ***** Banner Start ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div class="header-text ">
                        <h1 id="jam"></h1>
                        <p> Siap membantu di keadaan apapun</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Tutup ***** -->

        <!-- ***** Data laporan ***** -->
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <table id="example" class="table table-light">
                            <div class="heading-section">
                                <h4><em>Data </em>laporan</h4>
                            </div>
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
                                        <td><img src="foto/<?= $id_pasien['foto'] ?>" style="width: 250px;">
                                        </td>
                                        <td><a href="_data_laporan.php?hapus=<?= $id_pasien['foto']; ?>"
                                                onclick="return confirm('yakin mo hapus')">
                                                <button type="button" class="btn btn-danger">hapus</button></a></td>
                                    </tr>
                                    <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                        <button class="btn btn-secondary"><a href="export_laporan.php">Export data</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Tutup Data laporan ***** -->


    <?php require_once('layout/_footer.php'); ?>

    <?php require_once('layout/_js.php'); ?>

</body>

</html>