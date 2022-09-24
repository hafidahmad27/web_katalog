$(function ()
{
	$(".btnTambahKategori").on("click", function() {
    $("#staticBackdropLabel").html("Form Input Kategori");
		$(".modal-footer button[type=submit]").html("Simpan");
		$(".modal-body form").attr(
			"action",
			"http://localhost/web_katalog/Kategori/tambah_data"
		);
		document.getElementById('formResetData').reset();
	});

	$(".btnEditKategori").on("click", function () {
		$("#staticBackdropLabel").html("Form Edit Kategori");
		$(".modal-footer button[type=submit]").html("Update");
		$(".modal-body form").attr(
			"action",
			"http://localhost/web_katalog/Kategori/update"
		);

		const id = $(this).data("id");

		$.ajax({
			url: "http://localhost/web_katalog/kategori/getUbah",
			data: {
				id: id,
			},
			method: "post",
			dataType: "json",
			success: function (data) {
        console.log("ok");
				console.log(data);
        console.log("ok");
				$("#id_kategori").val(data.id_kategori);
				$("#nama_kategori").val(data.nama_kategori);
        console.log("ok");
			},
		});
	});
});
