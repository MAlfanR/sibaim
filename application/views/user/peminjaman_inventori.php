<div class="card text-white">
    <div class="card-title text-center">    
      <h2>Form Pengajuan Peminjaman Barang Masjid</h2>
    </div>

    <?= $this->session->flashdata('flash'); ?>
    
    <div class="card-body">
        <form action="<?= base_url('Peminjaman_inventori/addDataPeminjaman/'.$id_peminjaman); ?>" method="POST">
            <div class="row">
                <div class="col-sm-5">
                    <select class="custom-select" name="selectBarang">
                        <?php foreach($inventori as $row): ?>
                        <option value="<?= $row['id_inventory'] ?>"><?= $row['nama_inventory'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-sm-5">
                    <select class="custom-select" name="selectJumlah">
                        <?php for($i=1; $i<=7; $i++){ ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-secondary" type="submit">Tambah</button>
                </div>
            </div>
        </form>

        <br>

        <table class="table table-dark">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Barang</td>
                    <td>Jumlah</td>
                    <td>Harga</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($pesanan as $row): ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama_inventory']; ?></td>
                    <td><?= $row['jumlahDipinjam']; ?></td>
                    <td><?= $row['jumlahDipinjam'] * $row['harga_inventory']; ?></td>
                    <td><a class="btn btn-danger" href="<?= base_url('Peminjaman_inventori/hapus/'.$row['id'].'/'.$row['id_peminjaman']); ?>">Hapus</a></td>
                </tr>
                <?php $i++; endforeach; ?>
            </tbody>
        </table>
        
        <br>

        <div class="text-center">
            <a href="<?= base_url('Peminjaman_inventori/cancel/'.$id_peminjaman); ?>" class="btn btn-danger mr-5">Cancel</a>
            <a href="<?= base_url('Pengajuan_page/index/'.$id_peminjaman); ?>" class="btn btn-success ml-5">Selesai</a>
        </div>
    </div>
</div>

