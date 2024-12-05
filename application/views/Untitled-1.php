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



										<div class="card-body">
											<?php
											$no = 1;
											foreach ($datafilter as $item) : ?>
												<table class="table table-bordered table-striped" id="example<?php echo $no; ?>">
													<tbody>
														<tr>
															<th>No</th>
															<td><?php echo $no++; ?></td>
														</tr>
														<tr>
															<th>Nomor Perkara</th>
															<td><?php echo $item->nomor_perkara; ?></td>
														</tr>
														<tr>
															<th>Kode Perkara</th>
															<td><?php echo $item->jenis_perkara_nama; ?></td>
														</tr>
														<tr>
															<th>Majelis Hakim</th>
															<td><?php echo $item->majelis_hakim_nama; ?></td>
														</tr>
														<tr>
															<th>Panitera Pengganti</th>
															<td><?php echo $item->panitera_pengganti_text; ?></td>
														</tr>
														<tr>
															<th>Tanggal Pendaftaran</th>
															<td><?php echo $item->tanggal_pendaftaran; ?></td>
														</tr>
														<tr>
															<th>Penetapan Majelis Hakim</th>
															<td><?php echo $item->penetapan_majelis_hakim; ?></td>
														</tr>
														<tr>
															<th>Penetapan Hari Sidang</th>
															<td><?php echo $item->penetapan_hari_sidang; ?></td>
														</tr>
														<tr>
															<th>Sidang Pertama</th>
															<td><?php echo $item->sidang_pertama; ?></td>
														</tr>
														<tr>
															<th>Tanggal Putusan</th>
															<td><?php echo $item->tanggal_putusan; ?></td>
														</tr>
														<tr>
															<th>Amar Putusan</th>
															<td><?php echo $item->amar; ?></td>
														</tr>
														<tr>
															<th>Pekerjaan</th>
															<td><?php echo $item->pekerjaan; ?></td>
														</tr>
														<tr>
															<th>Alamat Pihak 2</th>
															<td><?php echo $item->alamat_pihak2; ?></td>
														</tr>
														<tr>
															<th>Prodeo</th>
															<td><?php echo $item->prodeo; ?></td>
														</tr>
														<tr>
															<th>Email Pihak 1</th>
															<td><?php echo $item->email_pihak1; ?></td>
														</tr>


													</tbody>
												</table>
											<?php endforeach; ?>
										</div>