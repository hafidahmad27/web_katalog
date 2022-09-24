<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Produk</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">DataTables</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<button type="button" class="btn btn-primary btnTambahProduk" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i> Tambah</button>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Produk</th>
										<th>Kategori</th>
										<th>Harga</th>
										<th>Foto</th>
										<th style="width:30%;">Deskripsi</th>
										<th style="width: 5%;">Lama</th>
										<th style="text-align: center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($produk as $pro) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $pro->nama_produk ?></td>
											<td><?= $pro->nama_kategori ?></td>
											<td><?= number_format($pro->harga_produk, 0, ',', '.') ?></td>
											<td><?= $pro->foto ?></td>
											<td><?= $pro->deskripsi ?></td>
											<td><?= $pro->lama_pengerjaan ?> hari</td>
											<td style="text-align: center;">
												<a class="btn btn-success btn-sm btnEditProduk" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $pro->id_produk; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<a href="<?= base_url() ?>produk/hapus_data/<?= $pro->id_produk; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->

	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="staticBackdropLabel">Input Produk</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>produk/tambah_data" method="POST" enctype="multipart/form-data" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_produk" name="id_produk" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Produk</label>
							<input type="text" id="nama_produk" name="nama_produk" class="form-control">
						</div>
						<div class="form-group">
							<label>Nama Kategori</label>
							<select name="id_kategori" id="id_kategori" class="form-control">
								<?php foreach ($kategori as $kat) : ?>
									<option value="<?= $kat->id_kategori ?>"><?= $kat->nama_kategori; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Harga Produk</label>
							<input type="number" id="harga_produk" name="harga_produk" class="form-control">
						</div>
						<div class="form-group">
							<label>Foto</label>
							<input type="file" id="foto" name="foto" class="form-control">
						</div>
						<div class="form-group">
							<label>Deskripsi</label>
							<input type="text" id="deskripsi" name="deskripsi" class="form-control">
						</div>
						<div class="form-group">
							<label>Lama Pengerjaan</label>
							<input type="number" id="lama_pengerjaan" name="lama_pengerjaan" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="close" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->
</div>
<!-- /.content-wrapper -->
