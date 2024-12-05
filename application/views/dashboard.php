<!-- Content Wrapper. Contains page content -->
<?php
date_default_timezone_set('Asia/Jakarta');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<?php
	// Existing code...

	// Add the new SQL query
	$query = $this->db->query("
        SELECT 
            COUNT(perkara.perkara_id) AS total_perkara,
            COUNT(perkara_efiling_id.perkara_id) AS total_perkara_ecourt,
            (COUNT(perkara_efiling_id.perkara_id) * 100.0 / COUNT(perkara.perkara_id)) AS persen_perkara_ecourt,
            (COUNT(perkara.perkara_id) - COUNT(perkara_efiling_id.perkara_id)) AS total_perkara_non_ecourt
        FROM 
            perkara
        LEFT JOIN 
            perkara_efiling_id ON perkara.perkara_id = perkara_efiling_id.perkara_id
        WHERE 
            YEAR(perkara.tanggal_pendaftaran) = YEAR(CURDATE())
    ");
	$result = $query->row();

	// Fetch the results
	$total_perkara = $result->total_perkara;
	$total_perkara_ecourt = $result->total_perkara_ecourt;
	$persen_perkara_ecourt = $result->persen_perkara_ecourt;
	$total_perkara_non_ecourt = $result->total_perkara_non_ecourt;
	?>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<?php
			$currentYear = date('Y');
			echo "<h4 style='text-align: center;'>Perkara Tahun : $currentYear</h4>";
			?>
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info rounded-box">
						<div class="inner">
							<h3><?php echo $total_perkara; ?></h3>
							<p>Total Perkara</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success rounded-box">
						<div class="inner">
							<h3><?php echo $total_perkara_ecourt; ?></h3>
							<p>Total Perkara e-Court</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning rounded-box">
						<div class="inner">
							<h3><?php echo number_format($persen_perkara_ecourt, 2); ?>%</h3>
							<p>Persen Perkara e-Court</p>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger rounded-box">
						<div class="inner">
							<h3><?php echo $total_perkara_non_ecourt; ?></h3>
							<p>Total Perkara Non e-Court</p>
						</div>
					</div>
				</div>
			</div>

			<!-- Add the chart -->
			<!-- Include Chart.js -->
			<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Statistik Perkara Non e-Court dan Perkara E-Court </h3>
						</div>
						<div class="card-body">
							<canvas id="perkaraChart"></canvas>
						</div>
					</div>
				</div>
			</div>

			<script>
				// JavaScript to render the chart
				var ctx = document.getElementById('perkaraChart').getContext('2d');
				var totalPerkaraEcourt = <?php echo $total_perkara_ecourt; ?>;
				var totalPerkaraNonEcourt = <?php echo $total_perkara_non_ecourt; ?>;

				console.log("Perkara e-Court: ", totalPerkaraEcourt);
				console.log("Perkara Non e-Court: ", totalPerkaraNonEcourt);

				var perkaraChart = new Chart(ctx, {
					type: 'pie',
					data: {
						labels: ['Perkara e-Court', 'Perkara Non e-Court'],
						datasets: [{
							data: [totalPerkaraEcourt, totalPerkaraNonEcourt],
							backgroundColor: ['#28a745', '#dc3545'],
							hoverBackgroundColor: ['#1e7e34', '#c82333'],
							borderColor: ['#fff', '#fff'],
							borderWidth: 2
						}]
					},
					options: {
						responsive: true,
						maintainAspectRatio: false,
						plugins: {
							legend: {
								display: true,
								position: 'bottom',
								labels: {
									font: {
										size: 14
									}
								}
							},
							tooltip: {
								callbacks: {
									label: function(tooltipItem) {
										return tooltipItem.label + ': ' + tooltipItem.raw + ' (' + (tooltipItem.raw * 100 / (totalPerkaraEcourt + totalPerkaraNonEcourt)).toFixed(2) + '%)';
									}
								}
							},
							datalabels: {
								formatter: function(value, context) {
									return (value * 100 / (totalPerkaraEcourt + totalPerkaraNonEcourt)).toFixed(2) + '%';
								},
								color: '#fff',
								font: {
									weight: 'bold',
									size: 14
								}
							}
						}
					},
					plugins: [ChartDataLabels]
				});
			</script>
			<style>
				.small-box {
					border-radius: 10px;
					box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
					transition: transform 0.3s ease-in-out;
				}

				.small-box:hover {
					transform: scale(1.05);
				}

				.small-box .inner h3 {
					font-size: 2.5rem;
					font-weight: bold;
				}

				.small-box .inner p {
					font-size: 1.2rem;
				}
			</style>

			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info rounded-box">
						<div class="inner">
							<?php
							$this->load->database();
							$query = $this->db->query('SELECT * FROM perkara');
							$currentYear = date('Y');
							$query = $this->db->query("SELECT * FROM perkara WHERE YEAR(tanggal_pendaftaran) = '$currentYear'");
							$row = $query->num_rows();
							echo '<h3>' . $row . '</h3>Perkara';
							?>
							<p>Diterima</p>
						</div>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success rounded-box">
						<div class="inner">
							<?php
							$this->load->database();
							$query = $this->db->query('SELECT * FROM perkara_putusan');
							$currentYear = date('Y');
							$query = $this->db->query("SELECT * FROM perkara_putusan WHERE YEAR(tanggal_putusan) = '$currentYear'");
							$row = $query->num_rows();
							echo '<h3>' . $row . '</h3>Perkara';
							?>
							<p>Putus</p>
						</div>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning rounded-box">
						<div class="inner">
							<?php
							$this->load->database();
							$query = $this->db->query('SELECT * FROM perkara_putusan');
							$currentYear = date('Y');
							$query = $this->db->query("SELECT * FROM perkara_putusan WHERE YEAR(tanggal_minutasi) = '$currentYear'");
							$row = $query->num_rows();
							echo '<h3>' . $row . '</h3>Perkara';
							?>
							<p>Minutasi</p>
						</div>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger rounded-box">
						<div class="inner">
							<?php
							$this->load->database();
							$query = $this->db->query('SELECT * FROM perkara');
							$currentYear = date('Y');
							$query = $this->db->query("SELECT * FROM perkara left join perkara_putusan on perkara.perkara_id = perkara_putusan.perkara_id where tanggal_putusan is null and year(tanggal_pendaftaran) = '$currentYear'");
							$row = $query->num_rows();
							echo '<h3>' . $row . '</h3>Perkara';
							?>
							<p>Sisa</p>
						</div>
					</div>
				</div>
			</div><!-- /.row -->

			<?php
			$this->load->database();
			$currentYear = date('Y');
			$currentMonth = date('m');
			$currentMonthName = date('F');
			$queries = [
				"SELECT * FROM perkara WHERE MONTH(tanggal_pendaftaran) = '$currentMonth' AND YEAR(tanggal_pendaftaran) = '$currentYear'",
				"SELECT * FROM perkara_putusan WHERE MONTH(tanggal_putusan) = '$currentMonth' AND YEAR(tanggal_putusan) = '$currentYear'",
				"SELECT * FROM perkara_putusan WHERE MONTH(tanggal_minutasi) = '$currentMonth' AND YEAR(tanggal_minutasi) = '$currentYear'",
				"SELECT * FROM perkara LEFT JOIN perkara_putusan ON perkara.perkara_id = perkara_putusan.perkara_id WHERE tanggal_putusan IS NULL AND MONTH(tanggal_pendaftaran) = '$currentMonth' AND YEAR(tanggal_pendaftaran) = '$currentYear'",
				"SELECT * FROM perkara INNER JOIN perkara_penetapan ON perkara.`perkara_id`=perkara_penetapan.`perkara_id` LEFT JOIN perkara_putusan ON perkara.`perkara_id` = perkara_putusan.`perkara_id` WHERE (tanggal_putusan IS NULL OR(tanggal_putusan > '$currentYear-$currentMonth-31')) AND tanggal_pendaftaran<='$currentYear-$currentMonth-31'"
			];
			$data = [];
			foreach ($queries as $query) {
				$result = $this->db->query($query);
				$data[] = $result->num_rows();
			}
			echo "<h5 style='text-align: center;'>Perkara Bulan $currentMonthName</h5>";
			?>
			<!-- Include Chart.js -->
			<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
			<canvas id="myChart" width="200" height="100"></canvas>
			<script>
				// Initialize a new Chart.js object
				var ctx = document.getElementById('myChart').getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ['Diterima', 'Putus', 'Minutasi', 'Sisa'],
						datasets: [{
							label: 'Perkara Bulan Ini',
							data: <?php echo json_encode($data); ?>,
							backgroundColor: [
								'rgba(54, 162, 235, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(255, 99, 132, 0.2)',
								'rgba(153, 102, 255, 0.2)'
							],
							borderColor: [
								'rgba(54, 162, 235, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(255, 99, 132, 1)',
								'rgba(153, 102, 255, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							y: {
								beginAtZero: true
							}
						}
					}
				});
			</script>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</body>

</html>
