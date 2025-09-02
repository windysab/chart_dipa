<?php

/**
 * View: Lipa_Agustus_view.php
 * - Tampilan modern LIPA 8 Agustus 2025<?php
/**
 * View: Lipa_Agustus_view.php (modern)
 * - Mencegah Undefined offset dengan guard di sisi view
 * - Styling Bootstrap 5 + DataTables + Chart.js
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
			background: #f6f8fa
		}

		.card-soft {
			border: 0;
			border-radius: 1rem;
			box-shadow: 0 6px 24px rgba(0, 0, 0, .06)
		}

		.sticky-th th {
			position: sticky;
			top: 0;
			z-index: 2;
			background: #e6f4ea
		}

		.table thead th {
			vertical-align: middle;
			text-align: center;
			font-size: .9rem
		}

		.table tbody td {
			font-size: .9rem
		}

		.badge-chip {
			font-weight: 600;
			letter-spacing: .2px
		}
	</style>
</head>

<body>
	<div class="container-fluid py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3 class="mb-0 fw-bold">LIPA 8 – Agustus 2025</h3>
			<span class="badge bg-success-subtle text-success border border-success-subtle badge-chip">Finalized</span>
		</div>

		<!-- cards -->
		<div class="row g-3 mb-4">
			<?php
			$img = isset($tot_img) && is_array($tot_img) ? $tot_img : array();
			$cards = array(
				array('Sisa bulan lalu', isset($img['sisa_lalu']) ? $img['sisa_lalu'] : 0),
				array('Diterima bulan ini', isset($img['diterima']) ? $img['diterima'] : 0),
				array('Jumlah (3)', isset($img['jumlah']) ? $img['jumlah'] : 0),
				array('Diputus (6–13)', isset($img['jumlah_laju_6_13']) ? $img['jumlah_laju_6_13'] : 0),
				array('Sisa akhir (14)', isset($img['sisa_akhir']) ? $img['sisa_akhir'] : 0),
			);
			?>
			<?php foreach ($cards as $c): ?>
				<div class="col-12 col-sm-6 col-md-4 col-xl">
					<div class="card card-soft">
						<div class="card-body">
							<div class="text-secondary small mb-1"><?= htmlspecialchars($c[0]); ?></div>
							<div class="display-6 fw-bold"><?= number_format((int)$c[1], 0, ',', '.'); ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row g-4">
			<div class="col-12 col-xl-8">
				<div class="card card-soft">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center mb-2">
							<h6 class="mb-0">Rekap Per Jenis Perkara</h6>
							<div class="text-muted small">Agustus 2025</div>
						</div>

						<div class="table-responsive">
							<table id="lipa-table" class="table table-striped table-hover align-middle">
								<thead class="sticky-th">
									<tr>
										<th rowspan="2" style="min-width:42px">No</th>
										<th rowspan="2" class="text-start" style="min-width:260px">Jenis Perkara</th>
										<th colspan="3">Banyaknya Perkara</th>
										<th colspan="8">Dicabut dan diputus bulan ini</th>
										<th rowspan="2">Jumlah<br />laju 6 s/d 13</th>
										<th rowspan="2">Sisa akhir<br />(5–14)</th>
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
									<?php
									$kategori = isset($kategori) ? $kategori : array();
									$rows = isset($rows) ? $rows : array();
									?>
									<?php foreach ($kategori as $i => $name):
										$r = isset($rows[$i]) && is_array($rows[$i]) ? $rows[$i] : array();
										for ($c = count($r); $c < 16; $c++) $r[$c] = 0; // guard 16 kolom
									?>
										<tr>
											<td class="text-center"><?= $i + 1; ?></td>
											<td><?= htmlspecialchars($name); ?></td>
											<?php for ($c = 0; $c < 16; $c++): ?>
												<td class="text-center"><?= $r[$c] ? number_format((int)$r[$c], 0, ',', '.') : '–'; ?></td>
											<?php endfor; ?>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot class="table-light">
									<tr class="fw-bold">
										<td></td>
										<td>JUMLAH</td>
										<?php
										$calc = isset($tot_calc) ? $tot_calc : array_fill(0, 16, 0);
										$img  = isset($tot_img)  ? $tot_img  : array();
										$cols = array(
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
										);
										foreach (array_values($cols) as $idx => $key) {
											$val = isset($img[$key]) ? $img[$key] : (isset($calc[$idx]) ? $calc[$idx] : 0);
											echo '<td class="text-center">' . ($val ? number_format((int)$val, 0, ',', '.') : '–') . '</td>';
										}
										?>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-xl-4">
				<div class="card card-soft mb-4">
					<div class="card-body">
						<h6 class="mb-3">Komposisi Perkara Diterima</h6>
						<canvas id="pieDiterima"></canvas>
					</div>
				</div>
				<div class="card card-soft">
					<div class="card-body">
						<h6 class="mb-3">Top 5 Perkara – Diputus (6–13)</h6>
						<canvas id="barDiputus"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
	<script>
		const names = <?= json_encode(isset($kategori) ? $kategori : array(), JSON_UNESCAPED_UNICODE); ?>;
		const rs = <?= json_encode(isset($rows) ? $rows : array(), JSON_UNESCAPED_UNICODE); ?>.map(r => {
			r = Array.isArray(r) ? r : [];
			while (r.length < 16) r.push(0);
			return r;
		});

		const diterima = rs.map(r => r[1]);
		const diputus = rs.map(r => r.slice(4, 12).reduce((a, b) => a + (+b || 0), 0));

		const diterimaFiltered = names.map((n, i) => ({
			label: n,
			val: diterima[i] || 0
		})).filter(x => x.val > 0);

		new DataTable('#lipa-table', {
			responsive: true,
			paging: false,
			searching: false,
			info: false,
			order: []
		});

		new Chart(document.getElementById('pieDiterima'), {
			type: 'pie',
			data: {
				labels: diterimaFiltered.map(x => x.label),
				datasets: [{
					data: diterimaFiltered.map(x => x.val)
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

		const idxs = rs.map((_, i) => i).sort((a, b) => diputus[b] - diputus[a]).slice(0, 5);
		new Chart(document.getElementById('barDiputus'), {
			type: 'bar',
			data: {
				labels: idxs.map(i => names[i]),
				datasets: [{
					label: 'Diputus (6–13)',
					data: idxs.map(i => diputus[i])
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

* - Menggunakan Bootstrap 5 + DataTables + Chart.js (via CDN)
* - Mendukung sticky header, zebra row, dan kartu ringkasan
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
			background: #f6f8fa;
		}

		.card-soft {
			border: 0;
			border-radius: 1rem;
			box-shadow: 0 6px 24px rgba(0, 0, 0, .06);
		}

		.sticky-th th {
			position: sticky;
			top: 0;
			z-index: 2;
			background: #e6f4ea;
		}

		.table thead th {
			vertical-align: middle;
			text-align: center;
			font-size: .9rem;
		}

		.table tbody td {
			font-size: .9rem;
		}

		.badge-chip {
			font-weight: 600;
			letter-spacing: .2px;
		}
	</style>
</head>

<body>
	<div class="container-fluid py-4">
		<div class="d-flex justify-content-between align-items-center mb-3">
			<h3 class="mb-0 fw-bold">LIPA 8 – Agustus 2025</h3>
			<span class="badge bg-success-subtle text-success border border-success-subtle badge-chip">Finalized</span>
		</div>

		<!-- Summary Cards -->
		<div class="row g-3 mb-4">
			<?php
			$tot = $tot_img ?? [];
			$cards = [
				['Sisa bulan lalu', $tot['sisa_lalu'] ?? 0],
				['Diterima bulan ini', $tot['diterima'] ?? 0],
				['Jumlah (3)', $tot['jumlah'] ?? 0],
				['Diputus (6–13)', $tot['jumlah_laju_6_13'] ?? 0],
				['Sisa akhir (14)', $tot['sisa_akhir'] ?? 0],
			];
			?>
			<?php foreach ($cards as $c): ?>
				<div class="col-12 col-sm-6 col-md-4 col-xl">
					<div class="card card-soft">
						<div class="card-body">
							<div class="text-secondary small mb-1"><?= htmlspecialchars($c[0]); ?></div>
							<div class="display-6 fw-bold"><?= number_format($c[1], 0, ',', '.'); ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="row g-4">
			<div class="col-12 col-xl-8">
				<div class="card card-soft">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center mb-2">
							<h6 class="mb-0">Rekap Per Jenis Perkara</h6>
							<div class="text-muted small">Agustus 2025</div>
						</div>
						<div class="table-responsive">
							<table id="lipa-table" class="table table-striped table-hover align-middle">
								<thead class="sticky-th">
									<tr>
										<th rowspan="2" style="min-width:42px">No</th>
										<th rowspan="2" class="text-start" style="min-width:260px">Jenis Perkara</th>
										<th colspan="3">Banyaknya Perkara</th>
										<th colspan="8">Dicabut dan diputus bulan ini</th>
										<th rowspan="2">Jumlah<br />laju 6 s/d 13</th>
										<th rowspan="2">Sisa akhir<br />(5–14)</th>
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
									<?php foreach ($kategori as $i => $name): $r = $rows[$i]; ?>
										<tr>
											<td class="text-center"><?= $i + 1; ?></td>
											<td><?= htmlspecialchars($name); ?></td>
											<?php for ($c = 0; $c < 16; $c++): ?>
												<td class="text-center"><?= $r[$c] ? number_format($r[$c], 0, ',', '.') : '–'; ?></td>
											<?php endfor; ?>
										</tr>
									<?php endforeach; ?>
								</tbody>
								<tfoot class="table-light">
									<tr class="fw-bold">
										<td></td>
										<td>JUMLAH</td>
										<?php
										// gunakan totals dari gambar jika ada, fallback ke kalkulasi
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
										foreach (array_values($cols) as $idx => $key) {
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

			<div class="col-12 col-xl-4">
				<div class="card card-soft mb-4">
					<div class="card-body">
						<h6 class="mb-3">Komposisi Perkara Diterima</h6>
						<canvas id="pieDiterima"></canvas>
					</div>
				</div>
				<div class="card card-soft">
					<div class="card-body">
						<h6 class="mb-3">Top 5 Perkara – Diputus (6–13)</h6>
						<canvas id="barDiputus"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
	<script>
		// Data untuk chart
		const names = <?= json_encode($kategori, JSON_UNESCAPED_UNICODE); ?>;
		const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE); ?>;

		// Diterima bulan ini (kolom index 1)
		const diterima = rows.map(r => r[1]);

		// Diputus = jumlah kolom 6..13 (index 4..11)
		const diputus = rows.map(r => r.slice(4, 12).reduce((a, b) => a + (+b || 0), 0));

		// TOP 5 untuk bar chart
		const idxs = Array.from(rows.keys()).sort((a, b) => diputus[b] - diputus[a]).slice(0, 5);
		const topLabels = idxs.map(i => names[i]);
		const topValues = idxs.map(i => diputus[i]);

		// Pie diterima – tampilkan hanya yg > 0 agar jelas
		const diterimaFiltered = names.map((n, i) => ({
			label: n,
			val: diterima[i]
		})).filter(x => x.val > 0);

		// Init charts
		new DataTable('#lipa-table', {
			responsive: true,
			paging: false,
			searching: false,
			info: false,
			order: []
		});

		new Chart(document.getElementById('pieDiterima'), {
			type: 'pie',
			data: {
				labels: diterimaFiltered.map(x => x.label),
				datasets: [{
					data: diterimaFiltered.map(x => x.val)
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
					data: topValues
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
