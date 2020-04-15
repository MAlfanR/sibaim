function getDataDonasi(id){
    $.ajax({
        url: 'http://localhost/sibaim/Tabel_donasi/getDataById',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){
             $('#nama_donasi').val(data.nama_donasi);
            $('#tanggal_donasi').val(data.tanggal_donasi);
            $('#jumlah_donasi').val(data.jumlah_donasi);
            $('#total_langsung_donasi').val(data.total_langsung_donasi);
        }
    });
}

function total_donasi(total_db, value_db){
    // mengambil inputan di elemen yang id nya donasi
    let donasi = $('#jumlah_donasi').val();
    // menulis total donasi di form total donasi langsung
    let sum = parseInt(total_db) + parseInt(donasi);
    // cek is not a number
    if (isNaN(parseInt(donasi))) {
        $('#total_langsung_donasi').val(value_db);
    } else {
        $('#total_langsung_donasi').val(sum);
    }
}