<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/lupa_password.css'); ?>">

</head>

<body>

  <div class="container">

    <div class="text-center p-4">
      <!-- logo -->
      <img src="<?= base_url('assets/images/logoBaim.png'); ?>" class="mx-auto d-block" alt="" width="80px">
      <h1>SIBAIM</h1>
      <h6>Sistem Informasi Masjid Baitul Ilmi</h6>
    </div>

    <!-- card login -->
    <div class="card w-75 mx-auto rounded-lg">
      <div class="card-body text-white text-center ">

        <h3 class="card-title">Lupa Password</h3>

        <form action="<?= base_url('Lupa_password/forgot_password'); ?>" method="POST">
          <div class="form-group">
            <label for="email_pemulihan" class="float-left">Masukkan alamat email pemulihan Anda</label>
            <input type="email" class="form-control" id="email_pemulihan" name="email">
            <small class="form-text text-white">Kirim pemulihan password</small>
          </div>

          <button type="submit" class="btn btn-dark font-weight-bold">Kirim</button>
        </form>

      </div>
    </div>
    <!-- end card login -->
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url('assets/js/jquery-3.2.1.slim.min.js'); ?>">
	</script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>">
	</script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>">
	</script>
</body>

</html>