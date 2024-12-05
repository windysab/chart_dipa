<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h5>Laporan LIPA 1</h5>
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



									<form action="<?php echo base_url() ?>index.php/Lipa1" method="POST">

										Laporan Bulan :
										<select name="lap_bulan" id="lap_bulan" required>
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
										<select name="lap_tahun" id='lap_tahun' required>
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

										<!-- /.card-header -->
										<div class="card-body">
											<table class="table table-bordered table-striped" id="example1">
												<thead>
													<tr>
														<th>No</th>
														<th>Nomor Perkara</th>
														<th>Kode Perkara</th>
														<th>Nama Majelis Hakim</th>
														<th>Nama PP</th>
														<th>Penerimaan</th>
														<th>Penetapan Majelis Hakim</th>
														<th>Penetapan Hari Sidang</th>
														<th>Sidang I</th>
														<th>Diputus</th>
														<th>Jenis Putusan</th>
														<th>Belum Diputus</th>
														<th>Status Pekerjaan</th>
														<th>Keterangan</th>
														<th>alamat gaib</th>
														<th>prodeo</th>
														<th>perkara ecourt</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													foreach ($datafilter as $item) : ?>
														<tr>
															<td><?php echo $no++ ?></td>
															<td><?php echo $item->nomor_perkara; ?></td>
															<td><?php echo $item->jenis_perkara_nama; ?></td>

															<td><?php
																$nama_hakim = $item->majelis_hakim_nama;
																$nama_hakim_array = explode('</br>', $nama_hakim);

																echo "Hakim Ketua: " . $nama_hakim_array[0] . "<br>";
																echo "Hakim Anggota 1: " . $nama_hakim_array[1] . "<br>";
																echo "Hakim Anggota 2: " . $nama_hakim_array[2];
																?></td>
															<td><?php echo str_replace("Panitera Pengganti:", "", $item->panitera_pengganti_text); ?></td>
															<td><?php echo $item->tanggal_pendaftaran; ?></td>
															<td><?php echo $item->penetapan_majelis_hakim; ?></td>
															<td><?php echo $item->penetapan_hari_sidang; ?></td>
															<td><?php echo $item->sidang_pertama; ?></td>
															<td><?php echo $item->tanggal_putusan; ?></td>
															<td><?php echo $item->amar; ?></td>
															<td>
																<?php
																if (!empty($item->tanggal_putusan)) {
																	echo "";
																} else {
																	echo $item->nomor_perkara;
																}
																?>
															</td>
															<td><?php echo $item->pekerjaan; ?></td>
															<td>
																<?php
																if (strpos($item->pekerjaan, 'PNS') !== false || strpos($item->pekerjaan, 'Pegawai Negeri Sipil') !== false) {
																	echo "* *";
																} elseif (strpos($item->pekerjaan, 'Pensiunan') !== false) {
																	echo "#";
																} else {
																	echo '';
																}
																?>
															</td>
															<td>
																<?php
																$alamat = $item->alamat_pihak2;
																if (strpos($alamat, "namun sekarang tidak diketahui lagi alamatnya dengan jelas dan pasti di wilayah Republik Indonesia") !== false) {
																	echo $alamat;
																}
																?>
															</td>
															<td><?php echo ($item->prodeo == 1) ? '#' : ''; ?></td>
															<td><?php echo $item->email_pihak1; ?></td>
														</tr>
													<?php endforeach; ?>

													<?php if (empty($result)) : ?>
														<!-- <tr>
															<td colspan="9" class="text-center">Tidak ada data yang tersedia</td>
														</tr> -->
													<?php endif; ?>
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