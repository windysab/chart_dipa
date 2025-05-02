<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CCTV Monitoring - PA Amuntai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
		:root {
			--primary: #4361ee;
			--secondary: #3f37c9;
			--success: #4cc9f0;
			--info: #4895ef;
			--warning: #f72585;
			--danger: #e63946;
			--light: #f8f9fa;
			--dark: #212529;
			--gray-100: #f8f9fa;
			--gray-200: #e9ecef;
			--gray-300: #dee2e6;
			--gray-400: #ced4da;
			--gray-500: #adb5bd;
			--gray-600: #6c757d;
			--gray-700: #495057;
			--gray-800: #343a40;
			--gray-900: #212529;
		}

		body {
			font-family: 'Poppins', sans-serif;
			background-color: #f5f7ff;
			color: var(--gray-700);
			line-height: 1.6;
		}

		.dashboard-container {
			padding: 2rem;
			max-width: 1400px;
			margin: 0 auto;
		}

		.header {
			background: linear-gradient(135deg, var(--primary), var(--secondary));
			color: white;
			border-radius: 15px;
			padding: 2rem;
			margin-bottom: 2rem;
			box-shadow: 0 10px 25px rgba(67, 97, 238, 0.15);
			position: relative;
			overflow: hidden;
		}

		.header::before {
			content: '';
			position: absolute;
			top: -50%;
			right: -50%;
			width: 100%;
			height: 200%;
			background: rgba(255, 255, 255, 0.1);
			transform: rotate(30deg);
		}

		.header h1 {
			font-weight: 700;
			margin-bottom: 0.5rem;
			position: relative;
			z-index: 1;
		}

		.header p {
			opacity: 0.9;
			margin-bottom: 0;
			position: relative;
			z-index: 1;
		}

		.card {
			border: none;
			border-radius: 15px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
			transition: transform 0.3s, box-shadow 0.3s;
			margin-bottom: 1.5rem;
			overflow: hidden;
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
		}

		.card-header {
			background: white;
			border-bottom: 1px solid var(--gray-200);
			padding: 1.25rem 1.5rem;
			font-weight: 600;
			color: var(--gray-800);
			display: flex;
			align-items: center;
		}

		.card-header i {
			margin-right: 0.75rem;
			color: var(--primary);
			font-size: 1.25rem;
		}

		.card-body {
			padding: 1.5rem;
		}

		.summary-card {
			background: white;
			border-radius: 15px;
			padding: 1.5rem;
			display: flex;
			align-items: center;
			margin-bottom: 1.5rem;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
			transition: transform 0.3s, box-shadow 0.3s;
		}

		.summary-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
		}

		.summary-icon {
			width: 60px;
			height: 60px;
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-right: 1.5rem;
			font-size: 1.5rem;
			color: white;
		}

		.summary-icon.primary {
			background: linear-gradient(135deg, var(--primary), var(--secondary));
		}

		.summary-icon.info {
			background: linear-gradient(135deg, var(--info), var(--success));
		}

		.summary-content h3 {
			font-size: 1.75rem;
			font-weight: 700;
			margin-bottom: 0.25rem;
			color: var(--gray-800);
		}

		.summary-content p {
			margin-bottom: 0;
			color: var(--gray-600);
			font-size: 0.9rem;
		}

		.table-container {
			background: white;
			border-radius: 15px;
			overflow: hidden;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
			margin-bottom: 1.5rem;
		}

		.table-header {
			padding: 1.25rem 1.5rem;
			border-bottom: 1px solid var(--gray-200);
			font-weight: 600;
			color: var(--gray-800);
			display: flex;
			align-items: center;
		}

		.table-header i {
			margin-right: 0.75rem;
			color: var(--primary);
			font-size: 1.25rem;
		}

		.table {
			margin-bottom: 0;
		}

		.table thead th {
			border-top: none;
			border-bottom: 2px solid var(--gray-200);
			font-weight: 600;
			color: var(--gray-700);
			padding: 1rem 1.5rem;
			background-color: var(--gray-100);
		}

		.table tbody td {
			padding: 1rem 1.5rem;
			vertical-align: middle;
			border-top: 1px solid var(--gray-200);
			color: var(--gray-700);
		}

		.table tbody tr:hover {
			background-color: var(--gray-100);
		}

		.badge {
			padding: 0.5rem 0.75rem;
			font-weight: 500;
			border-radius: 30px;
		}

		.badge-success {
			background-color: rgba(76, 201, 240, 0.15);
			color: var(--success);
		}

		.badge-warning {
			background-color: rgba(247, 37, 133, 0.15);
			color: var(--warning);
		}

		.badge-danger {
			background-color: rgba(230, 57, 70, 0.15);
			color: var(--danger);
		}

		.badge-info {
			background-color: rgba(72, 149, 239, 0.15);
			color: var(--info);
		}

		.badge-primary {
			background-color: rgba(67, 97, 238, 0.15);
			color: var(--primary);
		}

		.chart-container {
			background: white;
			border-radius: 15px;
			overflow: hidden;
			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
			margin-bottom: 1.5rem;
		}

		.chart-header {
			padding: 1.25rem 1.5rem;
			border-bottom: 1px solid var(--gray-200);
			font-weight: 600;
			color: var(--gray-800);
			display: flex;
			align-items: center;
		}

		.chart-header i {
			margin-right: 0.75rem;
			color: var(--primary);
			font-size: 1.25rem;
		}

		.chart-body {
			padding: 1.5rem;
		}

		.fade-in {
			animation: fadeIn 0.8s ease-in-out;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(20px);
			}
			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		.footer {
			text-align: center;
			padding: 2rem 0;
			color: var(--gray-600);
			font-size: 0.9rem;
		}

		.footer a {
			color: var(--primary);
			text-decoration: none;
		}

		.footer a:hover {
			text-decoration: underline;
		}

		@media (max-width: 768px) {
			.dashboard-container {
				padding: 1rem;
			}

			.header {
				padding: 1.5rem;
			}

			.summary-card {
				flex-direction: column;
				text-align: center;
			}

			.summary-icon {
				margin-right: 0;
				margin-bottom: 1rem;
			}
		}
	</style>
</head>

<body>
	<div class="dashboard-container">
		<div class="header fade-in">
			<h1><i class="fas fa-video"></i> Dashboard Monitoring PA Amuntai</h1>
			<p>Data Perkara dan Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></p>
		</div>

		<div class="row fade-in">
			<div class="col-md-6">
				<div class="summary-card">
					<div class="summary-icon primary">
						<i class="fas fa-folder-open"></i>
					</div>
					<div class="summary-content">
						<h3><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></h3>
						<p>Total Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="summary-card">
					<div class="summary-icon info">
						<i class="fas fa-handshake"></i>
					</div>
					<div class="summary-content">
						<h3><?php echo array_sum($mediasi_data); ?></h3>
						<p>Total Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row fade-in">
			<div class="col-md-6">
				<div class="chart-container">
					<div class="chart-header">
						<i class="fas fa-chart-pie"></i> Distribusi Jenis Perkara
					</div>
					<div class="chart-body">
						<div class="chart">
							<canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="chart-container">
					<div class="chart-header">
						<i class="fas fa-handshake"></i> Hasil Mediasi
					</div>
					<div class="chart-body">
						<div class="chart">
							<canvas id="mediasiChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row fade-in">
			<div class="col-md-6">
				<div class="table-container">
					<div class="table-header">
						<i class="fas fa-list-alt"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Jenis Perkara</th>
									<th>Jumlah</th>
									<th>Persentase</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$previous_month = date('Y-m', strtotime('first day of last month'));
								$filtered_chart_data = array_filter($chart_data, function ($data) use ($previous_month) {
									$data_month = isset($data->tanggal_pendaftaran) ? date('Y-m', strtotime($data->tanggal_pendaftaran)) : '';
									return $data_month == $previous_month;
								});

								$grouped_data = [];
								foreach ($filtered_chart_data as $data) {
									if (!isset($grouped_data[$data->jenis_perkara_nama])) {
										$grouped_data[$data->jenis_perkara_nama] = 0;
									}
									$grouped_data[$data->jenis_perkara_nama] += $data->jumlah_perkara;
								}

								$total_perkara = array_sum($grouped_data);
								foreach ($grouped_data as $jenis_perkara_nama => $jumlah_perkara): ?>
									<tr>
										<td><?php echo htmlspecialchars($jenis_perkara_nama, ENT_QUOTES, 'UTF-8'); ?></td>
										<td><?php echo htmlspecialchars($jumlah_perkara, ENT_QUOTES, 'UTF-8'); ?></td>
										<td>
											<div class="d-flex align-items-center">
												<div class="progress flex-grow-1 mr-2" style="height: 8px;">
													<div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo ($total_perkara > 0) ? ($jumlah_perkara / $total_perkara * 100) : 0; ?>%"></div>
												</div>
												<span>
													<?php
													if ($total_perkara > 0) {
														echo number_format(($jumlah_perkara / $total_perkara * 100), 2) . '%';
													} else {
														echo '0.00%';
													}
													?>
												</span>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="table-container">
					<div class="table-header">
						<i class="fas fa-handshake"></i> Data Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?>
					</div>
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Hasil Mediasi</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<span class="badge badge-danger">
											<i class="fas fa-times-circle"></i> Tidak Dapat Dilaksanakan
										</span>
									</td>
									<td><?php echo $mediasi_data['D']; ?></td>
								</tr>
								<tr>
									<td>
										<span class="badge badge-warning">
											<i class="fas fa-thumbs-down"></i> Tidak Berhasil
										</span>
									</td>
									<td><?php echo $mediasi_data['T']; ?></td>
								</tr>
								<tr>
									<td>
										<span class="badge badge-info">
											<i class="fas fa-adjust"></i> Berhasil Sebagian
										</span>
									</td>
									<td><?php echo $mediasi_data['S']; ?></td>
								</tr>
								<tr>
									<td>
										<span class="badge badge-success">
											<i class="fas fa-check-circle"></i> Berhasil Dengan Pencabutan
										</span>
									</td>
									<td><?php echo $mediasi_data['Y2']; ?></td>
								</tr>
								<tr>
									<td>
										<span class="badge badge-primary">
											<i class="fas fa-award"></i> Berhasil Dengan Akta Perdamaian
										</span>
									</td>
									<td><?php echo $mediasi_data['Y1']; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row fade-in">
			<div class="col-md-6 mx-auto">
				<div class="chart-container">
					<div class="chart-header">
						<i class="fas fa-balance-scale"></i> Penanganan Perkara E-court
					</div>
					<div class="chart-body">
						<div class="chart">
							<canvas id="efilingChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer fade-in">
			<div id="histats_counter"></div>
			<p>© <?php echo date('Y'); ?> PA Amuntai. All rights reserved.</p>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0"></script>

	<script>
		// Register the datalabels plugin
		Chart.register(ChartDataLabels);

		document.addEventListener('DOMContentLoaded', function() {
			// Donut chart for case types
			const donutChartCanvas = document.getElementById('donutChart');
			if (donutChartCanvas) {
				new Chart(donutChartCanvas, {
					type: 'doughnut',
					data: {
						labels: <?php echo json_encode(array_keys($grouped_data)); ?>,
						datasets: [{
							data: <?php echo json_encode(array_values($grouped_data)); ?>,
							backgroundColor: ['#4361ee', '#3a0ca3', '#4895ef', '#4cc9f0', '#f72585', '#7209b7', '#560bad', '#480ca8', '#3f37c9', '#4361ee'],
							borderWidth: 0
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						cutout: '70%',
						plugins: {
							legend: {
								position: 'bottom',
								labels: {
									padding: 20,
									boxWidth: 12,
									font: {
										family: 'Poppins',
										size: 12
									}
								}
							},
							datalabels: {
								color: '#fff',
								font: {
									weight: 'bold',
									size: 12
								},
								formatter: (value, ctx) => {
									const sum = ctx.dataset.data.reduce((a, b) => a + b, 0);
									const percentage = (value * 100 / sum).toFixed(1) + '%';
									return percentage;
								}
							}
						},
						animation: {
							animateScale: true,
							animateRotate: true
						}
					}
				});
			}

			// Mediasi chart
			const mediasiChartCanvas = document.getElementById('mediasiChart');
			if (mediasiChartCanvas) {
				new Chart(mediasiChartCanvas, {
					type: 'doughnut',
					data: {
						labels: ['Tidak Dapat Dilaksanakan', 'Tidak Berhasil', 'Berhasil Sebagian', 'Berhasil Dengan Pencabutan', 'Berhasil Dengan Akta Perdamaian'],
						datasets: [{
							data: [
								<?php echo $mediasi_data['D']; ?>,
								<?php echo $mediasi_data['T']; ?>,
								<?php echo $mediasi_data['S']; ?>,
								<?php echo $mediasi_data['Y2']; ?>,
								<?php echo $mediasi_data['Y1']; ?>
							],
							backgroundColor: ['#e63946', '#f72585', '#4895ef', '#4cc9f0', '#4361ee'],
							borderWidth: 0
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						cutout: '70%',
						plugins: {
							legend: {
								position: 'bottom',
								labels: {
									padding: 20,
									boxWidth: 12,
									font: {
										family: 'Poppins',
										size: 12
									}
								}
							},
							datalabels: {
								color: '#fff',
								font: {
									weight: 'bold',
									size: 12
								},
								formatter: (value, ctx) => {
									const sum = ctx.dataset.data.reduce((a, b) => a + b, 0);
									const percentage = (value * 100 / sum).toFixed(1) + '%';
									return percentage;
								}
							}
						},
						animation: {
							animateScale: true,
							animateRotate: true
						}
					}
				});
			}

			// E-filing chart
			const efilingChartCanvas = document.getElementById('efilingChart');
			if (efilingChartCanvas) {
				new Chart(efilingChartCanvas, {
					type: 'bar',
					data: {
						labels: ['E-Filing', 'Manual'],
						datasets: [{
							label: 'Jumlah Perkara',
							data: [
								<?php echo isset($efiling_data->e_filing) ? $efiling_data->e_filing : 0; ?>,
								<?php echo isset($efiling_data->manual) ? $efiling_data->manual : 0; ?>
							],
							backgroundColor: ['#4361ee', '#f72585'],
							borderWidth: 0,
							borderRadius: 8
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						scales: {
							y: {
								beginAtZero: true,
								grid: {
									display: true,
									drawBorder: false,
									color: 'rgba(200, 200, 200, 0.15)'
								},
								ticks: {
									font: {
										family: 'Poppins',
										size: 12
									}
								}
							},
							x: {
								grid: {
									display: false,
									drawBorder: false
								},
								ticks: {
									font: {
										family: 'Poppins',
										size: 12
									}
								}
							}
						},
						plugins: {
							legend: {
								display: false
							},
							datalabels: {
								color: '#fff',
								anchor: 'center',
								align: 'center',
								font: {
									weight: 'bold',
									size: 14
								}
							}
						},
						animation: {
							duration: 2000
						}
					}
				});
			}
		});
	</script>
</body>

</html>
