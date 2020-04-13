<div class="card p-4">

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h3>Alur Penyewaan Barang Masjid & Madani</h3>
        <p class="mb-0">1. Calon peminjam dapat melihat daftar barang dan jumlah yang tersedia di halaman ini</p>
        <p class="mb-0">2. Setelah memastikan jumlah barang cukup sesuai keinginan, calon peminjam dapat memulai membuat permintaan dengan klik tombol "Ajukan Peminjaman Baru" pada bagian bawah halaman ini.</p>
        <p class="mb-0">3. Calon peminjam mengisi form dengan benar</p>
        <p class="mb-0">4. Setelah calon peminjam mengisi form dan menentukan barang yang ingin dipinjam sesuai keinginan, calon peminjam mengunduh file surat yang akan dibuat otomatis dan mengirimkannya ke pengurus masjid (WA : contoh xxxx) untuk meminta persetujuan</p>
        <p class="mb-0">5. Calon peminjam bisa mengecek status permintaannya di tabel "Daftar Peminjam Barang" yang ada di halaman ini</p>
        <p class="mb-0">6. Jika permintaan disetujui peminjam dapat mengambil barang di tempat & waktu sesuai kesepakatan dengan pengurus masjid</p>
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
            <th scope="col">Nama peminjam / (yang bertanggung jawab)</th>
            <th scope="col">Tanggal Pinjam</th>
            <th scope="col">Tanggal Kembali</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="t-body">
          <?php foreach($peminjam as $row): ?>
          <tr>
            <th scope="row"><?= $row['id_peminjaman']; ?></th>
            <td><?= $row['penanggung_jawab'] ?></td>
            <td><?= $row['tanggal_peminjaman']; ?></td>
            <td><?= $row['tanggal_pengembalian']; ?></td>
            <?php if($row['status_permintaan'] == 'menunggu'){?>
              <td class="badge badge-warning"><?= $row['status_permintaan']; ?></td>
            <?php }else if($row['status_permintaan'] == 'disetujui'){?>
              <td class="badge badge-success"><?= $row['status_permintaan']; ?></td>
            <?php }else if($row['status_permintaan'] == 'ditolak'){?>
              <td class="badge badge-danger"><?= $row['status_permintaan']; ?></td>
            <?php } ?>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <a href="<?= base_url('Form_peminjaman'); ?>" class="btn btn-dark mx-auto" style="width: fit-content;">Ajukan Peminjaman Baru</a>
  </div>