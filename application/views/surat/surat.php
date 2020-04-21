<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Surat</title>
        <style>
            body {
                font-size: 10pt;
            }
        </style>
    </head>
    <body>
    
  
        <div style="text-align: center;">
                <h4 style="margin: 0;">UNIT KEGIATAN MAHASISWA</h4>
                <h4 style="margin: 0;">MAHASISWA PERADABAN ISLAM (MADANI)</h4>
                <h4 style="margin: 0;">INSTITUT TEKNOLOGI SUMATERA</h4>
                <p style="margin: 0; margin-top: 10px;"><strong>Alamat Sekretariat</strong>: Masjid Kampus Baitul 'Ilmi</p>
                <p style="margin: 0;">Jalan Terusan Ryacudu, Way Huwi, Jati Agung, Lampung Selatan (35365)</p>
        </div>
        <hr style="margin:0;">
        <!-- body -->
        <div style="text-align: center;">
            <h5>SURAT IZIN PENYEWAAN PERALATAN</h5>
        </div>
        <h5>Nomor Tiket : <?= $data[0]['id_peminjaman']; ?></h5>
        <p>Sehubungan dengan hadirnya surat ini, kami mengajukan permohonan penyewaan peralatan untuk kegiatan sebagai berikut.</p>
        <div>
            <div style="width: 41.65%; float: left;">Judul Kegiatan</div>
            <div style="width: 58.35%; ">: <?= $data[0]['judul_kegiatan']; ?></div>
        </div>
        <div style="clear: left;">
            <div style="width: 41.65%; float: left;">Penyelenggara Kegiatan</div>
            <div style="width: 58.35%;">: <?= $data[0]['penyelenggara_kegiatan']; ?></div>
        </div>
        <div style="clear: left;">
            <div style="width: 41.65%; float: left;">Penanggung Jawab Kegiatan</div>
            <div style="width: 58.35%;">: <?= $data[0]['penanggung_jawab']; ?></div>
        </div>
        <div style="clear: left;">
            <div style="width: 41.65%; float: left;">Nomor HP</div>
            <div style="width: 58.35%;">: <?= $data[0]['noHp']; ?></div>
        </div>
        <div style="clear: left;">
            <div style="width: 41.65%; float: left;">Jaminan</div>
            <div style="width: 58.35%;">: <?= $data[0]['jaminan']; ?></div>
        </div>
        <div class="row"><p>Bersama surat ini kami memberikan izin penyewaan kepada pihak pemohon, untuk peralatan-peralatan sebagai berikut</p></div>
        <table style="border-collapse: collapse; border: 1px solid black;">
            <thead>
                <tr>
                    <th style="border: 1px solid black;">No</th>
                    <th style="border: 1px solid black;">Jenis Peralatan</th>
                    <th style="border: 1px solid black;">Jumlah</th>
                    <th style="border: 1px solid black;">Keterangan</th>
                    <th style="border: 1px solid black;">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($data as $row): ?>
                    <tr>
                        <td style="border: 1px solid black;"><?= $i; ?></td>
                        <td style="border: 1px solid black;"><?= $row['nama_inventory']; ?></td>
                        <td style="border: 1px solid black;"><?= $row['jumlahDipinjam']; ?></td>
                        <td style="border: 1px solid black;"></td>
                        <td style="border: 1px solid black;"><?= $row['harga_inventory'] * $row['jumlahDipinjam']; ?></td>
                    </tr>
                <?php $i++; endforeach; ?>
                <tr>
                    <td style="border: 1px solid black;" colspan="4">Denda</td>
                    <td style="border: 1px solid black;"><?= $row['denda_peminjaman']; ?></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black;" colspan="4">Total Harga</td>
                    <td style="border: 1px solid black;"><?= $row['denda_peminjaman'] + $row['total_harga']; ?></td>
                </tr>
            </tbody>
        </table>
        <p>*) segala bentuk kerusakan/kehilangan menjadi tanggung jawab penyelenggara kegiatan.</p>
        <p>Adapun peralatan tersebut digunakan pada</p>
        <div class="row">
            <div style="width: 41.65%; float: left;">Lokasi</div>
            <div class="col-7">: <?= $data[0]['lokasi']; ?></div>
        </div>
        <div style="clear: left;">
            <div style="width: 41.65%; float: left;"><p style="margin: 0; padding:0;">Tanggal Penyewaan & Pengembalian</p></div>
            <div style="width: 58.35%; float: left;"> <p style="margin: 0; padding:0;">: <?= $data[0]['tanggal_peminjaman']; ?> s.d <?= $data[0]['tanggal_pengembalian']; ?></p></div>
        </div>
        <p><strong>Surat ini tidak menunjukkan bahwa permintaan meminjam barang diterima, Anda perlu menghubungi pengurus masjid untuk meminta persetujuan.</strong></p>
        <div style="text-align: center;">
            <p style="margin-top: 60px;">Lampung Selatan,</p>
            <img class="img-fluid mt-4 mb-0" src="assets/images/surat/madani.png" style="height: 70px;">
            <p>Pengurus Masjid/BKM Madani</p>
        </div>
    </body>
</html>