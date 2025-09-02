<?php

/**
 * View: Lipa_Agustus_view.php
 * Gaya dashboard modern seperti contoh: header gradient, metric cards, tabel rapi, dan 3 chart.
 * Dependensi: Bootstrap 5, Bootstrap Icons, DataTables, Chart.js (CDN)
 * Data yang diharapkan dari controller:
 *  - $title, $kategori (30 item), $rows (30x16), $tot_img (array total)
 *  - (opsional) $series_masuk, $series_selesai, $series_sisa => array 12 bulan
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
			--c1: #1d57f0;
			--c2: #0aa2c0;
			--muted: #6c7a91;
			--card-radius: 18px;
			--shadow: 0 10px 30px rgba(0, 0, 0, .08);
		}

		body {
			background: #f1f4f8;
		}

		.hero {
			background: linear-gradient(135deg, var(--c1), var(--c2));
			border-radius: 18px;
			color: #fff;
			box-shadow: var(--shadow);
		}

		.metric-card {
			border: 0;
			border-radius: var(--card-radius);
			box-shadow: var(--shadow);
		}

		.metric-icon {
			width: 42px;
			height: 42px;
			display: inline-grid;
			place-items: center;
			border-radius: 14px;
			background: rgba(13, 110, 253, .08);
			color: #0d6efd;
		}

		.metric-icon.warn {
			background: rgba(255, 193, 7, .12);
			color: #e18600;
		}

		.metric-icon.ok {
			background: rgba(25, 135, 84, .12);
			color: #198754;
		}

		.metric-icon.attn {
			background: rgba(220, 53, 69, .10);
			color: #dc3545;
		}

		.section-card {
			border: 0;
			border-radius: var(--card-radius);
			box-shadow: var(--shadow);
		}

		.sticky-th th {
			position: sticky;
			top: 0;
			z-index: 2;
			background: #eff6ff;
		}

		.table thead th {
			vertical-align: middle;
			text-align: center;
			font-size: .9rem;
			color: #103a66;
		}

		.table tbody td {
			font-size: .9rem;
			color: #253a52;
		}

		.table tfoot td {
			background: #eef3ff;
		}

		.legend-dot {
			display: inline-block;
			width: .75rem;
			height: .75rem;
			border-radius: 50%;
			margin-right: .4rem;
		}

		footer {
			color: var(--muted);
			font-size: .85rem;
		}
	</style>
</head>

<body>
	<div class="container-xxl py-4">
		<!-- HERO HEADER -->
		<div class="hero p-4 p-md-5 mb-4">
			<div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
				<div>
					<h3 class="mb-1 fw-bold">LAPORAN PERKARA LIPA AGUSTUS</h3>
					<div class="opacity-75">Statistik Perkara Diterima, Dicabut, dan Diputus menurut jenis perkara</div>
				</div>
				<span class="badge bg-light text-dark px-3 py-2 rounded-pill">Agustus 2025</span>
			</div>
		</div>

		<!-- METRICS -->
		<?php $tot = $tot_img ?? []; ?>
		<div class="row g-3 mb-4">
			<div class="col-12 col-md-6 col-xl-3">
				<div class="card metric-card">
					<div class="card-body d-flex align-items-center gap-3">
						<div class="metric-icon"><i class="bi bi-archive"></i></div>
						<div>
							<div class="small text-muted">Sisa Bulan Lalu</div>
							<div class="h3 mb-0 fw-bold"><?= number_format($tot['sisa_lalu'] ?? 0, 0, ',', '.'); ?></div>
							<div class="text-muted small">Perkara yang belum selesai</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-xl-3">
				<div class="card metric-card">
					<div class="card-body d-flex align-items-center gap-3">
						<div class="metric-icon"><i class="bi bi-inbox-arrow-down"></i></div>
						<div>
							<div class="small text-muted">Perkara Masuk</div>
							<div class="h3 mb-0 fw-bold"><?= number_format($tot['diterima'] ?? 0, 0, ',', '.'); ?></div>
							<div class="text-muted small">Perkara baru bulan ini</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-xl-3">
				<div class="card metric-card">
					<div class="card-body d-flex align-items-center gap-3">
						<div class="metric-icon ok"><i class="bi bi-check2-circle"></i></div>
						<div>
							<div class="small text-muted">Perkara Putus</div>
							<div class="h3 mb-0 fw-bold"><?= number_format($tot['jumlah_laju_6_13'] ?? 0, 0, ',', '.'); ?></div>
							<div class="text-muted small">Diselesaikan bulan ini</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-xl-3">
				<div class="card metric-card">
					<div class="card-body d-flex align-items-center gap-3">
						<div class="metric-icon attn"><i class="bi bi-balance-scale"></i></div>
						<div>
							<div class="small text-muted">Sisa Akhir</div>
							<div class="h3 mb-0 fw-bold"><?= number_format($tot['sisa_akhir'] ?? 0, 0, ',', '.'); ?></div>
							<div class="text-muted small">Masih dalam proses</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TABEL RINCIAN -->
		<div class="card section-card mb-4">
			<div class="card-header bg-transparent border-0 pt-4 pb-0">
				<div class="d-flex align-items-center gap-2">
					<i class="bi bi-grid-3x3-gap-fill text-primary"></i>
					<h6 class="mb-0">Rincian Perkara Bulan Agustus 2025</h6>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="lipa-table" class="table table-hover table-bordered align-middle">
						<thead class="sticky-th">
							<tr>
								<th rowspan="2" style="min-width:48px">No.</th>
								<th rowspan="2" class="text-start" style="min-width:260px">Jenis Perkara</th>
								<th colspan="3">Banyaknya Perkara</th>
								<th colspan="8">Dicabut dan Diputus Bulan Ini</th>
								<th rowspan="2">Jumlah<br>laju 6–13</th>
								<th rowspan="2">Sisa akhir<br>(5–14)</th>
								<th colspan="3">Upaya Hukum</th>
							</tr>
							<tr>
								<th>Sisa bulan lalu</th>
								<th>Diterima bulan ini</th>
								<th>Jumlah</th>
								<th>Dicabut</th>
								<th>Dikabulkan</th>
								<th>Ditolak</th>
								<th>Tidak diterima</th>
								<th>Digugurkan</th>
								<th>Dicoret dr register</th>
								<th>Perdamaian</th>
								<th>Dismissal</th>
								<th>Banding</th>
								<th>Kasasi</th>
								<th>PK</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($kategori as $i => $name): $r = isset($rows[$i]) ? $rows[$i] : array_fill(0, 16, 0); ?>
								<tr>
									<td class="text-center"><?= $i + 1; ?></td>
									<td><?= htmlspecialchars($name); ?></td>
									<?php for ($c = 0; $c < 16; $c++): ?>
										<td class="text-center"><?= $r[$c] ? number_format($r[$c], 0, ',', '.') : '–'; ?></td>
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

		<!-- CHARTS ROW 1 -->
		<div class="row g-3 mb-4">
			<div class="col-12 col-xl-6">
				<div class="card section-card h-100">
					<div class="card-header bg-transparent border-0 pt-4 pb-0 d-flex align-items-center gap-2">
						<i class="bi bi-pie-chart text-primary"></i>
						<h6 class="mb-0">Distribusi Perkara Agustus</h6>
					</div>
					<div class="card-body"><canvas id="pieDistribusi"></canvas></div>
				</div>
			</div>
			<div class="col-12 col-xl-6">
				<div class="card section-card h-100">
					<div class="card-header bg-transparent border-0 pt-4 pb-0 d-flex align-items-center gap-2">
						<i class="bi bi-bar-chart-line text-primary"></i>
						<h6 class="mb-0">Tren Penyelesaian Perkara (YTD)</h6>
					</div>
					<div class="card-body"><canvas id="barTrend"></canvas></div>
				</div>
			</div>
		</div>

		<!-- CHARTS ROW 2 -->
		<div class="card section-card mb-5">
			<div class="card-header bg-transparent border-0 pt-4 pb-0 d-flex align-items-center gap-2">
				<i class="bi bi-graph-up-arrow text-primary"></i>
				<h6 class="mb-0">Perbandingan Bulanan: Masuk vs Selesai vs Sisa</h6>
			</div>
			<div class="card-body"><canvas id="lineCompare"></canvas></div>
		</div>

		<footer class="text-center">Developed by <strong>Windy</strong> • <?= date('Y'); ?></footer>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
	<script>
		new DataTable('#lipa-table', {
			responsive: true,
			paging: false,
			searching: false,
			info: false,
			order: []
		});

		const names = <?= json_encode($kategori, JSON_UNESCAPED_UNICODE); ?>;
		const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE); ?>;

		// Komposisi diterima (Agustus)
		const diterima = rows.map(r => r[1] || 0);
		const diterimaFiltered = names.map((n, i) => ({
			label: n,
			val: diterima[i]
		})).filter(x => x.val > 0);
		new Chart(document.getElementById('pieDistribusi'), {
			type: 'doughnut',
			data: {
				labels: diterimaFiltered.map(x => x.label),
				datasets: [{
					data: diterimaFiltered.map(x => x.val)
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

		// Diputus (6–13) per jenis sebagai bar kecil trend (YTD placeholder bila tak ada seri)
		const diputus = rows.map(r => r.slice(4, 12).reduce((a, b) => a + (+b || 0), 0));

		// Seri bulanan (opsional dari controller). Jika tidak ada, isi 12 bulan dengan 0 dan set bulan Agustus dari total.
		const bulan = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
		const tMasuk = <?= isset($series_masuk) ? json_encode($series_masuk) : 'null' ?>;
		const tSelesai = <?= isset($series_selesai) ? json_encode($series_selesai) : 'null' ?>;
		const tSisa = <?= isset($series_sisa) ? json_encode($series_sisa) : 'null' ?>;

		const tot = <?= json_encode($tot_img ?? [], JSON_UNESCAPED_UNICODE); ?>;

		function seed(arr, key, idx) {
			if (Array.isArray(arr) && arr.length === 12) return arr;
			let a = new Array(12).fill(0);
			a[idx] = (tot[key] || 0);
			return a;
		}
		const idxAgu = 7; // index Agustus
		const seriMasuk = seed(tMasuk, 'diterima', idxAgu);
		const seriSelesai = seed(tSelesai, 'jumlah_laju_6_13', idxAgu);
		const seriSisa = seed(tSisa, 'sisa_akhir', idxAgu);

		new Chart(document.getElementById('barTrend'), {
			type: 'bar',
			data: {
				labels: bulan,
				datasets: [{
						label: 'Perkara Masuk',
						data: seriMasuk
					},
					{
						label: 'Perkara Selesai',
						data: seriSelesai
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
	</script>
</body>

</html>
