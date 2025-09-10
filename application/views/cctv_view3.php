<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Pengadilan Agama Amuntai</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
	<style>
		:root {
			--pa-green: #10b981;
			--pa-green-dark: #059669;
			--pa-green-light: #34d399;
			--pa-accent: #f59e0b;
			--pa-bg: #f6fff8;
			--pa-card: #ffffff;
			--pa-text: #1e293b;
			--pa-text-light: #64748b;
			--pa-shadow: 0 8px 32px rgba(16, 185, 129, 0.08);
			--pa-radius: 1.2rem;
			--pa-transition: all 0.3s cubic-bezier(.4, 0, .2, 1);
		}

		body {
			background: linear-gradient(135deg, var(--pa-bg) 0%, #e7fbe7 100%);
			font-family: 'Inter', Arial, sans-serif;
			color: var(--pa-text);
			margin: 0;
			min-height: 100vh;
			padding: 0;
			overflow-x: hidden;
		}

		.container {
			max-width: 1400px;
			margin: 0 auto;
			padding: 0 1.5rem;
			width: 100%;
			box-sizing: border-box;
		}

		.header {
			background: linear-gradient(135deg, var(--pa-green-dark), var(--pa-green));
			color: #fff;
			padding: 2rem 0 1.5rem 0;
			border-radius: 0 0 var(--pa-radius) var(--pa-radius);
			box-shadow: var(--pa-shadow);
			text-align: center;
			margin-bottom: 2rem;
		}

		.header .logo {
			font-size: 3rem;
			margin-bottom: 0.5rem;
			color: #fff;
			text-shadow: 0 2px 8px rgba(16, 185, 129, 0.15);
		}

		.header h1 {
			font-size: 2.3rem;
			font-weight: 800;
			margin-bottom: 0.5rem;
			letter-spacing: -1px;
		}

		.header p {
			font-size: 1.1rem;
			opacity: 0.9;
			font-weight: 500;
		}

		.stats {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
		}

		.stat-card {
			background: var(--pa-card);
			border-radius: var(--pa-radius);
			box-shadow: var(--pa-shadow);
			padding: 2rem 1.5rem;
			text-align: center;
			transition: var(--pa-transition);
			border: 2px solid var(--pa-green-light);
			position: relative;
		}

		.stat-card:hover {
			transform: translateY(-8px) scale(1.03);
			box-shadow: 0 16px 40px rgba(16, 185, 129, 0.15);
			border-color: var(--pa-green-dark);
		}

		.stat-icon {
			font-size: 2.2rem;
			color: var(--pa-green-dark);
			margin-bottom: 0.5rem;
		}

		.stat-value {
			font-size: 2.5rem;
			font-weight: 800;
			color: var(--pa-green-dark);
			margin-bottom: 0.3rem;
		}

		.stat-label {
			font-size: 1.1rem;
			color: var(--pa-text-light);
			font-weight: 600;
		}

		.stat-desc {
			font-size: 0.95rem;
			color: var(--pa-accent);
			margin-top: 0.5rem;
		}

		.section-title {
			font-size: 1.5rem;
			font-weight: 700;
			color: var(--pa-green-dark);
			margin-bottom: 1.2rem;
			display: flex;
			align-items: center;
			gap: 0.7rem;
		}

		.cctv-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
		}

		.cctv-card {
			background: var(--pa-card);
			border-radius: var(--pa-radius);
			box-shadow: var(--pa-shadow);
			overflow: hidden;
			transition: var(--pa-transition);
			border: 2px solid var(--pa-green-light);
		}

		.cctv-card:hover {
			transform: translateY(-5px) scale(1.02);
			border-color: var(--pa-green-dark);
		}

		.cctv-header {
			background: var(--pa-green-dark);
			color: #fff;
			padding: 1rem;
			font-weight: 600;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.cctv-title {
			display: flex;
			align-items: center;
			gap: 0.5rem;
			font-size: 1rem;
		}

		.cctv-status {
			background: var(--pa-green-light);
			color: #fff;
			padding: 0.5rem 1rem;
			border-radius: 1rem;
			font-size: 0.95rem;
			font-weight: 600;
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}

		.cctv-body {
			position: relative;
			padding-top: 56.25%;
			height: 0;
			background: linear-gradient(135deg, #e7fbe7, #d1fae5);
		}

		.cctv-iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}

		.visitor-counter {
			background: var(--pa-card);
			border-radius: var(--pa-radius);
			box-shadow: var(--pa-shadow);
			padding: 1.2rem;
			margin-bottom: 2rem;
			display: flex;
			justify-content: center;
			gap: 2rem;
			flex-wrap: wrap;
		}

		.visitor-counter-item {
			display: flex;
			align-items: center;
			gap: 0.7rem;
		}

		.visitor-counter-icon {
			width: 38px;
			height: 38px;
			border-radius: 50%;
			background: var(--pa-green-light);
			display: flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			font-size: 1.2rem;
		}

		.visitor-counter-label {
			font-size: 0.95rem;
			color: var(--pa-text-light);
		}

		.visitor-counter-value {
			font-size: 1.2rem;
			font-weight: 700;
			color: var(--pa-green-dark);
		}

		.case-header {
			background: linear-gradient(135deg, var(--pa-green-dark), var(--pa-green));
			color: #fff;
			border-radius: var(--pa-radius);
			padding: 1.2rem;
			margin-bottom: 2rem;
			box-shadow: var(--pa-shadow);
			text-align: center;
		}

		.case-header h2 {
			font-size: 1.3rem;
			font-weight: 700;
			margin: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 0.7rem;
		}

		.circle-stats-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
			gap: 1.2rem;
			margin-bottom: 2rem;
		}

		.circle-stat {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}

		.circle-stat-value-container {
			width: 110px;
			height: 110px;
			border-radius: 50%;
			background: linear-gradient(135deg, var(--pa-green-dark), var(--pa-green));
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 0.7rem;
			box-shadow: var(--pa-shadow);
		}

		.circle-stat-value {
			font-size: 2rem;
			font-weight: 700;
			color: #fff;
		}

		.circle-stat-label {
			font-size: 1rem;
			font-weight: 600;
			color: var(--pa-green-dark);
		}

		.data-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
			width: 100%;
		}

		.data-card {
			background: var(--pa-card);
			border-radius: var(--pa-radius);
			box-shadow: var(--pa-shadow);
			padding: 1.5rem;
			transition: var(--pa-transition);
			position: relative;
			overflow: hidden;
			height: 100%;
			display: flex;
			flex-direction: column;
			border: 2px solid var(--pa-green-light);
		}

		.data-card-title {
			font-size: 1.1rem;
			font-weight: 700;
			color: var(--pa-green-dark);
			margin-bottom: 1rem;
			display: flex;
			align-items: center;
			gap: 0.7rem;
		}

		.chart-container {
			flex: 1;
			position: relative;
			height: 320px;
		}

		.table-card {
			background: var(--pa-card);
			border-radius: var(--pa-radius);
			box-shadow: var(--pa-shadow);
			margin-bottom: 2rem;
			overflow: hidden;
			transition: var(--pa-transition);
			border: 2px solid var(--pa-green-light);
		}

		.table-card-title {
			padding: 1rem 1.5rem;
			font-size: 1.1rem;
			font-weight: 700;
			color: #fff;
			background: linear-gradient(135deg, var(--pa-green-dark), var(--pa-green));
			display: flex;
			align-items: center;
			gap: 0.7rem;
		}

		.table-card-body {
			padding: 0;
			overflow-x: auto;
		}

		.modern-table {
			width: 100%;
			border-collapse: separate;
			border-spacing: 0;
			min-width: 600px;
			table-layout: fixed;
		}

		.modern-table th {
			background: var(--pa-green-light);
			color: var(--pa-green-dark);
			font-weight: 700;
			padding: 1rem 1.2rem;
			text-align: left;
			font-size: 0.95rem;
			letter-spacing: 0.02em;
			text-transform: uppercase;
			word-wrap: break-word;
		}

		.modern-table td {
			padding: 1rem 1.2rem;
			border-bottom: 1px solid #e5e7eb;
			vertical-align: middle;
			color: var(--pa-text-light);
			font-size: 0.95rem;
			word-wrap: break-word;
			overflow-wrap: break-word;
		}

		.modern-table tr:last-child td {
			border-bottom: none;
		}

		.modern-table tbody tr:hover td {
			background: #e7fbe7;
			color: var(--pa-green-dark);
			font-weight: 600;
		}

		.dashboard-footer {
			background: var(--pa-card);
			border-radius: var(--pa-radius);
			padding: 1rem;
			margin-top: 2rem;
			text-align: center;
			box-shadow: var(--pa-shadow);
			color: var(--pa-green-dark);
			font-weight: 600;
		}

		@media (max-width: 768px) {
			.container {
				padding: 0 1rem;
			}

			.stats,
			.cctv-grid,
			.circle-stats-grid {
				grid-template-columns: 1fr;
			}

			.data-grid {
				grid-template-columns: 1fr;
				gap: 1rem;
			}

			.header h1 {
				font-size: 1.8rem;
			}

			.header .logo {
				font-size: 2.5rem;
			}

			.header p {
				font-size: 1rem;
			}

			.stat-card {
				padding: 1.5rem 1rem;
			}

			.stat-value {
				font-size: 2rem;
			}

			.visitor-counter {
				flex-direction: column;
				gap: 1rem;
			}

			.visitor-counter-item {
				justify-content: center;
			}

			.modern-table {
				min-width: 100%;
				font-size: 0.85rem;
				table-layout: auto;
			}

			.modern-table th,
			.modern-table td {
				padding: 0.75rem 0.5rem;
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}

			.chart-container {
				height: 280px;
			}

			.section-title {
				font-size: 1.3rem;
			}
		}

		@media (max-width: 480px) {
			.container {
				padding: 0 0.75rem;
			}

			.header {
				padding: 1.5rem 0 1rem 0;
			}

			.header h1 {
				font-size: 1.5rem;
			}

			.header .logo {
				font-size: 2rem;
			}

			.stat-card {
				padding: 1.25rem 0.75rem;
			}

			.stat-value {
				font-size: 1.8rem;
			}

			.stat-label {
				font-size: 1rem;
			}

			.data-card,
			.table-card {
				padding: 1rem;
			}

			.chart-container {
				height: 250px;
			}

			.circle-stat-value-container {
				width: 90px;
				height: 90px;
			}

			.circle-stat-value {
				font-size: 1.5rem;
			}

			.modern-table {
				font-size: 0.8rem;
			}

			.modern-table th,
			.modern-table td {
				padding: 0.5rem 0.25rem;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="header">
			<div class="logo"><i class="fas fa-balance-scale"></i></div>
			<h1>Dashboard Pengadilan Agama Amuntai</h1>
			<p>Kelas IB - Modern Monitoring & Statistik</p>
		</div>

		<div class="stats">
			<div class="stat-card">
				<div class="stat-icon"><i class="fas fa-folder-open"></i></div>
				<div class="stat-value"><?= htmlspecialchars($total_perkara_data->total_perkara) ?></div>
				<div class="stat-label">Total Perkara</div>
				<div class="stat-desc">Bulan <?= date('F Y', strtotime('first day of last month')) ?></div>
			</div>
			<div class="stat-card">
				<div class="stat-icon"><i class="fas fa-gavel"></i></div>
				<div class="stat-value"><?= htmlspecialchars($jumlah_perkara_diputus) ?></div>
				<div class="stat-label">Perkara Diputus</div>
				<div class="stat-desc">Sudah putus</div>
			</div>
			<div class="stat-card">
				<div class="stat-icon"><i class="fas fa-balance-scale"></i></div>
				<div class="stat-value"><?= htmlspecialchars($sisa_perkara) ?></div>
				<div class="stat-label">Sisa Perkara</div>
				<div class="stat-desc">Masih proses</div>
			</div>
			<div class="stat-card">
				<div class="stat-icon"><i class="fas fa-users"></i></div>
				<div class="stat-value"><?= htmlspecialchars($daily_view_count) ?></div>
				<div class="stat-label">Pengunjung Hari Ini</div>
				<div class="stat-desc">Dashboard</div>
			</div>
		</div>

		<h2 class="section-title"><i class="fas fa-video"></i> Pantauan CCTV Live</h2>
		<div class="cctv-grid">
			<?php
			$icons = [
				'Halaman Parkir' => 'fas fa-car',
				'Ruang Tunggu' => 'fas fa-couch',
				'PTSP' => 'fas fa-info-circle',
			];
			foreach ($links as $name => $url): ?>
				<div class="cctv-card">
					<div class="cctv-header">
						<div class="cctv-title">
							<i class="<?= isset($icons[$name]) ? $icons[$name] : 'fas fa-video'; ?>"></i>
							<?= ucfirst(str_replace('_', ' ', $name)); ?>
						</div>
						<div class="cctv-status">
							<i class="fas fa-circle"></i> Live
						</div>
					</div>
					<div class="cctv-body">
						<iframe src="<?= $url ?>" allowfullscreen class="cctv-iframe"></iframe>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="visitor-counter">
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon"><i class="fas fa-users"></i></div>
				<div>
					<div class="visitor-counter-label">Pengunjung Hari Ini</div>
					<div class="visitor-counter-value"><?= htmlspecialchars($daily_view_count) ?></div>
				</div>
			</div>
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon"><i class="fas fa-calendar-alt"></i></div>
				<div>
					<div class="visitor-counter-label">Bulan Ini</div>
					<div class="visitor-counter-value"><?= htmlspecialchars($monthly_view_count) ?></div>
				</div>
			</div>
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon"><i class="fas fa-chart-line"></i></div>
				<div>
					<div class="visitor-counter-label">Total Pengunjung</div>
					<div class="visitor-counter-value"><?= htmlspecialchars($total_view_count) ?></div>
				</div>
			</div>
		</div>

		<div class="case-header">
			<h2><i class="fas fa-balance-scale"></i> Keadaan Perkara s/d <?= date('F Y', strtotime('first day of last month')) ?></h2>
		</div>

		<div class="circle-stats-grid">
			<div class="circle-stat">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?= htmlspecialchars($total_perkara_data->total_perkara) ?></div>
				</div>
				<div class="circle-stat-label">Total Perkara</div>
			</div>
			<div class="circle-stat">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?= htmlspecialchars($total_perkara_data->total_perkara_ecourt) ?></div>
				</div>
				<div class="circle-stat-label">Perkara e-Court</div>
			</div>
			<div class="circle-stat">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?= number_format($total_perkara_data->persen_perkara_ecourt) . '%' ?></div>
				</div>
				<div class="circle-stat-label">Persentase e-Court</div>
			</div>
			<div class="circle-stat">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?= htmlspecialchars($total_perkara_data->total_perkara_non_ecourt) ?></div>
				</div>
				<div class="circle-stat-label">Non e-Court</div>
			</div>
		</div>

		<div class="data-grid">
			<div class="data-card">
				<h3 class="data-card-title"><i class="fas fa-chart-pie"></i> Data Perkara Bulan <?= date('F Y', strtotime('first day of last month')) ?></h3>
				<div class="chart-container">
					<canvas id="donutChart"></canvas>
				</div>
			</div>
			<div class="data-card">
				<h3 class="data-card-title"><i class="fas fa-handshake"></i> Penyelesaian Mediasi Bulan <?= date('F Y', strtotime('first day of last month')) ?></h3>
				<div class="chart-container">
					<canvas id="mediasiChart"></canvas>
				</div>
			</div>
		</div>

		<div class="data-grid">
			<div class="data-card">
				<h3 class="data-card-title"><i class="fas fa-balance-scale"></i> Penanganan Perkara E-court</h3>
				<div class="chart-container">
					<canvas id="efilingChart"></canvas>
				</div>
			</div>
		</div>

		<div class="data-grid">
			<div class="table-card">
				<div class="table-card-title">
					<i class="fas fa-list-alt"></i> Data Perkara Bulan <?= date('F Y', strtotime('first day of last month')) ?>
				</div>
				<div class="table-card-body">
					<table class="modern-table">
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
									<td><?= htmlspecialchars($jenis_perkara_nama) ?></td>
									<td><?= htmlspecialchars($jumlah_perkara) ?></td>
									<td>
										<?= $total_perkara > 0 ? number_format(($jumlah_perkara / $total_perkara * 100), 2) . '%' : '0.00%' ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="table-card">
				<div class="table-card-title">
					<i class="fas fa-handshake"></i> Data Mediasi Bulan <?= date('F Y', strtotime('first day of last month')) ?>
				</div>
				<div class="table-card-body">
					<table class="modern-table">
						<thead>
							<tr>
								<th>Hasil Mediasi</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><i class="fas fa-times-circle" style="color: #f43f5e;"></i> Tidak Dapat Dilaksanakan</td>
								<td><?= $mediasi_data['D'] ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-thumbs-down" style="color: #f59e0b;"></i> Tidak Berhasil</td>
								<td><?= $mediasi_data['T'] ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-adjust" style="color: #059669;"></i> Berhasil Sebagian</td>
								<td><?= $mediasi_data['S'] ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-check-circle" style="color: #34d399;"></i> Berhasil Dengan Pencabutan</td>
								<td><?= $mediasi_data['Y2'] ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-award" style="color: #10b981;"></i> Berhasil Dengan Akta Perdamaian</td>
								<td><?= $mediasi_data['Y1'] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="dashboard-footer">
			&copy; <?= date('Y') ?> Pengadilan Agama Amuntai
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			Chart.defaults.font.family = "'Inter', Arial, sans-serif";
			Chart.defaults.color = '#059669';

			// Donut Chart
			const perkaraData = <?= json_encode($chart_data) ?>;
			const previousMonth = "<?= date('Y-m', strtotime('first day of last month')) ?>";
			const filteredChartData = perkaraData.filter(function(data) {
				const dataMonth = data.tanggal_pendaftaran ? data.tanggal_pendaftaran.substring(0, 7) : '';
				return dataMonth === previousMonth;
			});
			const groupedData = {};
			filteredChartData.forEach(function(data) {
				if (!groupedData[data.jenis_perkara_nama]) groupedData[data.jenis_perkara_nama] = 0;
				groupedData[data.jenis_perkara_nama] += parseInt(data.jumlah_perkara);
			});
			const labels = Object.keys(groupedData);
			const values = Object.values(groupedData);

			if (document.getElementById('donutChart')) {
				new Chart(document.getElementById('donutChart').getContext('2d'), {
					type: 'doughnut',
					data: {
						labels: labels.length > 0 ? labels : ['Tidak Ada Data'],
						datasets: [{
							data: values.length > 0 ? values : [1],
							backgroundColor: [
								'#10b981', '#34d399', '#059669', '#f59e0b', '#f43f5e', '#8b5cf6', '#ec4899', '#0ea5e9'
							],
							borderWidth: 0,
							hoverOffset: 15
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
									usePointStyle: true,
									pointStyle: 'circle'
								}
							},
							tooltip: {
								backgroundColor: '#059669',
								padding: 12,
								titleFont: {
									size: 14,
									weight: 'bold'
								},
								bodyFont: {
									size: 13
								},
								cornerRadius: 8,
								displayColors: false,
								callbacks: {
									label: function(context) {
										if (labels[0] === 'Tidak Ada Data') return 'Tidak ada data';
										const total = context.dataset.data.reduce((a, b) => a + b, 0);
										const value = context.raw;
										const percentage = ((value / total) * 100).toFixed(1);
										return `${value} perkara (${percentage}%)`;
									}
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

			// Mediasi Chart
			if (document.getElementById('mediasiChart')) {
				const mediasiData = <?= json_encode($mediasi_data) ?>;
				new Chart(document.getElementById('mediasiChart').getContext('2d'), {
					type: 'doughnut',
					data: {
						labels: [
							'Tidak Dapat Dilaksanakan', 'Tidak Berhasil', 'Berhasil Sebagian',
							'Berhasil Dengan Pencabutan', 'Berhasil Dengan Akta Perdamaian'
						],
						datasets: [{
							data: [
								parseInt(mediasiData.D || 0),
								parseInt(mediasiData.T || 0),
								parseInt(mediasiData.S || 0),
								parseInt(mediasiData.Y2 || 0),
								parseInt(mediasiData.Y1 || 0)
							],
							backgroundColor: [
								'#f43f5e', '#f59e0b', '#059669', '#34d399', '#10b981'
							],
							borderWidth: 0,
							hoverOffset: 15
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						cutout: '65%',
						plugins: {
							legend: {
								position: 'bottom',
								labels: {
									padding: 20,
									usePointStyle: true,
									pointStyle: 'circle'
								}
							},
							tooltip: {
								backgroundColor: '#059669',
								padding: 12,
								titleFont: {
									size: 14,
									weight: 'bold'
								},
								bodyFont: {
									size: 13
								},
								cornerRadius: 8,
								displayColors: false
							}
						},
						animation: {
							animateScale: true,
							animateRotate: true
						}
					}
				});
			}

			// E-filing Chart
			if (document.getElementById('efilingChart')) {
				const totalPerkaraData = <?= json_encode($total_perkara_data) ?>;
				new Chart(document.getElementById('efilingChart').getContext('2d'), {
					type: 'doughnut',
					data: {
						labels: ['E-Court', 'Non E-Court'],
						datasets: [{
							data: [
								parseInt(totalPerkaraData.total_perkara_ecourt || 0),
								parseInt(totalPerkaraData.total_perkara_non_ecourt || 0)
							],
							backgroundColor: ['#10b981', '#f43f5e'],
							borderWidth: 0,
							hoverOffset: 15
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						cutout: '65%',
						plugins: {
							legend: {
								position: 'bottom',
								labels: {
									padding: 20,
									usePointStyle: true,
									pointStyle: 'circle'
								}
							},
							tooltip: {
								backgroundColor: '#059669',
								padding: 12,
								titleFont: {
									size: 14,
									weight: 'bold'
								},
								bodyFont: {
									size: 13
								},
								cornerRadius: 8,
								displayColors: false,
								callbacks: {
									label: function(context) {
										const total = context.dataset.data.reduce((a, b) => a + b, 0);
										const value = context.raw;
										const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : '0.0';
										return `${value} perkara (${percentage}%)`;
									}
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
		});
	</script>
</body>

</html>