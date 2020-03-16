<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donasi</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- css -->
  <link rel="stylesheet" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/update_donasi.css">
</head>

<body>

  <div class="container">

    <div class="text-center p-4">
      <!-- logo -->
      <img src="assets/images/logoBaim.png" class="mx-auto d-block" alt="" width="80px">
      <h1>SIBAIM</h1>
      <h6>Sistem Informasi Masjid Baitul Ilmi</h6>
    </div>

    <div class="card">
      <h4 class="card-title text-center text-white">Update Donasi</h4>
      <div class="card-body">
        <form action="" class="text-center">
          <div class="form-group row">
            <label for="" class="col-2 col-form-label">Jumlah Donasi</label>
            <div class="col-10">
              <input type="number" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="" class="col-2 col-form-label">Keterangan</label>
            <div class="col-10">
              <textarea name="" class="form-control"></textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-dark">Tambah</button>
        </form>
        <p class="text-white">Daftar Pemasukan uang donasi masjid baitul ilmi</p>
        <div class="container">
          <table class="table table-responsive">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Jumlah Donasi</th>
                <th scope="col">Tanggal Donasi</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody class="bg-light">
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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