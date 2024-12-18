<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CCTV View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/cctv_view3.css'); ?>">
</head>

<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo base_url('assets/images/Logo PA Amuntai - Trans.png'); ?>" class="img-circle elevation-2" alt="Logo">
			<h5>Live CCTV PENGADILAN AGAMA AMUNTAI KELAS IB</h5>
		</div>
		<div class="row">
			<?php if (isset($links)) : ?>
				<?php foreach ($links as $name => $url): ?>
					<div class="col-md-4 col-sm-6">
						<div class="video-link">
							<h6><?php echo ucfirst(str_replace('_', ' ', $name)); ?></h6>
							<iframe src="<?php echo $url; ?>" allowfullscreen></iframe>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center mt-4">
				<h2>KEADAAN PERKARA S/D <?php echo date('F Y', strtotime('first day of last month')); ?></h2>
			</div>
		</div>
		<div class="row total-perkara-container text-center">
			<div class="col-md-3 col-sm-6">
				<div class="circle-card total-perkara">
					<p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></p>
				</div>
				<p class="title">Total Perkara</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="circle-card total-perkara-ecourt">
					<p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_ecourt, ENT_QUOTES, 'UTF-8'); ?></p>
				</div>
				<p class="title">Total Perkara e-Court</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="circle-card persen-perkara-ecourt">
					<p class="value"><?php echo number_format($total_perkara_data->persen_perkara_ecourt) . '%'; ?></p>
				</div>
				<p class="title">Persentase Perkara e-Court</p>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="circle-card total-perkara-non-ecourt">
					<p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_non_ecourt, ENT_QUOTES, 'UTF-8'); ?></p>
				</div>
				<p class="title">Total Perkara Non e-Court</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 table-container">
				<h5>Chart Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<div class="card-body">
					<div class="chart">
						<canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 chart-container">
				<h5>Chart Penyelesaian Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<div class="card-body">
					<div class="chart">
						<canvas id="mediasiChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center mt-4">
			<div class="col-md-6">
				<h5>Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<h5><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?> Perkara </h5>
			</div>
			<div class="col-md-6">
				<h5>Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<h5><?php echo array_sum($mediasi_data); ?> Perkara</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 table-container">
				<h5>Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<table class="table table-bordered table-hover sql-table">
					<thead>
						<tr>
							<th>Jenis Perkara</th>
							<th>Jumlah Perkara</th>
							<th>Persentase</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$previous_month = date('Y-m', strtotime('first day of last month'));
						$filtered_chart_data = array_filter($chart_data, function ($data) use ($previous_month) {
							$data_month = isset($data->tanggal_pendaftaran) ? date('Y-m', strtotime($data->tanggal_pendaftaran)) : '';
							return $data_month == $previous_month;
						});

						$grouped_data = [];
						foreach ($filtered_chart_data as $data) {
							if (!isset($grouped_data[$data->jenis_perkara_nama])) {
								$grouped_data[$data->jenis_perkara_nama] = 0;
							}
							$grouped_data[$data->jenis_perkara_nama] += $data->jumlah_perkara;
						}

						$total_perkara = array_sum($grouped_data);
						foreach ($grouped_data as $jenis_perkara_nama => $jumlah_perkara): ?>
							<tr>
								<td><?php echo htmlspecialchars($jenis_perkara_nama, ENT_QUOTES, 'UTF-8'); ?></td>
								<td><?php echo htmlspecialchars($jumlah_perkara, ENT_QUOTES, 'UTF-8'); ?></td>
								<td>
									<?php
									if ($total_perkara > 0) {
										echo number_format(($jumlah_perkara / $total_perkara * 100), 2) . '%';
									} else {
										echo '0.00%';
									}
									?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<div class="col-md-6 table-container">
				<h5>Data Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<table class="table table-bordered table-hover sql-table">
					<thead>
						<tr>
							<th>Hasil Mediasi</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Tidak Dapat Dilaksanakan</td>
							<td><?php echo $mediasi_data['D']; ?></td>
						</tr>
						<tr>
							<td>Tidak Berhasil</td>
							<td><?php echo $mediasi_data['T']; ?></td>
						</tr>
						<tr>
							<td>Berhasil Sebagian</td>
							<td><?php echo $mediasi_data['S']; ?></td>
						</tr>
						<tr>
							<td>Berhasil Dengan Pencabutan</td>
							<td><?php echo $mediasi_data['Y2']; ?></td>
						</tr>
						<tr>
							<td>Berhasil Dengan Akta Perdamaian</td>
							<td><?php echo $mediasi_data['Y1']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 chart-container">
				<h5>Penanganan Perkara E-court Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
				<div class="card-body">
					<div class="chart">
						<canvas id="barChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
					</div>
				</div>
			</div>
		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
	<script src="<?php echo base_url('assets/js/cctv_view3.js'); ?>"></script>
</body>

</html>