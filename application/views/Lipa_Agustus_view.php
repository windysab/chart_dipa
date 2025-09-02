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
	<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.css" rel="stylesheet" />
	<style>
		:root {
			--shadow: 0 10px 30px rgba(0, 0, 0, .08);
		}

		body {
			background: #f1f4f8
		}

		.hero {
			background: linear-gradient(135deg, #1d57f0, #0aa2c0);
			border-radius: 18px;
			color: #fff;
			box-shadow: var(--shadow)
		}

		.metric-card,
		.section-card {
			border: 0;
			border-radius: 18px;
			box-shadow: var(--shadow)
		}

		.sticky-th th {
			position: sticky;
			top: 0;
			z-index: 2;
			background: #eff6ff
		}

		.chart-box {
			min-height: 320px
		}

		canvas {
			width: 100% !important;
			height: 300px !important
		}

		footer {
			color: #6c757d;
			font-size: .85rem
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
						<h6 class="mb-3">Distribusi Perkara Agustus</h6><canvas id="pieDistribusi"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card section-card h-100">
					<div class="card-body chart-box">
						<h6 class="mb-3">Tren Penyelesaian Perkara (YTD)</h6><canvas id="barTrend"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="card section-card mb-5">
			<div class="card-body chart-box">
				<h6 class="mb-3">Perbandingan Bulanan: Masuk vs Selesai vs Sisa</h6><canvas id="lineCompare"></canvas>
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
						backgroundColor: ['#1d57f0', '#0aa2c0', '#ff9800', '#9c27b0', '#4caf50', '#f44336', '#00bcd4', '#ffc107', '#795548', '#607d8b', '#8bc34a', '#e91e63']
					}]
				},
				options: {
					plugins: {
						legend: {
							position: 'right'
						}
					}
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
							backgroundColor: '#1d57f0'
						},
						{
							label: 'Perkara Selesai',
							data: seriSelesai,
							backgroundColor: '#4caf50'
						}
					]
				},
				options: {
					plugins: {
						legend: {
							position: 'bottom'
						}
					},
					scales: {
						y: {
							beginAtZero: true
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
							label: 'Masuk',
							data: seriMasuk,
							fill: true
						},
						{
							label: 'Selesai',
							data: seriSelesai,
							fill: true
						},
						{
							label: 'Sisa',
							data: seriSisa,
							fill: true
						},
					]
				},
				options: {
					plugins: {
						legend: {
							position: 'bottom'
						}
					},
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
		});
	</script>
</body>

</html>
