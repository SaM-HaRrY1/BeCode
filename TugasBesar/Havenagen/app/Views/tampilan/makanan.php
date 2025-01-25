<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Engine/styleMa.css">
  <link rel="icon" href="Img/Logo2.png" type="image/x-icon"/>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('landing'); ?>"><img class="logo" src="../Img/Logo2.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('landing'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('menu'); ?>">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('hubungikami'); ?>">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
            <div class="text-right">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('keranjang'); ?>"><button type="button" class="btn btn-light">Keranjang
                                <i class="fa-solid fa-cart-shopping"></i></button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login/SignUp</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="isi">
        <center>
            <div class="top"><a href="<?= base_url('landing'); ?>">Beranda </a>><a href="<?= base_url('makanan'); ?>"> <span>Menu Makanan
                        Utama</span></a>
                <h1>Makanan Utama Kami</h1>
            </div>
        </center>

        <?php foreach ($makan as $m) : ?>
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <span class="border-bottom"><img src="Img/<?= $m['foto_menu']; ?>" alt="" class="img-fluid"></span>
                    <br><br>
                    <h4><?= $m['nama_menu']; ?></h4>
                    <h5>Rp:<?= $m['harga']; ?></h5>
                </div>
                <!-- <div class="col">
                    <span class="border-bottom"><img src="../Img/Dimsum.webp" alt="" class="img-fluid"></span>
                    <br><br>
                    <h4>Dismum</h4>
                    <h5>Rp:000.000</h5>
                </div> -->
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <!-- Logo Section -->
                <div class="col-md-4 mb-3" style="text-align: left;"><br><br>
                    <img src="../Img/Logo.jpeg" alt="" style="width: 230px; margin-bottom: 50px;">
                    <p class="mt-2">© 2025 All Rights Reserved</p>
                </div>

                <!-- Lokasi -->
                <div class="col-md-4 mb-3" style="text-align: left;">
                    <h6>Customer Center</h6>
                    <p>Havenagen</p>
                    Jl. Terusan No.52, Cimahi, <br>
                    Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40525</p>
                    <p><i class="fa-brands fa fa-whatsapp"> </i> 0812-3456-7890</p>
                </div>

                <div class="col-md-4 mb-3" style="text-align: left;">
                    <h6>Available at</h6>
                    <img src="../Img/gofood-logo.png" alt="" style="width: 90px;"><br>
                    <img src="../Img/grab-logo.png" alt="" style="width: 90px;"><br>
                    <img src="../Img/shp-logo.png" alt="" style="width: 90px;"><br><br>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>