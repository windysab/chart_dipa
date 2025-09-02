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
							<a href="<?php echo site_url('CCTVController3') ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>vide</p>
							</a>
						</li>
					</ul>
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
					<a href="<?php echo site_url('AgendaJuniController') ?>" class="nav-link">
						<i class="nav-icon fas fa-calendar-day"></i>
						<p>
							Agenda Kegiatan Bulan Juni
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('AgendaSatkerController') ?>" class="nav-link">
						<i class="nav-icon fas fa-calendar-check"></i>
						<p>
							Agenda Kegiatan Satker
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('AgendaSatkerJuniController') ?>" class="nav-link">
						<i class="nav-icon fas fa-calendar-week"></i>
						<p>
							Agenda Satker Bulan Juni
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
				<li class="nav-item">
					<a href="<?php echo site_url('LipaJuni1Controller') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-contract"></i>
						<p>
							Laporan LIPA Juni 1
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LipaJuliController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-signature"></i>
						<p>
							Laporan LIPA Juli 2025 
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LKJuniPerkaraController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-invoice"></i>
						<p>
							Laporan Keuangan Perkara Juni
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LKJuliPerkaraController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-invoice-dollar"></i>
						<p>
							Laporan Keuangan Perkara Juli
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('LKAgustusPerkaraController') ?>" class="nav-link">
						<i class="nav-icon fas fa-file-invoice-dollar"></i>
						<p>
							Laporan Keuangan Perkara Agustus
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('AgendaSatkerJuliController') ?>" class="nav-link">
						<i class="nav-icon fas fa-calendar-alt"></i>
						<p>
							Agenda Kegiatan Juli
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo site_url('AgendaPimpinanJuliController') ?>" class="nav-link">
						<i class="nav-icon fas fa-user-tie"></i>
						<p>
							Agenda Pimpinan Juli
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?php echo site_url('PersyaratanController') ?>" class="nav-link">
						<i class="nav-icon fas fa-balance-scale"></i>
						<p>
							Persyaratan Perkara Cerai
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
			$('.nav-item').removeClass('active');
			$(this).parent().addClass('active');
		});
	});
</script>
