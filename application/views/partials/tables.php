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
                    <td>Berhasil Sebagian</td>
                    <td><?php echo $mediasi_data['S']; ?></td>
                </tr>
                <tr>
                    <td>Tidak Berhasil</td>
                    <td><?php echo $mediasi_data['T']; ?></td>
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
