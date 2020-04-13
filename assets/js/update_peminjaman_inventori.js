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