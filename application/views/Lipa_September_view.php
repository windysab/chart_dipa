<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Laporan Perkara September 2025'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <style>
        :root {
            --primary: #667eea;
            --primary-dark: #5a67d8;
            --secondary: #764ba2;
            --accent: #f093fb;
            --success: #48bb78;
            --info: #38b2ac;
            --warning: #ed8936;
            --danger: #f56565;
            --light: #f7fafc;
            --dark: #1a202c;
            --white: #ffffff;
            --gray-50: #f9fafb;
            --gray-100: #f7fafc;
            --gray-200: #edf2f7;
            --gray-300: #e2e8f0;
            --gray-400: #cbd5e0;
            --gray-500: #a0aec0;
            --gray-600: #718096;
            --gray-700: #4a5568;
            --gray-800: #2d3748;
            --gray-900: #1a202c;
            --shadow-sm: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --gradient-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-card: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.8) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--gradient-bg);
            color: var(--gray-800);
            line-height: 1.6;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(240, 147, 251, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(102, 126, 234, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(118, 75, 162, 0.2) 0%, transparent 50%);
            z-index: -1;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-30px) rotate(1deg);
            }

            66% {
                transform: translateY(15px) rotate(-1deg);
            }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        /* Header Section */
        .header-hero {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 24px;
            padding: 3rem 2rem;
            text-align: center;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-xl);
            position: relative;
            overflow: hidden;
        }

        .header-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 50%, var(--secondary) 100%);
        }

        .header-hero::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(200%) rotate(45deg);
            }
        }

        .header-title {
            font-size: 2.8rem;
            font-weight: 900;
            color: var(--dark);
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header-subtitle {
            font-size: 1.4rem;
            color: var(--gray-700);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .header-period {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent) 0%, var(--warning) 100%);
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: var(--shadow-md);
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow-lg);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
        }

        .stat-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-xl);
        }

        .stat-card.masuk::before {
            background: linear-gradient(90deg, var(--success) 0%, var(--info) 100%);
        }

        .stat-card.selesai::before {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }

        .stat-card.sisa::before {
            background: linear-gradient(90deg, var(--warning) 0%, var(--danger) 100%);
        }

        .stat-icon {
            width: 4rem;
            height: 4rem;
            margin: 0 auto 1rem;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            box-shadow: var(--shadow-md);
        }

        .stat-icon.masuk {
            background: linear-gradient(135deg, var(--success) 0%, var(--info) 100%);
        }

        .stat-icon.selesai {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        }

        .stat-icon.sisa {
            background: linear-gradient(135deg, var(--warning) 0%, var(--danger) 100%);
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--gray-600);
            font-weight: 600;
        }

        /* Table Section */
        .table-section {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
        }

        .table-header {
            background: linear-gradient(135deg, var(--dark) 0%, var(--gray-800) 100%);
            color: white;
            padding: 1.5rem 2rem;
            position: relative;
        }

        .table-title {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .table-responsive {
            overflow-x: auto;
            max-height: 600px;
        }

        .modern-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }

        .modern-table th {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 1rem 0.75rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            position: sticky;
            top: 0;
            z-index: 10;
            white-space: nowrap;
        }

        .modern-table td {
            padding: 0.875rem 0.75rem;
            border-bottom: 1px solid var(--gray-200);
            text-align: center;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .modern-table td:nth-child(2) {
            text-align: left;
            font-weight: 600;
            color: var(--primary);
            max-width: 200px;
            white-space: normal;
        }

        .modern-table tbody tr:hover {
            background: rgba(102, 126, 234, 0.05);
            transform: scale(1.01);
        }

        .modern-table tfoot tr {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            font-weight: 700;
            color: var(--primary);
        }

        .modern-table tfoot td {
            border-top: 3px solid var(--primary);
            padding: 1rem 0.75rem;
        }

        /* Charts Grid */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .chart-card {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .chart-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .chart-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1.5rem;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }

        .chart-container {
            position: relative;
            height: 350px;
            width: 100%;
        }

        .chart-card.full-width {
            grid-column: 1 / -1;
        }

        .chart-card.full-width .chart-container {
            height: 400px;
        }

        /* Animations */
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.8s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Footer */
        .footer-section {
            background: var(--gradient-card);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            box-shadow: var(--shadow-lg);
            color: var(--gray-600);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .header-title {
                font-size: 2rem;
            }

            .header-subtitle {
                font-size: 1.2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            }

            .charts-grid {
                grid-template-columns: 1fr;
            }

            .modern-table {
                font-size: 0.8rem;
            }

            .modern-table th,
            .modern-table td {
                padding: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header-hero animate-fade-in">
            <h1 class="header-title"><?= htmlspecialchars($title ?? 'Laporan Perkara September 2025') ?></h1>
            <p class="header-subtitle"><?= htmlspecialchars($subtitle ?? 'Pengadilan Agama Amuntai') ?></p>
            <span class="header-period"><?= htmlspecialchars($periode ?? 'September 2025') ?></span>
        </div>

        <!-- Statistics Cards -->
        <div class="stats-grid animate-slide-up">
            <div class="stat-card masuk">
                <div class="stat-icon masuk">
                    <i class="fas fa-inbox"></i>
                </div>
                <div class="stat-value"><?= number_format($tot_img['diterima'] ?? 0, 0, ',', '.') ?></div>
                <div class="stat-label">Perkara Masuk</div>
            </div>

            <div class="stat-card selesai">
                <div class="stat-icon selesai">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-value"><?= number_format($tot_img['jumlah_laju_6_13'] ?? 0, 0, ',', '.') ?></div>
                <div class="stat-label">Perkara Selesai</div>
            </div>

            <div class="stat-card sisa">
                <div class="stat-icon sisa">
                    <i class="fas fa-hourglass-half"></i>
                </div>
                <div class="stat-value"><?= number_format($tot_img['sisa_akhir'] ?? 0, 0, ',', '.') ?></div>
                <div class="stat-label">Sisa Perkara</div>
            </div>
        </div>

        <!-- Main Table -->
        <div class="table-section animate-slide-up">
            <div class="table-header">
                <h3 class="table-title">
                    <i class="fas fa-table"></i>
                    Rincian Perkara Per Jenis
                </h3>
            </div>
            <div class="table-responsive">
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Jenis Perkara</th>
                            <th colspan="3">Banyaknya Perkara</th>
                            <th colspan="8">Dicabut dan Diputus Bulan Ini</th>
                            <th rowspan="2">Jumlah Lajur 6-13</th>
                            <th rowspan="2">Sisa Akhir</th>
                            <th colspan="3">Upaya Hukum</th>
                        </tr>
                        <tr>
                            <th>Sisa Bulan Lalu</th>
                            <th>Diterima</th>
                            <th>Jumlah</th>
                            <th>Dicabut</th>
                            <th>Dikabulkan</th>
                            <th>Ditolak</th>
                            <th>Tidak Diterima</th>
                            <th>Digugurkan</th>
                            <th>Dicoret</th>
                            <th>Perdamaian</th>
                            <th>Dismissal</th>
                            <th>Banding</th>
                            <th>Kasasi</th>
                            <th>PK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kategori as $i => $name):
                            $r = $rows[$i] ?? array_fill(0, 16, 0); ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= htmlspecialchars($name) ?></td>
                                <?php for ($c = 0; $c < 16; $c++): ?>
                                    <td><?= $r[$c] ? number_format($r[$c], 0, ',', '.') : '–' ?></td>
                                <?php endfor; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td><strong>JUMLAH</strong></td>
                            <?php
                            $cols = [
                                'sisa_lalu',
                                'diterima',
                                'jumlah',
                                'dicabut',
                                'dikabulkan',
                                'ditolak',
                                'tidak_diterima',
                                'digugurkan',
                                'dicoret',
                                'perdamaian',
                                'dismissal',
                                'jumlah_laju_6_13',
                                'sisa_akhir',
                                'banding',
                                'kasasi',
                                'pk'
                            ];
                            foreach ($cols as $key) {
                                $val = $tot_img[$key] ?? 0;
                                echo '<td><strong>' . ($val ? number_format($val, 0, ',', '.') : '–') . '</strong></td>';
                            }
                            ?>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="charts-grid animate-slide-up">
            <div class="chart-card">
                <h4 class="chart-title">
                    <i class="fas fa-chart-pie"></i>
                    Distribusi Perkara Masuk
                </h4>
                <div class="chart-container">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>

            <div class="chart-card">
                <h4 class="chart-title">
                    <i class="fas fa-chart-bar"></i>
                    Perbandingan Bulanan
                </h4>
                <div class="chart-container">
                    <canvas id="barChart"></canvas>
                </div>
            </div>

            <div class="chart-card full-width">
                <h4 class="chart-title">
                    <i class="fas fa-chart-line"></i>
                    Tren Perkara Sepanjang Tahun 2025
                </h4>
                <div class="chart-container">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-section animate-slide-up">
            <p>&copy; 2025 Pengadilan Agama Amuntai Kelas IB. Data laporan periode September 2025.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Chart configuration
            Chart.defaults.font.family = 'Inter';
            Chart.defaults.color = '#4a5568';
            Chart.defaults.responsive = true;
            Chart.defaults.maintainAspectRatio = false;

            // Data preparation
            const chartData = {
                kategori: <?= json_encode($kategori) ?>,
                rows: <?= json_encode($rows) ?>,
                totals: <?= json_encode($tot_img) ?>,
                seriesMasuk: <?= json_encode($series_masuk) ?>,
                seriesSelesai: <?= json_encode($series_selesai) ?>,
                seriesSisa: <?= json_encode($series_sisa) ?>
            };

            const bulanLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep'];

            // Common options
            const commonOptions = {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    tooltip: {
                        backgroundColor: 'rgba(26, 32, 44, 0.9)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        borderColor: '#667eea',
                        borderWidth: 1,
                        cornerRadius: 12,
                        padding: 12
                    }
                }
            };

            // 1. Pie Chart - Distribusi perkara masuk
            const perkaraMasuk = chartData.rows
                .map((row, index) => ({
                    label: chartData.kategori[index],
                    value: row[1] || 0
                }))
                .filter(item => item.value > 0)
                .sort((a, b) => b.value - a.value)
                .slice(0, 8);

            new Chart(document.getElementById('pieChart'), {
                type: 'doughnut',
                data: {
                    labels: perkaraMasuk.map(item => item.label),
                    datasets: [{
                        data: perkaraMasuk.map(item => item.value),
                        backgroundColor: [
                            '#667eea', '#764ba2', '#f093fb', '#48bb78',
                            '#38b2ac', '#ed8936', '#f56565', '#9f7aea'
                        ],
                        borderWidth: 3,
                        borderColor: '#ffffff',
                        hoverOffset: 15
                    }]
                },
                options: {
                    ...commonOptions,
                    cutout: '60%',
                    plugins: {
                        ...commonOptions.plugins,
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    size: 11,
                                    weight: '600'
                                }
                            }
                        },
                        tooltip: {
                            ...commonOptions.plugins.tooltip,
                            callbacks: {
                                label: context => {
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = ((context.parsed / total) * 100).toFixed(1);
                                    return `${context.label}: ${context.parsed} (${percentage}%)`;
                                }
                            }
                        }
                    }
                }
            });

            // 2. Bar Chart - Perbandingan bulanan
            new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: bulanLabels,
                    datasets: [{
                        label: 'Perkara Masuk',
                        data: chartData.seriesMasuk.slice(0, 9),
                        backgroundColor: 'rgba(72, 187, 120, 0.8)',
                        borderColor: '#48bb78',
                        borderWidth: 2,
                        borderRadius: 8
                    }, {
                        label: 'Perkara Selesai',
                        data: chartData.seriesSelesai.slice(0, 9),
                        backgroundColor: 'rgba(102, 126, 234, 0.8)',
                        borderColor: '#667eea',
                        borderWidth: 2,
                        borderRadius: 8
                    }]
                },
                options: {
                    ...commonOptions,
                    plugins: {
                        ...commonOptions.plugins,
                        legend: {
                            position: 'top',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(102, 126, 234, 0.1)'
                            },
                            ticks: {
                                font: {
                                    weight: '500'
                                }
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    weight: '600'
                                }
                            }
                        }
                    }
                }
            });

            // 3. Line Chart - Tren tahunan
            new Chart(document.getElementById('lineChart'), {
                type: 'line',
                data: {
                    labels: bulanLabels,
                    datasets: [{
                        label: 'Perkara Masuk',
                        data: chartData.seriesMasuk.slice(0, 9),
                        borderColor: '#48bb78',
                        backgroundColor: 'rgba(72, 187, 120, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#48bb78',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }, {
                        label: 'Perkara Selesai',
                        data: chartData.seriesSelesai.slice(0, 9),
                        borderColor: '#667eea',
                        backgroundColor: 'rgba(102, 126, 234, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#667eea',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }, {
                        label: 'Sisa Perkara',
                        data: chartData.seriesSisa.slice(0, 9),
                        borderColor: '#ed8936',
                        backgroundColor: 'rgba(237, 137, 54, 0.1)',
                        fill: true,
                        tension: 0.4,
                        borderWidth: 3,
                        pointBackgroundColor: '#ed8936',
                        pointBorderColor: '#ffffff',
                        pointBorderWidth: 2,
                        pointRadius: 6
                    }]
                },
                options: {
                    ...commonOptions,
                    plugins: {
                        ...commonOptions.plugins,
                        legend: {
                            position: 'top',
                            labels: {
                                usePointStyle: true,
                                padding: 25
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(102, 126, 234, 0.1)'
                            },
                            ticks: {
                                font: {
                                    weight: '500'
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(102, 126, 234, 0.1)'
                            },
                            ticks: {
                                font: {
                                    weight: '600'
                                }
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });

            // Animation observer
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            document.querySelectorAll('.animate-slide-up').forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
                element.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                observer.observe(element);
            });
        });
    </script>
</body>

</html>