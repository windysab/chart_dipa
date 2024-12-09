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
            width: 1000px; /* Adjusted the width to make the logo larger */
            height: auto;
            margin-bottom: 10px;
        }
        .header h5 {
            font-size: 2rem; /* Adjusted the font size to make the title larger */
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
                    <div class="header">
                        <img src="https://www.pa-amuntai.go.id/images/images/logo.png" alt="Logo" class="img-fluid">
                        <h5>CCTV Online Pengadilan Agama Amuntai Kelas IB</h5>
                    </div>
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
    <!-- Custom Script -->
    <script>
        <?php foreach ($links as $id => $link): ?>
            document.getElementById('<?= $id ?>').addEventListener('mouseover', function() {
                document.getElementById('video-frame-<?= $id ?>').src = '<?= $link ?>';
            });
        <?php endforeach; ?>
    </script>
</body>
</html>
