<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo site_url('Admin/Dashboard') ?>" class="brand-link">
		<img src="<?php echo base_url() ?>assets/dist/img/logo-mahkamah-agung.png" alt="Logo PA Amuntai" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">LAPORAN PERKARA</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url() ?>assets/dist/img/Logo PA Amuntai - Trans.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">PA Amuntai</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="<?php echo site_url('Dashboard') ?>" class="nav-link">
						<i class="nav-icon fas fa-chart-area"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-folder"></i>
						<p>
							STATISTIK
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo site_url('Statistik') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>STATISTIK PERKARA</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('CCTVController2') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>TAMPLE CCTV</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('CCTVController3') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>vide</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('Statistik_pihak2') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>STATISTIK PIHAK 2</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="<?php echo site_url('CCTVController') ?>" class="nav-link">
						<i class="nav-icon fas fa-video"></i>
						<p>
							CCTV
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {
		$('.nav-link').on('click', function() {
			$('.nav-link').removeClass('active');
			$(this).addClass('active');
			$('.nav-item').removeClass('active'); // Menghapus kelas 'active' dari semua item
			$(this).parent().addClass('active'); // Menambahkan kelas 'active' ke item yang diklik
		});
	});
</script>
