<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perkara - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --highlight-color: #f39c12;
            --background-color: #ecf0f1;
            --card-color: #ffffff;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', 'Roboto', sans-serif;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 30px;
        }

        .dashboard-header {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .dashboard-title {
            flex-grow: 1;
        }

        .dashboard-title h1 {
            font-size: 2.2rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .dashboard-title h2 {
            font-size: 1.4rem;
            font-weight: 500;
            color: var(--text-light);
        }

        .dashboard-date {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            box-shadow: var(--shadow);
            font-size: 1.1rem;
            font-weight: 500;
        }

        .dashboard-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent-color);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            box-shadow: 0 4px 15px rgba(231, 76, 60, 0.2);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .stat-card {
            background-color: var(--card-color);
            border-radius: 12px;
            padding: 25px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }

        .stat-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color));
        }

        .stat-card-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat-card-title {
            font-size: 1rem;
            color: var(--text-light);
            font-weight: 500;
        }

        .stat-card-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(52, 152, 219, 0.1);
            color: var(--secondary-color);
            font-size: 1.4rem;
        }

        .stat-card:nth-child(2) .stat-card-icon {
            background-color: rgba(231, 76, 60, 0.1);
            color: var(--accent-color);
        }

        .stat-card:nth-child(3) .stat-card-icon {
            background-color: rgba(243, 156, 18, 0.1);
            color: var(--highlight-color);
        }

        .stat-card:nth-child(4) .stat-card-icon {
            background-color: rgba(46, 204, 113, 0.1);
            color: #2ecc71;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 5px;
        }

        .stat-description {
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .card {
            background-color: var(--card-color);
            border-radius: 12px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 20px;
            font-weight: 600;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-header i {
            font-size: 1.4rem;
        }

        .card-body {
            padding: 25px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 0.95rem;
        }

        .data-table th {
            background-color: rgba(52, 152, 219, 0.05);
            color: var(--primary-color);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #e0e6ed;
        }

        .data-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #f0f0f0;
            transition: var(--transition);
        }

        .data-table tr:hover td {
            background-color: rgba(52, 152, 219, 0.03);
        }

        .data-table .case-type {
            text-align: left;
            padding-left: 15px;
            font-weight: 500;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .data-table .case-type i {
            font-size: 1.2rem;
            width: 24px;
            color: var(--secondary-color);
        }

        .data-table .total-row {
            background-color: rgba(52, 152, 219, 0.07);
            font-weight: 600;
        }

        .data-table .total-row td {
            padding: 18px 15px;
            color: var(--primary-color);
            border-bottom: none;
        }

        .data-table .non-zero {
            color: var(--primary-color);
            font-weight: 600;
        }

        .data-table .highlight-cell {
            background-color: rgba(243, 156, 18, 0.1);
            color: var(--highlight-color);
            font-weight: 600;
        }

        .chart-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .chart-card {
            background-color: var(--card-color);
            border-radius: 12px;
            box-shadow: var(--shadow);
            padding: 20px;
        }

        .chart-title {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f0f0f0;
            font-weight: 600;
        }

        .chart-wrapper {
            height: 350px;
            width: 100%;
        }

        .signature-container {
            display: flex;
            justify-content: flex-end;
            margin: 40px 0;
        }

        .signature-card {
            background-color: var(--card-color);
            border-radius: 12px;
            box-shadow: var(--shadow);
            padding: 25px 40px;
            width: 350px;
            text-align: center;
        }

        .signature-header {
            font-size: 1.1rem;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f0f0f0;
        }

        .signature-date {
            text-align: right;
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 25px;
        }

        .signature-role {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .signature-line {
            width: 70%;
            height: 1px;
            background-color: #e0e6ed;
            margin: 30px auto 15px;
        }

        .signature-name {
            font-weight: 600;
            margin-bottom: 5px;
        }

        .signature-nip {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        @media (max-width: 992px) {
            .chart-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .dashboard-date {
                align-self: flex-end;
            }

            .dashboard-title h1 {
                font-size: 1.8rem;
            }

            .dashboard-title h2 {
                font-size: 1.2rem;
            }

            .stat-value {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="dashboard-header">
            <div class="dashboard-title">
                <h1>LAPORAN PERKARA PA AMUNTAI</h1>
                <h2>Statistik Perkara Diterima, Dicabut dan Diputus Menurut Jenis</h2>
            </div>
            <div class="dashboard-date">JUNI 2025</div>
        </div>

        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">Sisa Bulan Lalu</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-file-import"></i>
                    </div>
                </div>
                <div class="stat-value">78</div>
                <div class="stat-description">Perkara yang belum selesai</div>
            </div>

            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">Perkara Masuk</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-folder-plus"></i>
                    </div>
                </div>
                <div class="stat-value">110</div>
                <div class="stat-description">Perkara baru bulan ini</div>
            </div>

            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">Perkara Putus</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
                <div class="stat-value">99</div>
                <div class="stat-description">Perkara diselesaikan bulan ini</div>
            </div>

            <div class="stat-card">
                <div class="stat-card-header">
                    <div class="stat-card-title">Sisa Akhir</div>
                    <div class="stat-card-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                </div>
                <div class="stat-value">89</div>
                <div class="stat-description">Perkara yang masih dalam proses</div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <i class="fas fa-table"></i> Rincian Perkara Bulan Juni 2025
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2">Jenis Perkara</th>
                                <th colspan="3">Banyaknya Perkara</th>
                                <th colspan="9">Dicabut dan Diputus Bulan Ini</th>
                                <th rowspan="2">Sisa Akhir Bulan</th>
                                <th rowspan="2">Banding</th>
                                <th rowspan="2">Kasasi</th>
                                <th rowspan="2">PK</th>
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
                                <th>Perdamaian</th>
                                <th>Dismissal</th>
                                <th>Jumlah (6 s/d 13)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 6 - Cerai Talak -->
                            <tr>
                                <td>6</td>
                                <td class="case-type"><i class="fas fa-male"></i> Cerai Talak</td>
                                <td class="non-zero">17</td>
                                <td class="non-zero">12</td>
                                <td class="highlight-cell">29</td>
                                <td>-</td>
                                <td class="non-zero">8</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="non-zero">8</td>
                                <td class="non-zero">21</td>
                                <td class="non-zero">1</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <!-- Row 7 - Cerai Gugat -->
                            <tr>
                                <td>7</td>
                                <td class="case-type"><i class="fas fa-female"></i> Cerai Gugat</td>
                                <td class="non-zero">53</td>
                                <td class="non-zero">59</td>
                                <td class="highlight-cell">112</td>
                                <td class="non-zero">7</td>
                                <td class="non-zero">45</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="non-zero">52</td>
                                <td class="non-zero">60</td>
                                <td class="non-zero">1</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <!-- Row 18 - Asal Usul Anak -->
                            <tr>
                                <td>18</td>
                                <td class="case-type"><i class="fas fa-baby"></i> Asal Usul Anak</td>
                                <td class="non-zero">1</td>
                                <td class="non-zero">3</td>
                                <td class="highlight-cell">4</td>
                                <td>-</td>
                                <td class="non-zero">2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="non-zero">2</td>
                                <td class="non-zero">2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <!-- Row 20 - Isbat Nikah -->
                            <tr>
                                <td>20</td>
                                <td class="case-type"><i class="fas fa-id-card"></i> Isbat Nikah</td>
                                <td class="non-zero">4</td>
                                <td class="non-zero">24</td>
                                <td class="highlight-cell">28</td>
                                <td>-</td>
                                <td class="non-zero">25</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="non-zero">25</td>
                                <td class="non-zero">3</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <!-- Row 21 - Dispensasi Kawin -->
                            <tr>
                                <td>21</td>
                                <td class="case-type"><i class="fas fa-ring"></i> Dispensasi Kawin</td>
                                <td>-</td>
                                <td class="non-zero">2</td>
                                <td class="highlight-cell">2</td>
                                <td>-</td>
                                <td class="non-zero">2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="non-zero">2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <!-- Row 28 - Lain-Lain -->
                            <tr>
                                <td>28</td>
                                <td class="case-type"><i class="fas fa-clipboard-list"></i> Lain-Lain</td>
                                <td class="non-zero">3</td>
                                <td class="non-zero">10</td>
                                <td class="highlight-cell">13</td>
                                <td>-</td>
                                <td class="non-zero">10</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td class="non-zero">10</td>
                                <td class="non-zero">3</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <!-- Total Row -->
                            <tr class="total-row">
                                <td colspan="2">JUMLAH</td>
                                <td>78</td>
                                <td>110</td>
                                <td>188</td>
                                <td>7</td>
                                <td>87</td>
                                <td>3</td>
                                <td>-</td>
                                <td>2</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>99</td>
                                <td>89</td>
                                <td>2</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="chart-container">
            <div class="chart-card">
                <div class="chart-title"><i class="fas fa-chart-pie"></i> Distribusi Perkara</div>
                <div class="chart-wrapper">
                    <canvas id="caseDistribution"></canvas>
                </div>
            </div>
            <div class="chart-card">
                <div class="chart-title"><i class="fas fa-chart-bar"></i> Tren Penyelesaian Perkara</div>
                <div class="chart-wrapper">
                    <canvas id="caseTrend"></canvas>
                </div>
            </div>
        </div>

        <div class="signature-container">
            <div class="signature-card">
                <div class="signature-header">
                    <i class="fas fa-pen-alt"></i> Pengesahan
                </div>
                <div class="signature-date">Amuntai, 30 Juni 2025</div>
                <div class="signature-role">Panitera</div>
                <div class="signature-line"></div>
                <div class="signature-name">H. Ahmad Salim Ridha, S.Ag., M.H.</div>
                <div class="signature-nip">NIP. 19780630 200704 1 001</div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Case Distribution Chart
            const caseDistributionCtx = document.getElementById('caseDistribution').getContext('2d');
            new Chart(caseDistributionCtx, {
                type: 'doughnut',
                data: {
                    labels: ['Cerai Talak', 'Cerai Gugat', 'Asal Usul Anak', 'Isbat Nikah', 'Dispensasi Kawin', 'Lain-lain'],
                    datasets: [{
                        data: [29, 112, 4, 28, 2, 13],
                        backgroundColor: [
                            '#3498db',
                            '#e74c3c',
                            '#2ecc71',
                            '#f39c12',
                            '#9b59b6',
                            '#1abc9c'
                        ],
                        borderWidth: 0,
                        hoverOffset: 15
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw;
                                    const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `${label}: ${value} perkara (${percentage}%)`;
                                }
                            }
                        }
                    },
                    cutout: '65%',
                }
            });

            // Case Trend Chart
            const caseTrendCtx = document.getElementById('caseTrend').getContext('2d');
            new Chart(caseTrendCtx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                    datasets: [{
                            label: 'Perkara Masuk',
                            data: [82, 79, 95, 90, 105, 110],
                            backgroundColor: '#3498db',
                            borderWidth: 0
                        },
                        {
                            label: 'Perkara Selesai',
                            data: [75, 72, 88, 85, 95, 99],
                            backgroundColor: '#2ecc71',
                            borderWidth: 0
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah Perkara'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>