<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agenda Kegiatan – September 2025</title>

	<!-- Fonts & Icons -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2Pkf5f3tR05Pq+X1H8qZ6Nfw5EUP8ZEdP+K9eI1rZf+QkNbe+Zx8G+kv1A==" crossorigin="anonymous" referrerpolicy="no-referrer">

	<style>
		:root {
			--primary: #1e40af;
			--primary-light: #3b82f6;
			--secondary: #7c3aed;
			--accent: #06b6d4;
			--success: #059669;
			--warning: #d97706;
			--error: #dc2626;
			--bg-primary: #f8fafc;
			--bg-card: #ffffff;
			--text-primary: #1e293b;
			--text-secondary: #64748b;
			--text-muted: #94a3b8;
			--border: #e2e8f0;
			--shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
			--shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
			--radius: 16px;
			--radius-lg: 20px;
		}

		* {
			box-sizing: border-box;
		}

		html,
		body {
			height: 100%;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			background-attachment: fixed;
			color: var(--text-primary);
			overflow-x: hidden;
			position: relative;
		}

		/* Background Effects */
		body::before {
			content: '';
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background:
				radial-gradient(circle at 20% 20%, rgba(30, 64, 175, 0.15) 0%, transparent 50%),
				radial-gradient(circle at 80% 80%, rgba(124, 58, 237, 0.15) 0%, transparent 50%),
				radial-gradient(circle at 40% 60%, rgba(6, 182, 212, 0.1) 0%, transparent 40%);
			z-index: -1;
			animation: backgroundMove 20s ease-in-out infinite;
		}

		@keyframes backgroundMove {

			0%,
			100% {
				transform: translateY(0px) rotate(0deg);
			}

			50% {
				transform: translateY(-20px) rotate(1deg);
			}
		}

		.container {
			max-width: 1000px;
			margin: 0 auto;
			padding: 2rem 1rem;
		}

		/* Header */
		.header {
			text-align: center;
			margin-bottom: 3rem;
			padding: 2.5rem 2rem;
			background: rgba(255, 255, 255, 0.95);
			backdrop-filter: blur(20px);
			border: 1px solid rgba(255, 255, 255, 0.2);
			border-radius: var(--radius-lg);
			box-shadow: var(--shadow-lg);
			position: relative;
			overflow: hidden;
		}

		.header::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 4px;
			background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
		}

		.header-icon {
			width: 80px;
			height: 80px;
			margin: 0 auto 1.5rem;
			background: linear-gradient(135deg, var(--primary), var(--secondary));
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2rem;
			color: white;
			box-shadow: var(--shadow-lg);
			animation: pulse 2s ease-in-out infinite;
		}

		@keyframes pulse {

			0%,
			100% {
				transform: scale(1);
				box-shadow: var(--shadow-lg);
			}

			50% {
				transform: scale(1.05);
				box-shadow: 0 25px 50px -12px rgba(30, 64, 175, 0.4);
			}
		}

		.title {
			font-size: 2.5rem;
			font-weight: 900;
			color: var(--primary);
			margin-bottom: 0.5rem;
			letter-spacing: -0.5px;
		}

		.subtitle {
			font-size: 1.2rem;
			color: var(--text-secondary);
			font-weight: 600;
			margin-bottom: 1rem;
		}

		.period-badge {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			background: linear-gradient(135deg, var(--primary), var(--secondary));
			color: white;
			padding: 0.8rem 2rem;
			border-radius: 50px;
			font-weight: 700;
			font-size: 1rem;
			box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
		}

		/* Stats */
		.stats {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 1.5rem;
			margin-bottom: 3rem;
		}

		.stat-card {
			background: rgba(255, 255, 255, 0.95);
			backdrop-filter: blur(20px);
			border: 1px solid rgba(255, 255, 255, 0.2);
			border-radius: var(--radius);
			padding: 2rem;
			text-align: center;
			transition: all 0.3s ease;
			position: relative;
			overflow: hidden;
		}

		.stat-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--shadow-lg);
		}

		.stat-card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 3px;
			background: linear-gradient(90deg, var(--primary), var(--accent));
		}

		.stat-number {
			font-size: 2.5rem;
			font-weight: 900;
			color: var(--primary);
			margin-bottom: 0.5rem;
		}

		.stat-label {
			font-size: 0.9rem;
			color: var(--text-secondary);
			font-weight: 600;
		}

		/* Event Container */
		.event-container {
			background: rgba(255, 255, 255, 0.95);
			backdrop-filter: blur(20px);
			border-radius: var(--radius-lg);
			border: 1px solid rgba(255, 255, 255, 0.2);
			box-shadow: var(--shadow-lg);
			overflow: hidden;
			position: relative;
		}

		.event-header {
			background: linear-gradient(135deg, var(--bg-card), #f1f5f9);
			padding: 1.5rem 2rem;
			border-bottom: 1px solid var(--border);
			display: flex;
			align-items: center;
			justify-content: space-between;
		}

		.event-title {
			display: flex;
			align-items: center;
			gap: 1rem;
		}

		.event-icon {
			width: 48px;
			height: 48px;
			background: linear-gradient(135deg, var(--accent), var(--primary));
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			font-size: 1.2rem;
		}

		.event-info h2 {
			margin: 0;
			font-size: 1.3rem;
			font-weight: 800;
			color: var(--primary);
		}

		.event-info p {
			margin: 0;
			font-size: 0.9rem;
			color: var(--text-secondary);
			font-weight: 500;
		}

		.controls {
			display: flex;
			align-items: center;
			gap: 1rem;
		}

		.auto-scroll-btn {
			display: flex;
			align-items: center;
			gap: 0.5rem;
			background: linear-gradient(135deg, var(--success), var(--accent));
			color: white;
			border: none;
			padding: 0.8rem 1.5rem;
			border-radius: 50px;
			font-weight: 700;
			font-size: 0.9rem;
			cursor: pointer;
			transition: all 0.3s ease;
			box-shadow: 0 4px 15px rgba(5, 150, 105, 0.3);
		}

		.auto-scroll-btn:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 25px rgba(5, 150, 105, 0.4);
		}

		.speed-control {
			display: flex;
			align-items: center;
			gap: 0.5rem;
			background: white;
			border: 1px solid var(--border);
			border-radius: 50px;
			padding: 0.5rem;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
		}

		.speed-btn {
			width: 32px;
			height: 32px;
			border: none;
			background: var(--bg-primary);
			color: var(--primary);
			border-radius: 50%;
			cursor: pointer;
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: 700;
			transition: all 0.2s ease;
		}

		.speed-btn:hover {
			background: var(--primary);
			color: white;
		}

		.speed-label {
			font-size: 0.8rem;
			font-weight: 700;
			color: var(--primary);
			min-width: 30px;
			text-align: center;
		}

		/* Timeline */
		.timeline-container {
			max-height: 500px;
			overflow-y: auto;
			position: relative;
		}

		.timeline-container::-webkit-scrollbar {
			width: 8px;
		}

		.timeline-container::-webkit-scrollbar-track {
			background: #f1f5f9;
			border-radius: 8px;
		}

		.timeline-container::-webkit-scrollbar-thumb {
			background: var(--primary);
			border-radius: 8px;
		}

		.timeline {
			position: relative;
			padding: 2rem 0;
		}

		.timeline::before {
			content: '';
			position: absolute;
			left: 100px;
			top: 0;
			bottom: 0;
			width: 3px;
			background: linear-gradient(to bottom, var(--primary), var(--accent));
			border-radius: 2px;
		}

		.event-item {
			position: relative;
			display: grid;
			grid-template-columns: 100px 1fr;
			gap: 2rem;
			padding: 1.5rem 2rem;
			transition: all 0.3s ease;
		}

		.event-item:hover {
			background: rgba(30, 64, 175, 0.02);
		}

		.event-item:not(:last-child) {
			border-bottom: 1px solid rgba(226, 232, 240, 0.5);
		}

		.date-box {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			background: linear-gradient(135deg, var(--primary), var(--secondary));
			color: white;
			border-radius: var(--radius);
			padding: 1rem;
			box-shadow: 0 4px 15px rgba(30, 64, 175, 0.2);
			position: relative;
			z-index: 2;
		}

		.date-day {
			font-size: 1.8rem;
			font-weight: 900;
			line-height: 1;
		}

		.date-month {
			font-size: 0.8rem;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 1px;
			margin-top: 0.25rem;
		}

		.timeline-dot {
			position: absolute;
			left: 100px;
			top: 50%;
			transform: translate(-50%, -50%);
			width: 16px;
			height: 16px;
			background: white;
			border: 4px solid var(--primary);
			border-radius: 50%;
			box-shadow: 0 0 20px rgba(30, 64, 175, 0.3);
			z-index: 3;
		}

		.event-content {
			min-width: 0;
		}

		.event-content h3 {
			margin: 0 0 1rem 0;
			font-size: 1.2rem;
			font-weight: 800;
			color: var(--primary);
			line-height: 1.3;
			display: flex;
			align-items: flex-start;
			gap: 0.8rem;
		}

		.event-content h3 i {
			color: var(--accent);
			font-size: 1rem;
			margin-top: 0.2rem;
			flex-shrink: 0;
		}

		.event-description {
			color: var(--text-secondary);
			font-size: 1rem;
			line-height: 1.6;
			margin: 0 0 1rem 0;
		}

		.event-location {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			background: rgba(6, 182, 212, 0.1);
			color: var(--accent);
			padding: 0.5rem 1rem;
			border-radius: 50px;
			font-size: 0.9rem;
			font-weight: 600;
			border: 1px solid rgba(6, 182, 212, 0.2);
		}

		/* Responsive */
		@media (max-width: 768px) {
			.container {
				padding: 1rem 0.5rem;
			}

			.title {
				font-size: 2rem;
			}

			.event-header {
				flex-direction: column;
				gap: 1.5rem;
				text-align: center;
			}

			.controls {
				justify-content: center;
				flex-wrap: wrap;
			}

			.timeline::before {
				left: 80px;
			}

			.event-item {
				grid-template-columns: 80px 1fr;
				gap: 1.5rem;
				padding: 1rem;
			}

			.timeline-dot {
				left: 80px;
			}

			.date-box {
				padding: 0.8rem 0.5rem;
			}

			.date-day {
				font-size: 1.5rem;
			}

			.stats {
				grid-template-columns: 1fr;
			}
		}

		/* Animation untuk scroll */
		.fade-mask-top,
		.fade-mask-bottom {
			position: sticky;
			height: 20px;
			left: 0;
			right: 0;
			z-index: 10;
			pointer-events: none;
		}

		.fade-mask-top {
			top: 0;
			background: linear-gradient(to bottom, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
		}

		.fade-mask-bottom {
			bottom: 0;
			background: linear-gradient(to top, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
		}

		/* Loading animation */
		.loading {
			display: inline-block;
			width: 20px;
			height: 20px;
			border: 3px solid rgba(255, 255, 255, 0.3);
			border-radius: 50%;
			border-top-color: white;
			animation: spin 1s ease-in-out infinite;
		}

		@keyframes spin {
			to {
				transform: rotate(360deg);
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<!-- Header -->
		<div class="header">
			<div class="header-icon">
				<i class="fas fa-calendar-days"></i>
			</div>
			<h1 class="title"><?= isset($title) ? $title : 'Agenda Kegiatan' ?></h1>
			<p class="subtitle"><?= isset($subtitle) ? $subtitle : 'Pengadilan Agama Amuntai Kelas IB' ?></p>
			<div class="period-badge">
				<i class="fas fa-clock"></i>
				<?= isset($periode) ? $periode : 'September 2025' ?>
			</div>
		</div>

		<!-- Statistics -->
		<div class="stats">
			<div class="stat-card">
				<div class="stat-number"><?= isset($agenda) ? count($agenda) : 4 ?></div>
				<div class="stat-label">Total Agenda</div>
			</div>
			<div class="stat-card">
				<div class="stat-number"><?= isset($agenda) ? count(array_unique(array_column($agenda, 'tanggal'))) : 3 ?></div>
				<div class="stat-label">Hari Aktif</div>
			</div>
			<div class="stat-card">
				<div class="stat-number"><?= date('j') ?></div>
				<div class="stat-label">Hari Ini</div>
			</div>
		</div>

		<!-- Event Container -->
		<div class="event-container">
			<div class="event-header">
				<div class="event-title">
					<div class="event-icon">
						<i class="fas fa-calendar-check"></i>
					</div>
					<div class="event-info">
						<h2>Timeline Agenda</h2>
						<p>Kegiatan September 2025</p>
					</div>
				</div>
				<div class="controls">
					<button id="autoScrollBtn" class="auto-scroll-btn">
						<i class="fas fa-play"></i>
						<span>Auto-scroll</span>
					</button>
					<div class="speed-control">
						<button id="slowerBtn" class="speed-btn">−</button>
						<span id="speedLabel" class="speed-label">1×</span>
						<button id="fasterBtn" class="speed-btn">+</button>
					</div>
				</div>
			</div>

			<div class="timeline-container" id="timelineContainer">
				<div class="fade-mask-top"></div>

				<div class="timeline">
					<?php if (isset($agenda) && !empty($agenda)): ?>
						<?php foreach ($agenda as $item): ?>
							<?php
							$dateObj = DateTime::createFromFormat('Y-m-d', $item['tanggal']);
							$day = $dateObj->format('d');
							$month = strtoupper($dateObj->format('M'));
							?>
							<article class="event-item">
								<div class="date-box">
									<span class="date-day"><?= $day ?></span>
									<span class="date-month"><?= $month ?></span>
								</div>
								<div class="timeline-dot"></div>
								<div class="event-content">
									<h3>
										<i class="<?= isset($item['icon']) ? $item['icon'] : 'fas fa-calendar' ?>"></i>
										<?= htmlspecialchars($item['kegiatan']) ?>
									</h3>
									<p class="event-description">
										<?= htmlspecialchars(isset($item['deskripsi']) ? $item['deskripsi'] : $item['kegiatan']) ?>
									</p>
									<div class="event-location">
										<i class="fas fa-map-marker-alt"></i>
										<?= htmlspecialchars($item['keterangan']) ?>
									</div>
								</div>
							</article>
						<?php endforeach; ?>
					<?php else: ?>
						<!-- Default events if no data -->
						<article class="event-item">
							<div class="date-box">
								<span class="date-day">01</span>
								<span class="date-month">SEP</span>
							</div>
							<div class="timeline-dot"></div>
							<div class="event-content">
								<h3>
									<i class="fas fa-user-tie"></i>
									Pelantikan Pegawai PPPK
								</h3>
								<p class="event-description">
									Aula Pengadilan Agama Amuntai Kelas IB dipenuhi suasana haru dan bahagia saat Ketua PA Amuntai, YM Bapak Bahrul Maji, S.H.I., mengambil sumpah/janji 7 (tujuh) orang Pegawai Pemerintah dengan Perjanjian Kerja (PPPK).
								</p>
								<div class="event-location">
									<i class="fas fa-map-marker-alt"></i>
									Aula PA Amuntai Kelas IB
								</div>
							</div>
						</article>

						<article class="event-item">
							<div class="date-box">
								<span class="date-day">03</span>
								<span class="date-month">SEP</span>
							</div>
							<div class="timeline-dot"></div>
							<div class="event-content">
								<h3>
									<i class="fas fa-users"></i>
									Rapat Terbatas Sekretaris
								</h3>
								<p class="event-description">
									Sekretaris Pengadilan Agama Amuntai Kelas IB, Bapak Salmani, S.Ag., memimpin rapat terbatas bersama Sub Bagian Umum dan Keuangan, Sub Bagian PTIP, serta Sub Bagian Kepegawaian dan Ortala.
								</p>
								<div class="event-location">
									<i class="fas fa-map-marker-alt"></i>
									Ruang Sekretaris PA Amuntai
								</div>
							</div>
						</article>

						<article class="event-item">
							<div class="date-box">
								<span class="date-day">04</span>
								<span class="date-month">SEP</span>
							</div>
							<div class="timeline-dot"></div>
							<div class="event-content">
								<h3>
									<i class="fas fa-mosque"></i>
									Peringatan Maulid Nabi Muhammad SAW
								</h3>
								<p class="event-description">
									Pengadilan Agama Amuntai Kelas IB menyelenggarakan peringatan Maulid Nabi Besar Muhammad SAW 1447 H dalam suasana khidmat dan penuh makna.
								</p>
								<div class="event-location">
									<i class="fas fa-map-marker-alt"></i>
									Aula PA Amuntai Kelas IB
								</div>
							</div>
						</article>

						<article class="event-item">
							<div class="date-box">
								<span class="date-day">11</span>
								<span class="date-month">SEP</span>
							</div>
							<div class="timeline-dot"></div>
							<div class="event-content">
								<h3>
									<i class="fas fa-graduation-cap"></i>
									Penyambutan Mahasiswa PPL STAI Rakha
								</h3>
								<p class="event-description">
									Suasana hangat terasa di Ruang Media Center saat Wakil Ketua PA Amuntai, YM Ibu Mursidah, S.Ag., M.H., bersama Panitera dan Sekretaris secara resmi menyambut kedatangan mahasiswa/i Praktik Pengalaman Lapangan (PPL) Kelompok 2 Tahun 2025 dari STAI Rasyidiyah Khalidiyah (Rakha) Amuntai.
								</p>
								<div class="event-location">
									<i class="fas fa-map-marker-alt"></i>
									Ruang Media Center PA Amuntai
								</div>
							</div>
						</article>
					<?php endif; ?>
				</div>

				<div class="fade-mask-bottom"></div>
			</div>
		</div>
	</div>

	<script>
		// Auto-scroll functionality
		const container = document.getElementById('timelineContainer');
		const autoScrollBtn = document.getElementById('autoScrollBtn');
		const slowerBtn = document.getElementById('slowerBtn');
		const fasterBtn = document.getElementById('fasterBtn');
		const speedLabel = document.getElementById('speedLabel');

		let isAutoScrolling = false;
		let scrollSpeed = 1;
		let scrollInterval;
		let baseSpeed = 30; // pixels per second

		function updateSpeedLabel() {
			speedLabel.textContent = scrollSpeed.toFixed(1).replace('.0', '') + '×';
		}

		function startAutoScroll() {
			if (isAutoScrolling) return;

			isAutoScrolling = true;
			autoScrollBtn.innerHTML = '<i class="fas fa-pause"></i><span>Pause</span>';

			scrollInterval = setInterval(() => {
				const maxScroll = container.scrollHeight - container.clientHeight;
				container.scrollTop = Math.min(maxScroll, container.scrollTop + (baseSpeed * scrollSpeed / 60));

				if (container.scrollTop >= maxScroll - 1) {
					// Reset to top when reached bottom
					setTimeout(() => {
						container.scrollTop = 0;
					}, 1500);
				}
			}, 16); // ~60fps
		}

		function stopAutoScroll() {
			if (!isAutoScrolling) return;

			isAutoScrolling = false;
			autoScrollBtn.innerHTML = '<i class="fas fa-play"></i><span>Auto-scroll</span>';

			if (scrollInterval) {
				clearInterval(scrollInterval);
			}
		}

		function changeSpeed(delta) {
			scrollSpeed = Math.max(0.5, Math.min(3, scrollSpeed + delta));
			updateSpeedLabel();
		}

		// Event listeners
		autoScrollBtn.addEventListener('click', () => {
			if (isAutoScrolling) {
				stopAutoScroll();
			} else {
				startAutoScroll();
			}
		});

		slowerBtn.addEventListener('click', () => changeSpeed(-0.5));
		fasterBtn.addEventListener('click', () => changeSpeed(0.5));

		// Pause on hover/focus for accessibility
		container.addEventListener('mouseenter', stopAutoScroll);
		container.addEventListener('mouseleave', () => {
			if (autoScrollBtn.innerHTML.includes('pause')) {
				startAutoScroll();
			}
		});

		// Initialize
		updateSpeedLabel();

		// Auto-start after a delay
		setTimeout(() => {
			startAutoScroll();
		}, 2000);

		// Smooth reveal animation on load
		window.addEventListener('load', () => {
			const eventItems = document.querySelectorAll('.event-item');
			eventItems.forEach((item, index) => {
				item.style.opacity = '0';
				item.style.transform = 'translateY(30px)';

				setTimeout(() => {
					item.style.transition = 'all 0.6s ease';
					item.style.opacity = '1';
					item.style.transform = 'translateY(0)';
				}, index * 200);
			});
		});
	</script>
</body>

</html>