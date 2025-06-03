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
							<a href="<?php echo site_url('CCTVController4') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>vide3</p>
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

				<li class="nav-item">
					<a href="<?php echo site_url('Lipa8') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>
							Laporan Perkara
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo site_url('StatistikController') ?>" class="nav-link">
						<i class="nav-icon fas fa-chart-bar"></i>
						<p>
							Statistics
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('StatistikFebController') ?>" class="nav-link">
						<i class="nav-icon fas fa-chart-bar"></i>
						<p>
							Statistics Februari
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('StatistikMarController') ?>" class="nav-link">
						<i class="nav-icon fas fa-chart-bar"></i>
						<p>
							Statistics Maret
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo site_url('LKJanController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>
							Laporan Keuangan Januari
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LKFebController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>
							Laporan Keuangan Februari
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LKMarController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>
							Laporan Keuangan Maret
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LKAprController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>
							Laporan Keuangan April
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('KUMARController/perkara') ?>" class="nav-link">
						<i class="nav-icon fas fa-money-bill"></i>
						<p>
							Laporan Keuangan Perkara
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LipaMeiController') ?>" class="nav-link">
						<i class="nav-icon fas fa-receipt"></i>
						<p>
							Laporan Keuangan Mei
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LipaJunController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>
							Laporan Perkara Juni
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('AgendaController') ?>" class="nav-link">
						<i class="nav-icon fas fa-calendar-alt"></i>
						<p>
							Agenda Kerja Pimpinan
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LipaAprController') ?>" class="nav-link">
						<i class="nav-icon fas fa-balance-scale"></i>
						<p>
							Laporan Perkara LIPA 6
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('KUMARController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-alt"></i>
						<p>
							LRA Mare
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
</script> }); }); $(this).parent().addClass('active'); // Menambahkan kelas 'active' ke item yang diklik $('.nav-item').removeClass('active'); // Menghapus kelas 'active' dari semua item $(this).addClass('active'); $('.nav-link').removeClass('active'); $('.nav-link').on('click', function() {