<?php
require_once("layout/_koneksi.php");

session_start();
$query = "SELECT * FROM pasien order by id_pasien ASC";
$output = mysqli_query($conn, $query);
?>
<html>

<head>
    <title>Data laporan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <div class="data-tables datatable-dark">

            <table id="mauexport" class="table table-light">
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
                        </tr>
                        <?php $no++;
                    } ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#mauexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>