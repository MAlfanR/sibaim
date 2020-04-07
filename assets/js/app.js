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

	function fotoModal(nama, foto){
		$('.modal-title').html(nama);
		$('.modal-body img').attr("src","http://localhost/sibaim/assets/images/BarangHilang/" + foto);
	}