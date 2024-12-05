<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Laporan E-Court</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">#</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <form action="<?php echo base_url()?>index.php/Ecourt" method="POST" >
                Jenis Perkara : 
                <select name="jenis_perkara" required="">
                    <option value="Pdt.G" <?php echo (isset($_POST['jenis_perkara']) && $_POST['jenis_perkara'] === 'Pdt.G') ? 'selected' : ''; ?>>Pdt.G</option>
                    <option value="Pdt.P" <?php echo (isset($_POST['jenis_perkara']) && $_POST['jenis_perkara'] === 'Pdt.P') ? 'selected' : ''; ?>>Pdt.P</option>
                </select>
                Laporan Bulan :
                <select name="lap_bulan" required="">
                    <option value="01" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '01') ? 'selected' : ''; ?>>Januari</option>
                    <option value="02" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '02') ? 'selected' : ''; ?>>Februari</option>
                    <option value="03" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '03') ? 'selected' : ''; ?>>Maret</option>
                    <option value="04" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '04') ? 'selected' : ''; ?>>April</option>
                    <option value="05" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '05') ? 'selected' : ''; ?>>Mei</option>
                    <option value="06" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '06') ? 'selected' : ''; ?>>Juni</option>
                    <option value="07" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '07') ? 'selected' : ''; ?>>Juli</option>
                    <option value="08" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '08') ? 'selected' : ''; ?>>Agustus</option>
                    <option value="09" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '09') ? 'selected' : ''; ?>>September</option>
                    <option value="10" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '10') ? 'selected' : ''; ?>>Oktober</option>
                    <option value="11" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '11') ? 'selected' : ''; ?>>Nopember</option>
                    <option value="12" <?php echo (isset($_POST['lap_bulan']) && $_POST['lap_bulan'] === '12') ? 'selected' : ''; ?>>Desember</option>
                </select>
                Tahun :
                <select name="lap_tahun" required="">
                    <option value="2016" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2016') ? 'selected' : ''; ?>>2016</option>
                    <option value="2017" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2017') ? 'selected' : ''; ?>>2017</option>
                    <option value="2018" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2018') ? 'selected' : ''; ?>>2018</option>
                    <option value="2019" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2019') ? 'selected' : ''; ?>>2019</option>
                    <option value="2020" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2020') ? 'selected' : ''; ?>>2020</option>
                    <option value="2021" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2021') ? 'selected' : ''; ?>>2021</option>
                    <option value="2022" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2022') ? 'selected' : ''; ?>>2022</option>
                    <option value="2023" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2023') ? 'selected' : ''; ?>>2023</option>
                    <option value="2024" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2024') ? 'selected' : ''; ?>>2024</option>
                    <option value="2025" <?php echo (isset($_POST['lap_tahun']) && $_POST['lap_tahun'] === '2025') ? 'selected' : ''; ?>>2025</option>
                </select>
                <input class="btn btn-primary" type="submit" name="btn" value="Tampilkan" />
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped" id="example1">
                  <thead>
                  <tr>
                    <th>NOMOR</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>JENIS PERKARA</th>
                    <th>NOMOR PERKARA</th>
                    <th>TANGGAL</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($datafilter as $row ) : ?>
                  <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $row->nama_pihak?></td>
                    <td><?php echo $row->email?></td>
                    <td><?php echo $row->jenis_perkara_nama?></td>
                    <td><?php echo $row->nomor_perkara?></td>
                    <td><?php echo $row->tanggal_pendaftaran?></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->




<!-- Page specific script -->
<!-- <script>
  $(function () {
    $("#DataTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#DataTable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> 
 --></body>
</html>
