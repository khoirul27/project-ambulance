<?php
require_once("layout/_koneksi.php");

$query = "SELECT * FROM berita order by id_berita desc limit 1";
$output = mysqli_query($conn, $query);
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

          <!-- ***** Details Start ***** -->
          <?php foreach ($output as $id_berita) { ?>
            <div class="game-details">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2>
                    <?= $id_berita['judul'] ?>
                  </h2>
                  <p class="my-4">
                    <?= $id_berita['waktu'] ?>
                  </p>
                </div>
                <div class="col-lg-12">
                  <div class="content">
                    <div class="row">
                      <div class="col text-center">
                        <img src="foto_berita/<?= $id_berita['foto_berita'] ?>" style="width:500px;">
                      </div>
                      <div class="col-lg-12 mt-3">
                        <p>
                          <?= $id_berita['isi'] ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- ***** Details End ***** -->
        </div>
      </div>
    </div>
  </div>

  <?php require_once('layout/_footer.php'); ?>

  <?php require_once('layout/_js.php'); ?>


</body>

</html>