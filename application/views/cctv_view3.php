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
			/* Refined Color Scheme: Professional Blue & Gray */
			--primary-color: #0056b3; /* Deeper Blue */
			--secondary-color: #6c757d; /* Medium Gray */
			--success-color: #198754; /* Darker Green */
			--warning-color: #ffc107; /* Standard Yellow */
			--danger-color: #dc3545; /* Standard Red */
			--info-color: #0dcaf0; /* Standard Cyan */
			--light-color: #f8f9fa; /* Light Gray Background */
			--dark-color: #343a40; /* Darker Gray */
			--text-color: #495057;
			--border-color: #dee2e6;
			--header-gradient: linear-gradient(135deg, #0056b3, #007bff); /* Blue Gradient */
			--card-bg: #ffffff;
			--shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
			--shadow-md: 0 4px 8px rgba(0, 0, 0, 0.08);
			--shadow-lg: 0 10px 20px rgba(0, 0, 0, 0.1);
			--border-radius-sm: .25rem;
			--border-radius-md: .5rem; /* Increased default radius */
			--border-radius-lg: .75rem; /* Increased large radius */
			--transition: all 0.25s ease-in-out;
			--primary-color-rgb: 0, 86, 179; /* RGB for primary color */
			--success-color-rgb: 25, 135, 84; /* RGB for success color */
		}

		body {
			font-family: 'Poppins', sans-serif;
			background-color: var(--light-color);
			color: var(--text-color);
			line-height: 1.6;
		}

		.container-fluid { /* Use container-fluid for full width */
			padding-left: 30px;
			padding-right: 30px;
			margin-top: 30px;
			margin-bottom: 50px;
		}

		/* Header Styling */
		.header {
			text-align: center;
			margin-bottom: 40px;
			position: relative;
			padding: 30px 20px; /* Increased padding */
			background: linear-gradient(135deg, var(--primary-color), #4dabf7); /* Softer gradient */
			border-radius: var(--border-radius-lg);
			box-shadow: var(--shadow-md);
			color: white;
			overflow: hidden; /* Hide overflow for pseudo-elements */
		}

		.header::before { /* Subtle pattern or texture */
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
			background-size: 10px 10px;
			opacity: 0.5;
			border-radius: var(--border-radius-lg);
			z-index: 0;
		}

		.header-content {
			position: relative;
			z-index: 1;
		}

		.header img {
			width: 100px; /* Slightly smaller */
			height: 100px;
			margin-bottom: 15px;
			border-radius: 50%;
			border: 4px solid rgba(255, 255, 255, 0.5); /* Thicker border */
			box-shadow: var(--shadow-sm);
			transition: var(--transition);
		}

		.header img:hover {
			transform: scale(1.1); /* More pronounced hover effect */
			box-shadow: var(--shadow-md);
		}

		.header h5 {
			font-size: 2rem; /* Adjusted size */
			font-weight: 600; /* Slightly less bold */
			margin-bottom: 8px;
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.15);
		}

		.header p {
			font-size: 1rem;
			opacity: 0.95; /* More opaque */
		}

		/* CCTV Video Section */
		.cctv-section {
			margin-bottom: 40px;
		}

		.section-title {
			text-align: center;
			margin-bottom: 35px; /* Increased margin */
			position: relative;
			padding-bottom: 15px;
		}

		.section-title h4 {
			font-size: 1.7rem; /* Adjusted size */
			font-weight: 600;
			color: var(--primary-color);
		}

		.section-title::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 50%;
			transform: translateX(-50%);
			width: 70px; /* Slightly shorter */
			height: 3px; /* Thinner */
			background: linear-gradient(to right, var(--primary-color), var(--info-color)); /* Different gradient */
			border-radius: 3px;
		}

		.video-link {
			background-color: #ffffff;
			border-radius: var(--border-radius-lg); /* Consistent radius */
			padding: 15px; /* Adjusted padding */
			margin-bottom: 30px;
			text-align: center;
			box-shadow: var(--shadow-sm); /* Softer shadow */
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			border: 1px solid var(--border-color);
		}

		.video-link:hover {
			transform: translateY(-5px); /* Subtle lift */
			box-shadow: var(--shadow-md); /* Enhanced shadow on hover */
		}

		.video-link::before { /* Removed top border line */
			content: none;
		}

		.video-link h6 {
			margin: 0 0 10px 0; /* Reduced bottom margin */
			font-weight: 500; /* Normal weight */
			color: var(--dark-color); /* Darker color */
			font-size: 1.1rem; /* Adjusted size */
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.video-link h6 i {
			margin-right: 8px;
			color: var(--primary-color); /* Primary color icon */
		}

		.video-link .video-container {
			position: relative;
			padding-bottom: 56.25%;
			/* 16:9 Aspect Ratio */
			height: 0;
			overflow: hidden;
			border-radius: var(--border-radius-md); /* Consistent radius */
			box-shadow: none; /* Remove inner shadow */
			border: 1px solid var(--border-color); /* Add subtle border */
		}

		.video-link iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
			border-radius: var(--border-radius-md); /* Match container radius */
		}

		.video-status {
			position: absolute;
			top: 8px; /* Adjusted position */
			right: 8px;
			background-color: rgba(var(--success-color-rgb, 25, 135, 84), 0.85); /* Use success color with alpha */
			color: white;
			padding: 3px 8px; /* Smaller padding */
			border-radius: var(--border-radius-sm); /* Smaller radius */
			font-size: 0.75rem; /* Smaller font */
			font-weight: 500;
			z-index: 10;
			display: inline-flex; /* Use inline-flex */
			align-items: center;
			box-shadow: var(--shadow-sm);
		}

		.video-status i {
			margin-right: 4px;
			font-size: 0.65rem; /* Smaller icon */
			animation: pulse 2s infinite ease-in-out; /* Slower pulse */
		}

		/* Add RGB variable for success color */
		:root {
			--success-color-rgb: 25, 135, 84;
		}


		@keyframes pulse {
			0%, 100% {
				opacity: 1;
				transform: scale(1);
			}
			50% {
				opacity: 0.7;
				transform: scale(0.9);
			}
		}

		/* Visitor Counter */
		.visitor-counter {
			background: white;
			border-radius: var(--border-radius-lg);
			padding: 15px 20px;
			margin: 30px 0;
			box-shadow: var(--shadow-sm);
			text-align: center;
			border: 1px solid var(--border-color);
		}

		.visitor-counter h6 {
			margin: 0;
			font-size: 1rem; /* Adjusted size */
			color: var(--dark-color);
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
			gap: 15px; /* Add gap between items */
		}

		.visitor-counter .counter-item {
			display: inline-flex;
			align-items: center;
			/* margin: 0 15px; Remove margin, use gap */
			padding: 5px 0;
		}

		.visitor-counter i {
			margin-right: 6px; /* Reduced margin */
			color: var(--secondary-color); /* Use secondary color */
			font-size: 1.1em; /* Slightly larger icon */
		}

		.visitor-counter .count {
			font-weight: 600;
			color: var(--primary-color);
			font-size: 1.1em; /* Slightly larger count */
		}

		/* Case Status Section */
		.case-status-header {
			text-align: center;
			margin: 40px 0 30px;
			background: linear-gradient(135deg, var(--dark-color), #495057); /* Darker gradient */
			padding: 25px 20px; /* Increased padding */
			border-radius: var(--border-radius-lg);
			color: white;
			box-shadow: var(--shadow-md);
		}

		.case-status-header h2 {
			font-size: 1.7rem; /* Adjusted size */
			font-weight: 600;
			margin: 0;
		}

		/* Circle Cards */
		.total-perkara-container {
			margin: 40px 0;
		}

		.circle-card-wrapper {
			position: relative;
			margin-bottom: 25px; /* Increased margin */
		}

		.circle-card {
			width: 150px; /* Slightly smaller */
			height: 150px;
			border-radius: 50%;
			display: flex;
			flex-direction: column; /* Stack value and title */
			align-items: center;
			justify-content: center;
			margin: 0 auto;
			color: #fff;
			box-shadow: var(--shadow-md);
			transition: var(--transition);
			text-align: center;
			position: relative;
			z-index: 1;
			border: 3px solid rgba(255, 255, 255, 0.3); /* Add inner border */
		}

		.circle-card::before { /* Softer glow effect */
			content: '';
			position: absolute;
			top: -8px;
			left: -8px;
			right: -8px;
			bottom: -8px;
			background: inherit;
			border-radius: 50%;
			z-index: -1;
			opacity: 0.3;
			filter: blur(12px);
			transition: var(--transition);
		}

		.circle-card:hover {
			transform: translateY(-8px) scale(1.03); /* Adjusted hover effect */
			border-color: rgba(255, 255, 255, 0.5);
		}

		.circle-card:hover::before {
			opacity: 0.5;
			filter: blur(18px);
		}

		/* Specific Circle Card Colors (Using Bootstrap variables) */
		.circle-card.total-perkara { background: linear-gradient(135deg, var(--primary-color), #4dabf7); }
		.circle-card.total-perkara-ecourt { background: linear-gradient(135deg, var(--success-color), #48c9b0); }
		.circle-card.persen-perkara-ecourt { background: linear-gradient(135deg, var(--warning-color), #f7dc6f); color: var(--dark-color); /* Dark text for yellow */}
		.circle-card.total-perkara-non-ecourt { background: linear-gradient(135deg, var(--danger-color), #f1948a); }


		.circle-card p.value {
			font-size: 1.8rem; /* Adjusted size */
			font-weight: 700;
			margin: 0;
			line-height: 1.1; /* Adjusted line height */
		}

		/* Title inside circle card */
		.circle-card .card-internal-title {
			font-size: 0.8rem;
			font-weight: 400;
			margin-top: 5px;
			opacity: 0.9;
		}


		.circle-card-title { /* Title below circle card */
			margin-top: 12px; /* Reduced margin */
			text-align: center;
			font-weight: 500; /* Normal weight */
			color: var(--text-color); /* Use standard text color */
			font-size: 1rem; /* Adjusted size */
		}

		/* Chart Containers & Table Containers */
		.chart-container,
		.table-container {
			background: white;
			border-radius: var(--border-radius-lg);
			padding: 25px; /* Increased padding */
			margin-bottom: 30px;
			box-shadow: var(--shadow-sm);
			border: 1px solid var(--border-color);
			transition: var(--transition);
		}

		.chart-container:hover,
		.table-container:hover {
			box-shadow: var(--shadow-md); /* Enhanced shadow on hover */
			transform: translateY(-3px); /* Subtle lift */
		}

		.chart-container h5,
		.table-container h5 {
			text-align: center;
			margin-bottom: 25px; /* Increased margin */
			color: var(--primary-color);
			font-weight: 600;
			padding-bottom: 12px; /* Increased padding */
			border-bottom: 1px solid var(--border-color); /* Thinner border */
			font-size: 1.3rem; /* Adjusted size */
		}

		/* Table Styling */
		.table {
			margin-bottom: 0; /* Remove default bottom margin */
		}

		.table thead th {
			background-color: var(--light-color); /* Light background for header */
			color: var(--dark-color);
			font-weight: 600;
			border-bottom: 2px solid var(--primary-color); /* Primary color bottom border */
			text-align: center;
			vertical-align: middle;
		}

		.table tbody td {
			vertical-align: middle;
			text-align: center; /* Center align table data */
		}

		.table-striped tbody tr:nth-of-type(odd) {
			background-color: rgba(0, 0, 0, 0.03); /* Subtler stripe */
		}

		.table-hover tbody tr:hover {
			background-color: rgba(var(--primary-color-rgb, 13, 110, 253), 0.1); /* Use primary color with alpha on hover */
			cursor: default;
		}

		/* Add RGB variable for primary color */
		:root {
			/* ... other variables ... */
			--primary-color-rgb: 13, 110, 253;
		}


		/* Responsive Adjustments */
		@media (max-width: 768px) {
			.header h5 {
				font-size: 1.8rem;
			}
			.header p {
				font-size: 0.9rem;
			}
			.circle-card {
				width: 130px;
				height: 130px;
			}
			.circle-card p.value {
				font-size: 1.5rem;
			}
			.visitor-counter h6 {
				font-size: 0.9rem;
				gap: 10px;
			}
			.chart-container h5,
			.table-container h5 {
				font-size: 1.1rem;
			}
		}

		@media (max-width: 576px) {
			.container-fluid {
				padding-left: 15px;
				padding-right: 15px;
			}
			.header img {
				width: 80px;
				height: 80px;
			}
			.header h5 {
				font-size: 1.6rem;
			}
			.section-title h4 {
				font-size: 1.5rem;
			}
			.circle-card-wrapper {
				margin-bottom: 30px; /* Ensure spacing on small screens */
			}
			.visitor-counter .counter-item {
				margin: 5px 8px; /* Add some margin back on small screens */
			}
			.visitor-counter h6 {
				justify-content: space-around; /* Space out items */
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
