<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<title><?= $judul ?> - <?= $periode ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-light">
	<div class="container my-4">

		<!-- Header -->
		<div class="text-center mb-4">
			<h2 class="fw-bold text-success"><?= $judul ?></h2>
			<h5 class="text-muted"><?= $subjudul ?></h5>
			<h6 class="fw-semibold"><?= $periode ?></h6>
		</div>

		<!-- Summary Cards -->
		<div class="row text-center mb-4">
			<div class="col-md-3 mb-2">
				<div class="card shadow-sm p-3">
					<h6>Total Penerimaan</h6>
					<h4 class="text-success">Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></h4>
				</div>
			</div>
			<div class="col-md-3 mb-2">
				<div class="card shadow-sm p-3">
					<h6>Total Pengeluaran</h6>
					<h4 class="text-danger">Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></h4>
				</div>
			</div>
			<div class="col-md-3 mb-2">
				<div class="card shadow-sm p-3">
					<h6>Saldo Akhir</h6>
					<h4 class="text-primary">Rp <?= number_format($saldo_akhir, 0, ',', '.') ?></h4>
				</div>
			</div>
			<div class="col-md-3 mb-2">
				<div class="card shadow-sm p-3">
					<h6>Perkara Masuk</h6>
					<h4 class="text-warning"><?= $perkara_masuk ?></h4>
				</div>
			</div>
		</div>

		<!-- Tabel Rincian -->
		<div class="card shadow-sm p-4 mb-4">
			<h5 class="mb-3">Laporan Keuangan Perkara Agustus 2025</h5>
			<table class="table table-bordered table-striped">
				<thead class="table-success text-center">
					<tr>
						<th>No</th>
						<th>Uraian</th>
						<th>Penerimaan (Rp)</th>
						<th>Pengeluaran (Rp)</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($laporan as $r): ?>
						<tr>
							<td class="text-center"><?= $no++ ?></td>
							<td><?= $r['uraian'] ?></td>
							<td class="text-end"><?= $r['penerimaan'] ? number_format($r['penerimaan'], 0, ',', '.') : '-' ?></td>
							<td class="text-end"><?= $r['pengeluaran'] ? number_format($r['pengeluaran'], 0, ',', '.') : '-' ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<!-- Charts -->
		<div class="row mb-4">
			<div class="col-md-6">
				<div class="card shadow-sm p-3">
					<h6 class="text-center">Perbandingan Penerimaan & Pengeluaran</h6>
					<canvas id="barChart"></canvas>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card shadow-sm p-3">
					<h6 class="text-center">Distribusi Pengeluaran</h6>
					<canvas id="pieChart"></canvas>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<div class="row">
			<div class="col-md-6">
				<div class="card shadow-sm p-3">
					<h6>Catatan Perkara</h6>
					<ul>
						<li>Perkara Masuk: <?= $perkara_masuk ?> perkara</li>
						<li>Perkara Putus: 98 perkara (contoh)</li>
						<li>Prodeo: 3 perkara</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card shadow-sm p-3 text-center">
					<h6>Pengesahan</h6>
					<p>AmuntaI, 01 September 2025</p>
					<div class="row">
						<div class="col">Ketua<br><br><br><strong>Bahrul Maji, S.H.I.</strong></div>
						<div class="col">Panitera<br><br><br><strong>H. Ahmad Ramli, S.H.</strong></div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script>
		// Bar Chart
		new Chart(document.getElementById('barChart'), {
			type: 'bar',
			data: {
				labels: <?= json_encode($bulan) ?>,
				datasets: [{
						label: 'Penerimaan',
						data: <?= json_encode($penerimaan_bulanan) ?>,
						backgroundColor: 'rgba(16, 185, 129, 0.7)'
					},
					{
						label: 'Pengeluaran',
						data: <?= json_encode($pengeluaran_bulanan) ?>,
						backgroundColor: 'rgba(234, 88, 12, 0.7)'
					}
				]
			},
			options: {
				responsive: true,
				plugins: {
					legend: {
						position: 'top'
					}
				}
			}
		});

		// Pie Chart
		new Chart(document.getElementById('pieChart'), {
			type: 'pie',
			data: {
				labels: <?= json_encode(array_column($laporan, 'uraian')) ?>,
				datasets: [{
					data: <?= json_encode(array_column($laporan, 'pengeluaran')) ?>,
					backgroundColor: [
						'#10b981', '#f87171', '#60a5fa', '#fbbf24', '#34d399', '#a78bfa', '#f472b6', '#facc15', '#4ade80', '#fb923c', '#22d3ee'
					]
				}]
			}
		});
	</script>
</body>

</html>
