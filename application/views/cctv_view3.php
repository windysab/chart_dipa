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
			--primary-color: #1a73e8;
			--secondary-color: #34a853;
			--accent-color: #fbbc05;
			--danger-color: #ea4335;
			--dark-color: #202124;
			--light-color: #f8f9fa;
			--border-color: #dadce0;
			--text-color: #3c4043;
			--shadow-sm: 0 2px 5px rgba(0, 0, 0, 0.08);
			--shadow-md: 0 4px 10px rgba(0, 0, 0, 0.12);
			--shadow-lg: 0 8px 20px rgba(0, 0, 0, 0.15);
			--transition: all 0.3s ease;
		}

		body {
			font-family: 'Poppins', sans-serif;
			background-color: var(--light-color);
			color: var(--text-color);
			line-height: 1.6;
		}

		.container {
			margin-top: 30px;
			margin-bottom: 50px;
		}

		/* Header Styling */
		.header {
			text-align: center;
			margin-bottom: 40px;
			position: relative;
			padding: 20px;
			background: linear-gradient(135deg, #1a73e8, #4285f4);
			border-radius: 15px;
			box-shadow: var(--shadow-md);
			color: white;
		}

		.header::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,5 C60,20 40,20 0,5 Z" fill="rgba(255,255,255,0.1)"/></svg>');
			background-size: 100% 100%;
			border-radius: 15px;
			z-index: 0;
		}

		.header-content {
			position: relative;
			z-index: 1;
		}

		.header img {
			width: 120px;
			height: auto;
			margin-bottom: 15px;
			border-radius: 50%;
			border: 5px solid rgba(255, 255, 255, 0.3);
			box-shadow: var(--shadow-sm);
			transition: var(--transition);
		}

		.header img:hover {
			transform: scale(1.05);
			box-shadow: var(--shadow-md);
		}

		.header h5 {
			font-size: 2.2rem;
			font-weight: 700;
			margin-bottom: 10px;
			text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
		}

		.header p {
			font-size: 1.1rem;
			opacity: 0.9;
		}

		/* CCTV Video Section */
		.cctv-section {
			margin-bottom: 40px;
		}

		.section-title {
			text-align: center;
			margin-bottom: 30px;
			position: relative;
			padding-bottom: 15px;
		}

		.section-title h4 {
			font-size: 1.8rem;
			font-weight: 600;
			color: var(--primary-color);
		}

		.section-title::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			width: 80px;
			height: 4px;
			background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
			border-radius: 2px;
		}

		.video-link {
			background-color: #ffffff;
			border-radius: 12px;
			padding: 20px;
			margin-bottom: 30px;
			text-align: center;
			box-shadow: var(--shadow-md);
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			border: 1px solid var(--border-color);
		}

		.video-link:hover {
			transform: translateY(-10px);
			box-shadow: var(--shadow-lg);
		}

		.video-link::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 5px;
			background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
		}

		.video-link h6 {
			margin: 0 0 15px 0;
			font-weight: 600;
			color: var(--primary-color);
			font-size: 1.2rem;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.video-link h6 i {
			margin-right: 10px;
			color: var(--accent-color);
		}

		.video-link .video-container {
			position: relative;
			padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
			height: 0;
			overflow: hidden;
			border-radius: 8px;
			box-shadow: var(--shadow-sm);
		}

		.video-link iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
			border-radius: 8px;
		}

		.video-status {
			position: absolute;
			top: 10px;
			right: 10px;
			background-color: rgba(52, 168, 83, 0.8);
			color: white;
			padding: 5px 10px;
			border-radius: 20px;
			font-size: 0.8rem;
			font-weight: 500;
			z-index: 10;
			display: flex;
			align-items: center;
		}

		.video-status i {
			margin-right: 5px;
			font-size: 0.7rem;
			animation: pulse 1.5s infinite;
		}

		@keyframes pulse {
			0% {
				opacity: 1;
			}
			50% {
				opacity: 0.5;
			}
			100% {
				opacity: 1;
			}
		}

		/* Visitor Counter */
		.visitor-counter {
			background: white;
			border-radius: 12px;
			padding: 15px 20px;
			margin: 30px 0;
			box-shadow: var(--shadow-md);
			text-align: center;
			border: 1px solid var(--border-color);
		}

		.visitor-counter h6 {
			margin: 0;
			font-size: 1.1rem;
			color: var(--dark-color);
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
		}

		.visitor-counter .counter-item {
			display: inline-flex;
			align-items: center;
			margin: 0 15px;
			padding: 5px 0;
		}

		.visitor-counter i {
			margin-right: 8px;
			color: var(--primary-color);
		}

		.visitor-counter .count {
			font-weight: 600;
			color: var(--primary-color);
		}

		/* Case Status Section */
		.case-status-header {
			text-align: center;
			margin: 40px 0 30px;
			background: linear-gradient(135deg, var(--dark-color), #3c4043);
			padding: 20px;
			border-radius: 12px;
			color: white;
			box-shadow: var(--shadow-md);
		}

		.case-status-header h2 {
			font-size: 1.8rem;
			font-weight: 600;
			margin: 0;
		}

		/* Circle Cards */
		.total-perkara-container {
			margin: 40px 0;
		}

		.circle-card-wrapper {
			position: relative;
			margin-bottom: 20px;
		}

		.circle-card {
			width: 160px;
			height: 160px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin: 0 auto;
			color: #fff;
			box-shadow: var(--shadow-md);
			transition: var(--transition);
			text-align: center;
			position: relative;
			z-index: 1;
		}

		.circle-card::before {
			content: '';
			position: absolute;
			top: -5px;
			left: -5px;
			right: -5px;
			bottom: -5px;
			background: inherit;
			border-radius: 50%;
			z-index: -1;
			opacity: 0.4;
			filter: blur(10px);
			transition: var(--transition);
		}

		.circle-card:hover {
			transform: translateY(-10px) scale(1.05);
		}

		.circle-card:hover::before {
			opacity: 0.6;
			filter: blur(15px);
		}

		.circle-card.total-perkara {
			background: linear-gradient(135deg, var(--primary-color), #4285f4);
		}

		.circle-card.total-perkara-ecourt {
			background: linear-gradient(135deg, var(--secondary-color), #66bb6a);
		}

		.circle-card.persen-perkara-ecourt {
			background: linear-gradient(135deg, var(--accent-color), #ffd54f);
		}

		.circle-card.total-perkara-non-ecourt {
			background: linear-gradient(135deg, var(--danger-color), #ef5350);
		}

		.circle-card p.value {
			font-size: 2rem;
			font-weight: 700;
			margin: 0;
			line-height: 1;
		}

		.circle-card-title {
			margin-top: 15px;
			text-align: center;
			font-weight: 600;
			color: var(--dark-color);
			font-size: 1.1rem;
		}

		/* Chart Containers */
		.chart-container,
		.table-container {
			background: white;
			border-radius: 12px;
			padding: 20px;
			margin-bottom: 30px;
			box-shadow: var(--shadow-md);
			border: 1px solid var(--border-color);
			transition: var(--transition);
		}

		.chart-container:hover,
		.table-container:hover {
			box-shadow: var(--shadow-lg);
		}

		.chart-container h5,
		.table-container h5 {
			text-align: center;
			margin-bottom: 20px;
			color: var(--primary-color);
			font-weight: 600;
			padding-bottom: 10px;
			border-bottom: 2px solid #f0f0f0;
		}

		.card-body {
			padding: 0;
		}

		/* Tables */
		.table-container .table {
			border-radius: 8px;
			overflow: hidden;
			box-shadow: none;
			margin-bottom: 0;
		}

		.table-container .table th {
			background: linear-gradient(135deg, var(--primary-color), #4285f4);
			color: white;
			font-weight: 600;
			border: none;
		}

		.table-container .table td {
			vertical-align: middle;
			border-color: #f0f0f0;
		}

		.table-container .table tbody tr:hover {
			background-color: rgba(26, 115, 232, 0.05);
		}

		/* Summary Section */
		.summary-section {
			background: white;
			border-radius: 12px;
			padding: 20px;
			margin: 30px 0;
			box-shadow: var(--shadow-md);
			text-align: center;
			border: 1px solid var(--border-color);
		}

		.summary-section h5 {
			color: var(--primary-color);
			font-weight: 600;
			margin-bottom: 10px;
		}

		.summary-section h5.count {
			font-size: 1.5rem;
			color: var(--dark-color);
		}

		/* Responsive Adjustments */
		@media (max-width: 992px) {
			.circle-card {
				width: 140px;
				height: 140px;
			}
			
			.circle-card p.value {
				font-size: 1.8rem;
			}
			
			.header h5 {
				font-size: 1.8rem;
			}
		}

		@media (max-width: 768px) {
			.container {
				margin-top: 20px;
			}
			
			.header h5 {
				font-size: 1.5rem;
			}
			
			.section-title h4 {
				font-size: 1.5rem;
			}
			
			.circle-card {
				width: 120px;
				height: 120px;
				margin-bottom: 15px;
			}
			
			.circle-card p.value {
				font-size: 1.5rem;
			}
			
			.circle-card-title {
				font-size: 0.9rem;
			}
			
			.visitor-counter .counter-item {
				margin: 5px 10px;
			}
		}

		@media (max-width: 576px) {
			.header {
				padding: 15px;
			}
			
			.header h5 {
				font-size: 1.3rem;
			}
			
			.visitor-counter h6 {
				flex-direction: column;
			}
			
			.visitor-counter .counter-item {
				margin: 5px 0;
			}
		}

		/* Animation */
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

		.highlight {
			background-color: rgba(251, 188, 5, 0.2) !important;
		}

		.table-hover tbody tr:hover {
			background-color: rgba(26, 115, 232, 0.05);
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="header fade-in">
			<div class="header-content">
				<img src="<?php echo base_url('assets/images/Logo PA Amuntai - Trans.png'); ?>" class="img-fluid" alt="Logo PA Amuntai">
				<h5>LIVE CCTV MONITORING</h5>
				<p>PENGADILAN AGAMA AMUNTAI KELAS IB</p>
			</div>
		</div>

		<div class="cctv-section fade-in">
			<div class="section-title">
				<h4><i class="fas fa-video"></i> Pantauan CCTV</h4>
			</div>
			<div class="row">
				<?php if (isset($links)) : ?>
					<?php 
					$icons = [
						'Halaman Parkir' => 'fas fa-car',
						'Ruang Tunggu' => 'fas fa-couch',
						'PTSP' => 'fas fa-info-circle',
						
					];
					?>
					<?php foreach ($links as $name => $url): ?>
						<div class="col-md-4 col-sm-6">
							<div class="video-link">
								<h6><i class="<?php echo isset($icons[$name]) ? $icons[$name] : 'fas fa-video'; ?>"></i> <?php echo ucfirst(str_replace('_', ' ', $name)); ?></h6>
								<div class="video-status">
									<i class="fas fa-circle"></i> Live
								</div>
								<div class="video-container">
									<iframe src="<?php echo $url; ?>" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="visitor-counter fade-in">
			<h6>
				<div class="counter-item">
					<i class="fas fa-users"></i> Pengunjung Hari Ini: <span class="count"><?php echo htmlspecialchars($daily_view_count, ENT_QUOTES, 'UTF-8'); ?></span>
				</div>
				<div class="counter-item">
					<i class="fas fa-calendar-alt"></i> Bulan Ini: <span class="count"><?php echo htmlspecialchars($monthly_view_count, ENT_QUOTES, 'UTF-8'); ?></span>
				</div>
				<div class="counter-item">
					<i class="fas fa-chart-line"></i> Total: <span class="count"><?php echo htmlspecialchars($total_view_count, ENT_QUOTES, 'UTF-8'); ?></span>
				</div>
			</h6>
		</div>

		<div class="case-status-header fade-in">
			<h2><i class="fas fa-balance-scale"></i> KEADAAN PERKARA S/D <?php echo date('F Y', strtotime('first day of last month')); ?></h2>
		</div>

		<div class="row total-perkara-container text-center fade-in">
			<div class="col-md-3 col-sm-6">
				<div class="circle-card-wrapper">
					<div class="circle-card total-perkara">
						<p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></p>
					</div>
				</div>
				<p class="circle-card-title">Total Perkara</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="circle-card-wrapper">
					<div class="circle-card total-perkara-ecourt">
						<p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_ecourt, ENT_QUOTES, 'UTF-8'); ?></p>
					</div>
				</div>
				<p class="circle-card-title">Perkara e-Court</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="circle-card-wrapper">
					<div class="circle-card persen-perkara-ecourt">
						<p class="value"><?php echo number_format($total_perkara_data->persen_perkara_ecourt) . '%'; ?></p>
					</div>
				</div>
				<p class="circle-card-title">Persentase e-Court</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="circle-card-wrapper">
					<div class="circle-card total-perkara-non-ecourt">
						<p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_non_ecourt, ENT_QUOTES, 'UTF-8'); ?></p>
					</div>
				</div>
				<p class="circle-card-title">Perkara Non e-Court</p>
			</div>
		</div>

		<div class="row fade-in">
			<div class="col-md-6">
				<div class="chart-container">
					<h5><i class="fas fa-chart-pie"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
					<div class="card-body">
						<div class="chart">
							<canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="chart-container">
					<h5><i class="fas fa-handshake"></i> Penyelesaian Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
					<div class="card-body">
						<div class="chart">
							<canvas id="mediasiChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row summary-section fade-in">
			<div class="col-md-6">
				<h5><i class="fas fa-folder-open"></i> Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<h5 class="count"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?> Perkara</h5>
			</div>
			<div class="col-md-6">
				<h5><i class="fas fa-handshake"></i> Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<h5 class="count"><?php echo array_sum($mediasi_data); ?> Perkara</h5>
			</div>
		</div>

		<div class="row fade-in">
			<div class="col-md-6">
				<div class="table-container">
					<h5><i class="fas fa-list-alt"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
					<table class="table table-bordered table-hover sql-table">
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
										<?php
										if ($total_perkara > 0) {
											echo number_format(($jumlah_perkara / $total_perkara * 100), 2) . '%';
										} else {
											echo '0.00%';
										}
										?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="table-container">
					<h5><i class="fas fa-handshake"></i> Data Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
					<table class="table table-bordered table-hover sql-table">
						<thead>
							<tr>
								<th>Hasil Mediasi</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><i class="fas fa-times-circle text-danger"></i> Tidak Dapat Dilaksanakan</td>
								<td><?php echo $mediasi_data['D']; ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-thumbs-down text-warning"></i> Tidak Berhasil</td>
								<td><?php echo $mediasi_data['T']; ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-adjust text-info"></i> Berhasil Sebagian</td>
								<td><?php echo $mediasi_data['S']; ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-check-circle text-success"></i> Berhasil Dengan Pencabutan</td>
								<td><?php echo $mediasi_data['Y2']; ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-award text-primary"></i> Berhasil Dengan Akta Perdamaian</td>
								<td><?php echo $mediasi_data['Y1']; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="row fade-in">
			<div class="col-md-6 mx-auto">
				<div class="chart-container">
					<h5><i class="fas fa-balance-scale"></i> Penanganan Perkara E-court Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
					<div class="card-body">
						<div class="chart">
							<canvas id="efilingChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center my-5 text-center fade-in">
			<div id="histats_counter"></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
	
	<script>
		// Add animation to elements when they come into view
		function animateOnScroll() {
			const elements = document.querySelectorAll('.fade-in');
			
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.style.opacity = 1;
						entry.target.style.transform = 'translateY(0)';
						observer.unobserve(entry.target);
					}
				});
			}, {
				threshold: 0.1
			});
			
			elements.forEach(element => {
				element.style.opacity = 0;
				element.style.transform = 'translateY(20px)';
				element.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
				observer.observe(element);
			});
		}
		
		// Call the animation function when the page loads
		document.addEventListener('DOMContentLoaded', animateOnScroll);
		
		// Initialize charts
		$(function() {
			// Donut chart for case types
			var donutChartCanvas = $('#donutChart').get(0).getContext('2d');
			var donutData = {
				labels: <?php echo json_encode(array_keys($grouped_data)); ?>,
				datasets: [{
					data: <?php echo json_encode(array_values($grouped_data)); ?>,
					backgroundColor: ['#1a73e8', '#34a853', '#fbbc05', '#ea4335', '#5f6368', '#4285f4', '#46bdc6', '#ff6d01', '#7baaf7', '#174ea6'],
				}]
			};
			var donutOptions = {
				maintainAspectRatio: false,
				responsive: true,
				plugins: {
					legend: {
						position: 'bottom',
						labels: {
							padding: 20,
							boxWidth: 12
						}
					},
					datalabels: {
						formatter: (value, ctx) => {
							let sum = 0;
							let dataArr = ctx.chart.data.datasets[0].data;
							dataArr.map(data => {
								sum += data;
							});
							let percentage = (value * 100 / sum).toFixed(1) + "%";
							return percentage;
						},
						color: '#fff',
						font: {
							weight: 'bold',
							size: 12
						}
					},
					tooltip: {
						callbacks: {
							label: function(context) {
								let label = context.label || '';
								let value = context.raw || 0;
								let sum = context.dataset.data.reduce((a, b) => a + b, 0);
								let percentage = Math.round((value / sum) * 100);
								return `${label}: ${value} (${percentage}%)`;
							}
						}
					}
				},
				cutout: '60%',
				animation: {
					animateScale: true,
					animateRotate: true,
					duration: 2000
				}
			};
			
			new Chart(donutChartCanvas, {
				type: 'doughnut',
				data: donutData,
				options: donutOptions,
				plugins: [ChartDataLabels]
			});
			
			// Mediasi chart
			var mediasiChartCanvas = $('#mediasiChart').get(0).getContext('2d');
			var mediasiData = {
				labels: ['Tidak Dapat Dilaksanakan', 'Tidak Berhasil', 'Berhasil Sebagian', 'Berhasil Dengan Pencabutan', 'Berhasil Dengan Akta Perdamaian'],
				datasets: [{
					data: [
						<?php echo $mediasi_data['D']; ?>,
						<?php echo $mediasi_data['T']; ?>,
						<?php echo $mediasi_data['S']; ?>,
						<?php echo $mediasi_data['Y2']; ?>,
						<?php echo $mediasi_data['Y1']; ?>
					],
					backgroundColor: ['#ea4335', '#fbbc05', '#4285f4', '#34a853', '#1a73e8'],
				}]
			};
			
			var mediasiOptions = {
				maintainAspectRatio: false,
				responsive: true,
				plugins: {
					legend: {
						position: 'bottom',
						labels: {
							padding: 20,
							boxWidth: 12
						}
					},
					datalabels: {
						formatter: (value, ctx) => {
							if (value === 0) return '';
							return value;
						},
						color: '#fff',
						font: {
							weight: 'bold',
							size: 12
						}
					}
				},
				cutout: '60%',
				animation: {
					animateScale: true,
					animateRotate: true,
					duration: 2000
				}
			};
			
			new Chart(mediasiChartCanvas, {
				type: 'doughnut',
				data: mediasiData,
				options: mediasiOptions,
				plugins: [ChartDataLabels]
			});
			
			// E-filing chart
			var efilingChartCanvas = $('#efilingChart').get(0).getContext('2d');
			var efilingData = {
				labels: ['E-Court', 'Non E-Court'],
				datasets: [{
					data: [
						<?php echo htmlspecialchars($total_perkara_data->total_perkara_ecourt, ENT_QUOTES, 'UTF-8'); ?>,
						<?php echo htmlspecialchars($total_perkara_data->total_perkara_non_ecourt, ENT_QUOTES, 'UTF-8'); ?>
					],
					backgroundColor: ['#34a853', '#ea4335'],
				}]
			};
			
			var efilingOptions = {
				maintainAspectRatio: false,
				responsive: true,
				plugins: {
					legend: {
						position: 'bottom',
						labels: {
							padding: 20,
							boxWidth: 12
						}
					},
					datalabels: {
						formatter: (value, ctx) => {
							let sum = 0;
							let dataArr = ctx.chart.data.datasets[0].data;
							dataArr.map(data => {
								sum += data;
							});
							let percentage = (value * 100 / sum).toFixed(1) + "%";
							return percentage;
						},
						color: '#fff',
						font: {
							weight: 'bold',
							size: 12
						}
					}
				},
				cutout: '60%',
				animation: {
					animateScale: true,
					animateRotate: true,
					duration: 2000
				}
			};
			
			new Chart(efilingChartCanvas, {
				type: 'doughnut',
				data: efilingData,
				options: efilingOptions,
				plugins: [ChartDataLabels]
			});
		});
		
		// Add a simple hover effect to the CCTV video containers
		document.querySelectorAll('.video-link').forEach(link => {
			link.addEventListener('mouseenter', function() {
				this.style.transform = 'translateY(-10px)';
				this.style.boxShadow = 'var(--shadow-lg)';
			});
			
			link.addEventListener('mouseleave', function() {
				this.style.transform = '';
				this.style.boxShadow = 'var(--shadow-md)';
			});
		});
		
		// Add a counter for the visitor stats
		function animateCounter(element, target, duration) {
			let start = 0;
			const increment = target / (duration / 16);
			const timer = setInterval(() => {
				start += increment;
				element.textContent = Math.floor(start);
				if (start >= target) {
					element.textContent = target;
					clearInterval(timer);
				}
			}, 16);
		}
		
		document.querySelectorAll('.count').forEach(counter => {
			const target = parseInt(counter.textContent, 10);
			counter.textContent = '0';
			animateCounter(counter, target, 1500);
		});
	</script>
</body>
</html>
