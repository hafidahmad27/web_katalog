<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Kategori Produk</h1>
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
							<button type="button" class="btn btn-primary btnTambahKategori" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i> Tambah</button>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kategori</th>
										<th style="text-align: center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
									foreach ($kategori as $ktg) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $ktg->nama_kategori ?></td>
											<td style="text-align: center;">
												<a class="btn btn-success btn-sm btnEditKategori" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $ktg->id_kategori; ?>"><i class="fa fa-edit"></i></a>&nbsp;
												<a href="<?= base_url() ?>kategori/hapus_data/<?= $ktg->id_kategori; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
	<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="staticBackdropLabel">Input Kategori Produk</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url() ?>kategori/tambah_data" method="POST" id="formResetData">
						<div class="form-group">
							<input type="hidden" id="id_kategori" name="id_kategori" class="form-control" readonly>
						</div>
						<div class="form-group">
							<label>Nama Kategori</label>
							<input type="text" id="nama_kategori" name="nama_kategori" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="close" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal -->
</div>
<!-- /.content-wrapper -->
