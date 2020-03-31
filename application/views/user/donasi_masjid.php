<div class="card">
  <div class="card-title"><h2 class="text-white text-center">Bantu Pembangunan Masjid Baitul Ilmi ITERA</h2></div>
  <div class="card-body">

    <div class="container">
      <div class="row">

        <div class="col-4">
          	<!-- carousel -->
          <div id="carouselBaim" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselBaim" data-slide-to="0" class="active"></li>
              <li data-target="#carouselBaim" data-slide-to="1"></li>
              <li data-target="#carouselBaim" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url('assets/images/carouBaim.png'); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url('assets/images/carouBaim.png'); ?>" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="<?= base_url('assets/images/carouBaim.png'); ?>" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
  <!-- end carousel -->

          <p class="text-center text-white mt-5">"Barangsiapa meminjamkan kepada Allah dengan peminjaman yang baik, maka Allah akan mengembalikannya berlipat ganda untuknya dan baginya pahala yang mulia." (QS. Al-Hadid:11)</p>
        </div>

        <div class="col-8 text-center text-white">
          <p><strong>Rp. <?= $total_donasi; ?> terkumpul dari Rp. 210.000.000,00</strong></p>

          <div class="progress" style="height: 25px;">
						<div class="progress-bar bg-dark" role="progressbar" style="width:<?= $persen; ?>%" aria-valuenow="<?= $persen; ?>" aria-valuemin="0" aria-valuemax="100"><?= $persen; ?>%
						</div>
          </div>
            
          <h4 class="mt-4">Donasi dapat dilakukan dengan cara:</h4>
                                 
          <div class="btn btn-lg btn-block btn-donasi">
            <div class="row">
              <div class="col-2"><img src="<?= base_url('assets/images/1.png'); ?>" class="float-left img-number"></div>
              <div class="col-10 text-left"><small>Memberikan langsung donasi ke pengurus masjid di lokasi (Masjid Baitul Ilmi) </small></div>
            </div> 
          </div>
          <div class="btn btn-lg btn-block btn-donasi">
          <div class="row">
              <div class="col-10 text-left"><small>Bayar lewat transfer bank melalui rekening berikut ini: <br> BNI norek (nama)</small></div>
              <div class="col-2"><img src="<?= base_url('assets/images/2.png'); ?>" class="float-left img-number"></div>
            </div>
          </div>
          <div class="btn btn-lg btn-block btn-donasi">
            <div class="row">
              <div class="col-2"><img src="<?= base_url('assets/images/3.png'); ?>" class="float-left img-number"></div>
              <div class="col-10 text-left"><small>Berdonasi melalui kotak amal yang telah disebar di tiap sudut kampus <br>-lobby gedung d <br>-lobby gedung e</small></div>
            </div>
          </div>
          <div class="btn btn-lg btn-block btn-donasi">
            <div class="row">
              <div class="col-10 text-left"><small>Menggunakan platform donasi online pada link berikut ini: <br><a href="https://kitabisa.com/campaign/bangunbaim">kitabisa.com</a></small></div>
              <div class="col-2"><img src="<?= base_url('assets/images/4.png'); ?>" class="float-left img-number"></div>
            </div>
          </div>  
        </div>

      </div>
    </div>

  </div>
</div>