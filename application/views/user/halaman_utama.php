<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Utama</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- style css -->
	<link rel="stylesheet" href="assets/css/all.css">
	<link rel="stylesheet" href="assets/css/halaman_utama.css">

</head>

<body>

	<!-- runing text -->
	<!-- masih belum dibuat -->
	<!-- end running text -->

	<div class="container-md-fluid">

		<!-- navigasi -->
		<div class="row bg-white pt-2 pb-2">

			<div class="col-md-2 text-center">
				<img src="assets/images/logoBaim.png" class="img-fluid" id="logo" alt="Responsive image">
			</div>

			<div class="col-md-5">
				<h1>MASJID BAITUL ILMI</h1>
				<img src="assets/images/logoItera.png" class="float-left" alt="">
				<h4>INSITITUT TEKNOLOGI SUMATERA</h4>
			</div>

			<div class="col-md-5">
				<div>
					<ul class="nav">
						<li class="nav-item">
							<a href="<?= base_url(); ?>" class="nav-link">BERANDA</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toogle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG</a>
							<div class="dropdown-menu">
								<a href="" class="dropdown-item">Sejarah</a>
								<a href="" class="dropdown-item">Organisasi</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="#layanan" class="nav-link">PELAYANAN</a>
						</li>
						<li class="nav-item">
							<a href="#kontak" class="nav-link">KONTAK</a>
						</li>
					</ul>
				</div>
			</div>

		</div>

		<!-- end navigasi -->

	</div>

	<!-- carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/images/carousel_images.png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/images/carousel_images.png" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="assets/images/carousel_images.png" class="d-block w-100" alt="...">
			</div>
		</div>
	</div>
	<!-- end carousel -->

	<!-- card donasi -->
	<div class="card">
		<div class="card-body">
			<div class="container-fluid">
				<div class="row text-white justify-content-center mb-2">
					<div class="col-1"></div>
					<div class="col-4">
						<p>"Barangsiapa meminjamkan kepada Allah dengan pinjaman yang baik, maka Allah akan mengembalikannya
							berlipat
							ganda untuknya, dan baginya pahala yang mulia."(QS. Al-Hadid:11)</p>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<img src="assets/images/masjid.png" class="img-masjid" alt="masjid">
					</div>
					<div class="col-3">

					</div>
					<div class="col-6 text-center text-white">

						<h4>Bantu Pembangunan</h4>
						<h4>Masjid Baitul Ilmi ITERA</h4>
						<p>Rp.xxxxxxxx terkumpul dari Rp. xxxxxxx</p>
						<div class="progress">
							<div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50"
								aria-valuemin="0" aria-valuemax="100">50%
							</div>
						</div>

						<a href="#" class="btn btn-dark m-4">Donasi</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end card donasi -->

	<!-- section informasi barang hilang -->
	<section class="text-center m-3">
    <h1>informasi barang hilang</h1>
    <div class="card">
      <div class="card-body">
        <div id="carouselBarangHilang" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">

              <div class="row justify-content-center">
                <div class="col">
                  <img src="assets/images/bh1.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh1.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh1.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh1.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
              </div>

            </div>
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col">
                  <img src="assets/images/bh2.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh2.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh2.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh2.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row justify-content-center">
                <div class="col">
                  <img src="assets/images/bh3.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh3.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh3.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
                <div class="col">
                  <img src="assets/images/bh3.png" class="d-block img-thumbnail float-left mx-auto" alt="...">
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselBarangHilang" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselBarangHilang" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
	<!-- end section barang hilang -->

	<!-- section layanan masjid -->
	<section class="text-center m-3" id="layanan">
		<h1>layanan masjid</h1>
		<div class="container">
			<div class="row">

				<div class="col-lg">
					<a href="#">
						<div class="card">
							<h5 class="card-title text-center text-white">Update Peminjaman inventori masjid</h5>
							<div class="card-body text-center">
								<img src="assets/images/ikon_inventori_masjid.png" alt="menu peminjaman inventori" class="w-25">
							</div>
						</div>
					</a>
				</div>

				<div class="col-lg">
					<a href="#">
						<div class="card">
							<h5 class="card-title text-center text-white">Update informasi barang hilang</h5>
							<div class="card-body text-center">
								<img src="assets/images/ikon_barang_hilang.png" alt="menu informasi barang hilang" class="w-25">
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- end section layanan masjid -->

	<!-- footer -->
	<div class="card bg-dark" id="kontak">
		<div class="card-title">
			<h2 class="text-center text-white">Kontak Kami</h2>
			<div class="card-body">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-4 text-center">
							<img src="assets/images/peta.png" class="w-75" alt="peta">
						</div>
						<div class="col-5 text-white">
							<p class="mb-0">Jl. Terusan Ryacudu Way Huwi~ 35131</p>
							<p class="mb-0">Tlp. 08xx-xxxx-xxxx</p>
							<p class="mb-0">email: baim@email.com</p>
							<p class="mb-0">www.baim.itera.ac.id</p>

							<h5 class="text-white">Sosial Media</h5>
							<a href="#"><img src="assets/images/ig_icon.png" alt="ig_baim"></a>
							<a href="#"><img src="assets/images/fb_icon.png" alt="fb_baim"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="text-center mt-1 mb-1">Copyright 2020 by Masjid Baitul Ilmi</footer>
	<!-- end footer -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.2.1.slim.min.js">
	</script>
	<script src="assets/js/popper.min.js">
	</script>
	<script src="assets/js/bootstrap.min.js">
	</script>
</body>

</html>
