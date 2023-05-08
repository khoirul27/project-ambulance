<?php
require_once("layout/_koneksi.php");
$id_berita = $_GET['id_berita'];
$query = "SELECT * FROM berita where id_berita = '$id_berita'";
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
                    <?php foreach ($output as $id_berita) { ?>
                        <form action="_data_berita.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_berita" value="<?= $id_berita['id_berita'] ?>">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" header-text">
                                        <div class="heading-section">
                                            <h4><em>Edit Berita</em> Harian </h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="formFileMultiple" class="form-label text-light">Judul :</label>
                                                <input class="form-control" name="judul" type="text"
                                                    value="<?= $id_berita['judul'] ?>">
                                            </div>
                                            <div class="col-6">
                                                <label for="formFileMultiple" class="form-label text-light mx-1">Foto :</label>
                                                <img src="foto_berita/<?= $id_berita['foto_berita'] ?>"
                                                    style="width:150px;">
                                                <input class="form-control mt-3" name="foto_berita" type="file"
                                                    id="formFileMultiple" multiple>
                                            </div>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <textarea class="form-control" name="isi"
                                                style="height: 100px"><?= $id_berita['isi'] ?></textarea>
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
                                        <button class="btn btn-danger mt-3" name="update_berita"
                                            type="submit">kirim</button>
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