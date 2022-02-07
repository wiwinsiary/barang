<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 5 Cards Grid Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
    <style>
    .card-thumbnail {
        max-height: 250px;
        overflow: hidden;
    }
    </style>
</head>
<body>

    <!-- Bootstrap 5 Cards in Grid -->
    <section class="bg-light py-4 my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="formdatabarang.php" class="btn btn-danger">Kembali</a>
                    <h2 class="mb-3 text-danger">Daftar Barang</h2>
                </div>
                <?php 
                $no=1;
                include "koneksi.php";
                $sql = mysqli_query($koneksi,"SELECT * FROM tabel_barang");
                while($data = mysqli_fetch_array($sql)){
                ?>

                
                <div class="col-md-6 col-lg-4">
                    <div class="card my-3">
                        <div class="card-thumbnail">
                            <img src='upload/<?= $data['gambar']; ?>' class="img-fluid" alt="thumbnail">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" class="text-secondary"><?= $data['nama_barang'] ?></a></h3>
                            <p class="card-text">Nama Distributor: <?= $data['nama_distributor'] ?></p>
                            <p class="card-text">Kondisi: <?= $data['kondisi'] ?></p>
                            <a href="#" class="btn btn-danger">Beli Sekarang</a>
                        </div>
                    </div>
                </div>

            <?php } ?>
                
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>

</body>
</html>