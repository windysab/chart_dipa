<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .table-container {
            width: 100%;
            overflow-x: auto;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .custom-table th,
        .custom-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .custom-table th {
            background-color: #009879;
            color: #ffffff;
            font-weight: bold;
        }

        .custom-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .custom-table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .custom-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .custom-table tfoot {
            background-color: #009879;
            color: #ffffff;
            font-weight: bold;
        }

        .custom-table tfoot td {
            padding: 12px 15px;
        }

        .signature-section {
            margin-top: 30px;
            text-align: right;
            font-size: 14px;
        }

        .signature-section p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <table class="custom-table">
            <thead>
                <tr>
                    <th colspan="18">LAPORAN PERKARA DITERIMA, DICABUT DAN DIPUTUS MENURUT JENIS PERKARA</th>
                </tr>
                <tr>
                    <th colspan="18">PADA PENGADILAN AGAMA AMUNTAI</th>
                </tr>
                <tr>
                    <th colspan="18">BULAN JANUARI 2025</th>
                </tr>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Jenis Perkara</th>
                    <th colspan="3">Banyaknya Perkara</th>
                    <th colspan="7">Dicabut dan Diputus Bulan Ini</th>
                    <th rowspan="2">Sisa Akhir</th>
                    <th rowspan="2">Banding</th>
                    <th rowspan="2">Kasasi</th>
                    <th rowspan="2">PK</th>
                    <th rowspan="2">Ket</th>
                </tr>
                <tr>
                    <th>Sisa Bulan Lalu</th>
                    <th>Diterima Bulan Ini</th>
                    <th>Jumlah</th>
                    <th>Dicabut</th>
                    <th>Dikabulkan</th>
                    <th>Ditolak</th>
                    <th>Tidak Diterima</th>
                    <th>Digugurkan</th>
                    <th>Dicoret dari Register</th>
                    <th>Jumlah (6 s/d 11)</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total_sisa_lalu = 0;
                $total_diterima_bulan_ini = 0;
                $total_jumlah = 0;
                $total_dicabut = 0;
                $total_dikabulkan = 0;
                $total_ditolak = 0;
                $total_tidak_dapat_diterima = 0;
                $total_digugurkan = 0;
                $total_dicoret_dari_register = 0;
                $total_jumlah_6_11 = 0;
                $total_sisa_akhir = 0;

                foreach ($report_data as $index => $row): 
                    $jumlah = $row['sisa_lalu'] + $row['diterima_bulan_ini'];
                    $jumlah_6_11 = $row['dicabut'] + $row['dikabulkan'] + $row['ditolak'] + $row['tidak_dapat_diterima'] + $row['digugurkan'] + $row['dicoret_dari_register'];
                    $sisa_akhir = $jumlah - $jumlah_6_11;

                    $total_sisa_lalu += $row['sisa_lalu'];
                    $total_diterima_bulan_ini += $row['diterima_bulan_ini'];
                    $total_jumlah += $jumlah;
                    $total_dicabut += $row['dicabut'];
                    $total_dikabulkan += $row['dikabulkan'];
                    $total_ditolak += $row['ditolak'];
                    $total_tidak_dapat_diterima += $row['tidak_dapat_diterima'];
                    $total_digugurkan += $row['digugurkan'];
                    $total_dicoret_dari_register += $row['dicoret_dari_register'];
                    $total_jumlah_6_11 += $jumlah_6_11;
                    $total_sisa_akhir += $sisa_akhir;
                ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $row['jenis_perkara'] ?></td>
                    <td><?= $row['sisa_lalu'] ?></td>
                    <td><?= $row['diterima_bulan_ini'] ?></td>
                    <td><?= $jumlah ?></td>
                    <td><?= $row['dicabut'] ?></td>
                    <td><?= $row['dikabulkan'] ?></td>
                    <td><?= $row['ditolak'] ?></td>
                    <td><?= $row['tidak_dapat_diterima'] ?></td>
                    <td><?= $row['digugurkan'] ?></td>
                    <td><?= $row['dicoret_dari_register'] ?></td>
                    <td><?= $jumlah_6_11 ?></td>
                    <td><?= $sisa_akhir ?></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">J U M L A H</td>
                    <td><?= $total_sisa_lalu ?></td>
                    <td><?= $total_diterima_bulan_ini ?></td>
                    <td><?= $total_jumlah ?></td>
                    <td><?= $total_dicabut ?></td>
                    <td><?= $total_dikabulkan ?></td>
                    <td><?= $total_ditolak ?></td>
                    <td><?= $total_tidak_dapat_diterima ?></td>
                    <td><?= $total_digugurkan ?></td>
                    <td><?= $total_dicoret_dari_register ?></td>
                    <td><?= $total_jumlah_6_11 ?></td>
                    <td><?= $total_sisa_akhir ?></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="signature-section">
        <p>Mengetahui:</p>
        <p>Ketua</p>
        <p>Bahrul Maji, S.H.I.</p>
        <p>NIP. 197605272005021001</p>
        <p>Amuntai, 31 Januari 2025</p>
        <p>Panitera</p>
        <p>H. Ahmad Salim Ridha, S.Ag., M.H.</p>
        <p>NIP. 197806302007041001</p>
    </div>
</body>
</html>
