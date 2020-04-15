function detailModalBarang(id){
    $.ajax({
        url: 'http://localhost/sibaim/Update_peminjaman_inventori/getDetailBarang',
        data: {id_peminjaman : id},
        method: 'post',
        success: function(data){
            $('#bodyDetailBarang').html(data);
        }
    });
}

function detailModalTanggal(id){
    $.ajax({
        url: 'http://localhost/sibaim/Update_peminjaman_inventori/getDetailTanggal',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){
            $('#inputTglPinjam').val(data.tanggal_peminjaman);
            $('#inputTglKembali').val(data.tanggal_pengembalian);
        }
    });
}

function getDataDonasi(id){
    console.log(id);
}



