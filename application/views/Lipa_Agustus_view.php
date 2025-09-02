<?php

/**
 * View: Lipa_Agustus_view.php (versi fix tampilan)
 * - Hilangkan duplikasi render
 * - Tampilan modern lebih menarik (Bootstrap card, gradient header, chart warna-warni)
 */
?>
<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?= htmlspecialchars($title ?? 'LIPA 8 – Agustus 2025'); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.css" rel="stylesheet" />
	<style>
		body {
			background: linear-gradient(135deg, #f0f4f8, #f9fbfc);
		}

		.card-soft {
			border: 0;
			border-radius: 1rem;
			box-shadow: 0 8px 28px rgba(0, 0, 0, .08);
		}

		.sticky-th th {
			position: sticky;
			top: 0;
			z-index: 2;
			background: #e8f5e9;
		}

		.table thead th {
			vertical-align: middle;
			text-align: center;
			font-size: .85rem;
		}

		.table tbody td {
			font-size: .85rem;
		}

		.badge-chip {
			font-weight: 600;
			letter-spacing: .2px;
		}

		footer {
			margin-top: 40px;
			font-size: .8rem;
			color: #6c757d;
		}
	</style>
</head>

<body>
	<div class="container-fluid py-4">
		<div class="d-flex justify-content-between align-items-center mb-4">
			<h3 class="fw-bold mb-0 text-success">📊 <?= htmlspecialchars($title ?? 'LIPA 8 – Agustus 2025'); ?></h3>
			<span class="badge bg-light text-success border border-success badge-chip">Finalized</span>
		</div>

		<!-- Summary Cards -->
		<div class="row g-3 mb-4">
			<?php
			$tot = $tot_img ?? [];
			$cards = [
				['Sisa bulan lalu', $tot['sisa_lalu'] ?? 0, 'primary'],
				['Diterima bulan ini', $tot['diterima'] ?? 0, 'info'],
				['Jumlah (3)', $tot['jumlah'] ?? 0, 'success'],
				['Diputus (6–13)', $tot['jumlah_laju_6_13'] ?? 0, 'warning'],
				['Sisa akhir (14)', $tot['sisa_akhir'] ?? 0, 'danger'],
			];
			?>
			<?php foreach ($cards as $c): ?>
				<div class="col-12 col-sm-6 col-md-4 col-xl">
					<div class="card card-soft text-center bg-light">
						<div class="card-body">
							<div class="small text-muted mb-1"><?= htmlspecialchars($c[0]); ?></div>
							<div class="fs-3 fw-bold text-<?= $c[2]; ?>"><?= number_format($c[1], 0, ',', '.'); ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row g-4">
			<!-- Table -->
			<div class="col-12 col-xl-8">
				<div class="card card-soft">
					<div class="card-body">
						<h6 class="fw-bold mb-3">Rekapitulasi Perkara – Agustus 2025</h6>
						<div class="table-responsive">
							<table id="lipa-table" class="table table-striped table-hover align-middle table-bordered">
								<thead class="sticky-th">
									<tr>
										<th rowspan="2">No</th>
										<th rowspan="2" class="text-start">Jenis Perkara</th>
										<th colspan="3">Banyaknya Perkara</th>
										<th colspan="8">Dicabut & Diputus Bulan Ini</th>
										<th rowspan="2">Jumlah<br />laju 6–13</th>
										<th rowspan="2">Sisa akhir<br />(5–14)</th>
										<th colspan="3">Upaya Hukum</th>
									</tr>
									<tr>
										<th>Sisa lalu</th>
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
									<?php foreach ($kategori as $i => $name):
										$r = isset($rows[$i]) ? $rows[$i] : array_fill(0, 16, 0);
									?>
										<tr>
											<td class="text-center"><?= $i + 1; ?></td>
											<td><?= htmlspecialchars($name); ?></td>
											<?php for ($c = 0; $c < 16; $c++): ?>
												<td class="text-center"><?= $r[$c] ? number_format($r[$c], 0, ',', '.') : '–'; ?></td>
											<?php endfor; ?>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot class="table-light fw-bold">
									<tr>
										<td></td>
										<td>JUMLAH</td>
										<?php
										$calc = $tot_calc ?? array_fill(0, 16, 0);
										$img  = $tot_img  ?? [];
										$cols = [
											'sisa_lalu',
											'diterima',
											'jumlah',
											'dicabut',
											'dikabulkan',
											'ditolak',
											'tidak_diterima',
											'digugurkan',
											'dicoret',
											'perdamaian',
											'dismissal',
											'jumlah_laju_6_13',
											'sisa_akhir',
											'banding',
											'kasasi',
											'pk'
										];
										foreach ($cols as $idx => $key) {
											$val = $img[$key] ?? ($calc[$idx] ?? 0);
											echo '<td class="text-center">' . ($val ? number_format($val, 0, ',', '.') : "–") . '</td>';
										}
										?>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!-- Charts -->
			<div class="col-12 col-xl-4">
				<div class="card card-soft mb-4">
					<div class="card-body">
						<h6 class="fw-bold mb-3">Komposisi Perkara Diterima</h6>
						<canvas id="pieDiterima"></canvas>
					</div>
				</div>
				<div class="card card-soft">
					<div class="card-body">
						<h6 class="fw-bold mb-3">Top 5 Perkara Diputus</h6>
						<canvas id="barDiputus"></canvas>
					</div>
				</div>
			</div>
		</div>

		<footer class="text-center">&copy; <?= date('Y'); ?> PA Amuntai – Sistem Laporan Perkara</footer>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
	<script>
		const names = <?= json_encode($kategori, JSON_UNESCAPED_UNICODE); ?>;
		const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE); ?>;

		const diterima = rows.map(r => r[1] || 0);
		const diputus = rows.map(r => r.slice(4, 12).reduce((a, b) => a + (+b || 0), 0));

		const idxs = Array.from(rows.keys()).sort((a, b) => diputus[b] - diputus[a]).slice(0, 5);
		const topLabels = idxs.map(i => names[i]);
		const topValues = idxs.map(i => diputus[i]);

		const diterimaFiltered = names.map((n, i) => ({
			label: n,
			val: diterima[i]
		})).filter(x => x.val > 0);

		new DataTable('#lipa-table', {
			responsive: true,
			paging: false,
			searching: false,
			info: false,
			order: []
		});

		new Chart(document.getElementById('pieDiterima'), {
			type: 'doughnut',
			data: {
				labels: diterimaFiltered.map(x => x.label),
				datasets: [{
					data: diterimaFiltered.map(x => x.val),
					backgroundColor: ['#4caf50', '#2196f3', '#ff9800', '#9c27b0', '#f44336', '#00bcd4']
				}]
			},
			options: {
				plugins: {
					legend: {
						position: 'bottom'
					}
				}
			}
		});

		new Chart(document.getElementById('barDiputus'), {
			type: 'bar',
			data: {
				labels: topLabels,
				datasets: [{
					label: 'Diputus (6–13)',
					data: topValues,
					backgroundColor: '#28a745'
				}]
			},
			options: {
				plugins: {
					legend: {
						display: false
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
