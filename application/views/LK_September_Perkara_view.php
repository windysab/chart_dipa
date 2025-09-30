<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?> - <?= $periode ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary: #1e40af;
            --primary-light: #3b82f6;
            --primary-dark: #1e3a8a;
            --secondary: #059669;
            --secondary-light: #10b981;
            --accent: #f59e0b;
            --accent-light: #fbbf24;
            --danger: #dc2626;
            --danger-light: #ef4444;
            --warning: #d97706;
            --info: #0891b2;
            --success: #16a34a;
            --dark: #0f172a;
            --light: #f8fafc;
            --white: #ffffff;
            --gray-50: #f9fafb;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: var(--gray-800);
            line-height: 1.6;
        }

        .main-container {
            min-height: 100vh;
            position: relative;
            padding: 2rem 1rem;
        }

        .bg-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 80%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(251, 191, 36, 0.1) 0%, transparent 50%);
            z-index: 0;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .header-section {
            background: rgba(255, 255, 255, 0.95);
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

        .header-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
        }

        .header-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1rem;
            box-shadow: var(--shadow-md);
        }

        .header-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-subtitle {
            font-size: 1.25rem;
            color: var(--gray-600);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .header-period {
            font-size: 1.125rem;
            color: var(--primary);
            font-weight: 600;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: var(--shadow-lg);
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient);
        }

        .stat-card.penerimaan::before {
            background: linear-gradient(90deg, var(--secondary) 0%, var(--secondary-light) 100%);
        }

        .stat-card.pengeluaran::before {
            background: linear-gradient(90deg, var(--danger) 0%, var(--danger-light) 100%);
        }

        .stat-card.saldo::before {
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
        }

        .stat-card.perkara::before {
            background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%);
        }

        .stat-icon {
            width: 4rem;
            height: 4rem;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
            color: white;
        }

        .stat-icon.penerimaan {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
        }

        .stat-icon.pengeluaran {
            background: linear-gradient(135deg, var(--danger) 0%, var(--danger-light) 100%);
        }

        .stat-icon.saldo {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
        }

        .stat-icon.perkara {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
        }

        .stat-value {
            font-size: 1.875rem;
            font-weight: 800;
            color: var(--gray-900);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--gray-600);
            font-weight: 500;
        }

        .stat-sublabel {
            font-size: 0.875rem;
            color: var(--gray-500);
            margin-top: 0.25rem;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .section-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .section-header {
            background: linear-gradient(135deg, var(--gray-900) 0%, var(--gray-800) 100%);
            color: white;
            padding: 1.5rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .section-header::before {
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

        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-body {
            padding: 2rem;
        }

        .table-responsive {
            overflow-x: auto;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
        }

        .modern-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            font-size: 0.95rem;
        }

        .modern-table th {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 1rem;
            text-align: center;
            font-weight: 600;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.025em;
        }

        .modern-table td {
            padding: 1rem;
            border-bottom: 1px solid var(--gray-200);
            transition: background-color 0.2s ease;
        }

        .modern-table tbody tr:hover {
            background-color: var(--gray-50);
        }

        .modern-table tbody tr:last-child td {
            border-bottom: none;
        }

        .text-center {
            text-align: center;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .fw-bold {
            font-weight: 700;
        }

        .fw-semibold {
            font-weight: 600;
        }

        .charts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .chart-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .chart-container:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
        }

        .chart-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .footer-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-lg);
        }

        .footer-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--gray-900);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .signature-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            text-align: center;
            margin-top: 2rem;
        }

        .signature-block {
            padding: 1rem;
        }

        .signature-title {
            font-weight: 600;
            margin-bottom: 4rem;
        }

        .signature-name {
            font-weight: 700;
            color: var(--primary);
        }

        .badge {
            display: inline-block;
            padding: 0.375rem 0.75rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .badge-success {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
            color: white;
        }

        .badge-warning {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: white;
        }

        @media (max-width: 768px) {
            .main-container {
                padding: 1rem 0.5rem;
            }

            .header-section {
                padding: 2rem 1.5rem;
            }

            .header-title {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            }

            .charts-grid {
                grid-template-columns: 1fr;
            }

            .signature-section {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .modern-table {
                font-size: 0.875rem;
            }

            .modern-table th,
            .modern-table td {
                padding: 0.75rem 0.5rem;
            }
        }

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
    </style>
</head>

<body>
    <div class="main-container">
        <div class="bg-overlay"></div>

        <div class="container">
            <!-- Header Section -->
            <div class="header-section animate-fade-in">
                <div class="header-badge">
                    <i class="fas fa-file-invoice-dollar"></i>
                    LIPA 7a
                </div>
                <h1 class="header-title"><?= $judul ?></h1>
                <p class="header-subtitle"><?= $subjudul ?></p>
                <p class="header-period"><?= $periode ?></p>
            </div>

            <!-- Statistics Cards -->
            <div class="stats-grid animate-slide-up">
                <div class="stat-card penerimaan">
                    <div class="stat-icon penerimaan">
                        <i class="fas fa-arrow-trend-up"></i>
                    </div>
                    <div class="stat-value">Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></div>
                    <div class="stat-label">Total Penerimaan</div>
                </div>

                <div class="stat-card pengeluaran">
                    <div class="stat-icon pengeluaran">
                        <i class="fas fa-arrow-trend-down"></i>
                    </div>
                    <div class="stat-value">Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></div>
                    <div class="stat-label">Total Pengeluaran</div>
                </div>

                <div class="stat-card saldo">
                    <div class="stat-icon saldo">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <div class="stat-value">Rp <?= number_format($saldo_akhir, 0, ',', '.') ?></div>
                    <div class="stat-label">Saldo Akhir</div>
                    <div class="stat-sublabel">
                        Bank: Rp <?= number_format($saldo_bank, 0, ',', '.') ?> |
                        Tunai: Rp <?= number_format($saldo_kas_tunai, 0, ',', '.') ?>
                    </div>
                </div>

                <div class="stat-card perkara">
                    <div class="stat-icon perkara">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="stat-value"><?= $perkara_masuk ?> / <?= $perkara_putus ?></div>
                    <div class="stat-label">Perkara Masuk / Putus</div>
                    <div class="stat-sublabel">
                        <span class="badge badge-warning">Prodeo: <?= $perkara_prodeo_masuk ?>/<?= $perkara_prodeo_putus ?></span>
                    </div>
                </div>
            </div>

            <!-- Main Table -->
            <div class="content-grid animate-slide-up">
                <div class="section-card">
                    <div class="section-header">
                        <h3 class="section-title">
                            <i class="fas fa-table"></i>
                            Rincian Laporan Keuangan
                        </h3>
                    </div>
                    <div class="section-body">
                        <div class="table-responsive">
                            <table class="modern-table">
                                <thead>
                                    <tr>
                                        <th style="width: 8%">No</th>
                                        <th style="width: 50%">Uraian</th>
                                        <th style="width: 21%">Penerimaan (Rp)</th>
                                        <th style="width: 21%">Pengeluaran (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($laporan as $item): ?>
                                        <tr>
                                            <td class="text-center fw-semibold"><?= $no++ ?></td>
                                            <td class="fw-semibold"><?= $item['uraian'] ?></td>
                                            <td class="text-end">
                                                <?= $item['penerimaan'] > 0 ? 'Rp ' . number_format($item['penerimaan'], 0, ',', '.') : '-' ?>
                                            </td>
                                            <td class="text-end">
                                                <?= $item['pengeluaran'] > 0 ? 'Rp ' . number_format($item['pengeluaran'], 0, ',', '.') : '-' ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr style="background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%); color: white;">
                                        <td class="text-center fw-bold" colspan="2">JUMLAH</td>
                                        <td class="text-end fw-bold">Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></td>
                                        <td class="text-end fw-bold">Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-grid animate-slide-up">
                <div class="chart-container">
                    <h4 class="chart-title">
                        <i class="fas fa-chart-line"></i>
                        Tren Penerimaan & Pengeluaran Bulanan
                    </h4>
                    <canvas id="trendChart" height="300"></canvas>
                </div>

                <div class="chart-container">
                    <h4 class="chart-title">
                        <i class="fas fa-chart-pie"></i>
                        Distribusi Pengeluaran
                    </h4>
                    <canvas id="pieChart" height="300"></canvas>
                </div>

                <div class="chart-container">
                    <h4 class="chart-title">
                        <i class="fas fa-chart-bar"></i>
                        Perbandingan September 2025
                    </h4>
                    <canvas id="comparisonChart" height="300"></canvas>
                </div>

                <div class="chart-container">
                    <h4 class="chart-title">
                        <i class="fas fa-balance-scale"></i>
                        Statistik Perkara Bulanan
                    </h4>
                    <canvas id="perkaraChart" height="300"></canvas>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="footer-grid animate-slide-up">
                <div class="footer-card">
                    <h4 class="footer-title">
                        <i class="fas fa-sticky-note"></i>
                        Catatan Perkara
                    </h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.5rem 0; border-bottom: 1px solid var(--gray-200);">
                            <strong>Perkara Masuk:</strong> <?= $perkara_masuk ?> perkara
                            <span class="badge badge-warning"><?= $perkara_prodeo_masuk ?> perkara prodeo</span>
                        </li>
                        <li style="padding: 0.5rem 0;">
                            <strong>Perkara Putus:</strong> <?= $perkara_putus ?> perkara
                            <span class="badge badge-success"><?= $perkara_prodeo_putus ?> perkara prodeo</span>
                        </li>
                    </ul>
                </div>

                <div class="footer-card">
                    <h4 class="footer-title">
                        <i class="fas fa-pen-fancy"></i>
                        Pengesahan
                    </h4>
                    <p class="text-center" style="margin-bottom: 2rem;">
                        <strong>Amuntai, 01 Oktober 2025</strong>
                    </p>
                    <div class="signature-section">
                        <div class="signature-block">
                            <div class="signature-title">Mengetahui,<br>Ketua</div>
                            <div class="signature-name">Bahrul Maji, S.H.I.</div>
                        </div>
                        <div class="signature-block">
                            <div class="signature-title">Panitera</div>
                            <div class="signature-name">H. Ahmad Ramli, S.H.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Chart configuration
        Chart.defaults.font.family = 'Inter';
        Chart.defaults.color = '#374151';

        // Trend Chart - Line Chart
        new Chart(document.getElementById('trendChart'), {
            type: 'line',
            data: {
                labels: <?= json_encode($bulan) ?>,
                datasets: [{
                    label: 'Penerimaan',
                    data: <?= json_encode($penerimaan_bulanan) ?>,
                    borderColor: 'rgb(16, 185, 129)',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Pengeluaran',
                    data: <?= json_encode($pengeluaran_bulanan) ?>,
                    borderColor: 'rgb(220, 38, 38)',
                    backgroundColor: 'rgba(220, 38, 38, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            font: {
                                weight: 600
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(17, 24, 39, 0.95)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        cornerRadius: 12,
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': Rp ' + new Intl.NumberFormat('id-ID').format(context.parsed.y);
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(229, 231, 235, 0.5)'
                        },
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    notation: 'compact',
                                    compactDisplay: 'short'
                                }).format(value);
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Pie Chart - Distribution
        const pengeluaranData = <?= json_encode(array_column($laporan, 'pengeluaran')) ?>;
        const pengeluaranLabels = <?= json_encode(array_column($laporan, 'uraian')) ?>;
        const filteredData = [];
        const filteredLabels = [];

        pengeluaranData.forEach((value, index) => {
            if (value > 0) {
                filteredData.push(value);
                filteredLabels.push(pengeluaranLabels[index]);
            }
        });

        new Chart(document.getElementById('pieChart'), {
            type: 'doughnut',
            data: {
                labels: filteredLabels,
                datasets: [{
                    data: filteredData,
                    backgroundColor: [
                        '#10b981', '#3b82f6', '#f59e0b', '#ef4444',
                        '#8b5cf6', '#06b6d4', '#f97316', '#84cc16'
                    ],
                    borderWidth: 3,
                    borderColor: '#ffffff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(17, 24, 39, 0.95)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        cornerRadius: 12,
                        callbacks: {
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = ((context.parsed / total) * 100).toFixed(1);
                                return context.label + ': Rp ' + new Intl.NumberFormat('id-ID').format(context.parsed) + ' (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });

        // Comparison Chart - Bar Chart
        new Chart(document.getElementById('comparisonChart'), {
            type: 'bar',
            data: {
                labels: ['Penerimaan', 'Pengeluaran', 'Saldo Akhir'],
                datasets: [{
                    label: 'Jumlah (Rp)',
                    data: [<?= $total_penerimaan ?>, <?= $total_pengeluaran ?>, <?= $saldo_akhir ?>],
                    backgroundColor: [
                        'rgba(16, 185, 129, 0.8)',
                        'rgba(220, 38, 38, 0.8)',
                        'rgba(59, 130, 246, 0.8)'
                    ],
                    borderColor: [
                        'rgb(16, 185, 129)',
                        'rgb(220, 38, 38)',
                        'rgb(59, 130, 246)'
                    ],
                    borderWidth: 2,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(17, 24, 39, 0.95)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        cornerRadius: 12,
                        callbacks: {
                            label: function(context) {
                                return 'Rp ' + new Intl.NumberFormat('id-ID').format(context.parsed.y);
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(229, 231, 235, 0.5)'
                        },
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    notation: 'compact',
                                    compactDisplay: 'short'
                                }).format(value);
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Perkara Chart - Bar Chart
        new Chart(document.getElementById('perkaraChart'), {
            type: 'bar',
            data: {
                labels: <?= json_encode($bulan) ?>,
                datasets: [{
                    label: 'Perkara Masuk',
                    data: <?= json_encode($perkara_masuk_bulanan) ?>,
                    backgroundColor: 'rgba(251, 191, 36, 0.8)',
                    borderColor: 'rgb(251, 191, 36)',
                    borderWidth: 2,
                    borderRadius: 6
                }, {
                    label: 'Perkara Putus',
                    data: <?= json_encode($perkara_putus_bulanan) ?>,
                    backgroundColor: 'rgba(59, 130, 246, 0.8)',
                    borderColor: 'rgb(59, 130, 246)',
                    borderWidth: 2,
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            font: {
                                weight: 600
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(17, 24, 39, 0.95)',
                        titleColor: 'white',
                        bodyColor: 'white',
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        cornerRadius: 12
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(229, 231, 235, 0.5)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Add scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe animated elements
        document.querySelectorCards('.animate-slide-up').forEach(element => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
            observer.observe(element);
        });
    </script>
</body>

</html>