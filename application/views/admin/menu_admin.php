<!-- load header admin in controller -->

<!-- menu admin -->
<div class="row justify-content-center">

  <!-- button update informasi barang hilang -->
  <div class="col-lg-5">
    <a href="<?= base_url('Update_barang_hilang'); ?>">
      <div class="card">
        <h5 class="card-title text-center text-white">Update Informasi Barang Hilang</h5>
        <div class="card-body text-center">
          <img src="assets/images/ikon_barang_hilang.png" alt="menu informasi barang hilang">
        </div>
      </div>
    </a>
  </div>

  <!-- button update donasi -->
  <div class="col-lg-5">
    <a href="<?= base_url('Update_donasi'); ?>">
      <div class="card">
        <h5 class="card-title text-center text-white">Update Donasi</h5>
        <div class="card-body text-center">
          <img src="assets/images/ikon_update_donasi.png" alt="menu update donasi">
        </div>

      </div>
    </a>
  </div>

</div>

<div class="row justify-content-center mt-4">

  <!-- button update peminjaman inventori -->
  <div class="col-lg-5">
    <a href="<?= base_url('Update_peminjaman_inventori'); ?>">
      <div class="card">
        <h5 class="card-title text-center text-white">Update Peminjaman Inventori Masjid</h5>
        <div class="card-body text-center">
          <img src="assets/images/ikon_inventori_masjid.png" alt="menu peminjaman inventori">
        </div>
      </div>
    </a>
  </div>

  <!-- button update sejarah & organisasi masjid -->
  <div class="col-lg-5">
    <a href="<?= base_url('Update_sejarah'); ?>">
      <div class="card">
        <h5 class="card-title text-center text-white">Update Sejarah & Organisasi Masjid</h5>
        <div class="card-body text-center">
          <img src="assets/images/ikon_konten.png" alt="menu peminjaman inventori">
        </div>
      </div>
    </a>
  </div>

</div>

<!-- load footer admin in controller -->