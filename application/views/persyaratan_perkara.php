<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Persyaratan Perkara Cerai - PA Amuntai</title>
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
			background: linear-gradient(135deg, #059669, var(--success), #34d399);
			border-radius: var(--border-radius-lg);
			padding: 2.5rem;
			margin-bottom: 2rem;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			box-shadow: var(--box-shadow-lg);
			color: white;
			text-align: center;
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
			margin-bottom: 1.5rem;
			transition: var(--transition);
		}

		.header-logo:hover {
			transform: scale(1.05);
			box-shadow: var(--box-shadow-lg);
		}

		.header-content {
			width: 100%;
			position: relative;
			z-index: 2;
			text-align: center;
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

		/* Section Title */
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
			background: var(--success);
			border-radius: 2px;
		}

		.section-title i {
			color: var(--success);
		}

		/* Requirements Grid */
		.requirements-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
		}

		.requirement-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			overflow: hidden;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			position: relative;
		}

		.requirement-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.requirement-card::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			height: 4px;
			background: linear-gradient(to right, #059669, var(--success));
		}

		.requirement-header {
			padding: 1.5rem;
			background: linear-gradient(135deg, #059669, var(--success));
			color: white;
			font-weight: 600;
			display: flex;
			align-items: center;
			gap: 0.75rem;
		}

		.requirement-body {
			padding: 1.5rem;
		}

		.requirement-list {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		.requirement-list li {
			padding: 0.75rem 0;
			border-bottom: 1px solid var(--gray-light);
			display: flex;
			align-items: flex-start;
			gap: 0.75rem;
			font-size: 0.9rem;
			line-height: 1.5;
		}

		.requirement-list li:last-child {
			border-bottom: none;
		}

		.requirement-list li i {
			color: var(--success);
			margin-top: 0.25rem;
			flex-shrink: 0;
		}

		/* Info Cards */
		.info-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
			gap: 1.5rem;
			margin-bottom: 2rem;
		}

		.info-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 1.5rem;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
		}

		.info-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.info-card.alert-info {
			border-left: 4px solid var(--info);
		}

		.info-card.alert-warning {
			border-left: 4px solid var(--warning);
		}

		.info-card h5 {
			display: flex;
			align-items: center;
			gap: 0.5rem;
			margin-bottom: 1rem;
			color: var(--dark);
		}

		/* Contact Cards */
		.contact-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 1.5rem;
		}

		.contact-card {
			background: var(--card-bg);
			border-radius: var(--border-radius);
			padding: 2rem 1rem;
			text-align: center;
			box-shadow: var(--box-shadow);
			transition: var(--transition);
			border-top: 4px solid var(--primary);
		}

		.contact-card:hover {
			transform: translateY(-5px);
			box-shadow: var(--box-shadow-lg);
		}

		.contact-icon {
			font-size: 2.5rem;
			color: var(--primary);
			margin-bottom: 1rem;
		}

		.contact-label {
			font-weight: 600;
			color: var(--dark);
			margin-bottom: 0.5rem;
		}

		.contact-value {
			color: var(--gray);
			font-size: 0.9rem;
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
		@media (max-width: 992px) {
			.dashboard-header {
				padding: 2rem;
			}

			.header-title {
				font-size: 2rem;
			}

			.requirements-grid {
				grid-template-columns: 1fr;
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

			.contact-grid {
				grid-template-columns: 1fr;
			}
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<!-- Header Section -->
		<div class="dashboard-header fade-in">
			<img src="<?php echo base_url('assets/dist/img/logo-mahkamah-agung.png'); ?>" class="header-logo" alt="Logo PA Amuntai">
			<div class="header-content">
				<h1 class="header-title">PERSYARATAN PERKARA CERAI</h1>
				<p class="header-subtitle">PENGADILAN AGAMA AMUNTAI KELAS IB</p>
			</div>
		</div>

		<!-- Requirements Section -->
		<h2 class="section-title fade-in-delay-1">
			<i class="fas fa-list-check"></i>
			Persyaratan Mengajukan Perkara Cerai (Talak/Gugat)
		</h2>

		<div class="requirements-grid fade-in-delay-1">
			<!-- Surat Gugatan Cerai -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-file-alt"></i>
					<span>Surat Gugatan Cerai</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Dibuat sendiri atau dibuatkan posbantuan hukum di Pengadilan Agama</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Dokumen Identitas -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-id-card"></i>
					<span>Dokumen Identitas</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Fotokopi KTP Penggugat/Pemohon</span>
						</li>
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Kartu Keluarga</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Bukti Domisili -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-home"></i>
					<span>Bukti Domisili</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Asli surat keterangan domisili dari kelurahan, khusus untuk yang telah pindah dan alamat tidak sesuai dengan KTP</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Dokumen Pernikahan -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-ring"></i>
					<span>Dokumen Pernikahan</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Asli dan fotokopi kutipan akta nikah/duplikat kutipan akta nikah</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Keterangan Ghoib -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-question-circle"></i>
					<span>Keterangan Suami/Istri Ghoib</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Surat keterangan dari kelurahan tempat terakhir diketahui oleh camat (untuk yang tidak diketahui tempat tinggalnya)</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Surat Perceraian -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-stamp"></i>
					<span>Surat Perceraian</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Bagi PNS: Surat izin perceraian dari atasan</span>
						</li>
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Khusus TNI/POLRI: Surat izin perceraian dari atasan</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Surat Kuasa -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-user-tie"></i>
					<span>Surat Kuasa</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Surat kuasa khusus (jika diwakili oleh kuasa hukum)</span>
						</li>
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Surat kuasa insidentil (jika diwakili selain kuasa hukum)</span>
						</li>
					</ul>
				</div>
			</div>

			<!-- Dokumen Pendukung -->
			<div class="requirement-card">
				<div class="requirement-header">
					<i class="fas fa-folder-plus"></i>
					<span>Dokumen Pendukung Lainnya</span>
				</div>
				<div class="requirement-body">
					<ul class="requirement-list">
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Surat keterangan tidak mampu dari kelurahan/kartu BLT/kartu miskin (jika perceraian tidak mampu)</span>
						</li>
						<li>
							<i class="fas fa-check-circle"></i>
							<span>Panjar biaya perkara</span>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Important Information -->
		<h2 class="section-title fade-in-delay-2">
			<i class="fas fa-exclamation-triangle"></i>
			Informasi Penting
		</h2>

		<div class="info-grid fade-in-delay-2">
			<div class="info-card alert-warning">
				<h5><i class="fas fa-exclamation-triangle"></i> Persyaratan Materai</h5>
				<p><strong>Semua fotokopi surat menggunakan dilegalisir empel materai di kantor pos.</strong></p>
			</div>

			<div class="info-card alert-info">
				<h5><i class="fas fa-money-bill-wave"></i> Biaya Perkara</h5>
				<p><strong>Panjar biaya perkara tergantung radius wilayah.</strong></p>
			</div>

			<div class="info-card alert-info">
				<h5><i class="fas fa-gavel"></i> Persidangan</h5>
				<p><strong>Bukti-bukti asli ditunjukkan di persidangan.</strong></p>
			</div>
		</div>

		<!-- Contact Information -->
		<h2 class="section-title fade-in-delay-3">
			<i class="fas fa-address-book"></i>
			Informasi Kontak
		</h2>

		<div class="contact-grid fade-in-delay-3">
			<div class="contact-card">
				<div class="contact-icon">
					<i class="fas fa-globe"></i>
				</div>
				<div class="contact-label">Website</div>
				<div class="contact-value">www.pa-amuntai.go.id</div>
			</div>

			<div class="contact-card">
				<div class="contact-icon">
					<i class="fab fa-facebook"></i>
				</div>
				<div class="contact-label">Facebook</div>
				<div class="contact-value">PA Amuntai</div>
			</div>

			<div class="contact-card">
				<div class="contact-icon">
					<i class="fab fa-instagram"></i>
				</div>
				<div class="contact-label">Instagram</div>
				<div class="contact-value">pengadilan_agama_amuntai</div>
			</div>
		</div>

	</div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Add smooth scroll behavior
			document.querySelectorAll('a[href^="#"]').forEach(anchor => {
				anchor.addEventListener('click', function(e) {
					e.preventDefault();
					document.querySelector(this.getAttribute('href')).scrollIntoView({
						behavior: 'smooth'
					});
				});
			});

			// Add hover effect to requirement cards
			const cards = document.querySelectorAll('.requirement-card, .info-card, .contact-card');
			cards.forEach(card => {
				card.addEventListener('mouseenter', function() {
					this.style.transform = 'translateY(-5px) scale(1.02)';
				});

				card.addEventListener('mouseleave', function() {
					this.style.transform = 'translateY(0) scale(1)';
				});
			});

			// Add loading animation
			const observer = new IntersectionObserver((entries) => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						entry.target.style.opacity = '1';
						entry.target.style.transform = 'translateY(0)';
					}
				});
			});

			document.querySelectorAll('.requirement-card, .info-card, .contact-card').forEach(card => {
				card.style.opacity = '0';
				card.style.transform = 'translateY(20px)';
				card.style.transition = 'all 0.6s ease-in-out';
				observer.observe(card);
			});
		});
	</script>
</body>

</html>