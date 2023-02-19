<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ujian Praktik DIKI-XIRPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <nav class="navbar navbar-dark bg-dark navbar-expand ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Diki Fajar</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="container-fluid">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="#data_siswa">Data Siswa</a>
                        <a class="nav-link" href="#data_guru">Data Guru</a>
                        <a class="nav-link" href="#data_nilai">Nilai Siswa</a>
                        <a class="nav-link" href="#galeri">Galeri</a>
                        <a class="nav-link" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</head>

<body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <!--Jumbotron-->
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang</h1>
            <p class="lead fw-bold">Nilai Siswa Smkn 4 Padalarang</p>
            <img src="img/logosmkn4padalarang.jpg" alt="" width="200" class="img-tumbnail" />
        </div>
    </div>
    <!--End Jumbotron-->


    <div data-aos="zoom-in-up">
        <div class="container p-5" id="data_siswa">
            <div class="card">
                <div class="card-header">
                    Data Siswa
                </div>
                <div class="card-body">
                    <div class=" text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-sm">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Nisn</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">kelas</th>
                                        <th scope="col">Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                include "koneksi.php";
                                $no = 1;
                                $query = mysqli_query($koneksi, 'SELECT * FROM siswa');
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nisn'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['kelas'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['tanggal_lahir'] ?>
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
    </div>

    <div data-aos="zoom-in-up">
        <div class="container p-5" id="data_guru">
            <div class="card">
                <div class="card-header">
                    Data Guru
                </div>
                <div class="card-body">
                    <div class=" text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-sm">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Nip</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $no = 1;
                                    $query = mysqli_query($koneksi, 'SELECT * FROM guru');
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nip'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['jabatan'] ?>
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


    </div>
    <div data-aos="zoom-in-up">
        <div class="container p-5" id="data_nilai">
            <div class="card">
                <div class="card-header">
                    Data Nilai
                </div>
                <div class="card-body">
                    <div class=" text-center">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-sm">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Nisn</th>
                                        <th scope="col">Mapel</th>
                                        <th scope="col">Nilai Pengetahuan</th>
                                        <th scope="col">Nilai Keterampilan</th>
                                        <th scope="col">Hitung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $no = 1;
                                    $query = mysqli_query($koneksi, 'SELECT * FROM nilai');
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $no++ ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nisn'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['mapel'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nilai1'] ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nilai2'] ?>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#hitung<?= $no ?>">Hitung</a>
                                        </td>
                                        <td>
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

    <div data-aos="zoom-in-up">
        <section class="page-section bg-light" id="galeri">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Galeri</h2>
                    <h3 class="section-subheading text-muted">Bawa Santai Aja.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/img1.jpg" alt="..." width="250" height="250" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/img2.jpg" alt="..." width="250" height="250" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/img3.jpg" alt="..." width="250" height="250" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/img4.jpg" alt="..." width="250" height="250" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/img5.jpg" alt="..." width="250" height="250" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img/img6.jpg" alt="..." width="250" height="250" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
include "koneksi.php";
$no = 1;
$query = mysqli_query($koneksi, 'SELECT * FROM nilai');
while ($data = mysqli_fetch_array($query)) {
?>
    <tr>
        <td>
            <?php $no++ ?>
        </td>
        <td>
            <?php $data['nisn'] ?>
        </td>
        <td>
            <?php $data['mapel'] ?>
        </td>
        <td>
            <?php $data['nilai1'] ?>
        </td>
        <td>
            <?php $data['nilai2'] ?>
        </td>
    </tr>
    <!-- Modal Hitung-->
    <div class="modal fade" id="hitung<?= $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Hitung Nilai</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="aksi.php">
                    <input type="hidden" name="nnisn" value="<?= $data['nisn'] ?>">
                    <div class="mb-3">
                        <label class="form-label">Nisn</label>
                        <input type="text" class="form-control" name="nnisn" value="<?= $data['nisn'] ?>" name="nnisn">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="mapel" value="<?= $data['mapel'] ?>" name="mapel">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai Pengetahuan</label>
                        <input type="text" class="form-control" name="nilai1" value="<?= $data['nilai1'] ?>"
                            name="nilai1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai Ketarampilan</label>
                        <input type="text" class="form-control" name="nilai2" value="<?= $data['nilai2'] ?>"
                            name="nilai2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php } ?>


    <!-- Modal Ubah Akhir -->





</body>


<!--<footer class="bg-dark text-center text-lg-start fixed-bottom">
  <!-- Copyright -->
<!--<div class="row">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-light">© 2020 Copyright:</a>
            <a class="text-light" href="#">Diki Fajar</a>
        </div>
    </div>
  <!-- Copyright -->
</footer>

</html>
<script>
    AOS.init();
</script>