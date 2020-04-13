$(document).ready(function(){
	function hitung_total(total_db, value_db) {
		
		// mengambil inputan di elemen yang id nya donasi
		let donasi = $('#donasi').val();
		// menulis total donasi di form total donasi langsung
		let sum = parseInt(total_db) + parseInt(donasi);
		// cek is not a number
		if (isNaN(parseInt(donasi))) {
			$('#total_donasi').val(value_db);
		} else {
			$('#total_donasi').val(sum);
		}

	}

	function fotoModalBarangHilang(nama, foto){
		$('.modal-title').html(nama);
		$('.modal-body img').attr("src","http://localhost/sibaim/assets/images/BarangHilang/" + foto);
	}

	function editModalBarangHilang(id){

		$.ajax({
			url: 'http://localhost/sibaim/Daftar_barang_hilang/getEdit',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_barangtemu),
				$('#nama').val(data.nama_barangtemu);
				$('#tanggal').val(data.tanggal_barangtemu);
				$('#lokasi').val(data.lokasi_barangtemu);
				$('#keterangan').val(data.keterangan_barangtemu);
				$('#foto').val(data.foto_barangtemu);
			}
		});
	}

	function editModalBarangInventori(id){
		
		$.ajax({
			url: 'http://localhost/sibaim/Update_peminjaman_inventori/getEdit',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#id').val(data.id_inventory);
				$('#nama').val(data.nama_inventory);
				$('#jumlah').val(data.jumlah_inventory);
				$('#biaya').val(data.harga_inventory);
			}
		});
	}

});