<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/login_admin.css">

</head>

<body>

  <div class="container">

    <div class="text-center p-4">
      <!-- logo -->
      <img src="assets/images/logoBaim.png" class="mx-auto d-block" alt="" width="80px">
      <h1>SIBAIM</h1>
      <h6>Sistem Informasi Masjid Baitul Ilmi</h6>
    </div>

    <!-- card login -->
    <div class="card w-75 mx-auto rounded-lg">
      <div class="card-body text-white text-center ">

        <h3 class="card-title">Login</h3>

        <form action="<?= base_url('login/login'); ?>" method="POST">
          <div class="form-group">
            <label for="" class="float-left">Username</label>
            <input type="text" class="form-control" name="username">
          </div>

          <div class="form-group">
            <label for="" class="float-left">Password</label>
            <input type="password" class="form-control" name="password">
          </div>

          <a href="#" class="d-block mb-3 text-white text-decoration-none mx-auto w-25">Lupa Password ?</a>

          <button type="submit" class="btn btn-dark font-weight-bold">Login</button>
        </form>

      </div>
    </div>
    <!-- end card login -->
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.2.1.slim.min.js">
	</script>
	<script src="assets/js/popper.min.js">
	</script>
	<script src="assets/js/bootstrap.min.js">
	</script>
</body>

</html>