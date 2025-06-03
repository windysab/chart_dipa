<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CCTV Monitoring - PA Amuntai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
		:root {
			--primary: #4361ee;
			--primary-light: #4895ef;
			--primary-dark: #3f37c9;
			--secondary: #4cc9f0;
			--success: #4ade80;
			--info: #0ea5e9;
			--warning: #f59e0b;
			--danger: #f43f5e;
			--dark: #1e293b;
			--light: #f8fafc;
			--gray: #64748b;
			--gray-light: #e2e8f0;
			--card-bg: #ffffff;
			--body-bg: #f1f5f9;
			--sidebar-bg: #0f172a;
			--border-radius-sm: 0.5rem;
			--border-radius: 1rem;
			--border-radius-lg: 1.5rem;
			--box-shadow-sm: 0 1px 2px rgba(0, 0, 0, 0.05);
			--box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
			--box-shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
			--box-shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
			--transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: 'Inter', sans-serif;
			background-color: var(--body-bg);
			color: var(--dark);
			line-height: 1.6;
		}

		.container-fluid {
			padding: 2rem;
			max-width: 1600px;
			margin: 0 auto;
		}

		/* Header Section */
		.dashboard-header {
			position: relative;
			overflow: hidden;
			background: linear-gradient(135deg, var(--primary-dark), var(--primary), var(--primary-light));
			border-radius: var(--border-radius-lg);
			padding: 2.5rem;
			margin-bottom: 2rem;
			display: flex;
			align-items: center;
			box-shadow: var(--box-shadow-lg);
			color: white;
		}

		.dashboard-header::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,0.05)' fill-rule='evenodd'/%3E%3C/svg%3E");
			opacity: 0.3;
		}

		.header-logo {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			object-fit: cover;
			border: 4px solid rgba(255, 255, 255, 0.3);
			box-shadow: var(--box-shadow);
			margin-right: 2rem;
			transition: var(--transition);
		}

		.header-logo:hover {
			transform: scale(1.05);
			box-shadow: var(--box-shadow-lg);
		}

		.header-content {
			flex: 1;
			position: relative;
			z-index: 2;
		}

		.header-title {
			font-size: 2.5rem;
			font-weight: 700;
			margin-bottom: 0.5rem;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			letter-spacing: -0.5px;
		}

		.header-subtitle {
			font-size: 1.25rem;
			font-weight: 500;
			opacity: 0.9;
		}

		/* Stats Section */
		.stats-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
		}

		.stat-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.5rem;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			display: flex;
			flex-direction: column;
			height: 100%;
		}

		.stat-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.stat-card::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 4px;
		}

		.stat-card.primary::after {
			background: linear-gradient(to right, var(--primary-dark), var(--primary-light));
		}

		.stat-card.success::after {
			background: linear-gradient(to right, #059669, var(--success));
		}

		.stat-card.warning::after {
			background: linear-gradient(to right, #d97706, var(--warning));
		}

		.stat-card.info::after {
			background: linear-gradient(to right, #0284c7, var(--info));
		}

		.stat-icon {
			width: 60px;
			height: 60px;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 50%;
			font-size: 1.5rem;
			margin-bottom: 1rem;
			color: white;
		}

		.stat-card.primary .stat-icon {
			background: linear-gradient(135deg, var(--primary-dark), var(--primary));
		}

		.stat-card.success .stat-icon {
			background: linear-gradient(135deg, #059669, var(--success));
		}

		.stat-card.warning .stat-icon {
			background: linear-gradient(135deg, #d97706, var(--warning));
		}

		.stat-card.info .stat-icon {
			background: linear-gradient(135deg, #0284c7, var(--info));
		}

		.stat-value {
			font-size: 2.5rem;
			font-weight: 700;
			margin-bottom: 0.5rem;
			color: var(--dark);
		}

		.stat-label {
			font-size: 1rem;
			color: var(--gray);
			margin-bottom: 0.25rem;
		}

		.stat-description {
			font-size: 0.875rem;
			color: var(--gray);
			margin-top: auto;
		}

		/* CCTV Section */
		.section-title {
			margin-bottom: 1.5rem;
			position: relative;
			padding-left: 1rem;
			font-size: 1.5rem;
			font-weight: 600;
			color: var(--dark);
			display: flex;
			align-items: center;
			gap: 0.75rem;
		}

		.section-title::before {
			content: '';
			position: absolute;
			left: 0;
			top: 50%;
			transform: translateY(-50%);
			width: 4px;
			height: 70%;
			background: var(--primary);
			border-radius: 2px;
		}

		.section-title i {
			color: var(--primary);
		}

		.cctv-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2.5rem;
		}

		.cctv-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			overflow: hidden;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			position: relative;
		}

		.cctv-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.cctv-header {
			padding: 1rem;
			background: var(--primary);
			color: white;
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
			display: flex;
			align-items: center;
			font-size: 0.75rem;
			background: rgba(255, 255, 255, 0.2);
			padding: 0.25rem 0.75rem;
			border-radius: 1rem;
			backdrop-filter: blur(4px);
		}

		.cctv-status i {
			font-size: 0.625rem;
			margin-right: 0.25rem;
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

		.cctv-body {
			position: relative;
			padding-top: 56.25%;
			/* 16:9 Aspect Ratio */
			height: 0;
			overflow: hidden;
		}

		.cctv-iframe {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: none;
		}

		/* Visitor Counter */
		.visitor-counter {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.25rem;
			margin-bottom: 2rem;
			box-shadow: var(--box-shadow);
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 2rem;
		}

		.visitor-counter-item {
			display: flex;
			align-items: center;
			gap: 0.75rem;
		}

		.visitor-counter-icon {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			font-size: 1rem;
		}

		.visitor-counter-item:nth-child(1) .visitor-counter-icon {
			background: linear-gradient(135deg, var(--primary-dark), var(--primary));
		}

		.visitor-counter-item:nth-child(2) .visitor-counter-icon {
			background: linear-gradient(135deg, #0284c7, var(--info));
		}

		.visitor-counter-item:nth-child(3) .visitor-counter-icon {
			background: linear-gradient(135deg, #059669, var(--success));
		}

		.visitor-counter-content {
			display: flex;
			flex-direction: column;
		}

		.visitor-counter-label {
			font-size: 0.875rem;
			color: var(--gray);
		}

		.visitor-counter-value {
			font-size: 1.25rem;
			font-weight: 600;
			color: var(--dark);
		}

		/* Case Data Section */
		.case-header {
			background: linear-gradient(135deg, var(--dark), #334155);
			color: white;
			border-radius: var(--border-radius);
			padding: 1.5rem;
			margin-bottom: 2rem;
			box-shadow: var(--box-shadow);
			text-align: center;
		}

		.case-header h2 {
			font-size: 1.5rem;
			font-weight: 600;
			margin: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 0.75rem;
		}

		/* Data Cards */
		.data-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2.5rem;
		}

		.data-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.5rem;
			box-shadow: var(--box-shadow);
			height: 100%;
			display: flex;
			flex-direction: column;
		}

		.data-card-title {
			font-size: 1.125rem;
			font-weight: 600;
			color: var(--dark);
			margin-bottom: 1.5rem;
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}

		.data-card-title i {
			color: var(--primary);
		}

		.chart-container {
			flex: 1;
			position: relative;
			height: 350px;
		}

		/* Tables */
		.table-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			overflow: hidden;
			box-shadow: var(--box-shadow);
			margin-bottom: 2rem;
		}

		.table-card-title {
			padding: 1.25rem 1.5rem;
			font-size: 1.125rem;
			font-weight: 600;
			color: var(--dark);
			border-bottom: 1px solid var(--gray-light);
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}

		.table-card-title i {
			color: var(--primary);
		}

		.table-card-body {
			padding: 1rem;
		}

		.modern-table {
			width: 100%;
			border-collapse: separate;
			border-spacing: 0;
		}

		.modern-table th {
			background: rgba(241, 245, 249, 0.5);
			color: var(--dark);
			font-weight: 600;
			padding: 1rem;
			text-align: left;
			border-bottom: 1px solid var(--gray-light);
			font-size: 0.875rem;
		}

		.modern-table td {
			padding: 1rem;
			border-bottom: 1px solid var(--gray-light);
			vertical-align: middle;
			color: var(--gray);
			font-size: 0.875rem;
		}

		.modern-table tr:last-child td {
			border-bottom: none;
		}

		.modern-table tr {
			transition: var(--transition);
		}

		.modern-table tr:hover td {
			background: #f8fafc;
		}

		/* Circle Stats */
		.circle-stats-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2.5rem;
		}

		.circle-stat {
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
		}

		.circle-stat-value-container {
			width: 140px;
			height: 140px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 1rem;
			box-shadow: var(--box-shadow);
			position: relative;
			transition: var(--transition);
		}

		.circle-stat-value-container:hover {
			transform: scale(1.05);
			box-shadow: var(--box-shadow-lg);
		}

		.circle-stat-value-container::before {
			content: '';
			position: absolute;
			top: -5px;
			left: -5px;
			right: -5px;
			bottom: -5px;
			border-radius: 50%;
			background: inherit;
			opacity: 0.4;
			filter: blur(10px);
			z-index: -1;
		}

		.circle-stat-value {
			font-size: 2rem;
			font-weight: 700;
			color: white;
		}

		.circle-stat-label {
			font-size: 1rem;
			font-weight: 500;
			color: var(--dark);
		}

		.circle-stat-1 .circle-stat-value-container {
			background: linear-gradient(135deg, var(--primary-dark), var(--primary));
		}

		.circle-stat-2 .circle-stat-value-container {
			background: linear-gradient(135deg, #0284c7, var(--info));
		}

		.circle-stat-3 .circle-stat-value-container {
			background: linear-gradient(135deg, #d97706, var(--warning));
		}

		.circle-stat-4 .circle-stat-value-container {
			background: linear-gradient(135deg, #dc2626, var(--danger));
		}

		/* Footer */
		.dashboard-footer {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.5rem;
			margin-top: 3rem;
			text-align: center;
			box-shadow: var(--box-shadow);
		}

		/* Animations */
		.fade-in {
			animation: fadeIn 0.6s ease-in-out;
		}

		.fade-in-delay-1 {
			animation: fadeIn 0.6s ease-in-out 0.1s both;
		}

		.fade-in-delay-2 {
			animation: fadeIn 0.6s ease-in-out 0.2s both;
		}

		.fade-in-delay-3 {
			animation: fadeIn 0.6s ease-in-out 0.3s both;
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

		/* Responsive Design */
		@media (max-width: 1400px) {
			.container-fluid {
				padding: 1.5rem;
			}
		}

		@media (max-width: 992px) {
			.dashboard-header {
				flex-direction: column;
				text-align: center;
				padding: 2rem;
			}

			.header-logo {
				margin-right: 0;
				margin-bottom: 1.5rem;
			}

			.circle-stats-grid {
				grid-template-columns: repeat(2, 1fr);
			}

			.header-title {
				font-size: 2rem;
			}
		}

		@media (max-width: 768px) {
			.container-fluid {
				padding: 1rem;
			}

			.header-title {
				font-size: 1.75rem;
			}

			.header-subtitle {
				font-size: 1.1rem;
			}

			.section-title {
				font-size: 1.25rem;
			}

			.visitor-counter {
				flex-direction: column;
				align-items: center;
				gap: 1rem;
			}

			.circle-stats-grid {
				grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
			}

			.circle-stat-value-container {
				width: 120px;
				height: 120px;
			}

			.circle-stat-value {
				font-size: 1.75rem;
			}
		}

		@media (max-width: 576px) {
			.stats-grid {
				grid-template-columns: 1fr;
			}

			.cctv-grid {
				grid-template-columns: 1fr;
			}

			.data-grid {
				grid-template-columns: 1fr;
			}

			.circle-stats-grid {
				grid-template-columns: repeat(2, 1fr);
			}
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<!-- Header Section -->
		<div class="dashboard-header fade-in">
			<img src="<?php echo base_url('assets/images/Logo PA Amuntai - Trans.png'); ?>" class="header-logo" alt="Logo PA Amuntai">
			<div class="header-content">
				<h1 class="header-title">MONITORING DASHBOARD</h1>
				<p class="header-subtitle">PENGADILAN AGAMA AMUNTAI KELAS IB</p>
			</div>
		</div>

		<!-- Stats Section -->
		<div class="stats-grid fade-in-delay-1">
			<div class="stat-card primary">
				<div class="stat-icon">
					<i class="fas fa-folder-open"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Total Perkara</div>
				<div class="stat-description">Total perkara bulan <?php echo date('F Y', strtotime('first day of last month')); ?></div>
			</div>
			<div class="stat-card success">
				<div class="stat-icon">
					<i class="fas fa-gavel"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($jumlah_perkara_diputus, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Perkara Diputus</div>
				<div class="stat-description">Perkara yang telah diputuskan</div>
			</div>
			<div class="stat-card warning">
				<div class="stat-icon">
					<i class="fas fa-balance-scale"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($sisa_perkara, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Sisa Perkara</div>
				<div class="stat-description">Perkara yang masih dalam proses</div>
			</div>
			<div class="stat-card info">
				<div class="stat-icon">
					<i class="fas fa-users"></i>
				</div>
				<div class="stat-value"><?php echo htmlspecialchars($daily_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				<div class="stat-label">Pengunjung Hari Ini</div>
				<div class="stat-description">Total pengunjung dashboard ini</div>
			</div>
		</div>

		<!-- CCTV Section -->
		<h2 class="section-title fade-in-delay-1"><i class="fas fa-video"></i> Pantauan CCTV Live</h2>
		<div class="cctv-grid fade-in-delay-2">
			<?php if (isset($links)) : ?>
				<?php
				$icons = [
					'Halaman Parkir' => 'fas fa-car',
					'Ruang Tunggu' => 'fas fa-couch',
					'PTSP' => 'fas fa-info-circle',
				];
				?>
				<?php foreach ($links as $name => $url): ?>
					<div class="cctv-card">
						<div class="cctv-header">
							<div class="cctv-title">
								<i class="<?php echo isset($icons[$name]) ? $icons[$name] : 'fas fa-video'; ?>"></i>
								<?php echo ucfirst(str_replace('_', ' ', $name)); ?>
							</div>
							<div class="cctv-status">
								<i class="fas fa-circle"></i> Live
							</div>
						</div>
						<div class="cctv-body">
							<iframe src="<?php echo $url; ?>" allowfullscreen class="cctv-iframe"></iframe>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>

		<!-- Visitor Counter -->
		<div class="visitor-counter fade-in-delay-2">
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon">
					<i class="fas fa-users"></i>
				</div>
				<div class="visitor-counter-content">
					<div class="visitor-counter-label">Pengunjung Hari Ini</div>
					<div class="visitor-counter-value"><?php echo htmlspecialchars($daily_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
			</div>
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon">
					<i class="fas fa-calendar-alt"></i>
				</div>
				<div class="visitor-counter-content">
					<div class="visitor-counter-label">Bulan Ini</div>
					<div class="visitor-counter-value"><?php echo htmlspecialchars($monthly_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
			</div>
			<div class="visitor-counter-item">
				<div class="visitor-counter-icon">
					<i class="fas fa-chart-line"></i>
				</div>
				<div class="visitor-counter-content">
					<div class="visitor-counter-label">Total Pengunjung</div>
					<div class="visitor-counter-value"><?php echo htmlspecialchars($total_view_count, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
			</div>
		</div>

		<!-- Case Data Section -->
		<div class="case-header fade-in-delay-2">
			<h2><i class="fas fa-balance-scale"></i> KEADAAN PERKARA S/D <?php echo date('F Y', strtotime('first day of last month')); ?></h2>
		</div>

		<!-- Circle Stats -->
		<div class="circle-stats-grid fade-in-delay-3">
			<div class="circle-stat circle-stat-1">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
				<div class="circle-stat-label">Total Perkara</div>
			</div>
			<div class="circle-stat circle-stat-2">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_ecourt, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
				<div class="circle-stat-label">Perkara e-Court</div>
			</div>
			<div class="circle-stat circle-stat-3">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo number_format($total_perkara_data->persen_perkara_ecourt) . '%'; ?></div>
				</div>
				<div class="circle-stat-label">Persentase e-Court</div>
			</div>
			<div class="circle-stat circle-stat-4">
				<div class="circle-stat-value-container">
					<div class="circle-stat-value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_non_ecourt, ENT_QUOTES, 'UTF-8'); ?></div>
				</div>
				<div class="circle-stat-label">Perkara Non e-Court</div>
			</div>
		</div>

		<!-- Charts -->
		<div class="data-grid fade-in-delay-3">
			<div class="data-card">
				<h3 class="data-card-title"><i class="fas fa-chart-pie"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h3>
				<div class="chart-container">
					<canvas id="donutChart"></canvas>
				</div>
			</div>
			<div class="data-card">
				<h3 class="data-card-title"><i class="fas fa-handshake"></i> Penyelesaian Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h3>
				<div class="chart-container">
					<canvas id="mediasiChart"></canvas>
				</div>
			</div>
		</div>

		<div class="data-grid fade-in-delay-3">
			<div class="data-card">
				<h3 class="data-card-title"><i class="fas fa-balance-scale"></i> Penanganan Perkara E-court</h3>
				<div class="chart-container">
					<canvas id="efilingChart"></canvas>
				</div>
			</div>
		</div>

		<!-- Tables -->
		<div class="row fade-in-delay-3">
			<div class="col-md-6">
				<div class="table-card">
					<div class="table-card-title">
						<i class="fas fa-list-alt"></i> Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?>
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
			</div>
			<div class="col-md-6">
				<div class="table-card">
					<div class="table-card-title">
						<i class="fas fa-handshake"></i> Data Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?>
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
		</div>

		<!-- Footer Counter -->
		<div class="dashboard-footer fade-in-delay-3">
			<div id="histats_counter"></div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
					// Set chart defaults
					Chart.defaults.font.family = "'Inter', sans-serif";
					Chart.defaults.color = '#64748b';

					// Donut Chart for Case Types
					const donutChartCtx = document.getElementById('donutChart').getContext('2d');
					new Chart(donutChartCtx, {
								type: 'doughnut',
								data: {
									labels: <?php echo json_encode(array_keys($grouped_data)); ?>,
									datasets: [{
										data: <?php echo json_encode(array_values($grouped_data)); ?>,
										backgroundColor: [
											'#4361ee', '#4cc9f0', '#4ade80', '#f59e0b',
											'#f43f5e', '#8b5cf6', '#ec4899', '#0ea5e9'
										],
										borderWidth: 0,
										hoverOffset: 15
									}]