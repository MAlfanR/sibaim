
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
						<p>Rp. <?= $total_donasi; ?> terkumpul dari Rp. 210.000.000,00</p>
						<div class="progress">
							<div class="progress-bar bg-dark" role="progressbar" style="width: <?=$persen; ?>%" aria-valuenow="<?= $persen; ?>"
								aria-valuemin="0" aria-valuemax="100"><?= $persen; ?>%
							</div>
						</div>

						<a href="<?= base_url('Donasi_masjid'); ?>" class="btn btn-dark m-4">Donasi</a>
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
        <div id="carouselBarangHilang" class="carousel slide" data-ride="carousel" data-interval="2000">
          <div class="carousel-inner text-white">
		  <?php
		  $i = 1;
		  foreach($foto_barangtemu as $row):
			if($i == 1){?>
			<div class="carousel-item active">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-4 text-left">
							<h4>Nama : <?= $row['nama_barangtemu']; ?></h4>
							<h4>Tanggal ditemukan : <?= $row['tanggal_barangtemu']; ?></h4>
							<h4>Lokasi ditemukan : <?= $row['lokasi_barangtemu']; ?></h4>
							<h4>Keterangan : <?= $row['keterangan_barangtemu'] ?></h4>
						</div>
						<div class="col-6">
							<img src="<?= base_url('assets/images/BarangHilang/'.$row['foto_barangtemu']); ?>" alt="" style="height: 300px;">
						</div>
					</div>				
				</div>
			</div>
			<?php }else{?>
            <div class="carousel-item">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-4 text-left">
							<h4>Nama : <?= $row['nama_barangtemu']; ?></h4>
							<h4>Tanggal ditemukan : <?= $row['tanggal_barangtemu']; ?></h4>
							<h4>Lokasi ditemukan : <?= $row['lokasi_barangtemu']; ?></h4>
							<h4>Keterangan : <?= $row['keterangan_barangtemu'] ?></h4>
						</div>
						<div class="col-6">
							<img src="<?= base_url('assets/images/BarangHilang/'.$row['foto_barangtemu']); ?>" alt="" style="height: 300px;">
						</div>
					</div>				
				</div>
            </div>
			<?php }
			$i++;?>
			<?php endforeach; ?>
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
				<a href="<?= base_url('Peminjaman_barang_user'); ?>"</a>
						<div class="card">
							<h5 class="card-title text-center text-white">Peminjaman Inventori Masjid</h5>
							<div class="card-body text-center">
								<img src="assets/images/ikon_inventori_masjid.png" alt="menu peminjaman inventori" class="w-25">
							</div>
						</div>
					</a>
				</div>

				<div class="col-lg">
					<a href="<?=base_url('Info_barang_hilang'); ?>" </a>
						<div class="card">
							<h5 class="card-title text-center text-white">Informasi barang hilang</h5>
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
							<div>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3838519070173!2d105.31266081418545!3d-5.358258955128434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x93f2bd8e5315535!2sMasjid%20Baitul%20Ilmi%20ITERA!5e0!3m2!1sid!2sid!4v1587267376822!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
							</div>
						</div>
						<div class="col-5 text-white">
							<p class="mb-0">Jl. Terusan Ryacudu Way Huwi~ 35131</p>
							<?php foreach($admin as $row): ?>
							<p class="mb-0">Tlp. <?= $row['kontak_admin']; ?></p>
							<?php endforeach; ?>
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
	<footer class="text-center mt-1 mb-1">Copyright 2020 by Masjid Baitul Ilmi <br> v07042020</footer>
	<!-- end footer -->

