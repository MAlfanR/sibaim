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
  <link rel="stylesheet" href="<?= base_url('assets/css/ubah_password.css'); ?>">

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

        <h3 class="card-title">Ubah Password</h3>

        <form action="<?= base_url('Ubah_password/act_ubah_password'); ?>" method="POST">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" value="<?= $email; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Token</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="token" value="<?= $token; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password baru</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ketik ulang password baru</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="rePassword">
            </div>
          </div>
          <button type="submit" class="btn btn-dark">Ubah</button>
        </form>

      </div>
    </div>
    <!-- end card login -->
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>">
	</script>
	<script src="<?= base_url('assets/js/popper.min.js'); ?>">
	</script>
	<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>">
	</script>
</body>

</html>