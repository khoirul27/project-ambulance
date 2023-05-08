<?php
require_once("layout/_koneksi.php");
session_start();

$query = "SELECT * FROM berita order by id_berita ASC";
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

          <!-- ***** Input Berita ***** -->
          <form action="_data_berita.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-12">
                <div class=" header-text">
                  <div class="heading-section">
                    <h4><em>Input Berita</em> Harian </h4>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label for="formFileMultiple" class="form-label text-light">Judul :</label>
                      <input class="form-control" name="judul" type="text">
                    </div>
                    <div class="col-6">
                      <label for="formFileMultiple" class="form-label text-light">Foto :</label>
                      <input class="form-control" name="foto_berita" type="file" id="formFileMultiple" multiple>
                    </div>
                  </div>
                  <div class="form-floating mt-3">
                    <textarea class="form-control" name="isi" style="height: 100px"></textarea>
                  </div>
                  <script
                    src="https://cdn.tiny.cloud/1/cl88ejq22ovm3wwmcexw3t58s1ikn1o6wutowfg3pbtre433/tinymce/6/tinymce.min.js"
                    referrerpolicy="origin"></script>
                  <script>
                    tinymce.init({
                      selector: 'textarea',
                      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                      tinycomments_mode: 'embedded',
                      tinycomments_author: 'Author name',
                      mergetags_list: [
                        { value: 'First.Name', title: 'First Name' },
                        { value: 'Email', title: 'Email' },
                      ]
                    });
                  </script>
                  <button class="btn btn-danger mt-3" name="berita" type="submit">kirim</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- ***** Tutup Input Berita ***** -->

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-content">

              <table id="example" class="table table-light">

                <thead>
                  <tr>
                    <th scope="col">waktu</th>
                    <th scope="col">judul</th>
                    <th scope="col">aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($output as $id_berita) { ?>
                    <tr>
                      <td>
                        <?= $id_berita['waktu'] ?>
                      </td>
                      <td>
                        <?= $id_berita['judul'] ?>
                      </td>
                      <td><a href="_data_berita.php?hapus=<?= $id_berita['foto_berita']; ?>"
                          onclick="return confirm('yakin mo hapus')">
                          <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        <a href="edit_berita.php?id_berita=<?= $id_berita['id_berita'] ?>"
                          onclick="return confirm('yakin mo edit')">
                          <button type="button" class="btn btn-secondary" fdprocessedid="smw6hg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-tools" viewBox="0 0 16 16">
                              <path
                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z">
                              </path>
                            </svg>
                          </button>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once('layout/_footer.php'); ?>

  <?php require_once('layout/_js.php'); ?>

</body>

</html>