<?php
$namahost = "127.0.0.1";
$user = "root";
$password = "";
$database = "ambulance";
$conn = mysqli_connect($namahost, $user, $password, $database);
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

    <?php require_once('layout/_header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Live Stream Start ***** -->

                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em></em>Barang</h4>
                        </div>
                    </div>
                    <div class="row">
                        <?php ;
                        foreach ($output as $id_ambulance) { ?>

                            <div class="col-lg-4 col-sm-6 mb-3">
                                <div class="item">
                                    <img src="assets/images/popular-01.jpg" alt="">
                                    <h4 class="mt-3">Fortnite</h4>
                                    <p>anu</p>
                                    <button class="btn btn-danger">Selengkapnya</button>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="item">
                                    <img src="assets/images/popular-01.jpg" alt="">
                                    <h4 class="mt-3">Fortnite</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="item">
                                    <img src="assets/images/popular-01.jpg" alt="">
                                    <h4 class="mt-3">Fortnite</h4>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="assets/images/popular-01.jpg" alt="">
                                    <h4 class="mt-3">Fortnite</h4>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- ***** Live Stream End ***** -->

            </div>
        </div>
    </div>

    <?php require_once('layout/_footer.php'); ?>

    <?php require_once('layout/_js.php'); ?>

</body>

</html>