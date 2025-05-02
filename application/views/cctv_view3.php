<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CCTV Monitoring - PA Amuntai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
	<style>
		:root {
			/* Skema Warna Modern */
			--primary-color: #1a73e8; /* Biru Google */
			--secondary-color: #5f6368; /* Abu-abu Google */
			--success-color: #34a853; /* Hijau Google */
			--warning-color: #fbbc05; /* Kuning Google */
			--danger-color: #ea4335; /* Merah Google */
			--info-color: #4285f4; /* Biru Muda Google */
			--light-color: #f8f9fa;
			--dark-color: #202124;
			--text-color: #3c4043;
			--border-color: #dadce0;
			--card-bg: #ffffff;
			--shadow-sm: 0 1px 2px rgba(60, 64, 67, 0.1);
			--shadow-md: 0 2px 6px rgba(60, 64, 67, 0.15);
			--shadow-lg: 0 4px 12px rgba(60, 64, 67, 0.2);
			--border-radius-sm: 4px;
			--border-radius-md: 8px;
			--border-radius-lg: 12px;
			--transition: all 0.2s ease-in-out;
		}

		body {
			font-family: 'Nunito', sans-serif;
			background-color: #f1f3f4;
			color: var(--text-color);
			line-height: 1.5;
		}

		.container-fluid {
			max-width: 1400px;
			margin: 0 auto;
			padding: 15px;
		}

		/* Header Styling - Lebih Kompak */
		.header {
			text-align: center;
			margin-bottom: 20px;
			position: relative;
			padding: 20px 15px;
			background: var(--primary-color);
			border-radius: var(--border-radius-md);
			box-shadow: var(--shadow-md);
			color: white;
		}

		.header img {
			width: 60px;
			height: 60px;
			margin-bottom: 10px;
			border-radius: 50%;
			border: 2px solid rgba(255, 255, 255, 0.7);
		}

		.header h5 {
			font-size: 1.5rem;
			font-weight: 700;
			margin-bottom: 5px;
		}

		.header p {
			font-size: 0.9rem;
			opacity: 0.9;
			margin-bottom: 0;
		}

		/* Visitor Counter - Lebih Ringkas */
		.visitor-counter {
			background: var(--card-bg);
			border-radius: var(--border-radius-md);
			padding: 10px 15px;
			margin: 15px 0;
			box-shadow: var(--shadow-sm);
			text-align: center;
			border: 1px solid var(--border-color);
		}

		.visitor-counter h6 {
			margin: 0;
			font-size: 0.85rem;
			color: var(--secondary-color);
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
			gap: 15px;
		}

		.visitor-counter .counter-item {
			display: inline-flex;
			align-items: center;
			padding: 3px 0;
		}

		.visitor-counter i {
			margin-right: 5px;
			color: var(--primary-color);
		}

		.visitor-counter .count {
			font-weight: 700;
			color: var(--dark-color);
		}

		/* Section Title - Lebih Ringkas */
		.section-title {
			text-align: center;
			margin-bottom: 15px;
			position: relative;
		}

		.section-title h4 {
			font-size: 1.2rem;
			font-weight: 700;
			color: var(--primary-color);
			display: inline-block;
			padding: 0 15px 8px;
			border-bottom: 2px solid var(--primary-color);
		}

		.section-title h4 i {
			margin-right: 8px;
		}

		/* CCTV Video Section - Lebih Kompak */
		.cctv-section {
			margin-bottom: 20px;
		}

		.video-link {
			background-color: var(--card-bg);
			border-radius: var(--border-radius-md);
			padding: 12px;
			margin-bottom: 15px;
			text-align: center;
			box-shadow: var(--shadow-sm);
			transition: var(--transition);
			position: relative;
			border: 1px solid var(--border-color);
			height: 100%;
		}

		.video-link:hover {
			transform: translateY(-3px);
			box-shadow: var(--shadow-md);
		}

		.video-link h6 {
			margin: 0 0 8px 0;
			font-weight: 600;
			color: var(--dark-color);
			font-size: 0.95rem;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.video-link h6 i {
			margin-right: 6px;
			color: var(--primary-color);
		}

		.video-link .video-container {
			position: relative;
			padding-bottom: 56.25%; /* 16:9 */
			height: 0;
			overflow: hidden;
			border-radius: var(--border-radius-sm);
			border: 1px solid var(--border-color);
		}

		.video-link iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}

		.video-status {
			position: absolute;
			top: 5px;
			right: 5px;
			background-color: var(--success-color);
			color: white;
			padding: 2px 6px;
			border-radius: var(--border-radius-sm);
			font-size: 0.65rem;
			font-weight: 600;
			z-index: 10;
			display: inline-flex;
			align-items: center;
		}

		.video-status i {
			margin-right: 3px;
			font-size: 0.6rem;
			animation: pulse 2s infinite ease-in-out;
		}

		@keyframes pulse {
			0%, 100% { opacity: 1; }
			50% { opacity: 0.5; }
		}

		/* Case Status Header - Lebih Ringkas */
		.case-status-header {
			text-align: center;
			margin: 20px 0 15px;
			background: var(--dark-color);
			padding: 12px 15px;
			border-radius: var(--border-radius-md);
			color: white;
			box-shadow: var(--shadow-sm);
		}

		.case-status-header h2 {
			font-size: 1.2rem;
			font-weight: 700;
			margin: 0;
		}

		.case-status-header h2 i {
			margin-right: 8px;
			color: var(--warning-color);
		}

		/* Circle Cards - Lebih Kecil */
		.total-perkara-container {
			margin: 20px 0;
		}

		.circle-card-wrapper {
			position: relative;
			margin-bottom: 15px;
		}

		.circle-card {
			width: 110px;
			height: 110px;
			border-radius: 50%;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin: 0 auto;
			color: #fff;
			box-shadow: var(--shadow-sm);
			transition: var(--transition);
			text-align: center;
		}

		.circle-card:hover {
			transform: scale(1.05);
			box-shadow: var(--shadow-md);
		}

		/* Warna Card */
		.circle-card.total-perkara { background: var(--primary-color); }
		.circle-card.total-perkara-ecourt { background: var(--success-color); }
		.circle-card.persen-perkara-ecourt { background: var(--warning-color); color: var(--dark-color); }
		.circle-card.total-perkara-non-ecourt { background: var(--danger-color); }

		.circle-card p.value {
			font-size: 1.5rem;
			font-weight: 700;
			margin: 0;
			line-height: 1;
		}

		.circle-card .card-internal-title {
			font-size: 0.7rem;
			font-weight: 600;
			margin-top: 5px;
			opacity: 0.9;
		}

		/* Chart & Table Containers - Lebih Ringkas */
		.chart-container,
		.table-container {
			background: var(--card-bg);
			border-radius: var(--border-radius-md);
			padding: 15px;
			margin-bottom: 15px;
			box-shadow: var(--shadow-sm);
			border: 1px solid var(--border-color);
			transition: var(--transition);
			height: 100%;
		}

		.chart-container:hover,
		.table-container:hover {
			box-shadow: var(--shadow-md);
		}

		.chart-container h5,
		.table-container h5 {
			text-align: left;
			margin-bottom: 15px;
			color: var(--dark-color);
			font-weight: 700;
			font-size: 1rem;
			display: flex;
			align-items: center;
		}

		.chart-container h5 i,
		.table-container h5 i {
			margin-right: 8px;
			color: var(--primary-color);
		}

		/* Table Styling - Lebih Ringkas */
		.table {
			margin-bottom: 0;
			font-size: 0.85rem;
		}

		.table thead th {
			background-color: #f1f3f4;
			color: var(--dark-color);
			font-weight: 700;
			border-bottom: 2px solid var(--primary-color);
			padding: 8px;
		}

		.table tbody td {
			padding: 8px;
		}

		/* Responsive Adjustments */
		@media (max-width: 992px) {
			.circle-card {
				width: 100px;
				height: 100px;
			}
			.circle-card p.value {
				font-size: 1.3rem;
			}
		}

		@media (max-width: 768px) {
			.header h5 {
				font-size: 1.3rem;
			}
			.section-title h4 {
				font-size: 1.1rem;
			}
			.case-status-header h2 {
				font-size: 1.1rem;
			}
		}

		@media (max-width: 576px) {
			.circle-card {
				width: 90px;
				height: 90px;
			}
			.circle-card p.value {
				font-size: 1.1rem;
			}
			.circle-card .card-internal-title {
				font-size: 0.65rem;
			}
			.visitor-counter h6 {
				flex-direction: column;
				gap: 5px;
			}
			.visitor-counter .counter-item {
				justify-content: center;
			}
		}
	</style>
</head>

<body>
	<div class="container-fluid"> <!-- Changed to container-fluid -->
		<div class="header">
			<div class="header-content">
				<img src="<?php echo base_url('public/assets/img/logo-pa-amuntai.png'); ?>" alt="Logo PA Amuntai">
				<h5>CCTV Monitoring & Statistik Perkara</h5>
				<p>Pengadilan Agama Amuntai Kelas IB</p>
			</div>
		</div>

		<!-- Visitor Counter -->
		<div class="visitor-counter">
			<h6>
				<span class="counter-item"><i class="fas fa-eye"></i> Hari Ini: <span class="count"><?= $daily_view_count; ?></span></span>
				<span class="counter-item"><i class="fas fa-calendar-week"></i> Bulan Ini: <span class="count"><?= $monthly_view_count; ?></span></span>
				<span class="counter-item"><i class="fas fa-chart-line"></i> Total: <span class="count"><?= $total_view_count; ?></span></span>
				<!-- <span class="counter-item"><i class="fas fa-users"></i> Total Pengunjung: <span class="count"><?= $view_count; ?></span></span> -->
			</h6>
		</div>


		<!-- CCTV Section -->
		<div class="cctv-section">
			<div class="section-title">
				<h4><i class="fas fa-video"></i> Live CCTV Monitoring</h4>
			</div>
			<div class="row">
				<?php if (!empty($links)) : ?>
					<?php foreach ($links as $name => $url) : ?>
						<div class="col-lg-4 col-md-6">
							<div class="video-link">
								<h6><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($name); ?></h6>
								<div class="video-container">
									<iframe src="<?= htmlspecialchars($url); ?>" allowfullscreen></iframe>
									<div class="video-status">
										<i class="fas fa-circle"></i> Live
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php else : ?>
					<div class="col-12">
						<p class="text-center">Tidak ada link CCTV yang tersedia.</p>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<!-- Case Status Header -->
		<div class="case-status-header">
			<h2><i class="fas fa-chart-bar"></i> Statistik Perkara Bulan Ini</h2>
		</div>

		<!-- Total Perkara Circle Cards -->
		<div class="total-perkara-container">
			<div class="row justify-content-center">
				<div class="col-lg-2 col-md-4 col-sm-6 col-6 circle-card-wrapper">
					<div class="circle-card total-perkara">
						<div>
							<p class="value"><?= number_format($total_perkara_data->total_perkara); ?></p>
							<p class="card-internal-title">Total Perkara</p>
						</div>
					</div>
					<!-- <p class="circle-card-title">Total Perkara</p> -->
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6 circle-card-wrapper">
					<div class="circle-card total-perkara-ecourt">
						<div>
							<p class="value"><?= number_format($total_perkara_data->total_perkara_ecourt); ?></p>
							<p class="card-internal-title">E-Court</p>
						</div>
					</div>
					<!-- <p class="circle-card-title">Total E-Court</p> -->
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6 circle-card-wrapper">
					<div class="circle-card persen-perkara-ecourt">
						<div>
							<p class="value"><?= number_format($total_perkara_data->persen_perkara_ecourt, 1); ?>%</p>
							<p class="card-internal-title">Persentase E-Court</p>
						</div>
					</div>
					<!-- <p class="circle-card-title">Persentase E-Court</p> -->
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6 circle-card-wrapper">
					<div class="circle-card total-perkara-non-ecourt">
						<div>
							<p class="value"><?= number_format($total_perkara_data->total_perkara_non_ecourt); ?></p>
							<p class="card-internal-title">Non E-Court</p>
						</div>
					</div>
					<!-- <p class="circle-card-title">Total Non E-Court</p> -->
				</div>
			</div>
		</div>


		<!-- Charts and Tables Section -->
		<div class="row">
			<!-- Chart Perkara Diterima -->
			<div class="col-lg-6">
				<div class="chart-container">
					<h5><i class="fas fa-chart-pie"></i> Komposisi Perkara Diterima</h5>
					<canvas id="perkaraChart"></canvas>
				</div>
			</div>

			<!-- Chart Mediasi -->
			<div class="col-lg-6">
				<div class="chart-container">
					<h5><i class="fas fa-balance-scale"></i> Hasil Mediasi</h5>
					<canvas id="mediasiChart"></canvas>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- Table Laporan Perkara -->
			<div class="col-lg-6">
				<div class="table-container">
					<h5><i class="fas fa-file-alt"></i> Laporan Perkara</h5>
					<table class="table table-bordered table-striped table-hover">
						<thead class="thead-light">
							<tr>
								<th>Keterangan</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sisa Bulan Lalu</td>
								<td><?= number_format($sisa_perkara_bulan_sebelumnya); ?></td>
							</tr>
							<tr>
								<td>Diterima Bulan Ini</td>
								<td><?= number_format($jumlah_perkara_terdaftar); ?></td>
							</tr>
							<tr>
								<td>Diputus Bulan Ini</td>
								<td><?= number_format($jumlah_perkara_diputus); ?></td>
							</tr>
							<tr>
								<td>Sisa Bulan Ini</td>
								<td><?= number_format($sisa_perkara); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<!-- Table E-Filing -->
			<div class="col-lg-6">
				<div class="table-container">
					<h5><i class="fas fa-laptop-code"></i> Laporan E-Filing</h5>
					<table class="table table-bordered table-striped table-hover">
						<thead class="thead-light">
							<tr>
								<th>Keterangan</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Sisa Bulan Lalu</td>
								<td><?= number_format($efiling_data->sisa_bulan_lalu); ?></td>
							</tr>
							<tr>
								<td>Masuk Bulan Ini</td>
								<td><?= number_format($efiling_data->masuk_bulan_ini); ?></td>
							</tr>
							<tr>
								<td>Putus Bulan Ini</td>
								<td><?= number_format($efiling_data->putus_bulan_ini); ?></td>
							</tr>
							<tr>
								<td>Sisa Bulan Ini</td>
								<td><?= number_format($efiling_data->sisa_bulan_ini); ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div> <!-- End Container -->

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		// Data from PHP
		const perkaraData = <?= json_encode($chart_data); ?>;
		const mediasiData = <?= json_encode($mediasi_data); ?>;

		// Process Perkara Data for Chart
		const perkaraLabels = [];
		const perkaraCounts = [];
		const backgroundColorsPerkara = [
			'rgba(26, 115, 232, 0.8)', // Primary Blue
			'rgba(52, 168, 83, 0.8)',  // Green
			'rgba(251, 188, 5, 0.8)',  // Yellow
			'rgba(234, 67, 53, 0.8)',  // Red
			'rgba(66, 133, 244, 0.8)', // Lighter Blue
			'rgba(24, 206, 150, 0.8)', // Teal
			'rgba(108, 117, 125, 0.8)' // Gray
		];
		const borderColorsPerkara = backgroundColorsPerkara.map(color => color.replace('0.8', '1'));

		// Aggregate data by jenis_perkara_nama
        const aggregatedPerkara = perkaraData.reduce((acc, curr) => {
            const key = curr.jenis_perkara_nama;
            if (!acc[key]) {
                acc[key] = 0;
            }
            acc[key] += parseInt(curr.jumlah_perkara, 10);
            return acc;
        }, {});

        // Populate labels and counts from aggregated data
        for (const [label, count] of Object.entries(aggregatedPerkara)) {
            perkaraLabels.push(label);
            perkaraCounts.push(count);
        }


		// Perkara Chart (Pie Chart)
		const ctxPerkara = document.getElementById('perkaraChart').getContext('2d');
		const perkaraChart = new Chart(ctxPerkara, {
			type: 'pie',
			data: {
				labels: perkaraLabels,
				datasets: [{
					label: 'Jumlah Perkara',
					data: perkaraCounts,
					backgroundColor: backgroundColorsPerkara,
					borderColor: borderColorsPerkara,
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'bottom', // Position legend at the bottom
						labels: {
							boxWidth: 15,
							padding: 15
						}
					},
					tooltip: {
						callbacks: {
							label: function(context) {
								let label = context.label || '';
								if (label) {
									label += ': ';
								}
								if (context.parsed !== null) {
									label += context.parsed;
								}
								// Calculate percentage
								const total = context.dataset.data.reduce((sum, value) => sum + value, 0);
								const percentage = ((context.raw / total) * 100).toFixed(1) + '%';
								label += ` (${percentage})`;
								return label;
							}
						}
					}
				}
			}
		});

		// Process Mediasi Data for Chart
		const mediasiLabels = ['Berhasil Sebagian', 'Berhasil Dicabut', 'Tidak Berhasil', 'Berhasil Akta Perdamaian', 'Berhasil'];
		const mediasiCounts = [
			mediasiData['S'] || 0,
			mediasiData['D'] || 0,
			mediasiData['T'] || 0,
			mediasiData['Y2'] || 0,
			mediasiData['Y1'] || 0
		];
		const backgroundColorsMediasi = [
			'rgba(255, 159, 64, 0.8)', // Orange
			'rgba(255, 99, 132, 0.8)',  // Red
			'rgba(153, 102, 255, 0.8)', // Purple
			'rgba(75, 192, 192, 0.8)',  // Teal
			'rgba(54, 162, 235, 0.8)'   // Blue
		];
		const borderColorsMediasi = backgroundColorsMediasi.map(color => color.replace('0.8', '1'));

		// Mediasi Chart (Doughnut Chart)
		const ctxMediasi = document.getElementById('mediasiChart').getContext('2d');
		const mediasiChart = new Chart(ctxMediasi, {
			type: 'doughnut', // Changed to doughnut for variety
			data: {
				labels: mediasiLabels,
				datasets: [{
					label: 'Hasil Mediasi',
					data: mediasiCounts,
					backgroundColor: backgroundColorsMediasi,
					borderColor: borderColorsMediasi,
					borderWidth: 1
				}]
			},
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top',
					},
					tooltip: {
						callbacks: {
							label: function(context) {
								let label = context.label || '';
								if (label) {
									label += ': ';
								}
								if (context.parsed !== null) {
									label += context.parsed;
								}
								return label;
							}
						}
					}
				}
			}
		});
	</script>
