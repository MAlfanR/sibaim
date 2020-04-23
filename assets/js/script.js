$(document).ready(function () {
	$("#table_id").DataTable();
	$("#table_id2").DataTable();
	$("#table_id3").DataTable();
	$(".dataTables_info").addClass("text-white");
	$(".paginate_button").addClass("p-1");
	$("label").addClass("text-white");
	$("select").addClass("custom-select");
	$("select").css("width", "41%");
});

function detailModalBarang(id) {
	$.ajax({
		url: "http://localhost/sibaim/Daftar_peminjam/getDetailBarang",
		data: { id_peminjaman: id },
		method: "post",
		success: function (data) {
			$("#bodyDetailBarang").html(data);
		},
	});
}

function hitung_total(total_db, value_db) {
	// mengambil inputan di elemen yang id nya donasi
	let donasi = $("#donasi").val();
	// menulis total donasi di form total donasi langsung
	let sum = parseInt(total_db) + parseInt(donasi);
	// cek is not a number
	if (isNaN(parseInt(donasi))) {
		$("#total_donasi").val(value_db);
	} else {
		$("#total_donasi").val(sum);
	}
}

function fotoModalBarangHilang(nama, foto) {
	$(".modal-title").html(nama);
	$(".modal-body img").attr(
		"src",
		"http://localhost/sibaim/assets/images/BarangHilang/" + foto
	);
}

function editModalBarangHilang(id) {
	$.ajax({
		url: "http://localhost/sibaim/Daftar_barang_hilang/getEdit",
		data: { id: id },
		method: "post",
		dataType: "json",
		success: function (data) {
			$("#id").val(data.id_barangtemu), $("#nama").val(data.nama_barangtemu);
			$("#tanggal").val(data.tanggal_barangtemu);
			$("#lokasi").val(data.lokasi_barangtemu);
			$("#keterangan").val(data.keterangan_barangtemu);
			$("#foto").val(data.foto_barangtemu);
		},
	});
}

function editModalBarangInventori(id) {
	$.ajax({
		url: "http://localhost/sibaim/Update_peminjaman_inventori/getEdit",
		data: { id: id },
		method: "post",
		dataType: "json",
		success: function (data) {
			$("#id").val(data.id_inventory);
			$("#nama").val(data.nama_inventory);
			$("#jumlah").val(data.jumlah_inventory);
			$("#biaya").val(data.harga_inventory);
		},
	});
}

function getDataDonasi(id) {
	$.ajax({
		url: "http://localhost/sibaim/Tabel_donasi/getDataById",
		data: { id: id },
		method: "post",
		dataType: "json",
		success: function (data) {
			$("#id_donasi").val(data.id_donasi);
			$("#nama_donasi").val(data.nama_donasi);
			$("#tanggal_donasi").val(data.tanggal_donasi);
			$("#jumlah_donasi").val(data.jumlah_donasi);
			$("#total_langsung_donasi").val(data.total_langsung_donasi);
		},
	});
}

function total_donasi(total_db, value_db) {
	// mengambil inputan di elemen yang id nya donasi
	let donasi = $("#jumlah_donasi").val();
	// menulis total donasi di form total donasi langsung
	let sum = parseInt(total_db) + parseInt(donasi);
	// cek is not a number
	if (isNaN(parseInt(donasi))) {
		$("#total_langsung_donasi").val(
			value_db.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
		);
	} else {
		$("#total_langsung_donasi").val(
			sum.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")
		);
	}
}

function detailModalBarang(id) {
	$.ajax({
		url: "http://localhost/sibaim/Update_peminjaman_inventori/getDetailBarang",
		data: { id_peminjaman: id },
		method: "post",
		success: function (data) {
			$("#bodyDetailBarang").html(data);
		},
	});
}

function detailModalTanggal(id) {
	$.ajax({
		url: "http://localhost/sibaim/Update_peminjaman_inventori/getDetailTanggal",
		data: { id: id },
		method: "post",
		dataType: "json",
		success: function (data) {
			$("#inputTglPinjam").val(data.tanggal_peminjaman);
			$("#inputTglKembali").val(data.tanggal_pengembalian);
		},
	});
}
