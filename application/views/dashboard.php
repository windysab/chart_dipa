<!-- Content Wrapper. Contains page content -->
<?php
date_default_timezone_set('Asia/Jakarta');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard Statistik Perkara</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Title for Yearly Statistics -->
			<div class="row mb-3">
				<div class="col-12">
					<h4 class="text-center text-primary">
						<i class="fas fa-chart-bar"></i> Statistik Perkara Tahun <?php echo $current_year; ?>
					</h4>
				</div>
			</div>

			<!-- Yearly Statistics Cards -->
			<div class="row mb-4">
				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="info-box bg-gradient-info">
						<span class="info-box-icon"><i class="fas fa-file-alt"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Total Perkara</span>
							<span class="info-box-number"><?php echo number_format(isset($yearly_data->total_perkara) ? $yearly_data->total_perkara : 0); ?></span>
							<span class="progress-description">Tahun <?php echo $current_year; ?></span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="info-box bg-gradient-success">
						<span class="info-box-icon"><i class="fas fa-laptop"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Perkara e-Court</span>
							<span class="info-box-number"><?php echo number_format(isset($yearly_data->total_perkara_ecourt) ? $yearly_data->total_perkara_ecourt : 0); ?></span>
							<span class="progress-description">Digital Filing</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="info-box bg-gradient-warning">
						<span class="info-box-icon"><i class="fas fa-percentage"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Persentase e-Court</span>
							<span class="info-box-number"><?php echo number_format(isset($yearly_data->persen_perkara_ecourt) ? $yearly_data->persen_perkara_ecourt : 0, 1); ?>%</span>
							<span class="progress-description">Digitalisasi</span>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="info-box bg-gradient-danger">
						<span class="info-box-icon"><i class="fas fa-file"></i></span>
						<div class="info-box-content">
							<span class="info-box-text">Non e-Court</span>
							<span class="info-box-number"><?php echo number_format(isset($yearly_data->total_perkara_non_ecourt) ? $yearly_data->total_perkara_non_ecourt : 0); ?></span>
							<span class="progress-description">Manual Filing</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Charts Section -->
			<div class="row mb-4">
				<!-- E-Court vs Non E-Court Pie Chart -->
				<div class="col-lg-6 col-12 mb-3">
					<div class="card card-outline card-primary">
						<div class="card-header">
							<h3 class="card-title">
								<i class="fas fa-chart-pie"></i> Perbandingan e-Court vs Non e-Court
							</h3>
						</div>
						<div class="card-body">
							<canvas id="ecourtChart" style="height: 300px;"></canvas>
						</div>
					</div>
				</div>

				<!-- Monthly Progress Chart -->
				<div class="col-lg-6 col-12 mb-3">
					<div class="card card-outline card-success">
						<div class="card-header">
							<h3 class="card-title">
								<i class="fas fa-chart-bar"></i> Statistik Bulan <?php echo $current_month_name; ?>
							</h3>
						</div>
						<div class="card-body">
							<canvas id="monthlyChart" style="height: 300px;"></canvas>
						</div>
					</div>
				</div>
			</div>

			<!-- Monthly Detail Statistics -->
			<div class="row mb-3">
				<div class="col-12">
					<h5 class="text-center text-info">
						<i class="fas fa-calendar-alt"></i> Detail Statistik Bulan <?php echo $current_month_name; ?>
					</h5>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?php echo isset($monthly_stats->diterima) ? number_format($monthly_stats->diterima) : 0; ?></h3>
							<p>Perkara Diterima</p>
						</div>
						<div class="icon">
							<i class="fas fa-file-plus"></i>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?php echo isset($monthly_stats->putus) ? number_format($monthly_stats->putus) : 0; ?></h3>
							<p>Perkara Putus</p>
						</div>
						<div class="icon">
							<i class="fas fa-gavel"></i>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="small-box bg-warning">
						<div class="inner">
							<h3><?php echo isset($monthly_stats->minutasi) ? number_format($monthly_stats->minutasi) : 0; ?></h3>
							<p>Perkara Minutasi</p>
						</div>
						<div class="icon">
							<i class="fas fa-file-signature"></i>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-12 mb-3">
					<div class="small-box bg-danger">
						<div class="inner">
							<h3><?php echo isset($monthly_stats->sisa) ? number_format($monthly_stats->sisa) : 0; ?></h3>
							<p>Sisa Perkara</p>
						</div>
						<div class="icon">
							<i class="fas fa-file-medical"></i>
						</div>
					</div>
				</div>
			</div>

			<!-- Include Chart.js and Plugins -->
			<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

			<!-- JavaScript for Charts -->
			<script>
				// E-Court vs Non E-Court Pie Chart
				var ecourtCtx = document.getElementById('ecourtChart').getContext('2d');
				var totalEcourt = <?php echo isset($yearly_data->total_perkara_ecourt) ? $yearly_data->total_perkara_ecourt : 0; ?>;
				var totalNonEcourt = <?php echo isset($yearly_data->total_perkara_non_ecourt) ? $yearly_data->total_perkara_non_ecourt : 0; ?>;

				var ecourtChart = new Chart(ecourtCtx, {
					type: 'doughnut',
					data: {
						labels: ['e-Court', 'Non e-Court'],
						datasets: [{
							data: [totalEcourt, totalNonEcourt],
							backgroundColor: ['#28a745', '#dc3545'],
							hoverBackgroundColor: ['#1e7e34', '#c82333'],
							borderColor: ['#fff', '#fff'],
							borderWidth: 3
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						plugins: {
							legend: {
								position: 'bottom',
								labels: {
									padding: 20,
									font: {
										size: 14
									}
								}
							},
							tooltip: {
								callbacks: {
									label: function(context) {
										var total = totalEcourt + totalNonEcourt;
										var percentage = total > 0 ? ((context.raw / total) * 100).toFixed(1) : 0;
										return context.label + ': ' + context.raw.toLocaleString() + ' (' + percentage + '%)';
									}
								}
							}
						}
					}
				});

				// Monthly Statistics Bar Chart
				var monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
				var monthlyData = [
					<?php echo isset($monthly_stats->diterima) ? $monthly_stats->diterima : 0; ?>,
					<?php echo isset($monthly_stats->putus) ? $monthly_stats->putus : 0; ?>,
					<?php echo isset($monthly_stats->minutasi) ? $monthly_stats->minutasi : 0; ?>,
					<?php echo isset($monthly_stats->sisa) ? $monthly_stats->sisa : 0; ?>
				];

				var monthlyChart = new Chart(monthlyCtx, {
					type: 'bar',
					data: {
						labels: ['Diterima', 'Putus', 'Minutasi', 'Sisa'],
						datasets: [{
							label: 'Jumlah Perkara',
							data: monthlyData,
							backgroundColor: [
								'rgba(54, 162, 235, 0.8)',
								'rgba(75, 192, 192, 0.8)',
								'rgba(255, 206, 86, 0.8)',
								'rgba(255, 99, 132, 0.8)'
							],
							borderColor: [
								'rgba(54, 162, 235, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(255, 99, 132, 1)'
							],
							borderWidth: 2,
							borderRadius: 5
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						plugins: {
							legend: {
								display: false
							},
							tooltip: {
								callbacks: {
									label: function(context) {
										return context.label + ': ' + context.raw.toLocaleString() + ' perkara';
									}
								}
							}
						},
						scales: {
							y: {
								beginAtZero: true,
								ticks: {
									stepSize: 1
								}
							}
						}
					}
				});
			</script>

			<!-- Custom Styles -->
			<style>
				.info-box {
					border-radius: 10px;
					box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
					transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
				}

				.info-box:hover {
					transform: translateY(-5px);
					box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
				}

				.small-box {
					border-radius: 10px;
					box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
					transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
				}

				.small-box:hover {
					transform: translateY(-5px);
					box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
				}

				.small-box .inner h3 {
					font-size: 2.2rem;
					font-weight: bold;
				}

				.small-box .inner p {
					font-size: 1.1rem;
				}

				.card {
					border-radius: 10px;
					box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
					transition: transform 0.3s ease-in-out;
				}

				.card:hover {
					transform: translateY(-2px);
				}

				.card-header {
					border-radius: 10px 10px 0 0 !important;
					background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
					color: white;
				}

				.card-outline.card-primary {
					border-top: 3px solid #007bff;
				}

				.card-outline.card-success {
					border-top: 3px solid #28a745;
				}

				.text-primary {
					color: #007bff !important;
				}

				.text-info {
					color: #17a2b8 !important;
				}

				.bg-gradient-info {
					background: linear-gradient(135deg, #17a2b8, #138496) !important;
				}

				.bg-gradient-success {
					background: linear-gradient(135deg, #28a745, #1e7e34) !important;
				}

				.bg-gradient-warning {
					background: linear-gradient(135deg, #ffc107, #e0a800) !important;
				}

				.bg-gradient-danger {
					background: linear-gradient(135deg, #dc3545, #c82333) !important;
				}
			</style>

		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->

	<!-- Additional Analytics Section -->
	<section class="content">
		<div class="container-fluid">
			<!-- Jenis Perkara Analysis -->
			<?php if (isset($perkara_data) && !empty($perkara_data)): ?>
				<div class="row mb-4">
					<div class="col-12">
						<div class="card card-outline card-info">
							<div class="card-header">
								<h3 class="card-title">
									<i class="fas fa-chart-line"></i> Analisis Jenis Perkara Bulan <?php echo $current_month_name; ?>
								</h3>
							</div>
							<div class="card-body">
								<canvas id="jenisPerkaraChart" style="height: 400px;"></canvas>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<!-- Mediasi Statistics -->
			<?php if (isset($mediasi_data)): ?>
				<div class="row mb-4">
					<div class="col-lg-6 col-12 mb-3">
						<div class="card card-outline card-warning">
							<div class="card-header">
								<h3 class="card-title">
									<i class="fas fa-handshake"></i> Statistik Mediasi
								</h3>
							</div>
							<div class="card-body">
								<canvas id="mediasiChart" style="height: 300px;"></canvas>
							</div>
						</div>
					</div>

					<!-- Summary Cards -->
					<div class="col-lg-6 col-12">
						<div class="row">
							<div class="col-12 mb-3">
								<div class="info-box bg-gradient-primary">
									<span class="info-box-icon"><i class="fas fa-balance-scale"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">Mediasi Berhasil</span>
										<span class="info-box-number"><?php echo isset($mediasi_data['Y1']) ? $mediasi_data['Y1'] : 0; ?></span>
										<span class="progress-description">Mencapai kesepakatan</span>
									</div>
								</div>
							</div>
							<div class="col-12 mb-3">
								<div class="info-box bg-gradient-secondary">
									<span class="info-box-icon"><i class="fas fa-times-circle"></i></span>
									<div class="info-box-content">
										<span class="info-box-text">Mediasi Gagal</span>
										<span class="info-box-number"><?php echo isset($mediasi_data['T']) ? $mediasi_data['T'] : 0; ?></span>
										<span class="progress-description">Tidak mencapai kesepakatan</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<!-- Performance Indicators -->
			<div class="row mb-4">
				<div class="col-12">
					<div class="card card-outline card-success">
						<div class="card-header">
							<h3 class="card-title">
								<i class="fas fa-tachometer-alt"></i> Indikator Kinerja
							</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-3 col-md-6 col-12 mb-3">
									<div class="small-box bg-primary">
										<div class="inner">
											<h3><?php echo isset($jumlah_terdaftar) ? $jumlah_terdaftar : 0; ?></h3>
											<p>Terdaftar Bulan Ini</p>
										</div>
										<div class="icon">
											<i class="fas fa-file-import"></i>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-12 mb-3">
									<div class="small-box bg-success">
										<div class="inner">
											<h3><?php echo isset($jumlah_diputus) ? $jumlah_diputus : 0; ?></h3>
											<p>Diputus Bulan Ini</p>
										</div>
										<div class="icon">
											<i class="fas fa-check-circle"></i>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-12 mb-3">
									<div class="small-box bg-warning">
										<div class="inner">
											<h3><?php echo isset($sisa_perkara) ? $sisa_perkara : 0; ?></h3>
											<p>Sisa Perkara</p>
										</div>
										<div class="icon">
											<i class="fas fa-hourglass-half"></i>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-12 mb-3">
									<div class="small-box bg-info">
										<div class="inner">
											<?php
											$clearance_rate = 0;
											if (isset($jumlah_terdaftar) && $jumlah_terdaftar > 0) {
												$clearance_rate = ($jumlah_diputus / $jumlah_terdaftar) * 100;
											}
											?>
											<h3><?php echo number_format($clearance_rate, 1); ?>%</h3>
											<p>Clearance Rate</p>
										</div>
										<div class="icon">
											<i class="fas fa-percentage"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Additional JavaScript for new charts -->
			<script>
				<?php if (isset($perkara_data) && !empty($perkara_data)): ?>
					// Jenis Perkara Chart
					var jenisPerkaraCtx = document.getElementById('jenisPerkaraChart').getContext('2d');
					var jenisPerkaraLabels = [];
					var jenisPerkaraData = [];

					<?php
					$jenis_summary = [];
					foreach ($perkara_data as $item) {
						if (!isset($jenis_summary[$item->jenis_perkara_nama])) {
							$jenis_summary[$item->jenis_perkara_nama] = 0;
						}
						$jenis_summary[$item->jenis_perkara_nama] += $item->jumlah_perkara;
					}
					?>

					<?php foreach ($jenis_summary as $jenis => $jumlah): ?>
						jenisPerkaraLabels.push('<?php echo addslashes($jenis); ?>');
						jenisPerkaraData.push(<?php echo $jumlah; ?>);
					<?php endforeach; ?>

					var jenisPerkaraChart = new Chart(jenisPerkaraCtx, {
						type: 'horizontalBar',
						data: {
							labels: jenisPerkaraLabels,
							datasets: [{
								label: 'Jumlah Perkara',
								data: jenisPerkaraData,
								backgroundColor: [
									'rgba(255, 99, 132, 0.8)',
									'rgba(54, 162, 235, 0.8)',
									'rgba(255, 205, 86, 0.8)',
									'rgba(75, 192, 192, 0.8)',
									'rgba(153, 102, 255, 0.8)',
									'rgba(255, 159, 64, 0.8)',
									'rgba(201, 203, 207, 0.8)'
								],
								borderColor: [
									'rgba(255, 99, 132, 1)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 205, 86, 1)',
									'rgba(75, 192, 192, 1)',
									'rgba(153, 102, 255, 1)',
									'rgba(255, 159, 64, 1)',
									'rgba(201, 203, 207, 1)'
								],
								borderWidth: 2
							}]
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							plugins: {
								legend: {
									display: false
								}
							},
							scales: {
								x: {
									beginAtZero: true
								}
							}
						}
					});
				<?php endif; ?>

				<?php if (isset($mediasi_data)): ?>
					// Mediasi Chart
					var mediasiCtx = document.getElementById('mediasiChart').getContext('2d');
					var mediasiChart = new Chart(mediasiCtx, {
						type: 'doughnut',
						data: {
							labels: ['Berhasil', 'Gagal', 'Sebagian', 'Ditunda', 'Dicabut'],
							datasets: [{
								data: [
									<?php echo isset($mediasi_data['Y1']) ? $mediasi_data['Y1'] : 0; ?>,
									<?php echo isset($mediasi_data['T']) ? $mediasi_data['T'] : 0; ?>,
									<?php echo isset($mediasi_data['Y2']) ? $mediasi_data['Y2'] : 0; ?>,
									<?php echo isset($mediasi_data['S']) ? $mediasi_data['S'] : 0; ?>,
									<?php echo isset($mediasi_data['D']) ? $mediasi_data['D'] : 0; ?>
								],
								backgroundColor: [
									'rgba(40, 167, 69, 0.8)',
									'rgba(220, 53, 69, 0.8)',
									'rgba(255, 193, 7, 0.8)',
									'rgba(23, 162, 184, 0.8)',
									'rgba(108, 117, 125, 0.8)'
								],
								borderColor: '#fff',
								borderWidth: 3
							}]
						},
						options: {
							responsive: true,
							maintainAspectRatio: false,
							plugins: {
								legend: {
									position: 'bottom',
									labels: {
										padding: 20
									}
								}
							}
						}
					});
				<?php endif; ?>
			</script>
		</div><!-- /.container-fluid -->
	</section>
</div>
<!-- /.content-wrapper -->