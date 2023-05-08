<?php
require_once("layout/_koneksi.php");
$id_ambulance = $_GET['id_ambulance'];
$query = "SELECT * FROM data_ambulance where id_ambulance = '$id_ambulance'";
$output = mysqli_query($conn, $query);

session_start();
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

                    <!-- ***** Featured Games Start ***** -->
                    <?php foreach ($output as $id_ambulance) { ?>
                        <form action="_data_ambulance.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_ambulance" value="<?= $id_ambulance['id_ambulance'] ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" header-text">
                                        <div class="heading-section">
                                            <h4><em>Edit</em> Data Ambulance</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="formFileMultiple" class="form-label text-light">nama :</label>
                                                <input class="form-control" name="nama" type="text" value="<?= $id_ambulance['nama'] ?>">
                                            </div>
                                            <div class="col-6">
                                                <label for="formFileMultiple" class="form-label text-light">Foto :</label>
                                                <img src="foto_ambulance/<?= $id_ambulance['foto_ambulance'] ?>" style="width: 150px;">
                                                <input class="form-control mt-3" name="foto_ambulance" type="file" id="formFileMultiple" multiple>
                                            </div>
                                            <div class="mt-3 col-6">
                                                <label for="formFileMultiple" class="form-label text-light">No Telfon :</label>
                                                <input class="form-control" name="no_tlp" type="text" value="<?= $id_ambulance['no_tlp'] ?>">
                                            </div>
                                            <div class="form-floating mt-3 col-6">
                                                <p class="text-light">alamat :</p>
                                                <textarea class="form-control" name="alamat" style="height: 100px"><?= $id_ambulance['alamat'] ?></textarea>
                                            </div>
                                        </div>
                                        <button class="btn btn-danger mt-3" name="update_ambulance" type="submit">kirim</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('layout/_footer.php'); ?>

    <?php require_once('layout/_js.php'); ?>


</body>

</html>