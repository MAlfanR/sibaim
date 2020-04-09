<div class="card p-4">

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h3>Alur Penyewaan Barang Masjid & Madani</h3>
      </div>
    </div>
    <div class="card-title text-center text-white">
      <h2>Daftar Barang</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead class="t-head">
          <tr class="text-white">
            <th scope="col">No.</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga (perhari/perbuah)</th>
          </tr>
        </thead>
        <tbody class="t-body">
        <?php
        $i = 1;
        foreach($barang as $row): ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $row['nama_inventory']; ?></td>
            <td><?= $row['jumlah_inventory']; ?></td>
            <td><?= $row['harga_inventory']; ?></td>
          </tr>
          <?php $i++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="card-title text-center text-white">
      <h2>Daftar Peminjaman Barang</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <thead class="t-head">
          <tr class="text-white">
            <th scope="col">No. Tiket</th>
            <th scope="col">Nama peminjam</th>
            <th scope="col">Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Instansi</th>
            <th scope="col">Keperluan</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="t-body">
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>

    <a href="<?= base_url('Form_peminjaman'); ?>" class="btn btn-dark mx-auto" style="width: fit-content;">Ajukan Peminjaman Baru</a>
  </div>