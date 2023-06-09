<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>HaloKlinik</title>
  <link rel="icon" href="img/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" />
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
  <!-- NAVBAR -->
  <nav class="navbar navbar-dark" style="background-color: #0A2640;">
    <div class="container-fluid">
      <!-- LOGO -->
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" class="me-2" height="20" alt="Logo" loading="lazy" />
        <small>HaloKlinik</small>
      </a>

      <button class="navbar-toggler" type="menu" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="d-flex align-items-center">
        <button type="button" class="btn btn-link px-3 me-2" style="color: white;">
          <a class="nav-link" href="jadwal.php"> Jadwal Pelayanan </a>
        </button>
        <button type="button" class="btn btn-link px-3 me-2" style="color: white;">
          <a class="nav-link" href="antrian.php"> Antrian </a>
        </button>
        <button type="button" class="btn btn-primary me-3" style="background-color: white; color: #0A2640; border-radius: 30px;">
          <a class="nav-link" href="reservasi.php"> Reservasi Online </a>
        </button>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header>
    <!-- Background -->
    <div class="p-5 bg-image" style="background-color: #0A2640;">
      <div class="row" style="padding-left: 2rem;">
        <div class="col">
          <div class="d-flex align-items-center h-100">
            <div class="text-white">
              <h2 class="mb-3">Reservasi Online</h2>
              <p class="mb-4">Mempermudah pendaftaran pelayanan poliklinik IPB Dramaga melalui reservasi online untuk pasien yang sudah terdaftar (pasien lama).</p>
              <a class="btn btn-outline-light btn-lg m-2" href="reservasi.php" role="button" style="background-color: #69E6A6; color:#0A2640; border-color: #69E6A6; border-radius: 30px;">Reservasi Online</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex justify-content-end">
            <img class="img-fluid" src="img/reservasi.png" />
          </div>
        </div>
      </div>
    </div>
  </header>

  <h2 class="text-center" style="margin-top: 2.5rem; margin-bottom: 2.5rem;">Nomor Antrian</h2>

  <div class="container w-25">
    <div class="row" style="background-color: grey;">
      <h5 class="text-center text-white" style="margin-top: 0.5rem">
        NOMOR ANTRIAN
      </h5>
    </div>

    <div class="row" style="font-family: 'Manrope'; height: 200px; background-color: #0A2640; margin-bottom: 2.5rem;">
      <h1 class="text-center text-success" style="font-family: 'Manrope'; font-size: 450%; margin-top: 3rem; margin-bottom: 4rem;">
        <!--nomernya-->
      </h1>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h4 style="color: #0A2640;"><img src="img/Logo Shape.png" height="20" style="margin-right: 5px;" />Butuh Bantuan?</h4>
          <p><img src="img/Call.png" height="13" style="margin-right: 5px;" />0877-7569-2881</p>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h6 class="fw-bold">Menu</h6>
          <p><a class="nav-link" href="jadwal.php"> Jadwal Pelayanan </a></p>
          <p><a class="nav-link" href="antrian.php"> Antrian </a></p>
          <p><a class="nav-link" href="reservasi.php"> Reservasi Online </a></p>
        </div>

        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h6 class="fw-bold">Tentang Kami</h6>
          <div class="row">
            <div class="col-lg-1">
              <img src="img/Loc.png" height="18" style="margin-right: 5px;" />
            </div>
            <div class="col">
              <p>Jl. Raya Dramaga, Kampus IPB Dramaga Bogor, 16680, Jawa Barat, Indonesia</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1">
              <img src="img/time.png" height="18" style="margin-right: 5px;" />
            </div>
            <div class="col">
              <p>Senin - Kamis & Sabtu, 08.00 - 20.00 <br>
                Jumat, 09.00 - 20.00</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-1">
              <img src="img/email.png" height="18" style="margin-right: 5px;" />
            </div>
            <div class="col">
              <p>unitkesehatan@apps.ipb.ac.id </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="text-center p-3" style="background-color: #0A2640; color: white;">
      © Copyright <b>HaloKlinik</b> Poliklinik IPB Dramaga Bogor, Indonesia
    </div>

  </footer>

</body>

</html>