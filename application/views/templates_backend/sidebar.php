<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Admin</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<?php $uri = $this->uri->segment(1) ?>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<!-- <li class="nav-item">
					<a href="<?= base_url() ?>admin" class="nav-link <?php echo $uri == 'admin' ? 'active' : 'no' ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="<?= base_url() ?>kategori" class="nav-link <?php echo $uri == 'kategori' ? 'active' : 'no' ?>">
						<i class="fas fa-boxes nav-icon"></i>
						<p>
							Kategori Produk
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>produk" class="nav-link <?php echo $uri == 'produk' ? 'active' : 'no' ?>">
						<i class="fas fa-box nav-icon"></i>
						<p>
							Produk
						</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
