<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>PERKARA</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Beranda</a></li>
						<li class="breadcrumb-item active">PERKARA BULAN</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- Year and Month Selection Form -->
				<div class="col-md-12">
					<form method="GET" action="">
						<div class="form-row">
							<div class="form-group col-md-1">
								<label for="year">Tahun:</label>
								<select id="year" name="year" class="form-control">
									<?php for ($i = 2020; $i <= date('Y'); $i++): ?>
										<option value="<?= $i ?>" <?= isset($_GET['year']) && $_GET['year'] == $i ? 'selected' : '' ?>><?= $i ?></option>
									<?php endfor; ?>
								</select>
							</div>
							<div class="form-group col-md-1">
								<label for="month">Bulan:</label>
								<select id="month" name="month" class="form-control">
									<?php for ($i = 1; $i <= 12; $i++): ?>
										<option value="<?= $i ?>" <?= isset($_GET['month']) && $_GET['month'] == $i ? 'selected' : '' ?>><?= date('F', mktime(0, 0, 0, $i, 10)) ?></option>
									<?php endfor; ?>
								</select>
							</div>
						</div>

						<button type="submit" class="btn btn-primary mb-3">Cari</button>

					</form>
				</div>
				<!-- Chart Column -->
				<div class="col-md-6">
					<!-- DONUT CHART -->
					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title">STATISTIK PERKARA</h3>
							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse">
									<i class="fas fa-minus"></i>
								</button>
								<button type="button" class="btn btn-tool" data-card-widget="remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<div class="card-body">
							<div class="chart">
								<canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
							</div>
						</div>
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col (LEFT) -->

				<div class="col-md-6">
					<!-- TABLE -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Tabel Perkara</h3>
						</div>
						<div class="card-body">
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
									$jumlah_perkara_column = array_map(function ($data) {
										return $data->jumlah_perkara;
									}, $chart_data);
									$total_perkara = array_sum($jumlah_perkara_column);
									foreach ($chart_data as $data): ?>
										<tr>
											<td><?php echo $data->jenis_perkara_nama; ?></td>
											<td><?php echo $data->jumlah_perkara; ?></td>
											<td>
												<?php
												if ($total_perkara > 0) {
													echo number_format(($data->jumlah_perkara / $total_perkara * 100), 2) . '%';
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
					</div>
					<!-- /.card -->
				</div>

				<style>
					.sql-table {
						width: 100%;
						border-collapse: collapse;
						font-family: 'Courier New', Courier, monospace;
					}

					.sql-table th,
					.sql-table td {
						border: 1px solid #ddd;
						padding: 8px;
						text-align: left;
					}

					.sql-table th {
						background-color: #f2f2f2;
						color: #333;
					}

					.sql-table tr:nth-child(even) {
						background-color: #f9f9f9;
					}

					.sql-table tr:hover {
						background-color: #ddd;
					}

					.sql-table th,
					.sql-table td {
						border-bottom: 1px solid #ddd;
					}

					.sql-table th {
						padding-top: 12px;
						padding-bottom: 12px;
						background-color: #4CAF50;
						color: white;
					}
				</style>
			</div>
		</div>
	</section>
</div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- ChartJS Plugin Datalabels -->
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">

<!-- Custom CSS for highlighting table rows -->
<style>
	.highlight {
		background-color: yellow !important;
	}

	.table-hover tbody tr:hover {
		background-color: #f5f5f5;
	}
</style>

<script>
	$(function() {
		var donutChartCanvas = $('#donutChart').get(0).getContext('2d');
		var donutData = {
			labels: [<?php foreach ($chart_data as $data) {
							echo '"' . $data->jenis_perkara_nama . '",';
						} ?>],
			datasets: [{
				data: [<?php foreach ($chart_data as $data) {
							echo $data->jumlah_perkara . ',';
						} ?>],
				backgroundColor: [
					'#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#3b8bba'
				],
			}]
		};
		var donutOptions = {
			maintainAspectRatio: false,
			responsive: true,
			animation: {
				animateScale: true,
				animateRotate: true
			},
			plugins: {
				datalabels: {
					display: true,
					formatter: (value, ctx) => {
						let total = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
						let percentage = ((value / total) * 100).toFixed(2) + '%';
						let label = ctx.chart.data.labels[ctx.dataIndex];
						return `${label}: ${value} (${percentage})`;
					},
					color: '#FFFFFF',
					anchor: 'end',
					align: 'start',
					offset: -10,
					borderWidth: 2,
					borderColor: '#000',
					borderRadius: 4,
					backgroundColor: '#000'
				},
				tooltip: {
					enabled: true,
					callbacks: {
						label: function(tooltipItem) {
							let total = tooltipItem.dataset.data.reduce((a, b) => a + b, 0);
							let value = tooltipItem.raw;
							let percentage = ((value / total) * 100).toFixed(2) + '%';
							return `${tooltipItem.label}: ${value} (${percentage})`;
						}
					}
				}
			}
		};
		var donutChart = new Chart(donutChartCanvas, {
			type: 'doughnut',
			data: donutData,
			options: donutOptions
		});

		$('#donutChart').on('mousemove', function(evt) {
			var activePoints = donutChart.getElementsAtEventForMode(evt, 'nearest', {
				intersect: true
			}, false);
			if (activePoints.length > 0) {
				var index = activePoints[0].index;
				var label = donutChart.data.labels[index];
				var color = donutChart.data.datasets[0].backgroundColor[index];
				if (label && color) {
					$('table tbody tr').removeClass('highlight').css('background-color', '');
					$('table tbody tr').each(function() {
						if ($(this).find('td:first').text().trim() === label.trim()) {
							$(this).css('background-color', color);
						}
					});
				}
			} else {
				$('table tbody tr').removeClass('highlight').css('background-color', '');
			}
		});

	});
</script>
