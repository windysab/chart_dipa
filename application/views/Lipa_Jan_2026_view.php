<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($title ?? 'Laporan Perkara LIPA – Januari 2026'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.css" rel="stylesheet" />
    <style>
        :root {
            --primary-color: #1d4ed8;
            --secondary-color: #3b82f6;
            --accent-color: #60a5fa;
            --highlight-color: #059669;
            --background-color: #f0f9ff;
            --card-color: #ffffff;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            color: var(--text-dark);
            line-height: 1.6;
            margin: 0;
            min-height: 100vh;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 20px;
            color: white;
            box-shadow: var(--shadow);
            padding: 30px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "🎯";
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 3rem;
            opacity: 0.3;
        }

        .hero h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero .opacity-75 {
            font-size: 1.3rem;
            font-weight: 400;
            opacity: 0.9;
        }

        .hero .badge {
            background: rgba(255, 255, 255, 0.2) !important;
            backdrop-filter: blur(10px);
            color: white !important;
            padding: 15px 30px !important;
            border-radius: 50px !important;
            font-size: 1.2rem !important;
            font-weight: 600 !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
        }

        .new-year-indicator {
            position: absolute;
            bottom: 20px;
            right: 30px;
            background: rgba(255, 215, 0, 0.9);
            color: #8b5a00;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .metric-card {
            background: linear-gradient(135deg, var(--card-color), #f0f9ff);
            border: 0;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(29, 78, 216, 0.1);
        }

        .metric-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .metric-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
        }

        .metric-card .card-body {
            padding: 30px;
        }

        .metric-card .small {
            font-size: 1.1rem;
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .metric-card .h3 {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 8px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .section-card {
            background-color: var(--card-color);
            border: 0;
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
            border: 1px solid rgba(29, 78, 216, 0.1);
        }

        .sticky-th th {
            position: sticky;
            top: 0;
            z-index: 2;
            background: linear-gradient(135deg, rgba(29, 78, 216, 0.1), rgba(29, 78, 216, 0.05));
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 18px;
            text-align: center;
            border-bottom: 2px solid rgba(29, 78, 216, 0.2);
        }

        .table td {
            padding: 16px;
            text-align: center;
            border-bottom: 1px solid #f0f9ff;
            transition: var(--transition);
        }

        .table tr:hover td {
            background-color: rgba(29, 78, 216, 0.05);
        }

        .table tbody td:nth-child(2) {
            text-align: left;
            padding-left: 20px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .table tfoot tr {
            background: linear-gradient(135deg, rgba(29, 78, 216, 0.1), rgba(29, 78, 216, 0.05));
            font-weight: 700;
            color: var(--primary-color);
        }

        .table tfoot td {
            border-top: 2px solid var(--secondary-color);
        }

        .chart-box {
            min-height: 380px;
            padding: 25px;
        }

        .chart-box h6 {
            font-size: 1.3rem;
            color: var(--primary-color);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e0f2fe;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        canvas {
            width: 100% !important;
            height: 320px !important;
        }

        footer {
            color: #6c757d;
            font-size: .85rem;
        }

        .catatan-section {
            margin-top: 2rem;
        }

        .catatan-card {
            background: rgba(29, 78, 216, 0.05);
            border: 1px solid rgba(29, 78, 216, 0.15);
            border-radius: 16px;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .hero h3 {
                font-size: 2rem;
            }

            .hero .opacity-75 {
                font-size: 1.1rem;
            }

            .metric-card .h3 {
                font-size: 2.5rem;
            }

            .new-year-indicator {
                position: static;
                margin-top: 15px;
                display: inline-block;
            }
        }
    </style>
</head>

<body>
    <div class="container-xxl py-4">
        <!-- Header -->
        <div class="hero p-4 mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="mb-1 fw-bold">LAPORAN PERKARA LIPA JANUARI</h3>
                <div class="opacity-75">Statistik Perkara Awal Tahun 2026</div>
            </div>
            <div class="d-flex flex-column align-items-end">
                <span class="badge bg-light text-dark px-3 py-2 rounded-pill mb-2">Januari 2026</span>
                <span class="new-year-indicator">🎊 Tahun Baru</span>
            </div>
        </div>

        <!-- Metrics -->
        <?php $tot = $tot_img ?? []; ?>
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Sisa Bulan Lalu</div>
                        <div class="h3"><?= number_format($tot['sisa_lalu'] ?? 0, 0, ',', '.') ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Diterima Bulan Ini</div>
                        <div class="h3"><?= number_format($tot['diterima'] ?? 0, 0, ',', '.') ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Jumlah</div>
                        <div class="h3"><?= number_format($tot['jumlah'] ?? 0, 0, ',', '.') ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Sisa Akhir Bulan</div>
                        <div class="h3"><?= number_format($tot['sisa_akhir'] ?? 0, 0, ',', '.') ?></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="card section-card mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="lipa-table" class="table table-bordered table-hover align-middle">
                        <thead class="sticky-th">
                            <tr>
                                <th rowspan="2">No</th>
                                <th rowspan="2">Jenis Perkara</th>
                                <th colspan="2">Banyaknya Perkara</th>
                                <th colspan="8">Dicabut dan diputus dalam ini</th>
                                <th rowspan="2">Sisa akhir bulan ini</th>
                                <th colspan="3">LIPA 8</th>
                            </tr>
                            <tr>
                                <th>Sisa bulan lalu</th>
                                <th>Diterima bulan ini</th>
                                <th>Jumlah</th>
                                <th>Dicabut</th>
                                <th>Dikabulkan</th>
                                <th>Ditolak</th>
                                <th>Tidak diterima</th>
                                <th>Digugurkan</th>
                                <th>Dicoret dari register</th>
                                <th>Perdamaian</th>
                                <th>Dismissal</th>
                                <th>Jumlah lajur 6 s/d 13</th>
                                <th>Banding</th>
                                <th>Kasasi</th>
                                <th>PK</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rows = $rows ?? [];
                            $kategori = $kategori ?? [];
                            for ($i = 0; $i < count($kategori); $i++):
                                $r = $rows[$i] ?? array_fill(0, 16, 0);
                            ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= htmlspecialchars($kategori[$i]) ?></td>
                                    <?php for ($j = 0; $j < 16; $j++): ?>
                                        <td><?= $r[$j] == 0 ? '-' : $r[$j] ?></td>
                                    <?php endfor; ?>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"><strong>JUMLAH</strong></td>
                                <td><strong><?= number_format($tot['sisa_lalu'] ?? 0, 0, ',', '.') ?></strong></td>
                                <td><strong><?= number_format($tot['diterima'] ?? 0, 0, ',', '.') ?></strong></td>
                                <td><strong><?= number_format($tot['jumlah'] ?? 0, 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['dicabut'] ?? 0) == 0 ? '-' : number_format($tot['dicabut'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= number_format($tot['dikabulkan'] ?? 0, 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['ditolak'] ?? 0) == 0 ? '-' : number_format($tot['ditolak'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['tidak_diterima'] ?? 0) == 0 ? '-' : number_format($tot['tidak_diterima'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['digugurkan'] ?? 0) == 0 ? '-' : number_format($tot['digugurkan'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['dicoret'] ?? 0) == 0 ? '-' : number_format($tot['dicoret'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['perdamaian'] ?? 0) == 0 ? '-' : number_format($tot['perdamaian'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['dismissal'] ?? 0) == 0 ? '-' : number_format($tot['dismissal'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= number_format($tot['jumlah_laju_6_13'] ?? 0, 0, ',', '.') ?></strong></td>
                                <td><strong><?= number_format($tot['sisa_akhir'] ?? 0, 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['banding'] ?? 0) == 0 ? '-' : number_format($tot['banding'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['kasasi'] ?? 0) == 0 ? '-' : number_format($tot['kasasi'], 0, ',', '.') ?></strong></td>
                                <td><strong><?= ($tot['pk'] ?? 0) == 0 ? '-' : number_format($tot['pk'], 0, ',', '.') ?></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card section-card h-100">
                    <div class="card-body chart-box">
                        <h6 class="mb-3"><i class="fas fa-chart-pie"></i> Distribusi Perkara Diterima</h6>
                        <canvas id="pieDistribusi"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card section-card h-100">
                    <div class="card-body chart-box">
                        <h6 class="mb-3"><i class="fas fa-chart-bar"></i> Tren Perkara Tahun 2026</h6>
                        <canvas id="barTrend"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card section-card mb-5">
            <div class="card-body chart-box">
                <h6 class="mb-3"><i class="fas fa-chart-line"></i> Perbandingan Bulanan 2026: Masuk vs Selesai vs Sisa</h6>
                <canvas id="lineCompare"></canvas>
            </div>
        </div>

        <!-- Catatan Section -->
        <div class="row catatan-section mb-4">
            <div class="col-12">
                <div class="catatan-card">
                    <h6 class="mb-3 text-center" style="color: var(--primary-color); font-weight: 700;">
                        <i class="fas fa-info-circle me-2"></i>CATATAN LAPORAN JANUARI 2026
                    </h6>
                    <div class="row">
                        <div class="col-md-4">
                            <p><strong>Periode Pelaporan:</strong><br>Bulan Januari 2026</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Total Perkara Masuk:</strong><br><?= number_format($tot['diterima'] ?? 0, 0, ',', '.') ?> perkara</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Tingkat Penyelesaian:</strong><br><?= $tot['jumlah'] > 0 ? number_format(($tot['jumlah_laju_6_13'] / $tot['jumlah']) * 100, 1) : 0 ?>%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="text-center">&copy; <?= date('Y'); ?> PA Amuntai</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                new DataTable('#lipa-table', {
                    responsive: true,
                    paging: false,
                    searching: false,
                    info: false,
                    order: []
                });
            } catch (e) {}

            const names = <?= json_encode($kategori, JSON_UNESCAPED_UNICODE); ?> || [];
            const rows = <?= json_encode($rows, JSON_UNESCAPED_UNICODE); ?> || [];

            // ===== PIE: Distribusi diterima per jenis (pakai kolom index 1)
            const diterima = rows.map(r => Array.isArray(r) ? (r[1] || 0) : 0);
            let pieData = names.map((n, i) => ({
                label: n,
                val: diterima[i] || 0
            })).filter(x => x.val > 0);
            if (pieData.length === 0) {
                pieData = [{
                    label: 'Tidak ada data',
                    val: 1
                }];
            }
            new Chart(document.getElementById('pieDistribusi'), {
                type: 'doughnut',
                data: {
                    labels: pieData.map(x => x.label),
                    datasets: [{
                        data: pieData.map(x => x.val),
                        backgroundColor: [
                            '#1d4ed8', '#3b82f6', '#60a5fa', '#93c5fd', '#dbeafe',
                            '#059669', '#10b981', '#34d399', '#6ee7b7', '#a7f3d0',
                            '#dc2626', '#ef4444', '#f87171', '#fca5a5', '#fecaca'
                        ],
                        borderWidth: 0,
                        hoverOffset: 20
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true
                            }
                        }
                    },
                    cutout: '60%',
                }
            });

            // ===== BAR: Tren penyelesaian (Tahun 2026) – seri dari controller
            const bulanTahun = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const tot = <?= json_encode($tot_img ?? [], JSON_UNESCAPED_UNICODE); ?> || {};
            const tMasuk = <?= isset($series_masuk) ? json_encode($series_masuk) : 'null' ?>;
            const tSelesai = <?= isset($series_selesai) ? json_encode($series_selesai) : 'null' ?>;
            const tSisa = <?= isset($series_sisa) ? json_encode($series_sisa) : 'null' ?>;

            function makeSeries(src, key) {
                if (Array.isArray(src) && src.length === 12) return src;
                // Default data dengan proyeksi tahun 2026
                const defaultData = {
                    'diterima': [111, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    'jumlah_laju_6_13': [25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    'sisa_akhir': [91, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                };
                return defaultData[key] || new Array(12).fill(0);
            }
            const seriMasuk = makeSeries(tMasuk, 'diterima');
            const seriSelesai = makeSeries(tSelesai, 'jumlah_laju_6_13');
            const seriSisa = makeSeries(tSisa, 'sisa_akhir');

            new Chart(document.getElementById('barTrend'), {
                type: 'bar',
                data: {
                    labels: bulanTahun,
                    datasets: [{
                            label: 'Perkara Masuk',
                            data: seriMasuk,
                            backgroundColor: 'rgba(29, 78, 216, 0.8)',
                            borderColor: '#1d4ed8',
                            borderWidth: 2,
                            borderRadius: 8,
                            borderSkipped: false
                        },
                        {
                            label: 'Perkara Selesai',
                            data: seriSelesai,
                            backgroundColor: 'rgba(59, 130, 246, 0.8)',
                            borderColor: '#3b82f6',
                            borderWidth: 2,
                            borderRadius: 8,
                            borderSkipped: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        }
                    }
                }
            });

            // ===== LINE: Perbandingan bulanan
            new Chart(document.getElementById('lineCompare'), {
                type: 'line',
                data: {
                    labels: bulanTahun,
                    datasets: [{
                            label: 'Perkara Masuk',
                            data: seriMasuk,
                            borderColor: '#1d4ed8',
                            backgroundColor: 'rgba(29, 78, 216, 0.1)',
                            tension: 0.4,
                            borderWidth: 3,
                            pointBackgroundColor: '#1d4ed8',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 3,
                            pointRadius: 6,
                            pointHoverRadius: 8
                        },
                        {
                            label: 'Perkara Selesai',
                            data: seriSelesai,
                            borderColor: '#059669',
                            backgroundColor: 'rgba(5, 150, 105, 0.1)',
                            tension: 0.4,
                            borderWidth: 3,
                            pointBackgroundColor: '#059669',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 3,
                            pointRadius: 6,
                            pointHoverRadius: 8
                        },
                        {
                            label: 'Sisa Perkara',
                            data: seriSisa,
                            borderColor: '#dc2626',
                            backgroundColor: 'rgba(220, 38, 38, 0.1)',
                            tension: 0.4,
                            borderWidth: 3,
                            pointBackgroundColor: '#dc2626',
                            pointBorderColor: '#ffffff',
                            pointBorderWidth: 3,
                            pointRadius: 6,
                            pointHoverRadius: 8
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                usePointStyle: true,
                                padding: 20
                            }
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });
        });
    </script>
</body>

</html>