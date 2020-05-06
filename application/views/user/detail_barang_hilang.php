<div class="card">
    <div class="container m-lg-5 mx-md-0 mx-sm-0 mx-xs-0">
        <div class="row mt-md-5 mt-sm-5 mt-xs-5">
            <div class="col-lg-2 d-md-none d-sm-none d-xs-none"></div>
            <div class="col-lg-7 order-md-2 order-sm-2 order-xs-2 text-white text-left">
                <h4>Nama Barang : <?= $detail['nama_barangtemu']; ?></h4>
                <h4>Tanggal ditemukan : <?= $detail['tanggal_barangtemu']; ?></h4>
                <h4>Lokasi ditemukan : <?= $detail['lokasi_barangtemu']; ?></h4>
                <h4>Ciri-ciri/keterangan : </h4>
                <div class="overflow-auto bg-light text-dark p-2"><h5><?= $detail['keterangan_barangtemu']; ?></h5></div>
            </div>
            <div class="col-lg-3 order-md-1 order-sm-1 order-xs-1 text-center ">
                <img src="<?= base_url('assets/images/BarangHilang/'.$detail['foto_barangtemu']); ?>" class="img-fluid mb-md-3 mb-sm-3 mb-xs-3" width="200" alt="">
            </div>
        </div>

        <div class="text-center text-white mt-5 mb-md-5 mb-sm-5 mb-xs-5">
            <h5>Barang ini milikmu ?</h5>
            <h5>Kontak kami segera</h5>
            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=+62<?= substr($admin['kontak_admin'], 1); ?>&text=Assalamu'alaikum">
            <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> <?= $admin['kontak_admin']; ?></a>
        </div>
    </div>
</div>