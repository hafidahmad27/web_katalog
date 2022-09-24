<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
	<ul class="slides-container">
		<li class="text-center">
			<img src="<?= base_url() ?>assets/foto/FRONTEND2.png" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>UMKM SEKAR AYU PUTAT JAYA</strong></h1>
						<p class="m-b-40">Proses Pembuatan produk yang di kerjakan oleh profesional pada bidangnya disurabaya dengan menghasilkan kualitas produk yang terjamin</p>
						<!--<p><a class="btn hvr-hover" href="#">Shop New</a></p>-->
					</div>
				</div>
			</div>
		</li>
		<li class="text-center">
			<img src="<?= base_url() ?>assets/foto/FRONTEND1.png" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>UMKM SEKAR AYU PUTAT JAYA</strong></h1>
						<p class="m-b-40">Proses Pembuatan produk yang di kerjakan oleh profesional pada bidangnya disurabaya dengan menghasilkan kualitas produk yang terjamin</p>
						<!--<p><a class="btn hvr-hover" href="#">Lihat Produk</a></p>-->
					</div>
				</div>
			</div>
		</li>
		<!-- <li class="text-center"> 
            <img src="<?= base_url() ?>assets/images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div> -->
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
	<div class="container">
		<div class="alert alert-success" role="alert"> <i class="fas fa-eye"></i>&nbsp; Daftar Produk kami</div>
		<div class="row">

			<?php foreach ($produk as $pro) : ?>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="shop-cat-box">


						<img src="<?= base_url('assets/foto/') . $pro->foto  ?>">

						<a class="btn hvr-hover" href="<?= base_url('Welcome/detail_produk/') . $pro->id_produk ?> "><?= $pro->nama_produk ?></a>

					</div>

				</div>

			<?php endforeach; ?>

		</div>
	</div>
</div>
<!-- End Categories -->

<div class="box-add-products">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="offer-box-products">
					<img class="img-fluid" src="<?= base_url() ?>assets/images/FRONTEND1.png" alt="" />
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="offer-box-products">
					<img class="img-fluid" src="<?= base_url() ?>assets/images/FRONTEND2.png" alt="" />
				</div>
			</div>
		</div>
	</div>

</div>



<!-- Start Instagram Feed  -->

<!-- End Instagram Feed  -->
