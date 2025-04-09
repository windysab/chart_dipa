<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan - Maret 2025</title>
    <style>
        :root {
            --primary-color: #1e5631;
            --secondary-color: #3c8dbc;
            --accent-color: #f39c12;
            --dark-color: #2c3e50;
            --light-color: #f5f7fa;
            --border-color: #e0e6ed;
            --hover-color: #eef2ff;
            --header-gradient: linear-gradient(135deg, #1e5631, #2d7d46);
            --footer-gradient: linear-gradient(135deg, #1e5631, #184a29);
        }

        .content-wrapper {
            padding: 20px;
        }

        .financial-report-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .report-header {
            background: var(--header-gradient);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .report-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .report-header h2 {
            margin: 10px 0 0;
            font-size: 18px;
            font-weight: 400;
        }

        .dipa-number {
            margin-top: 15px;
            font-size: 16px;
            font-weight: 500;
        }

        .report-body {
            padding: 20px;
        }

        .financial-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
        }

        .financial-table th,
        .financial-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .financial-table th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
        }

        .financial-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .financial-table tr:hover {
            background-color: #f1f1f1;
        }

        .category-cell {
            text-align: left;
            font-weight: 500;
        }

        .total-row {
            background-color: #eaf2ff !important;
            font-weight: 600;
        }

        .total-row td {
            border-top: 2px solid var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
        }

        .percentage-cell {
            font-weight: 600;
            color: var(--primary-color);
        }

        .chart-container {
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .chart-title {
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary-color);
            font-size: 18px;
            font-weight: 600;
        }

        .chart-wrapper {
            height: 400px;
        }

        .link-cell {
            color: var(--secondary-color);
            text-decoration: underline;
            cursor: pointer;
        }

        .note {
            font-style: italic;
            color: #666;
            font-size: 12px;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .financial-table {
                font-size: 12px;
            }
            
            .financial-table th,
            .financial-table td {
                padding: 8px;
            }
            
            .report-header h1 {
                font-size: 20px;
            }
            
            .report-header h2 {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <div class="financial-report-container">
            <div class="report-header">
                <h1>LAPORAN REALISASI ANGGARAN</h1>
                <h2>PENGADILAN AGAMA AMUNTAI</h2>
                <div class="dipa-number">DIPA Nomor : <?= $financial_data['dipa_number'] ?></div>
            </div>
            
            <div class="report-body">
                <div class="table-responsive">
                    <table class="financial-table">
                        <thead>
                            <tr>
                                <th rowspan="2">BULAN</th>
                                <th rowspan="2">URAIAN</th>
                                <th rowspan="2">PAGU<br>(RP)</th>
                                <th rowspan="2">REALISASI<br>(RP)</th>
                                <th rowspan="2">%</th>
                                <th rowspan="2">SISA PAGU<br>(RP)</th>
                                <th rowspan="2">Chart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Januari -->
                            <tr>
                                <td rowspan="4"><?= $financial_data['months'][0] ?></td>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[0] ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['pagu'][0]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['realisasi'][0]) ?></td>
                                <td class="percentage-cell"><?= $financial_data['categories']['Belanja Pegawai']['percentage'][0] ?> %</td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['sisa_pagu'][0]) ?></td>
                                <td class="link-cell">Link</td>
                            </tr>
                            <tr>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[1] ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['pagu'][0]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['realisasi'][0]) ?></td>
                                <td class="percentage-cell"><?= $financial_data['categories']['Belanja Barang']['percentage'][0] ?> %</td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['sisa_pagu'][0]) ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[2] ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td></td>
                            </tr>
                            <tr class="total-row">
                                <td class="category-cell">Total</td>
                                <td><?= number_format($financial_data['totals']['pagu'][0]) ?></td>
                                <td><?= number_format($financial_data['totals']['realisasi'][0]) ?></td>
                                <td class="percentage-cell"><?= $financial_data['totals']['percentage'][0] ?> %</td>
                                <td><?= number_format($financial_data['totals']['sisa_pagu'][0]) ?></td>
                                <td></td>
                            </tr>
                            
                            <!-- Februari -->
                            <tr>
                                <td rowspan="4"><?= $financial_data['months'][1] ?></td>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[0] ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['pagu'][1]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['realisasi'][1]) ?></td>
                                <td class="percentage-cell">-</td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['sisa_pagu'][1]) ?></td>
                                <td class="link-cell">Link</td>
                            </tr>
                            <tr>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[1] ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['pagu'][1]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['realisasi'][1]) ?></td>
                                <td class="percentage-cell">-</td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['sisa_pagu'][1]) ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[2] ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td></td>
                            </tr>
                            <tr class="total-row">
                                <td class="category-cell">Total</td>
                                <td><?= number_format($financial_data['totals']['pagu'][1]) ?> (<?= isset($financial_data['notes']['Februari']) ? $financial_data['notes']['Februari'] : '' ?>)</td>
                                <td><?= number_format($financial_data['totals']['realisasi'][1]) ?></td>
                                <td class="percentage-cell">-</td>
                                <td><?= number_format($financial_data['totals']['sisa_pagu'][1]) ?></td>
                                <td></td>
                            </tr>
                            
                            <!-- Maret section in the table -->
                            <tr>
                                <td rowspan="4"><?= $financial_data['months'][2] ?></td>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[0] ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['pagu'][2]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['realisasi'][2]) ?></td>
                                <td class="percentage-cell"><?= $financial_data['categories']['Belanja Pegawai']['percentage'][2] ?> %</td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['sisa_pagu'][2]) ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[1] ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['pagu'][2]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['realisasi'][2]) ?></td>
                                <td class="percentage-cell"><?= $financial_data['categories']['Belanja Barang']['percentage'][2] ?> %</td>
                                <td><?= number_format($financial_data['categories']['Belanja Barang']['sisa_pagu'][2]) ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="category-cell"><?= array_keys($financial_data['categories'])[2] ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td></td>
                            </tr>
                            <tr class="total-row">
                                <td class="category-cell">Total</td>
                                <td><?= number_format($financial_data['totals']['pagu'][2]) ?></td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['realisasi'][2] + $financial_data['categories']['Belanja Barang']['realisasi'][2]) ?></td>
                                <td class="percentage-cell"><?= round(($financial_data['categories']['Belanja Pegawai']['realisasi'][2] + $financial_data['categories']['Belanja Barang']['realisasi'][2]) / $financial_data['totals']['pagu'][2] * 100, 2) ?> %</td>
                                <td><?= number_format($financial_data['categories']['Belanja Pegawai']['sisa_pagu'][2] + $financial_data['categories']['Belanja Barang']['sisa_pagu'][2]) ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <p class="note">* Data realisasi anggaran sampai dengan bulan Maret 2025</p>
            </div>
        </div>
        
        <div class="chart-container">
            <div class="chart-title">
                <i class="fas fa-chart-bar"></i> Grafik Realisasi Anggaran Tahun 2025
            </div>
            <div class="chart-wrapper" id="budgetChart"></div>
        </div>
    </div>

    <!-- Add Chart.js for visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('budgetChart').getContext('2d');
            
            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret'],
                    datasets: [
                        {
                            label: 'Pagu Anggaran',
                            data: [4198424000, 3571588000, 4198424000],
                            backgroundColor: 'rgba(30, 86, 49, 0.7)',
                            borderColor: 'rgba(30, 86, 49, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Realisasi',
                            data: [243136171, 282620001, 545148735],
                            backgroundColor: 'rgba(60, 141, 188, 0.7)',
                            borderColor: 'rgba(60, 141, 188, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value.toLocaleString('id-ID');
                                }
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    var label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(context.raw);
                                    return label;
                                }
                            }
                        },
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Perbandingan Pagu dan Realisasi Anggaran 2025'
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
