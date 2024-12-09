<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTV Online Pengadilan Agama Amuntai Kelas IB</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
    <style>
        .container {
            margin-top: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 1000px;
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

        .center-text {
            text-align: center;
        }

        body {
            background-color: #f4f6f9;
        }

        .breadcrumb {
            background-color: #e9ecef;
        }

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

        .data-section {
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('template/new_header'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view('template/new_sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>CCTV Online</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">CCTV</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Data Perkara Section -->
                    <?php
                    $total_perkara = $perkaraData->total_perkara;
                    $total_perkara_ecourt = $perkaraData->total_perkara_ecourt;
                    $persen_perkara_ecourt = $perkaraData->persen_perkara_ecourt;
                    $total_perkara_non_ecourt = $perkaraData->total_perkara_non_ecourt;
                    $currentYear = date('Y');
                    ?>
                    <div class="header">
                        <img src="https://www.pa-amuntai.go.id/images/images/logo.png" alt="Logo" class="img-fluid">
                        <h5>CCTV Online Pengadilan Agama Amuntai Kelas IB</h5>
                    </div>
                    <div class="data-section">
                        <h5 style="text-align: center;">Perkara Tahun : <?php echo $currentYear; ?></h5>
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
                    </div>

                    <!-- Video Links Section -->
                    <div class="row">
                        <?php foreach ($links as $id => $link): ?>
                            <div class="col-md-4">
                                <div class="video-link">
                                    <h6 class="center-text" id="<?= $id ?>"><?= ucfirst(str_replace('_', ' ', $id)) ?></h6>
                                    <iframe id="video-frame-<?= $id ?>" src="<?= $link ?>" allowfullscreen></iframe>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Chart Section -->
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Statistik Perkara Non e-Court dan Perkara E-Court</h3>
                                </div>
                                <div class="card-body">
                                    <canvas id="perkaraChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
                    <script>
                        var ctx = document.getElementById('perkaraChart').getContext('2d');
                        var totalPerkaraEcourt = <?php echo $total_perkara_ecourt; ?>;
                        var totalPerkaraNonEcourt = <?php echo $total_perkara_non_ecourt; ?>;
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
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <?php $this->load->view('template/new_footer'); ?>
        <!-- /.footer -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>
 