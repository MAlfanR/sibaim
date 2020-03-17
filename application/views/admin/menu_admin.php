<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/menu_admin.css">

</head>

<body>

<div class="container-fluid">

    <div class="row mb-1">

      <div class="col-lg-2">

      </div>

      <div class="col-lg-8">
        <div class="text-center p-4">
          <!-- logo -->
          <img src="assets/images/logoBaim.png" class="mx-auto d-block" alt="" width="80px">
          <h1>SIBAIM</h1>
          <h6>Sistem Informasi Masjid Baitul Ilmi</h6>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="row mt-3">
          <div class="col">
            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Administrator
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Sign-out</a>
              </div>
            </div>
          </div>
          <div class="col text-center">
            <p><img src="assets/images/administrator.png" class="w-100" alt=""></p>
          </div>
        </div>
      </div>
    </div>


    <!-- menu admin -->
    <div class="row justify-content-center">

      <div class="col-lg-5">
        <a href="#">
          <div class="card">
            <h5 class="card-title text-center text-white">Update informasi barang hilang</h5>
            <div class="card-body text-center">
              <img src="assets/images/ikon_barang_hilang.png" alt="menu informasi barang hilang">
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-5">
        <a href="#">
          <div class="card">

            <h5 class="card-title text-center text-white">Update Donasi</h5>
            <div class="card-body text-center">
              <img src="assets/images/ikon_update_donasi.png" alt="menu update donasi">
            </div>

          </div>
        </a>
      </div>

    </div>

    <div class="row justify-content-center">
      <div class="col-lg-5">
        <a href="#">
          <div class="card">
            <h5 class="card-title text-center text-white">Update Peminjaman inventori masjid</h5>
            <div class="card-body text-center">
              <img src="assets/images/ikon_inventori_masjid.png" alt="menu peminjaman inventori">
            </div>
          </div>
        </a>
      </div>

      <div class="col-lg-5">
        <a href="#">
          <div class="card">
            <h5 class="card-title text-center text-white">Update Peminjaman inventori masjid</h5>
            <div class="card-body text-center">
              <img src="assets/images/ikon_inventori_masjid.png" alt="menu peminjaman inventori">
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>

  <!-- bootstrap js -->
  <script src="assets/js/jquery-3.2.1.slim.min.js">
  </script>
  <script src="assets/js/popper.min.js">
  </script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>