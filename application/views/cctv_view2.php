<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CCTV View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 20px;
		}

		.header {
			text-align: center;
			margin-bottom: 20px;
		}

		.header img {
			width: 100%;
			height: auto;
			margin-bottom: 10px;
		}

		.header h5 {
			font-size: 2rem;
			font-weight: bold;
		}

		.video-link {
			background-color: #ffffff;
			border: 1px solid #dee2e6;
			border-radius: 5px;
			padding: 15px;
			margin-bottom: 20px;
			text-align: center;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			transition: transform 0.3s;
		}

		.video-link:hover {
			transform: scale(1.05);
		}

		.video-link h6 {
			margin-bottom: 10px;
			font-weight: bold;
		}

		.video-link iframe {
			width: 100%;
			height: 200px;
			border: none;
		}

		.chart-container {
			margin-top: 40px;
		}

		.chart-container h5 {
			text-align: center;
			margin-bottom: 20px;
		}

		.table-container {
			margin-top: 40px;
		}

		.table-container h5 {
			text-align: center;
			margin-bottom: 20px;
		}

		.table-container .table {
			background-color: #ffffff;
			border-radius: 5px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			overflow: hidden;
		}

		.table-container .table th,
		.table-container .table td {
			text-align: center;
			vertical-align: middle;
			padding: 15px;
		}

		.table-container .table th {
			background-color: #f8f9fa;
			font-weight: bold;
			color: #333;
		}

		.table-container .table tbody tr:nth-child(odd) {
			background-color: #f2f2f2;
		}

		.table-container .table tbody tr:hover {
			background-color: #e9ecef;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="header">
			<img src="path/to/your/logo.png" alt="Logo">
			<h5>Live CCTV PENGADILAN AGAMA AMUNTAI KELAS IB</h5>
		</div>
		<div class="row">
			<?php foreach ($links as $name => $url): ?>
				<div class="col-md-4">
					<div class="video-link">
						<h6><?php echo ucfirst(str_replace('_', ' ', $name)); ?></h6>
						<iframe src="<?php echo $url; ?>" allowfullscreen></iframe>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row">
			<div class="col-md-6 chart-container">
				<h5>Chart Data Perkara Bulan Lalu</h5>
				<div class="card-body">
					<div class="chart">
						<canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 table-container">
				<h5>Data Perkara Bulan Lalu</h5>
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

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
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
				labels: [<?php foreach ($grouped_data as $jenis_perkara_nama => $jumlah_perkara) {
								echo '"' . $jenis_perkara_nama . '",';
							} ?>],
				datasets: [{
					data: [<?php foreach ($grouped_data as $jumlah_perkara) {
								echo $jumlah_perkara . ',';
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
</body>

</html>