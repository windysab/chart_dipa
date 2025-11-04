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
            --primary: #e97000;
            --primary-light: #f59e0b;
            --primary-dark: #d97706;
            --secondary: #059669;
            --secondary-light: #10b981;
            --accent: #dc2626;
            --accent-light: #ef4444;
            --warning: #f59e0b;
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
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
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
                radial-gradient(circle at 20% 80%, rgba(245, 158, 11, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(217, 119, 6, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(233, 112, 0, 0.1) 0%, transparent 50%);
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
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 50%, var(--warning) 100%);
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
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
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

        .stat-card.penerimaan::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary) 0%, var(--secondary-light) 100%);
        }

        .stat-card.pengeluaran::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%);
        }

        .stat-card.saldo::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
        }

        .stat-card.perkara::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--warning) 0%, var(--primary-dark) 100%);
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
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
        }

        .stat-icon.saldo {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
        }

        .stat-icon.perkara {
            background: linear-gradient(135deg, var(--warning) 0%, var(--primary-dark) 100%);
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
            height: 400px;
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

        .chart-wrapper {
            position: relative;
            height: 300px;
            width: 100%;
        }

        .signature-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            text-align: center;
            margin-top: 3rem;
        }

        .signature-block {
            padding: 2rem;
        }

        .signature-title {
            font-size: 1rem;
            color: var(--gray-600);
            margin-bottom: 3rem;
            line-height: 1.5;
        }

        .signature-name {
            font-weight: 700;
            color: var(--gray-900);
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
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
                gap: 1.5rem;
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

            .chart-container {
                height: 350px;
                padding: 1.5rem;
            }

            .chart-wrapper {
                height: 250px;
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
                    <div class="stat-sublabel>
						Bank: Rp <?= number_format($saldo_bank, 0, ',', '.') ?> |
						Tunai: Rp <?= number_format($saldo_kas_tunai, 0, ',', '.') ?>
					</div>
				</div>

				<div class=" stat-card perkara">
                        <div class="stat-icon perkara">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="stat-value"><?= $perkara_masuk ?> / <?= $perkara_putus ?></div>
                        <div class="stat-label">Perkara Masuk / Putus</div>
                        <div class="stat-sublabel>
						Prodeo: <?= $perkara_prodeo_masuk ?> / <?= $perkara_prodeo_putus ?>
					</div>
				</div>
			</div>

			<!-- Main Table -->
			<div class=" content-grid animate-slide-up">
                            <div class="section-card">
                                <div class="section-header">
                                    <h3 class="section-title">
                                        <i class="fas fa-table"></i>
                                        Rincian Laporan Keuangan Oktober 2025
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
                                    Tren Penerimaan & Pengeluaran
                                </h4>
                                <div class="chart-wrapper">
                                    <canvas id="trendChart"></canvas>
                                </div>
                            </div>

                            <div class="chart-container">
                                <h4 class="chart-title">
                                    <i class="fas fa-chart-pie"></i>
                                    Distribusi Pengeluaran Oktober
                                </h4>
                                <div class="chart-wrapper">
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>

                            <div class="chart-container">
                                <h4 class="chart-title">
                                    <i class="fas fa-chart-bar"></i>
                                    Perbandingan Oktober
                                </h4>
                                <div class="chart-wrapper">
                                    <canvas id="comparisonChart"></canvas>
                                </div>
                            </div>

                            <div class="chart-container">
                                <h4 class="chart-title">
                                    <i class="fas fa-balance-scale"></i>
                                    Statistik Perkara (Jan-Okt)
                                </h4>
                                <div class="chart-wrapper">
                                    <canvas id="perkaraChart"></canvas>
                                </div>
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
                                        <span style="background: var(--warning); color: white; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem; margin-left: 0.5rem;"><?= $perkara_prodeo_masuk ?> perkara prodeo</span>
                                    </li>
                                    <li style="padding: 0.5rem 0;">
                                        <strong>Perkara Putus:</strong> <?= $perkara_putus ?> perkara
                                        <span style="background: var(--success); color: white; padding: 0.25rem 0.5rem; border-radius: 0.25rem; font-size: 0.8rem; margin-left: 0.5rem;"><?= $perkara_prodeo_putus ?> perkara prodeo</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="footer-card">
                                <h4 class="footer-title">
                                    <i class="fas fa-pen-fancy"></i>
                                    Pengesahan
                                </h4>
                                <p class="text-center" style="margin-bottom: 2rem;">
                                    <strong>Amuntai, 03 November 2025</strong>
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
                    Chart.defaults.responsive = true;
                    Chart.defaults.maintainAspectRatio = false;

                    // Data preparation
                    const chartData = {
                        bulan: <?= json_encode($bulan) ?>,
                        penerimaan: <?= json_encode($penerimaan_bulanan) ?>,
                        pengeluaran: <?= json_encode($pengeluaran_bulanan) ?>,
                        perkaraMasuk: <?= json_encode($perkara_masuk_bulanan) ?>,
                        perkaraPutus: <?= json_encode($perkara_putus_bulanan) ?>
                    };

                    const laporanData = <?= json_encode($laporan) ?>;
                    const pengeluaranOnly = laporanData
                        .filter(item => item.pengeluaran > 0)
                        .map(item => ({
                            label: item.uraian,
                            value: item.pengeluaran
                        }));

                    // Common chart options
                    const commonOptions = {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            tooltip: {
                                backgroundColor: 'rgba(17, 24, 39, 0.95)',
                                titleColor: 'white',
                                bodyColor: 'white',
                                borderColor: 'rgba(255, 255, 255, 0.1)',
                                borderWidth: 1,
                                cornerRadius: 12
                            }
                        }
                    };

                    // 1. Trend Chart
                    new Chart(document.getElementById('trendChart'), {
                        type: 'line',
                        data: {
                            labels: chartData.bulan,
                            datasets: [{
                                label: 'Penerimaan',
                                data: chartData.penerimaan,
                                borderColor: '#10b981',
                                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                                borderWidth: 3,
                                fill: true,
                                tension: 0.4
                            }, {
                                label: 'Pengeluaran',
                                data: chartData.pengeluaran,
                                borderColor: '#dc2626',
                                backgroundColor: 'rgba(220, 38, 38, 0.1)',
                                borderWidth: 3,
                                fill: true,
                                tension: 0.4
                            }]
                        },
                        options: {
                            ...commonOptions,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        color: 'rgba(229, 231, 235, 0.5)'
                                    },
                                    ticks: {
                                        callback: value => 'Rp ' + new Intl.NumberFormat('id-ID', {
                                            notation: 'compact',
                                            compactDisplay: 'short'
                                        }).format(value)
                                    }
                                },
                                x: {
                                    grid: {
                                        display: false
                                    }
                                }
                            },
                            plugins: {
                                ...commonOptions.plugins,
                                legend: {
                                    position: 'top'
                                },
                                tooltip: {
                                    ...commonOptions.plugins.tooltip,
                                    callbacks: {
                                        label: context => context.dataset.label + ': Rp ' +
                                            new Intl.NumberFormat('id-ID').format(context.parsed.y)
                                    }
                                }
                            }
                        }
                    });

                    // 2. Pie Chart
                    new Chart(document.getElementById('pieChart'), {
                        type: 'doughnut',
                        data: {
                            labels: pengeluaranOnly.map(item => item.label.length > 20 ?
                                item.label.substring(0, 20) + '...' : item.label),
                            datasets: [{
                                data: pengeluaranOnly.map(item => item.value),
                                backgroundColor: [
                                    '#f59e0b', '#dc2626', '#10b981', '#3b82f6',
                                    '#8b5cf6', '#06b6d4', '#f97316', '#84cc16'
                                ],
                                borderWidth: 3,
                                borderColor: '#ffffff'
                            }]
                        },
                        options: {
                            ...commonOptions,
                            plugins: {
                                ...commonOptions.plugins,
                                legend: {
                                    position: 'bottom',
                                    labels: {
                                        usePointStyle: true,
                                        padding: 15,
                                        font: {
                                            size: 11
                                        }
                                    }
                                },
                                tooltip: {
                                    ...commonOptions.plugins.tooltip,
                                    callbacks: {
                                        label: context => {
                                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                            const percentage = ((context.parsed / total) * 100).toFixed(1);
                                            return context.label + ': Rp ' +
                                                new Intl.NumberFormat('id-ID').format(context.parsed) +
                                                ' (' + percentage + '%)';
                                        }
                                    }
                                }
                            }
                        }
                    });

                    // 3. Comparison Chart
                    new Chart(document.getElementById('comparisonChart'), {
                        type: 'bar',
                        data: {
                            labels: ['Penerimaan', 'Pengeluaran', 'Saldo'],
                            datasets: [{
                                data: [<?= $total_penerimaan ?>, <?= $total_pengeluaran ?>, <?= $saldo_akhir ?>],
                                backgroundColor: ['#10b981', '#dc2626', '#f59e0b'],
                                borderColor: ['#059669', '#b91c1c', '#d97706'],
                                borderWidth: 2,
                                borderRadius: 8
                            }]
                        },
                        options: {
                            ...commonOptions,
                            plugins: {
                                ...commonOptions.plugins,
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    ...commonOptions.plugins.tooltip,
                                    callbacks: {
                                        label: context => 'Rp ' + new Intl.NumberFormat('id-ID').format(context.parsed.y)
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
                                        callback: value => 'Rp ' + new Intl.NumberFormat('id-ID', {
                                            notation: 'compact'
                                        }).format(value)
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

                    // 4. Perkara Chart
                    new Chart(document.getElementById('perkaraChart'), {
                        type: 'bar',
                        data: {
                            labels: chartData.bulan,
                            datasets: [{
                                label: 'Masuk',
                                data: chartData.perkaraMasuk,
                                backgroundColor: '#fbbf24',
                                borderColor: '#f59e0b',
                                borderWidth: 2,
                                borderRadius: 6
                            }, {
                                label: 'Putus',
                                data: chartData.perkaraPutus,
                                backgroundColor: '#3b82f6',
                                borderColor: '#1d4ed8',
                                borderWidth: 2,
                                borderRadius: 6
                            }]
                        },
                        options: {
                            ...commonOptions,
                            plugins: {
                                ...commonOptions.plugins,
                                legend: {
                                    position: 'top',
                                    labels: {
                                        usePointStyle: true
                                    }
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

                    // Animation observer
                    const observerOptions = {
                        threshold: 0.1,
                        rootMargin: '0px 0px -50px 0px'
                    };

                    const observer = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                entry.target.style.opacity = '1';
                                entry.target.style.transform = 'translateY(0)';
                            }
                        });
                    }, observerOptions);

                    document.querySelectorAll('.animate-slide-up').forEach(element => {
                        element.style.opacity = '0';
                        element.style.transform = 'translateY(30px)';
                        element.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                        observer.observe(element);
                    });
                </script>
</body>

</html>