<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Utama</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/datatables.min.css'); ?>">

	<!-- style css -->
	<link rel="stylesheet" href="<?= base_url('assets/css/all.css'); ?>">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
	<div class="container-fluid">
		<a class="navbar-brand" style="width: 10%;" href="#"><img src="<?= base_url('assets/images/logoBaim.png'); ?>" class="img-fluid mr-2 float-left" alt="Responsive image"></a>
		
		<span class="navbar-text">
			<h1 style="font-size: 3vw; color:black !important;">MASJID BAITUL ILMI</h1>
			<h4 style="font-size: 1.5vw; color:black !important;">INSITITUT TEKNOLOGI SUMATERA</h4>
		</span>
		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse mx-auto" id="navbarNavDropdown">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item">
				<a href="<?= base_url(); ?>" class="nav-link text-dark">BERANDA</a>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link text-dark dropdown-toogle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG</a>
				<div class="dropdown-menu">
					<a href="<?= base_url('sejarah'); ?>" class="dropdown-item">Sejarah</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a href="#" class="nav-link text-dark dropdown-toogle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PELAYANAN</a>
				<div class="dropdown-menu">
					<a href="<?= base_url('Peminjaman_barang_user'); ?>" class="dropdown-item">Peminjaman Barang</a>
					<a href="<?=base_url('Info_barang_hilang');?>" class="dropdown-item">Info Barang Hilang</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('#kontak'); ?>" class="nav-link text-dark">KONTAK</a>
			</li>
		</ul>
	</div>
	</div>
</nav>	

<!-- end navigasi -->
