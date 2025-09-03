<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= isset($title) ? $title : 'AGENDA' ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
		:root {
			--primary-color: #8E2DE2;
			--secondary-color: #4A00E0;
			--accent-color: #FF9A8B;
			--success-color: #20E3B2;
			--info-color: #6236FF;
			--warning-color: #FF6B95;
			--danger-color: #FF5E62;
			--light-color: #f8fafc;
			--dark-color: #2d3748;
			--white-color: #ffffff;
			--body-bg: linear-gradient(135deg, #8E2DE2 0%, #4A00E0 100%);
			--card-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
			--card-hover-shadow: 0 30px 60px rgba(0, 0, 0, 0.25);
			--border-radius: 24px;
			--transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
			--glass-bg: rgba(255, 255, 255, 0.2);
			--glass-border: rgba(255, 255, 255, 0.15);
		}

		* {
			box-sizing: border-box
		}

		html,
		body {
			height: 100%
		}

		body {
			margin: 0;
			color: var(--light-color);
			font-family: Poppins, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
			background: var(--body-bg);
			background-attachment: fixed;
		}
		
		body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(146, 92, 255, 0.4) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 154, 139, 0.4) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(32, 227, 178, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 60% 60%, rgba(98, 54, 255, 0.3) 0%, transparent 40%);
            z-index: -1;
            animation: backgroundMove 15s ease-in-out infinite;
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
	<div class="container">
		<div class="heading">
			<div class="title"><?= strtoupper(isset($title) ? $title : 'AGENDA KERJA') ?></div>
			<div class="subtitle"><?= isset($subtitle) ? $subtitle : 'PENGADILAN AGAMA AMUNTAI' ?></div>
			<div class="meta"><?= isset($periode) ? $periode : 'Agustus 2025' ?> • Timeline</div>

			<!-- chips (opsional dekoratif) -->
			<div class="chips">
				<span class="chip">Juni 2025</span>
				<span class="chip">Juli 2025</span>
				<span class="chip active">Agustus 2025</span>
				<span class="chip">September 2025</span>
				<span class="chip">Oktober 2025</span>
			</div>
		</div>

		<div class="timeline" id="timeline">
			<?php if (!empty($agenda)): ?>
				<?php
				// pastikan sudah terurut
				usort($agenda, function ($a, $b) {
					return strcmp($a['tanggal'], $b['tanggal']);
				});
				$i = 0;
				foreach ($agenda as $row):
					$i++;
				?>
					<div class="tl-item">
						<div class="left">
							<div class="card">
								<div class="date-badge">
									<span class="dot"></span>
									<?= htmlspecialchars($row['label']) ?>
								</div>
								<div class="event"><?= htmlspecialchars($row['kegiatan']) ?></div>
								<div class="keterangan">
									<!-- lokasi icon -->
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
										<path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0Z" />
										<circle cx="12" cy="10" r="3" />
									</svg>
									<span><?= htmlspecialchars($row['keterangan']) ?></span>
								</div>
							</div>
						</div>
						<div class="right"><!-- spacer --></div>
					</div>
				<?php endforeach; ?>
			<?php else: ?>
				<p style="text-align:center;opacity:.8">Tidak ada data agenda.</p>
			<?php endif; ?>
		</div>

		<div class="foot-note">© <?= date('Y') ?> · Layout timeline</div>
	</div>

	<script>
		// reveal on scroll
		const items = Array.from(document.querySelectorAll('.tl-item'));
		const reveal = () => {
			const vh = window.innerHeight;
			items.forEach(el => {
				const rect = el.getBoundingClientRect();
				if (rect.top < vh - 80) el.classList.add('visible');
			});
		};
		window.addEventListener('scroll', reveal, {
			passive: true
		});
		window.addEventListener('load', reveal);
	</script>
</body>

</html>

