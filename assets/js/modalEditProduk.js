$(function ()
{
	$(".btnTambahProduk").on("click", function() {
        $("#staticBackdropLabel").html("Form Input Produk");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/web_katalog/Produk/tambah_data"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditProduk").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Produk");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/web_katalog/Produk/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/web_katalog/Produk/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
        console.log("ok");
				console.log(data);
        console.log("ok");
				$("#id_produk").val(data.id_produk);
				$("#id_kategori").val(data.id_kategori);
				$("#harga_produk").val(data.harga_produk);
				$("#foto").val(data.foto);
				$("#deskripsi").val(data.deskripsi);
				$("#lama_pengerjaan").val(data.lama_pengerjaan);
        console.log("ok");
			},
		});
	});
});
