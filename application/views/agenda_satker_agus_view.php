<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= isset($title) ? $title : 'AGENDA' ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
	<style>
		:root {
			--primary: #667eea;
			--primary-dark: #5a6fd8;
			--secondary: #764ba2;
			--accent: #f093fb;
			--success: #4ade80;
			--warning: #fbbf24;
			--danger: #f87171;
			--card-bg: rgba(255, 255, 255, 0.95);
			--glass-bg: rgba(255, 255, 255, 0.1);
			--glass-border: rgba(255, 255, 255, 0.2);
			--text-primary: #1f2937;
			--text-secondary: #6b7280;
			--text-light: #ffffff;
			--shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
			--shadow-lg: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
		}

		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
			background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
			background-attachment: fixed;
			min-height: 100vh;
			color: var(--text-primary);
			overflow-x: hidden;
		}

		.animated-bg {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: -1;
			overflow: hidden;
		}

		.floating-shape {
			position: absolute;
			border-radius: 50%;
			background: rgba(255, 255, 255, 0.1);
			animation: float 20s infinite linear;
		}

		.shape-1 {
			width: 80px;
			height: 80px;
			top: 20%;
			left: 10%;
			animation-delay: 0s;
		}

		.shape-2 {
			width: 120px;
			height: 120px;
			top: 60%;
			right: 15%;
			animation-delay: 5s;
		}

		.shape-3 {
			width: 60px;
			height: 60px;
			top: 80%;
			left: 20%;
			animation-delay: 10s;
		}

		.shape-4 {
			width: 100px;
			height: 100px;
			top: 40%;
			right: 30%;
			animation-delay: 15s;
		}

		@keyframes float {

			0%,
			100% {
				transform: translateY(0) rotate(0deg);
				opacity: 0.3;
			}

			25% {
				transform: translateY(-20px) rotate(90deg);
				opacity: 0.7;
			}

			50% {
				transform: translateY(-40px) rotate(180deg);
				opacity: 0.5;
			}

			75% {
				transform: translateY(-20px) rotate(270deg);
				opacity: 0.8;
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
			padding: 2rem;
			backdrop-filter: blur(20px);
			background: var(--glass-bg);
			border: 1px solid var(--glass-border);
			border-radius: 24px;
			box-shadow: var(--shadow);
		}

		.header-icon {
			width: 80px;
			height: 80px;
			margin: 0 auto 1rem;
			background: linear-gradient(135deg, var(--accent), var(--primary));
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 2rem;
			color: white;
			box-shadow: var(--shadow-lg);
		}

		.title {
			font-size: 2.5rem;
			font-weight: 800;
			color: var(--text-light);
			margin-bottom: 0.5rem;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
		}

		.subtitle {
			font-size: 1.2rem;
			color: rgba(255, 255, 255, 0.9);
			font-weight: 600;
			margin-bottom: 0.5rem;
		}

		.periode {
			display: inline-block;
			background: var(--accent);
			color: white;
			padding: 0.5rem 1.5rem;
			border-radius: 50px;
			font-weight: 600;
			font-size: 0.9rem;
			box-shadow: var(--shadow);
		}

		.search-container {
			max-width: 500px;
			margin: 0 auto 3rem;
			position: relative;
		}

		.search-box {
			width: 100%;
			padding: 1rem 1rem 1rem 3rem;
			background: var(--glass-bg);
			backdrop-filter: blur(20px);
			border: 1px solid var(--glass-border);
			border-radius: 50px;
			color: white;
			font-size: 1rem;
			outline: none;
			transition: all 0.3s ease;
		}

		.search-box::placeholder {
			color: rgba(255, 255, 255, 0.7);
		}

		.search-box:focus {
			border-color: var(--accent);
			box-shadow: 0 0 0 3px rgba(240, 147, 251, 0.2);
		}

		.search-icon {
			position: absolute;
			left: 1rem;
			top: 50%;
			transform: translateY(-50%);
			color: rgba(255, 255, 255, 0.7);
		}

		.timeline {
			position: relative;
			max-width: 900px;
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
			margin-bottom: 2rem;
			opacity: 0;
			transform: translateY(30px);
			transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
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
			top: 2rem;
			width: 20px;
			height: 20px;
			background: linear-gradient(135deg, var(--accent), var(--primary));
			border: 4px solid white;
			border-radius: 50%;
			transform: translateX(-50%);
			z-index: 2;
			box-shadow: 0 0 20px rgba(240, 147, 251, 0.5);
		}

		.card {
			background: var(--card-bg);
			backdrop-filter: blur(20px);
			border-radius: 20px;
			padding: 1.5rem;
			box-shadow: var(--shadow);
			max-width: 420px;
			border: 1px solid rgba(255, 255, 255, 0.2);
			position: relative;
			overflow: hidden;
			transition: all 0.3s ease;
		}

		.card:hover {
			transform: translateY(-5px);
			box-shadow: var(--shadow-lg);
		}

		.card::before {
			content: '';
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 4px;
			background: linear-gradient(90deg, var(--primary), var(--accent));
		}

		.date-badge {
			display: inline-flex;
			align-items: center;
			gap: 0.5rem;
			background: linear-gradient(135deg, var(--primary), var(--accent));
			color: white;
			padding: 0.5rem 1rem;
			border-radius: 50px;
			font-size: 0.8rem;
			font-weight: 600;
			margin-bottom: 1rem;
			box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
		}

		.event-title {
			font-size: 1.1rem;
			font-weight: 700;
			color: var(--text-primary);
			margin-bottom: 0.8rem;
			line-height: 1.4;
		}

		.event-location {
			display: flex;
			align-items: center;
			gap: 0.5rem;
			color: var(--text-secondary);
			font-size: 0.9rem;
			font-weight: 500;
		}

		.location-icon {
			width: 16px;
			height: 16px;
			color: var(--primary);
		}

		.stats {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 1rem;
			margin-bottom: 2rem;
		}

		.stat-card {
			background: var(--glass-bg);
			backdrop-filter: blur(20px);
			border: 1px solid var(--glass-border);
			border-radius: 16px;
			padding: 1.5rem;
			text-align: center;
			color: white;
		}

		.stat-number {
			font-size: 2rem;
			font-weight: 800;
			margin-bottom: 0.5rem;
			color: var(--accent);
		}

		.stat-label {
			font-size: 0.9rem;
			opacity: 0.9;
		}

		.footer {
			text-align: center;
			margin-top: 4rem;
			padding: 2rem;
			color: rgba(255, 255, 255, 0.8);
			font-size: 0.9rem;
		}

		@media (max-width: 768px) {
			.title {
				font-size: 2rem;
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
				margin-left: 4rem;
				margin-right: 1rem;
				max-width: none;
			}

			.container {
				padding: 1rem;
			}
		}

		.no-results {
			text-align: center;
			padding: 3rem;
			color: rgba(255, 255, 255, 0.8);
			font-size: 1.1rem;
		}

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
	<div class="animated-bg">
		<div class="floating-shape shape-1"></div>
		<div class="floating-shape shape-2"></div>
		<div class="floating-shape shape-3"></div>
		<div class="floating-shape shape-4"></div>
	</div>

	<div class="container">
		<div class="header">
			<div class="header-icon">
				<i class="fas fa-calendar-alt"></i>
			</div>
			<h1 class="title"><?= isset($title) ? $title : 'AGENDA KERJA SATKER' ?></h1>
			<p class="subtitle"><?= isset($subtitle) ? $subtitle : 'PENGADILAN AGAMA AMUNTAI' ?></p>
			<div class="periode">
				<i class="fas fa-clock"></i>
				<?= isset($periode) ? $periode : 'Agustus 2025' ?>
			</div>
		</div>

		<?php if (isset($agenda) && is_array($agenda)): ?>
			<div class="stats">
				<div class="stat-card">
					<div class="stat-number"><?= count($agenda) ?></div>
					<div class="stat-label">Total Agenda</div>
				</div>
				<div class="stat-card">
					<div class="stat-number"><?= count(array_unique(array_column($agenda, 'tanggal'))) ?></div>
					<div class="stat-label">Hari Aktif</div>
				</div>
			</div>

			<div class="search-container">
				<div class="search-icon">
					<i class="fas fa-search"></i>
				</div>
				<input type="text" id="searchInput" class="search-box" placeholder="Cari kegiatan atau lokasi...">
			</div>

			<div class="timeline" id="timeline">
				<?php foreach ($agenda as $index => $item): ?>
					<div class="timeline-item" data-search="<?= strtolower($item['kegiatan'] . ' ' . $item['keterangan']) ?>">
						<div class="card">
							<div class="date-badge">
								<i class="fas fa-calendar"></i>
								<?= $item['label'] ?>
							</div>
							<h3 class="event-title"><?= $item['kegiatan'] ?></h3>
							<div class="event-location">
								<i class="fas fa-map-marker-alt location-icon"></i>
								<?= $item['keterangan'] ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php else: ?>
			<div class="no-results">
				<i class="fas fa-calendar-times" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.5;"></i>
				<p>Tidak ada agenda tersedia</p>
			</div>
		<?php endif; ?>

		<div class="footer">
			<p>&copy; <?= date('Y') ?> Timeline Agenda Satker • Pengadilan Agama Amuntai</p>
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

		searchInput.addEventListener('input', function() {
			const searchTerm = this.value.toLowerCase().trim();
			let visibleCount = 0;

			timelineItems.forEach(item => {
				const searchData = item.getAttribute('data-search');
				const isMatch = searchData.includes(searchTerm);

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
                        <i class="fas fa-search" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.5;"></i>
                        <p>Tidak ditemukan agenda yang sesuai dengan pencarian "${searchTerm}"</p>
                    `;
					timeline.appendChild(noResults);
				}
			} else if (noResults) {
				noResults.remove();
			}
		});

		// Add loading state
		window.addEventListener('load', () => {
			const loading = document.querySelector('.loading');
			if (loading) loading.remove();
		});

		// Add smooth scrolling
		document.addEventListener('DOMContentLoaded', () => {
			const timeline = document.getElementById('timeline');
			if (timeline) {
				timeline.style.opacity = '0';
				setTimeout(() => {
					timeline.style.opacity = '1';
					timeline.style.transition = 'opacity 0.5s ease';
				}, 300);
			}
		});
	</script>
</body>

</html>