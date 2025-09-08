<?php

/**
 * View: Lipa_Agustus_view.php (fix chart rendering + dashboard modern)
 * - DOMContentLoaded, tinggi canvas fix, guard dataset kosong, backgroundColor diset
 */
?>
<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?= htmlspecialchars($title ?? 'Laporan Perkara LIPA – Agustus 2025'); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.css" rel="stylesheet" />
	<style>
		:root {
			--primary-color: #1e3a8a;
			--secondary-color: #3b82f6;
			--accent-color: #f59e0b;
			--highlight-color: #10b981;
			--background-color: #f8fafc;
			--card-color: #ffffff;
			--text-dark: #1e293b;
			--text-light: #64748b;
			--shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
			--transition: all 0.3s ease;
		}

		* {
			box-sizing: border-box;
			font-family: 'Segoe UI', 'Roboto', sans-serif;
		}

		body {
			background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
			color: var(--text-dark);
			line-height: 1.6;
			margin: 0;
			min-height: 100vh;
		}

		.hero {
			background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
			border-radius: 20px;
			color: white;
			box-shadow: var(--shadow);
			padding: 30px;
			margin-bottom: 30px;
		}

		.hero h3 {
			font-size: 2.5rem;
			font-weight: 700;
			margin-bottom: 10px;
			text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		.hero .opacity-75 {
			font-size: 1.3rem;
			font-weight: 400;
			opacity: 0.9;
		}

		.hero .badge {
			background: rgba(255, 255, 255, 0.2) !important;
			backdrop-filter: blur(10px);
			color: white !important;
			padding: 15px 30px !important;
			border-radius: 50px !important;
			font-size: 1.2rem !important;
			font-weight: 600 !important;
			border: 1px solid rgba(255, 255, 255, 0.3) !important;
		}

		.metric-card {
			background: linear-gradient(135deg, var(--card-color), #f1f5f9);
			border: 0;
			border-radius: 20px;
			box-shadow: var(--shadow);
			transition: var(--transition);
			position: relative;
			overflow: hidden;
			border: 1px solid rgba(59, 130, 246, 0.1);
		}

		.metric-card:hover {
			transform: translateY(-15px) scale(1.02);
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
		}

		.metric-card::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 5px;
			background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
		}

		.metric-card .card-body {
			padding: 30px;
		}

		.metric-card .small {
			font-size: 1.1rem;
			color: var(--text-light);
			font-weight: 600;
			margin-bottom: 10px;
		}

		.metric-card .h3 {
			font-size: 3rem;
			font-weight: 800;
			color: var(--primary-color);
			margin-bottom: 8px;
			background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
		}

		.section-card {
			background-color: var(--card-color);
			border: 0;
			border-radius: 20px;
			box-shadow: var(--shadow);
			overflow: hidden;
			position: relative;
			border: 1px solid rgba(59, 130, 246, 0.1);
		}

		.sticky-th th {
			position: sticky;
			top: 0;
			z-index: 2;
			background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05));
			color: var(--primary-color);
			font-weight: 700;
			text-transform: uppercase;
			font-size: 0.85rem;
			letter-spacing: 0.5px;
			padding: 18px;
			text-align: center;
			border-bottom: 2px solid rgba(59, 130, 246, 0.2);
		}

		.table td {
			padding: 16px;
			text-align: center;
			border-bottom: 1px solid #f1f5f9;
			transition: var(--transition);
		}

		.table tr:hover td {
			background-color: rgba(59, 130, 246, 0.05);
		}

		.table tbody td:nth-child(2) {
			text-align: left;
			padding-left: 20px;
			font-weight: 600;
			color: var(--primary-color);
		}

		.table tfoot tr {
			background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05));
			font-weight: 700;
			color: var(--primary-color);
		}

		.table tfoot td {
			border-top: 2px solid var(--secondary-color);
		}

		.chart-box {
			min-height: 380px;
			padding: 25px;
		}

		.chart-box h6 {
			font-size: 1.3rem;
			color: var(--primary-color);
			margin-bottom: 25px;
			padding-bottom: 15px;
			border-bottom: 2px solid #e2e8f0;
			font-weight: 700;
			display: flex;
			align-items: center;
			gap: 15px;
		}

		canvas {
			width: 100% !important;
			height: 320px !important;
		}

		footer {
			color: #6c757d;
			font-size: .85rem;
		}

		@media (max-width: 768px) {
			.hero h3 {
				font-size: 2rem;
			}

			.hero .opacity-75 {
				font-size: 1.1rem;
			}

			.metric-card .h3 {
				font-size: 2.5rem;
			}
		}
	</style>
</head>

<body>
	<div class="container-xxl py-4">
		<!-- Header -->
		<div class="hero p-4 mb-4 d-flex justify-content-between align-items-center">
			<div>
				<h3 class="mb-1 fw-bold">LAPORAN PERKARA LIPA AGUSTUS</h3>
				<div class="opacity-75">Statistik Perkara Agustus 2025</div>
			</div>
			<span class="badge bg-light text-dark px-3 py-2 rounded-pill">Agustus 2025</span>
		</div>

		<!-- Metrics -->
		<?php $tot = $tot_img ?? []; ?>
		<div class="row g-3 mb-4">
			<div class="col-md-3">
				<div class="card metric-card">
					<div class="card-body">
						<div class="small">Sisa Bulan Lalu</div>
						<div class="h3"><?= number_format($tot['sisa_lalu'] ?? 0, 0, ',', '.') ?></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card metric-card">
					<div class="card-body">
						<div class="small">Perkara Masuk</div>
						<div class="h3"><?= number_format($tot['diterima'] ?? 0, 0, ',', '.') ?></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card metric-card">
					<div class="card-body">
						<div class="small">Perkara Putus</div>
						<div class="h3"><?= number_format($tot['jumlah_laju_6_13'] ?? 0, 0, ',', '.') ?></div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card metric-card">
					<div class="card-body">
						<div class="small">Sisa Akhir</div>
						<div class="h3"><?= number_format($tot['sisa_akhir'] ?? 0, 0, ',', '.') ?></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Table -->
		<div class="card section-card mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table id="lipa-table" class="table table-bordered table-hover align-middle">
						<thead class="sticky-th">
							<tr>
								<th rowspan="2" style="min-width:48px">No</th>
								<th rowspan="2" class="text-start" style="min-width:260px">Jenis Perkara</th>
								<th colspan="3">Banyaknya Perkara</th>
								<th colspan="8">Dicabut dan Diputus Bulan Ini</th>
								<th rowspan="2">Jumlah<br />laju 6–13</th>
								<th rowspan="2">Sisa akhir<br />(5–14)</th>
								<th colspan="3">Upaya Hukum</th>
							</tr>
							<tr>
								<th>Sisa Lalu</th>
								<th>Diterima</th>
								<th>Jumlah</th>
								<th>Dicabut</th>
								<th>Dikabulkan</th>
								<th>Ditolak</th>
								<th>Tidak diterima</th>
								<th>Digugurkan</th>
								<th>Dicoret</th>
								<th>Perdamaian</th>
								<th>Dismissal</th>
								<th>Banding</th>
								<th>Kasasi</th>
								<th>PK</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($kategori as $i => $name): $r = $rows[$i] ?? array_fill(0, 16, 0); ?>
								<tr>
									<td class="text-center"><?= $i + 1 ?></td>
									<td><?= htmlspecialchars($name) ?></td>
									<?php for ($c = 0; $c < 16; $c++): ?>
										<td class="text-center"><?= $r[$c] ? number_format($r[$c], 0, ',', '.') : '–' ?></td>
									<?php endfor; ?>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot class="fw-bold">
							<tr>
								<td></td>
								<td>JUMLAH</td>
								<?php
								$calc = $tot_calc ?? array_fill(0, 16, 0);
								$img  = $tot_img  ?? [];
								$cols = ['sisa_lalu', 'diterima', 'jumlah', 'dicabut', 'dikabulkan', 'ditolak', 'tidak_diterima', 'digugurkan', 'dicoret', 'perdamaian', 'dismissal', 'jumlah_laju_6_13', 'sisa_akhir', 'banding', 'kasasi', 'pk'];
								foreach ($cols as $idx => $key) {
									$val = $img[$key] ?? ($calc[$idx] ?? 0);
									echo '<td class="text-center">' . ($val ? number_format($val, 0, ',', '.') : '–') . '</td>';
								}
								?>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

		<!-- Charts -->
		<div class="row g-3 mb-4">
			<div class="col-md-6">
				<div class="card section-card h-100">
					<div class="card-body chart-box">
						<h6 class="mb-3"><i class="fas fa-chart-pie"></i> Distribusi Perkara Agustus</h6><canvas id="pieDistribusi"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card section-card h-100">
					<div class="card-body chart-box">
						<h6 class="mb-3"><i class="fas fa-chart-bar"></i> Tren Penyelesaian Perkara (YTD)</h6><canvas id="barTrend"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="card section-card mb-5">
			<div class="card-body chart-box">
				<h6 class="mb-3"><i class="fas fa-chart-line"></i> Perbandingan Bulanan: Masuk vs Selesai vs Sisa</h6><canvas id="lineCompare"></canvas>
			</div>
		</div>

		<footer class="text-center">&copy; <?= date('Y'); ?> PA Amuntai</footer>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			try {
				new DataTable('#lipa-table', {
					responsive: true,
					paging: false,
					searching: false,
					info: false,
					order: []
				});
			} catch (e) {}

			const names = <?= json_encode($kategori, JSON_UNESCAPED_UNICODE); ?> || [];
			const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE); ?> || [];

			// ===== PIE: Distribusi diterima per jenis (pakai kolom index 1)
			const diterima = rows.map(r => Array.isArray(r) ? (r[1] || 0) : 0);
			let pieData = names.map((n, i) => ({
				label: n,
				val: diterima[i] || 0
			})).filter(x => x.val > 0);
			if (pieData.length === 0) {
				pieData = [{
					label: 'Tidak ada data',
					val: 1
				}];
			}
			new Chart(document.getElementById('pieDistribusi'), {
				type: 'doughnut',
				data: {
					labels: pieData.map(x => x.label),
					datasets: [{
						data: pieData.map(x => x.val),
						backgroundColor: [
							'#f97316', '#3b82f6', '#10b981', '#8b5cf6', '#f59e0b',
							'#ef4444', '#06b6d4', '#84cc16', '#f43f5e', '#6366f1',
							'#14b8a6', '#a855f7', '#22c55e', '#eab308', '#f97316'
						],
						borderWidth: 3,
						borderColor: '#fff',
						hoverOffset: 20
					}]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: {
						legend: {
							position: 'right',
							labels: {
								usePointStyle: true,
								padding: 20,
								font: {
									size: 12,
									weight: '600'
								}
							}
						},
						tooltip: {
							backgroundColor: 'rgba(0, 0, 0, 0.8)',
							titleColor: '#fff',
							bodyColor: '#fff',
							borderColor: '#3b82f6',
							borderWidth: 1,
							cornerRadius: 8,
							callbacks: {
								label: function(context) {
									const total = context.dataset.data.reduce((a, b) => a + b, 0);
									const percentage = ((context.parsed / total) * 100).toFixed(1);
									return `${context.label}: ${context.parsed} (${percentage}%)`;
								}
							}
						}
					},
					cutout: '60%',
				}
			});

			// ===== BAR: Tren penyelesaian (YTD) – seri dari controller jika ada, jika tidak seed Agustus
			const bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
			const tot = <?= json_encode($tot_img ?? [], JSON_UNESCAPED_UNICODE); ?> || {};
			const tMasuk = <?= isset($series_masuk) ? json_encode($series_masuk) : 'null' ?>;
			const tSelesai = <?= isset($series_selesai) ? json_encode($series_selesai) : 'null' ?>;
			const tSisa = <?= isset($series_sisa) ? json_encode($series_sisa) : 'null' ?>;

			function makeSeries(src, key) {
				if (Array.isArray(src) && src.length === 12) return src;
				const a = new Array(12).fill(0);
				a[7] = Number(tot[key] || 0);
				return a;
			}
			const seriMasuk = makeSeries(tMasuk, 'diterima');
			const seriSelesai = makeSeries(tSelesai, 'jumlah_laju_6_13');
			const seriSisa = makeSeries(tSisa, 'sisa_akhir');

			new Chart(document.getElementById('barTrend'), {
				type: 'bar',
				data: {
					labels: bulan,
					datasets: [{
							label: 'Perkara Masuk',
							data: seriMasuk,
							backgroundColor: 'rgba(59, 130, 246, 0.8)',
							borderColor: '#3b82f6',
							borderWidth: 0,
							borderRadius: 8,
							borderSkipped: false,
						},
						{
							label: 'Perkara Selesai',
							data: seriSelesai,
							backgroundColor: 'rgba(16, 185, 129, 0.8)',
							borderColor: '#10b981',
							borderWidth: 0,
							borderRadius: 8,
							borderSkipped: false,
						}
					]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: {
						legend: {
							position: 'bottom',
							labels: {
								usePointStyle: true,
								padding: 20,
								font: {
									size: 12,
									weight: '600'
								}
							}
						},
						tooltip: {
							backgroundColor: 'rgba(0, 0, 0, 0.8)',
							titleColor: '#fff',
							bodyColor: '#fff',
							borderColor: '#3b82f6',
							borderWidth: 1,
							cornerRadius: 8,
						}
					},
					scales: {
						y: {
							beginAtZero: true,
							grid: {
								color: 'rgba(0, 0, 0, 0.1)',
								drawBorder: false
							},
							ticks: {
								font: {
									size: 11,
									weight: '500'
								},
								color: '#64748b'
							}
						},
						x: {
							grid: {
								display: false
							},
							ticks: {
								font: {
									size: 11,
									weight: '500'
								},
								color: '#64748b'
							}
						}
					}
				}
			});

			// ===== LINE: Perbandingan bulanan
			new Chart(document.getElementById('lineCompare'), {
				type: 'line',
				data: {
					labels: bulan,
					datasets: [{
							label: 'Perkara Masuk',
							data: seriMasuk,
							borderColor: '#3b82f6',
							backgroundColor: 'rgba(59, 130, 246, 0.1)',
							fill: true,
							tension: 0.4,
							pointBackgroundColor: '#3b82f6',
							pointBorderColor: '#fff',
							pointBorderWidth: 3,
							pointRadius: 8,
							pointHoverRadius: 10
						},
						{
							label: 'Perkara Selesai',
							data: seriSelesai,
							borderColor: '#10b981',
							backgroundColor: 'rgba(16, 185, 129, 0.1)',
							fill: true,
							tension: 0.4,
							pointBackgroundColor: '#10b981',
							pointBorderColor: '#fff',
							pointBorderWidth: 3,
							pointRadius: 8,
							pointHoverRadius: 10
						},
						{
							label: 'Sisa Perkara',
							data: seriSisa,
							borderColor: '#f59e0b',
							backgroundColor: 'rgba(245, 158, 11, 0.1)',
							fill: true,
							tension: 0.4,
							pointBackgroundColor: '#f59e0b',
							pointBorderColor: '#fff',
							pointBorderWidth: 3,
							pointRadius: 8,
							pointHoverRadius: 10
						}
					]
				},
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: {
						legend: {
							position: 'bottom',
							labels: {
								usePointStyle: true,
								padding: 20,
								font: {
									size: 12,
									weight: '600'
								}
							}
						},
						tooltip: {
							backgroundColor: 'rgba(0, 0, 0, 0.8)',
							titleColor: '#fff',
							bodyColor: '#fff',
							borderColor: '#3b82f6',
							borderWidth: 1,
							cornerRadius: 8,
						}
					},
					scales: {
						y: {
							beginAtZero: true,
							grid: {
								color: 'rgba(0, 0, 0, 0.1)',
								drawBorder: false
							},
							ticks: {
								font: {
									size: 11,
									weight: '500'
								},
								color: '#64748b'
							}
						},
						x: {
							grid: {
								display: false
							},
							ticks: {
								font: {
									size: 11,
									weight: '500'
								},
								color: '#64748b'
							}
						}
					},
					interaction: {
						intersect: false,
						mode: 'index'
					}
				}
			});
		});
	</script>
</body>

</html>
