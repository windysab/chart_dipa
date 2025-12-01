<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($judul ?? 'Laporan Keuangan Perkara November 2025'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/r-3.0.2/datatables.min.css" rel="stylesheet" />
    <style>
        :root {
            --primary-color: #7c3aed;
            --secondary-color: #a855f7;
            --accent-color: #8b5cf6;
            --highlight-color: #10b981;
            --background-color: #f8fafc;
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
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
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

        .metric-card {
            background: linear-gradient(135deg, var(--card-color), #f1f5f9);
            border: 0;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(124, 58, 237, 0.1);
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
            border: 1px solid rgba(124, 58, 237, 0.1);
        }

        .sticky-th th {
            position: sticky;
            top: 0;
            z-index: 2;
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(124, 58, 237, 0.05));
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 18px;
            text-align: center;
            border-bottom: 2px solid rgba(124, 58, 237, 0.2);
        }

        .table td {
            padding: 16px;
            text-align: center;
            border-bottom: 1px solid #f1f5f9;
            transition: var(--transition);
        }

        .table tr:hover td {
            background-color: rgba(124, 58, 237, 0.05);
        }

        .table tbody td:nth-child(2) {
            text-align: left;
            padding-left: 20px;
            font-weight: 600;
            color: var(--primary-color);
        }

        .table tfoot tr {
            background: linear-gradient(135deg, rgba(124, 58, 237, 0.1), rgba(124, 58, 237, 0.05));
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
            border-bottom: 2px solid #e2e8f0;
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

        .signature-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            text-align: center;
            margin-top: 2rem;
        }

        .signature-block {
            padding: 2rem;
            background: rgba(124, 58, 237, 0.05);
            border-radius: 16px;
            border: 1px solid rgba(124, 58, 237, 0.1);
        }

        .signature-title {
            font-size: 1rem;
            color: var(--text-light);
            margin-bottom: 3rem;
            line-height: 1.5;
        }

        .signature-name {
            font-weight: 700;
            color: var(--text-dark);
            border-bottom: 3px solid var(--primary-color);
            padding-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .badge-warning {
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--accent-color) 100%);
        }

        .badge-success {
            background: linear-gradient(135deg, var(--highlight-color) 0%, #059669 100%);
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

            .signature-section {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-xxl py-4">
        <!-- Header -->
        <div class="hero p-4 mb-4 d-flex justify-content-between align-items-center">
            <div>
                <h3 class="mb-1 fw-bold">LAPORAN KEUANGAN PERKARA NOVEMBER</h3>
                <div class="opacity-75">Statistik Keuangan November 2025</div>
            </div>
            <span class="badge bg-light text-dark px-3 py-2 rounded-pill">November 2025</span>
        </div>

        <!-- Metrics -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Total Penerimaan</div>
                        <div class="h3">Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Total Pengeluaran</div>
                        <div class="h3">Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Saldo Akhir</div>
                        <div class="h3">Rp <?= number_format($saldo_akhir, 0, ',', '.') ?></div>
                        <div class="small text-muted">
                            Bank: Rp <?= number_format($saldo_bank, 0, ',', '.') ?> |
                            Tunai: Rp <?= number_format($saldo_kas_tunai, 0, ',', '.') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card metric-card">
                    <div class="card-body">
                        <div class="small">Perkara Masuk/Putus</div>
                        <div class="h3"><?= $perkara_masuk ?> / <?= $perkara_putus ?></div>
                        <div class="small text-muted">
                            Prodeo: <?= $perkara_prodeo_masuk ?> / <?= $perkara_prodeo_putus ?>
                        </div>
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
                                <th style="min-width:48px">No</th>
                                <th class="text-start" style="min-width:260px">Uraian</th>
                                <th>Penerimaan (Rp)</th>
                                <th>Pengeluaran (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($laporan as $item): ?>
                                <tr>
                                    <td class="text-center"><?= $no++ ?></td>
                                    <td><?= htmlspecialchars($item['uraian']) ?></td>
                                    <td class="text-center"><?= $item['penerimaan'] ? 'Rp ' . number_format($item['penerimaan'], 0, ',', '.') : '–' ?></td>
                                    <td class="text-center"><?= $item['pengeluaran'] ? 'Rp ' . number_format($item['pengeluaran'], 0, ',', '.') : '–' ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot class="fw-bold">
                            <tr>
                                <td></td>
                                <td><strong>JUMLAH</strong></td>
                                <td class="text-center"><strong>Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></strong></td>
                                <td class="text-center"><strong>Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></strong></td>
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
                        <h6 class="mb-3"><i class="fas fa-chart-pie"></i> Distribusi Pengeluaran November</h6>
                        <canvas id="pieDistribusi"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card section-card h-100">
                    <div class="card-body chart-box">
                        <h6 class="mb-3"><i class="fas fa-chart-bar"></i> Tren Keuangan (Jan-Nov)</h6>
                        <canvas id="barTrend"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="card section-card h-100">
                    <div class="card-body chart-box">
                        <h6 class="mb-3"><i class="fas fa-chart-line"></i> Perbandingan Bulanan</h6>
                        <canvas id="lineCompare"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card section-card h-100">
                    <div class="card-body chart-box">
                        <h6 class="mb-3"><i class="fas fa-balance-scale"></i> Statistik Perkara (Jan-Nov)</h6>
                        <canvas id="perkaraChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="row g-3 mb-5">
            <div class="col-md-6">
                <div class="card section-card">
                    <div class="card-body">
                        <h5 class="mb-3"><i class="fas fa-sticky-note"></i> Catatan Perkara November 2025</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <strong>Perkara Masuk:</strong> <?= $perkara_masuk ?> perkara
                                <span class="badge badge-warning ms-2"><?= $perkara_prodeo_masuk ?> perkara prodeo</span>
                            </li>
                            <li>
                                <strong>Perkara Putus:</strong> <?= $perkara_putus ?> perkara
                                <span class="badge badge-success ms-2"><?= $perkara_prodeo_putus ?> perkara prodeo</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card section-card">
                    <div class="card-body">
                        <h5 class="mb-3"><i class="fas fa-pen-fancy"></i> Pengesahan Laporan</h5>
                        <p class="text-center mb-3">
                            <strong>Amuntai, 01 Desember 2025</strong>
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

            const laporanData = <?= json_encode($laporan, JSON_UNESCAPED_UNICODE); ?> || [];
            const chartData = {
                bulan: <?= json_encode($bulan) ?>,
                penerimaan: <?= json_encode($penerimaan_bulanan) ?>,
                pengeluaran: <?= json_encode($pengeluaran_bulanan) ?>,
                perkaraMasuk: <?= json_encode($perkara_masuk_bulanan) ?>,
                perkaraPutus: <?= json_encode($perkara_putus_bulanan) ?>
            };

            // ===== PIE: Distribusi pengeluaran
            let pengeluaranData = laporanData
                .filter(item => item.pengeluaran > 0)
                .map(item => ({
                    label: item.uraian.length > 25 ? item.uraian.substring(0, 25) + '...' : item.uraian,
                    val: item.pengeluaran
                }));

            if (pengeluaranData.length === 0) {
                pengeluaranData = [{
                    label: 'Tidak ada data',
                    val: 1
                }];
            }

            new Chart(document.getElementById('pieDistribusi'), {
                type: 'doughnut',
                data: {
                    labels: pengeluaranData.map(x => x.label),
                    datasets: [{
                        data: pengeluaranData.map(x => x.val),
                        backgroundColor: [
                            '#7c3aed', '#a855f7', '#8b5cf6', '#10b981', '#3b82f6',
                            '#f97316', '#06b6d4', '#84cc16', '#f43f5e', '#6366f1',
                            '#14b8a6', '#d946ef', '#22c55e', '#eab308', '#f97316'
                        ],
                        borderWidth: 3,
                        borderColor: '#fff',
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
                                usePointStyle: true,
                                padding: 15,
                                font: {
                                    size: 11,
                                    weight: '600'
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#7c3aed',
                            borderWidth: 1,
                            cornerRadius: 8,
                            callbacks: {
                                label: function(context) {
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = ((context.parsed / total) * 100).toFixed(1);
                                    return `${context.label}: Rp ${new Intl.NumberFormat('id-ID').format(context.parsed)} (${percentage}%)`;
                                }
                            }
                        }
                    },
                    cutout: '60%',
                }
            });

            // ===== BAR: Tren keuangan bulanan
            new Chart(document.getElementById('barTrend'), {
                type: 'bar',
                data: {
                    labels: chartData.bulan,
                    datasets: [{
                        label: 'Penerimaan',
                        data: chartData.penerimaan,
                        backgroundColor: 'rgba(16, 185, 129, 0.8)',
                        borderColor: '#10b981',
                        borderWidth: 0,
                        borderRadius: 8,
                        borderSkipped: false,
                    }, {
                        label: 'Pengeluaran',
                        data: chartData.pengeluaran,
                        backgroundColor: 'rgba(124, 58, 237, 0.8)',
                        borderColor: '#7c3aed',
                        borderWidth: 0,
                        borderRadius: 8,
                        borderSkipped: false,
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
                                    size: 12,
                                    weight: '600'
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#7c3aed',
                            borderWidth: 1,
                            cornerRadius: 8,
                            callbacks: {
                                label: function(context) {
                                    return `${context.dataset.label}: Rp ${new Intl.NumberFormat('id-ID').format(context.parsed.y)}`;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah (Rupiah)',
                                font: {
                                    size: 14,
                                    weight: '600'
                                },
                                color: '#7c3aed'
                            },
                            grid: {
                                color: 'rgba(124, 58, 237, 0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    weight: '500'
                                },
                                color: '#64748b',
                                callback: value => 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    notation: 'compact'
                                }).format(value)
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    weight: '600'
                                },
                                color: '#7c3aed'
                            }
                        }
                    }
                }
            });

            // ===== LINE: Perbandingan bulanan
            new Chart(document.getElementById('lineCompare'), {
                type: 'line',
                data: {
                    labels: chartData.bulan,
                    datasets: [{
                        label: 'Penerimaan',
                        data: chartData.penerimaan,
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#10b981',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 3,
                        pointRadius: 6,
                        pointHoverRadius: 8,
                        borderWidth: 3
                    }, {
                        label: 'Pengeluaran',
                        data: chartData.pengeluaran,
                        borderColor: '#7c3aed',
                        backgroundColor: 'rgba(124, 58, 237, 0.1)',
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#7c3aed',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 3,
                        pointRadius: 6,
                        pointHoverRadius: 8,
                        borderWidth: 3
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
                                padding: 20,
                                font: {
                                    size: 14,
                                    weight: '600'
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(124, 58, 237, 0.9)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#7c3aed',
                            borderWidth: 2,
                            cornerRadius: 8,
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Jumlah (Rupiah)',
                                font: {
                                    size: 14,
                                    weight: '600'
                                },
                                color: '#7c3aed'
                            },
                            grid: {
                                color: 'rgba(124, 58, 237, 0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    weight: '500'
                                },
                                color: '#64748b',
                                callback: value => 'Rp ' + new Intl.NumberFormat('id-ID', {
                                    notation: 'compact'
                                }).format(value)
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(124, 58, 237, 0.1)'
                            },
                            ticks: {
                                font: {
                                    size: 11,
                                    weight: '600'
                                },
                                color: '#7c3aed'
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index'
                    }
                }
            });

            // ===== BAR: Statistik perkara
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
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
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
                                color: 'rgba(124, 58, 237, 0.1)'
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
        });
    </script>
</body>

</html>