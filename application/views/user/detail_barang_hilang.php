<div class="card">
    <div class="container m-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-7 text-white text-left">
                <h4>Nama Barang : <?= $detail['nama_barangtemu']; ?></h4>
                <h4>Tanggal ditemukan : <?= $detail['tanggal_barangtemu']; ?></h4>
                <h4>Lokasi ditemukan : <?= $detail['lokasi_barangtemu']; ?></h4>
                <h4>Ciri-ciri/keterangan : </h4>
                <div class="overflow-auto bg-light text-dark p-2"><h5><?= $detail['keterangan_barangtemu']; ?></h5></div>
            </div>
            <div class="col-3">
                <img src="<?= base_url('assets/images/BarangHilang/'.$detail['foto_barangtemu']); ?>" class="img-fluid" width="200" alt="">
            </div>
        </div>

        <div class="text-center text-white mt-5">
            <h5>Barang ini milikmu ?</h5>
            <h5>Kontak kami segera</h5>
            <a class="btn btn-success" href="https://api.whatsapp.com/send?phone=+62<?= substr($admin['kontak_admin'], 1); ?>&text=Assalamu'alaikum">
            <img src="https://web.whatsapp.com/img/favicon/1x/favicon.png"> <?= $admin['kontak_admin']; ?></a>
        </div>
    </div>
</div>