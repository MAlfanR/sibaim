function detailModalBarang(id){
    $.ajax({
        url: 'http://localhost/sibaim/Daftar_peminjam/getDetailBarang',
        data: {id_peminjaman : id},
        method: 'post',
        success: function(data){
            $('#bodyDetailBarang').html(data);
        }
    });
}