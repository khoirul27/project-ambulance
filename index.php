<?php require_once('layout/_koneksi.php');
session_start();
$query = "SELECT * FROM data_ambulance order by id_ambulance ASC";
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

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-7">
                <div class="header-text">
                  <h6>Sugeng rawuh</h6>
                  <h4><em>wiuwiu</em> Siap membantu di keadaan apapun</h4>
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@mdo">Hubungi ambulance</button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <form action="_data_laporan.php" method="post" enctype="multipart/form-data">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Nama :</label>
                              <input type="text" class="form-control" id="recipient-name" name="nama">
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">No telfon :</label>
                              <input type="text" class="form-control" id="recipient-name" name="no_tlp">
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Lokasi :</label>
                              <textarea class="form-control" id="message-text" name="alamat"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Kasus :</label>
                              <textarea class="form-control" id="message-text" name="kasus"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="formFile" class="form-label ">Foto :</label>
                              <input class="form-control" type="file" name="foto"
                                accept="image/png, image/gif, image/jpeg" name="foto"
                                accept="image/png, image/gif, image/jpeg">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn btn-danger" name="lapor">Kirim</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ***** Banner End ***** -->

        <!-- ***** Live Stream Start ***** -->
        <div class="live-stream">
          <div class="col-lg-12">
            <div class="heading-section">
              <h4><em>Data</em> Ambulance</h4>
            </div>
          </div>
          <div class="row">
            <?php ;
            foreach ($output as $id_ambulance) { ?>
              <div class="col-lg-3 col-sm-6 mb-3">
                <div class="item">
                  <div class="thumb">
                    <img src="foto_ambulance/<?= $id_ambulance['foto_ambulance'] ?>" style="width: 150px;">
                  </div>
                  <div class="down-content">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                          d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                      </svg></i>
                      <?= $id_ambulance['alamat'] ?>
                    </span>
                  </div>
                  <div class="down-content">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                      </svg></i>
                      <?= $id_ambulance['no_tlp'] ?>
                    </span>
                  </div>
                  <h4>
                    <div class="my-3 ">
                      <?= $id_ambulance['nama'] ?>
                    </div>
                  </h4>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <!-- ***** Live Stream End ***** -->

      </div>
    </div>
  </div>
  </div>

  <?php require_once('layout/_footer.php'); ?>

  <?php require_once('layout/_js.php'); ?>

</body>

</html>