<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= isset($title) ? $title : 'AGENDA' ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	<style>
		:root {
			--primary: #667eea;
			--primary-dark: #5a6fd8;
			--secondary: #764ba2;
			--accent: #f093fb;
			--success: #10b981;
			--warning: #f59e0b;
			--danger: #ef4444;
			--card-bg: rgba(255, 255, 255, 0.95);
			--glass-bg: rgba(255, 255, 255, 0.1);
			--glass-border: rgba(255, 255, 255, 0.2);
			--text-primary: #1f2937;
			--text-secondary: #6b7280;
			--text-light: #ffffff;
			--shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
			--shadow-lg: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
			--gradient-bg: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
		}

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
			background: var(--gradient-bg);
			background-attachment: fixed;
			min-height: 100vh;
			color: var(--text-primary);
			overflow-x: hidden;
			position: relative;
		}

		body::before {
			content: '';
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background:
				radial-gradient(circle at 20% 80%, rgba(102, 126, 234, 0.3) 0%, transparent 50%),
				radial-gradient(circle at 80% 20%, rgba(240, 147, 251, 0.3) 0%, transparent 50%),
				radial-gradient(circle at 40% 40%, rgba(16, 185, 129, 0.2) 0%, transparent 50%);
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

		.floating-elements {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			pointer-events: none;
			z-index: -1;
		}

		.floating-shape {
			position: absolute;
			opacity: 0.1;
			animation: float 20s infinite ease-in-out;
		}

		.shape-1 {
			top: 20%;
			left: 10%;
			width: 100px;
			height: 100px;
			background: linear-gradient(45deg, #667eea, #764ba2);
			border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
			animation-delay: 0s;
		}

		.shape-2 {
			top: 60%;
			right: 15%;
			width: 80px;
			height: 80px;
			background: linear-gradient(45deg, #f093fb, #667eea);
			border-radius: 50%;
			animation-delay: 5s;
		}

		.shape-3 {
			bottom: 20%;
			left: 20%;
			width: 60px;
			height: 60px;
			background: linear-gradient(45deg, #10b981, #f093fb);
			border-radius: 20% 80% 80% 20% / 20% 20% 80% 80%;
			animation-delay: 10s;
		}

		@keyframes float {

			0%,
			100% {
				transform: translateY(0px) rotate(0deg);
				opacity: 0.1;
			}

			25% {
				transform: translateY(-30px) rotate(90deg);
				opacity: 0.2;
			}

			50% {
				transform: translateY(-60px) rotate(180deg);
				opacity: 0.15;
			}

			75% {
				transform: translateY(-30px) rotate(270deg);
				opacity: 0.25;
			}
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 2rem 1rem 4rem;
		}

		.header {
			text-align: center;
			margin-bottom: 3rem;
			padding: 2.5rem 2rem;
			backdrop-filter: blur(20px);
			background: var(--glass-bg);
			border: 1px solid var(--glass-border);
			border-radius: 28px;
			box-shadow: var(--shadow);
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
			background: linear-gradient(90deg, var(--primary), var(--accent));
		}

		.header-icon {
			width: 90px;
			height: 90px;
			margin: 0 auto 1.5rem;
			background: linear-gradient(135deg, var(--accent), var(--primary));
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2.2rem;
			color: white;
			box-shadow: var(--shadow-lg);
			position: relative;
		}

		.header-icon::before {
			content: '';
			position: absolute;
			inset: -3px;
			background: linear-gradient(135deg, var(--accent), var(--primary));
			border-radius: 50%;
			z-index: -1;
			opacity: 0.3;
			animation: pulse 2s ease-in-out infinite;
		}

		@keyframes pulse {

			0%,
			100% {
				transform: scale(1);
				opacity: 0.3;
			}

			50% {
				transform: scale(1.1);
				opacity: 0.1;
			}
		}

		.title {
			font-size: 2.8rem;
			font-weight: 900;
			color: var(--text-light);
			margin-bottom: 0.8rem;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
			letter-spacing: -0.5px;
		}

		.subtitle {
			font-size: 1.3rem;
			color: rgba(255, 255, 255, 0.9);
			font-weight: 600;
			margin-bottom: 1rem;
			letter-spacing: 0.5px;
		}

		.meta {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			background: rgba(255, 255, 255, 0.15);
			padding: 0.8rem 1.5rem;
			border-radius: 50px;
			font-weight: 600;
			font-size: 0.95rem;
			color: white;
			backdrop-filter: blur(10px);
			border: 1px solid rgba(255, 255, 255, 0.2);
		}

		.stats {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
			gap: 1.5rem;
			margin-bottom: 3rem;
		}

		.stat-card {
			background: var(--glass-bg);
			backdrop-filter: blur(20px);
			border: 1px solid var(--glass-border);
			border-radius: 20px;
			padding: 2rem;
			text-align: center;
			color: white;
			position: relative;
			overflow: hidden;
			transition: all 0.3s ease;
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
			margin-bottom: 0.5rem;
			color: var(--accent);
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
		}

		.stat-label {
			font-size: 1rem;
			opacity: 0.9;
			font-weight: 500;
		}

		.search-container {
			max-width: 600px;
			margin: 0 auto 3rem;
			position: relative;
		}

		.search-box {
			width: 100%;
			padding: 1.2rem 1.5rem 1.2rem 3.5rem;
			background: var(--glass-bg);
			backdrop-filter: blur(20px);
			border: 1px solid var(--glass-border);
			border-radius: 50px;
			color: white;
			font-size: 1.1rem;
			outline: none;
			transition: all 0.3s ease;
			font-weight: 500;
		}

		.search-box::placeholder {
			color: rgba(255, 255, 255, 0.7);
		}

		.search-box:focus {
			border-color: var(--accent);
			box-shadow: 0 0 0 3px rgba(240, 147, 251, 0.2);
			transform: translateY(-2px);
		}

		.search-icon {
			position: absolute;
			left: 1.5rem;
			top: 50%;
			transform: translateY(-50%);
			color: rgba(255, 255, 255, 0.7);
			font-size: 1.1rem;
		}

		.timeline {
			position: relative;
			max-width: 1000px;
			margin: 0 auto;
		}

		.timeline::before {
			content: '';
			position: absolute;
			left: 50%;
			top: 0;
			bottom: 0;
			width: 4px;
			background: linear-gradient(to bottom, var(--accent), var(--primary));
			transform: translateX(-50%);
			border-radius: 2px;
			box-shadow: 0 0 20px rgba(240, 147, 251, 0.3);
		}

		.timeline-item {
			position: relative;
			margin-bottom: 3rem;
			opacity: 0;
			transform: translateY(50px);
			transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
		}

		.timeline-item.visible {
			opacity: 1;
			transform: translateY(0);
		}

		.timeline-item:nth-child(odd) .card {
			margin-left: 0;
			margin-right: auto;
		}

		.timeline-item:nth-child(even) .card {
			margin-left: auto;
			margin-right: 0;
		}

		.timeline-item::before {
			content: '';
			position: absolute;
			left: 50%;
			top: 2.5rem;
			width: 24px;
			height: 24px;
			background: linear-gradient(135deg, var(--accent), var(--primary));
			border: 5px solid white;
			border-radius: 50%;
			transform: translateX(-50%);
			z-index: 2;
			box-shadow: 0 0 25px rgba(240, 147, 251, 0.6);
			animation: pulse-dot 3s ease-in-out infinite;
		}

		@keyframes pulse-dot {

			0%,
			100% {
				box-shadow: 0 0 25px rgba(240, 147, 251, 0.6);
			}

			50% {
				box-shadow: 0 0 35px rgba(240, 147, 251, 0.9);
			}
		}

		.card {
			background: var(--card-bg);
			backdrop-filter: blur(20px);
			border-radius: 24px;
			padding: 2rem;
			box-shadow: var(--shadow);
			max-width: 480px;
			border: 1px solid rgba(255, 255, 255, 0.2);
			position: relative;
			overflow: hidden;
			transition: all 0.4s ease;
		}

		.card:hover {
			transform: translateY(-8px) scale(1.02);
			box-shadow: var(--shadow-lg);
		}

		.card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 5px;
			background: linear-gradient(90deg, var(--primary), var(--accent));
		}

		.date-badge {
			display: inline-flex;
			align-items: center;
			gap: 0.8rem;
			background: linear-gradient(135deg, var(--primary), var(--accent));
			color: white;
			padding: 0.8rem 1.5rem;
			border-radius: 50px;
			font-size: 0.9rem;
			font-weight: 700;
			margin-bottom: 1.5rem;
			box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
			text-transform: uppercase;
			letter-spacing: 0.5px;
		}

		.date-icon {
			font-size: 1rem;
		}

		.event-title {
			font-size: 1.3rem;
			font-weight: 800;
			color: var(--text-primary);
			margin-bottom: 1rem;
			line-height: 1.4;
			letter-spacing: -0.3px;
		}

		.event-location {
			display: flex;
			align-items: center;
			gap: 0.8rem;
			color: var(--text-secondary);
			font-size: 1rem;
			font-weight: 500;
			padding: 0.8rem 1.2rem;
			background: rgba(102, 126, 234, 0.1);
			border-radius: 12px;
			border-left: 4px solid var(--primary);
		}

		.location-icon {
			color: var(--primary);
			font-size: 1.1rem;
		}

		.footer {
			text-align: center;
			margin-top: 4rem;
			padding: 2rem;
			color: rgba(255, 255, 255, 0.8);
			font-size: 0.95rem;
			font-weight: 500;
		}

		@media (max-width: 768px) {
			.title {
				font-size: 2.2rem;
			}

			.timeline::before {
				left: 2rem;
			}

			.timeline-item::before {
				left: 2rem;
				transform: none;
			}

			.timeline-item:nth-child(odd) .card,
			.timeline-item:nth-child(even) .card {
				margin-left: 4.5rem;
				margin-right: 1rem;
				max-width: none;
			}

			.container {
				padding: 1rem;
			}

			.header {
				padding: 2rem 1.5rem;
			}

			.stats {
				grid-template-columns: 1fr;
			}
		}

		.no-results {
			text-align: center;
			padding: 4rem 2rem;
			color: rgba(255, 255, 255, 0.8);
			font-size: 1.2rem;
			font-weight: 500;
		}

		.no-results-icon {
			font-size: 4rem;
			margin-bottom: 1rem;
			opacity: 0.5;
		}

		/* Chip navigation */
		.chips {
			display: flex;
			flex-wrap: wrap;
			gap: 1rem;
			justify-content: center;
			margin: 2rem auto 0;
			max-width: 800px;
		}

		.chip {
			padding: 0.8rem 1.5rem;
			border-radius: 50px;
			backdrop-filter: blur(10px);
			background: rgba(255, 255, 255, 0.1);
			border: 1px solid rgba(255, 255, 255, 0.2);
			color: rgba(255, 255, 255, 0.9);
			font-size: 0.9rem;
			font-weight: 600;
			letter-spacing: 0.3px;
			transition: all 0.3s ease;
			cursor: pointer;
		}

		.chip:hover {
			background: rgba(255, 255, 255, 0.2);
			transform: translateY(-2px);
		}

		.chip.active {
			background: linear-gradient(135deg, var(--accent), var(--primary));
			color: white;
			border-color: transparent;
			box-shadow: 0 4px 15px rgba(240, 147, 251, 0.3);
		}

		.container {
			max-width: 1100px;
			margin: 0 auto;
			padding: 40px 20px 80px
		}

		.heading {
			text-align: center;
			margin-bottom: 28px;
		}

		.title {
			font-weight: 800;
			font-size: 34px;
			letter-spacing: .8px;
			margin: 0 0 4px;
			text-transform: uppercase;
			text-shadow: 0 6px 24px rgba(0, 0, 0, .25);
		}

		.subtitle {
			opacity: .9;
			font-weight: 600;
			letter-spacing: .4px
		}

		.meta {
			margin-top: 8px;
			opacity: .8;
			font-size: 13px
		}

		.chips {
			display: flex;
			flex-wrap: wrap;
			gap: 8px;
			justify-content: center;
			margin: 22px auto 6px;
		}

		.chip {
			padding: 8px 14px;
			border-radius: 999px;
			backdrop-filter: blur(6px);
			background: var(--chip-bg);
			border: 1px solid var(--card-stroke);
			color: var(--txt);
			font-size: 12px;
			font-weight: 600;
			letter-spacing: .3px;
		}

		.chip.active {
			background: var(--chip-active);
			color: #3a2b00;
			border-color: transparent
		}

		/* Timeline wrapper */
		.timeline {
			position: relative;
			margin: 40px auto 0;
			padding: 10px 0 10px;
		}

		.timeline::before {
			content: "";
			position: absolute;
			left: 50%;
			top: 0;
			bottom: 0;
			width: 4px;
			background: linear-gradient(180deg, rgba(255, 255, 255, .75), rgba(255, 255, 255, .25));
			border-radius: 2px;
			transform: translateX(-50%);
			box-shadow: 0 0 18px var(--glow);
		}

		.tl-item {
			position: relative;
			display: grid;
			grid-template-columns: 1fr;
			gap: 14px;
			margin: 26px 0;
			opacity: 0;
			transform: translateY(18px) scale(.98);
			transition: all .5s ease;
		}

		.tl-item.visible {
			opacity: 1;
			transform: translateY(0) scale(1)
		}

		/* Dot di garis */
		.tl-item::before {
			content: "";
			position: absolute;
			left: 50%;
			top: 18px;
			transform: translate(-50%, -50%);
			width: 14px;
			height: 14px;
			border-radius: 999px;
			background: #fff;
			box-shadow:
				0 0 0 6px rgba(255, 255, 255, .15),
				0 6px 18px rgba(0, 0, 0, .35);
		}

		/* Card */
		.card {
			backdrop-filter: blur(8px);
			background: var(--card-bg);
			border: 1px solid var(--card-stroke);
			border-radius: 18px;
			padding: 16px 18px;
			box-shadow: 0 14px 40px rgba(0, 0, 0, .18);
			max-width: 480px;
		}

		.date-badge {
			display: inline-flex;
			align-items: center;
			gap: 8px;
			background: rgba(255, 255, 255, .18);
			padding: 6px 10px;
			border-radius: 999px;
			font-size: 12px;
			font-weight: 700;
			letter-spacing: .3px;
			border: 1px solid var(--card-stroke);
		}

		.date-badge .dot {
			width: 8px;
			height: 8px;
			border-radius: 50%;
			background: #8ef3ff;
			box-shadow: 0 0 10px #8ef3ff
		}

		.event {
			margin: 10px 0 6px;
			font-weight: 700;
			font-size: 18px;
			line-height: 1.35
		}

		.keterangan {
			font-size: 13px;
			color: var(--muted);
			display: flex;
			align-items: center;
			gap: 8px
		}

		.keterangan svg {
			width: 16px;
			height: 16px;
			opacity: .9
		}

		/* Alternating (desktop) */
		@media (min-width: 900px) {
			.tl-item {
				grid-template-columns: 1fr 1fr
			}

			.tl-item .left {
				display: flex;
				justify-content: flex-end
			}

			.tl-item .right {
				display: flex;
				justify-content: flex-start
			}

			.tl-item:nth-child(odd) .left {
				order: 2
			}

			/* card di kanan */
			.tl-item:nth-child(odd) .right {
				order: 1
			}

			/* spacer di kiri */
			.tl-item:nth-child(even) .left {
				order: 1
			}

			/* card di kiri */
			.tl-item:nth-child(even) .right {
				order: 2
			}

			/* spacer di kanan */
		}

		/* Mobile: semua card full width di tengah */
		@media (max-width: 899px) {
			.timeline::before {
				left: 28px;
				transform: none
			}

			.tl-item::before {
				left: 28px;
			}

			.card {
				margin-left: 56px;
				max-width: none;
			}
		}

		/* Footer kecil */
		.foot-note {
			text-align: center;
			margin-top: 40px;
			opacity: .7;
			font-size: 12px
		}
	</style>
</head>

<body>
	<div class="floating-elements">
		<div class="floating-shape shape-1"></div>
		<div class="floating-shape shape-2"></div>
		<div class="floating-shape shape-3"></div>
	</div>

	<div class="container">
		<div class="header">
			<div class="header-icon">
				<i class="fas fa-calendar-alt"></i>
			</div>
			<h1 class="title"><?= strtoupper(isset($title) ? $title : 'AGENDA KERJA PIMPINAN') ?></h1>
			<p class="subtitle"><?= isset($subtitle) ? $subtitle : 'PENGADILAN AGAMA AMUNTAI' ?></p>
			<div class="meta">
				<i class="fas fa-clock"></i>
				<?= isset($periode) ? $periode : 'Agustus 2025' ?> • Timeline
			</div>

			<!-- chips navigation -->
			<div class="chips">
				<span class="chip">Juni 2025</span>
				<span class="chip">Juli 2025</span>
				<span class="chip active">Agustus 2025</span>
				<span class="chip">September 2025</span>
				<span class="chip">Oktober 2025</span>
			</div>
		</div>

		<?php if (!empty($agenda)): ?>
			<div class="stats">
				<div class="stat-card">
					<div class="stat-number"><?= count($agenda) ?></div>
					<div class="stat-label">Total Agenda</div>
				</div>
				<div class="stat-card">
					<div class="stat-number"><?= count(array_unique(array_column($agenda, 'tanggal'))) ?></div>
					<div class="stat-label">Hari Aktif</div>
				</div>
				<div class="stat-card">
					<div class="stat-number"><?= date('j') ?></div>
					<div class="stat-label">Hari Ini</div>
				</div>
			</div>

			<div class="search-container">
				<div class="search-icon">
					<i class="fas fa-search"></i>
				</div>
				<input type="text" id="searchInput" class="search-box" placeholder="Cari agenda kegiatan...">
			</div>

			<div class="timeline" id="timeline">
				<?php
				// pastikan sudah terurut
				usort($agenda, function ($a, $b) {
					return strcmp($a['tanggal'], $b['tanggal']);
				});
				$i = 0;
				foreach ($agenda as $row):
					$i++;
				?>
					<div class="timeline-item" data-search="<?= strtolower($row['kegiatan'] . ' ' . $row['keterangan']) ?>">
						<div class="card">
							<div class="date-badge">
								<i class="fas fa-calendar date-icon"></i>
								<?= htmlspecialchars($row['label']) ?>
							</div>
							<h3 class="event-title"><?= htmlspecialchars($row['kegiatan']) ?></h3>
							<div class="event-location">
								<i class="fas fa-map-marker-alt location-icon"></i>
								<span><?= htmlspecialchars($row['keterangan']) ?></span>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php else: ?>
			<div class="no-results">
				<i class="fas fa-calendar-times no-results-icon"></i>
				<p>Tidak ada data agenda tersedia</p>
			</div>
		<?php endif; ?>

		<div class="footer">
			<p>&copy; <?= date('Y') ?> Timeline Agenda Pimpinan • Pengadilan Agama Amuntai</p>
		</div>
	</div>

	<script>
		// Intersection Observer for reveal animation
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};

		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.classList.add('visible');
				}
			});
		}, observerOptions);

		// Observe all timeline items
		document.querySelectorAll('.timeline-item').forEach(item => {
			observer.observe(item);
		});

		// Search functionality
		const searchInput = document.getElementById('searchInput');
		const timelineItems = document.querySelectorAll('.timeline-item');

		if (searchInput && timelineItems.length > 0) {
			searchInput.addEventListener('input', function() {
				const searchTerm = this.value.toLowerCase().trim();
				let visibleCount = 0;

				timelineItems.forEach(item => {
					const searchData = item.getAttribute('data-search');
					const isMatch = !searchTerm || searchData.includes(searchTerm);

					item.style.display = isMatch ? 'block' : 'none';
					if (isMatch) visibleCount++;
				});

				// Show no results message
				const timeline = document.getElementById('timeline');
				let noResults = timeline.querySelector('.no-results');

				if (visibleCount === 0 && searchTerm !== '') {
					if (!noResults) {
						noResults = document.createElement('div');
						noResults.className = 'no-results';
						noResults.innerHTML = `
							<i class="fas fa-search no-results-icon"></i>
							<p>Tidak ditemukan agenda yang sesuai dengan pencarian "${searchTerm}"</p>
						`;
						timeline.appendChild(noResults);
					}
				} else if (noResults) {
					noResults.remove();
				}
			});
		}

		// Smooth initial animation
		window.addEventListener('load', () => {
			const timeline = document.getElementById('timeline');
			if (timeline) {
				timeline.style.opacity = '0';
				setTimeout(() => {
					timeline.style.opacity = '1';
					timeline.style.transition = 'opacity 0.6s ease';
				}, 200);
			}
		});

		// Chip navigation hover effect
		document.querySelectorAll('.chip').forEach(chip => {
			chip.addEventListener('mouseenter', function() {
				this.style.transform = 'translateY(-3px) scale(1.05)';
			});

			chip.addEventListener('mouseleave', function() {
				this.style.transform = 'translateY(0) scale(1)';
			});
		});
	</script>
</body>

</html>