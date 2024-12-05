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

									<form action="<?php echo base_url() ?>index.php/Data_Tamplate" method="POST">
										<div class="row">
											<div class="form-group col-md-3">
												<input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" placeholder="Masukkan Nomor Perkara">

											</div>
											<div class="col-md-3 align-self-end">
												<input class="btn btn-primary" type="submit" name="btn" value="Tampilkan" />
											</div>
											<div class="col-md-3 align-self-end">
												<a href="" id="export_excel" class="btn btn-success">Export to Excel</a>
											</div>
										</div>

										<!-- /.card-header -->
										<div class="card-body">
											<?php

											foreach ($datafilter as $item) : ?>
												<table class="table table-bordered table-striped">
													<thead>
														<tr>
															<th colspan="2">JENIS PERKARA</th>
															<th colspan="3">NOMOR: <?php echo $item->nomor_perkara; ?></th>

														</tr>
														<tr>
															<th>NO.</th>
															<th colspan="2">URAIAN</th>
															<th>TANGGAL</th>
															<th>KET.</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Surat Gugatan/ Permohonan Diterima
															<td>MEJA I</td>
															<td><?php echo date('d-m-Y', strtotime($item->tanggal_pendaftaran)); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>2</td>
															<td>Slip Setoran dari Bank / SKUM</td>
															<td>MEJA / KASIR</td>
															
															<td><?php echo date('d-m-Y', strtotime($item->tanggal_transaksi)); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>3</td>
															<td>Dicatat Dalam Registrasi</td>
															<td>MEJA II</td>
															<td><?php echo date('d-m-Y', strtotime($item->tanggal_pendaftaran)); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>
																4
															</td>
															<td>PMH</td>
															<td></td>
															<td><?php echo date('d-m-Y', strtotime($item->penetapan_majelis_hakim)); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>5</td>
															<td>Hakim Ketua</td>
															<td></td>
															<td>
																<?php
																$lines = explode("</br>", $item->majelis_hakim_text);
																if (isset($lines[0])) {
																	$result = str_replace("Hakim Ketua: ", "", trim($lines[0]));
																	echo $result;
																}
																?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>6</td>
															<td>Hakim Anggota I</td>
															<td></td>
															<td>
																<?php
																$lines = explode("</br>", $item->majelis_hakim_text);
																if (isset($lines[1])) {
																	$result = str_replace("Hakim Anggota 1:", "", trim($lines[1]));
																	echo $result;
																}
																?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>7</td>
															<td>Hakim Anggota II</td>
															<td></td>
															<td>
																<?php
																$lines = explode("</br>", $item->majelis_hakim_text);
																if (isset($lines[2])) {
																	$result = str_replace("Hakim Anggota 2:", "", trim($lines[2]));
																	echo $result;
																}
																?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>8</td>
															<td>Panitera Pengganti</td>
															<td></td>
															<td><?php echo str_replace("Panitera Pengganti:", "", $item->panitera_pengganti_text); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>9</td>
															<td>Jurusita Pengganti</td>
															<td></td>

															<td><?php echo str_replace("Juru Sita Pengganti:", "", $item->jurusita_text); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>10</td>
															<td>PHS</td>
															<td></td>
															<td><?php echo date('d-m-Y', strtotime($item->penetapan_hari_sidang)); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>11</td>
															<td>Sidang Pertama</td>
															<td></td>
															<td><?php echo date('d-m-Y', strtotime($item->sidang_pertama)); ?></td>
															<td></td>
														</tr>
														<tr>
															<td>12</td>
															<td>Hakim Mediasi</td>
															<td></td>
															<td><?php echo $item->mediator_text; ?></td>
															<td></td>
														</tr>
														<tr>
															<td>13</td>
															<td>Putus / Cabut / Gugur</td>
															<td></td>
															<td>
																<?php
																if ($item->amar == 'Dikabulkan') {
																	echo 'Putus';
																} elseif ($item->amar == 'Dicabut') {
																	echo 'Cabut';
																} elseif ($item->amar == 'Dinyatakan Gugur') {
																	echo 'Gugur';
																} else {
																	echo $item->amar; // default case
																}
																?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>14</td>
															<td>Penyebab Perceraian</td>
															<td></td>
															<td><?php echo $item->faktor_perceraian; ?></td>
															<td></td>
														</tr>
														<tr>
															<td>15</td>
															<td>Jumlah Biaya</td>
															<td></td>
															<td>
																<?php
																echo "Rp. " . number_format($item->jumlah_biaya, 2, ',', '.');
																?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>16</td>
															<td>Minutasi</td>
															<td></td>
															<td>
																<?php echo date('d-m-Y', strtotime($item->tanggal_minutasi)); ?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>17</td>
															<td>Pemberitahuan Putusan</td>
															<td>masih salah</td>
															<td>
																<?php echo date('d-m-Y', strtotime($item->tanggal_minutasi)); ?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>18</td>
															<td>BHT</td>
															<td></td>
															<td>
																<?php echo date('d-m-Y', strtotime($item->tanggal_bht)); ?>
															</td>
															<td></td>
														</tr>

														<tr>
															<td>19</td>
															<td>PHS IKRAR</td>
															<td></td>
															
															<td>
																<?php echo ($item->tgl_ikrar_talak != null && $item->tgl_ikrar_talak != '0000-00-00') ? date('d-m-Y', strtotime($item->tanggal_penetapan_sidang_ikrar)) : ''; ?>
															</td>
															<td></td>
														</tr>
														<tr>
															<td>20</td>
															<td>IKRAR</td>
															<td></td>
															<td>
																<?php echo ($item->tgl_ikrar_talak != null && $item->tgl_ikrar_talak != '0000-00-00') ? date('d-m-Y', strtotime($item->tgl_ikrar_talak)) : ''; ?>
															</td>
															<td></td>
														</tr>

														<tr>
															<td>21</td>
															<td>No. Akta Cerai</td>
															<td></td>
															<td><?php echo $item->nomor_akta_cerai; ?></td>
															<td></td>
														</tr>


														<!-- Add more rows as needed -->
													</tbody>
												</table>
											<?php endforeach; ?>
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



</body>

</html>
