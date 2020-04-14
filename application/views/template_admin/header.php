<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datatables.min.css'); ?>">
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">

</head>

<body>

<div class="container-fluid">

    <div class="row mb-1">

      <div class="col-lg-2">

      </div>

      <div class="col-lg-8">
        <div class="text-center p-4">
          <!-- logo -->
          <img src="<?= base_url('assets/images/logoBaim.png'); ?>" class="mx-auto d-block" alt="" width="80px">
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
                <a class="dropdown-item" href="<?= base_url('Login/logout'); ?>">Sign-out</a>
              </div>
            </div>
          </div>
          <div class="col text-center">
            <p><img src="<?= base_url('assets/images/administrator.png'); ?>" class="w-100" alt=""></p>
          </div>
        </div>
      </div>
    </div>

</div>