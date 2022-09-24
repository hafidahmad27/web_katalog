<!-- Start Gallery  -->
<div class="products-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="title-all text-center">
					<h1>Galery Batik Rumah Batik Putat Jaya</h1>
					<p>Di Rumah Batik Putat Jaya Warga Dan Wisatawan Dapat Belajar Membatik Sekaligus Mengenal Batik Khas Eks Lokalisasi Dolly.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".Tulis">Batik Tulis</button>
						<button data-filter=".Cap">Batik Cap</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row special-list">
			<?php foreach ($produk as $pro) : ?>
				<div class="col-lg-3 col-md-6 mr-4 special-grid <?= $pro->nama_kategori ?>">
					<div class="product-single fix">
						<div class="box-img-hover">
							<div class="type-lb">
								<p class="sale">sale</p>
							</div>
							<img src="<?= base_url('assets/foto/') . $pro->foto  ?>" class="img-fluid" alt="Image">
							<div class="mask-icon">
								<ul>

									<li><a href="<?= base_url() ?>Welcome/detail_produk/<?= $pro->id_produk; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
									<li><a href="" data-toggle="tooltip" data-placement="right" title="compare"><i class="fas fa-sync-alt"></i></a></li>
									<!-- <li><a href="" data-toggle="tooltip" data-placement="right" title="Add whishlist"><i class="far fa-heart"></i></a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- End Gallery  -->
