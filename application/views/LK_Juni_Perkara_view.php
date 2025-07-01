<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Perkara - Juni 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #388e3c;
            --primary-dark: #256029;
            --primary-light: #c8e6c9;
            --accent-color: #ffb300;
            --accent-dark: #ff6f00;
            --text-primary: #212121;
            --text-secondary: #757575;
            --text-white: #ffffff;
            --background: #f5f5f5;
            --card-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --border-radius: 12px;
            --header-gradient: linear-gradient(135deg, #388e3c, #43a047);
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: var(--background); color: var(--text-primary); line-height: 1.6; }
        .container { max-width: 1200px; margin: 0 auto; padding: 2rem; }
        .header { background: var(--header-gradient); color: var(--text-white); border-radius: var(--border-radius); padding: 2rem; margin-bottom: 2rem; text-align: center; box-shadow: var(--card-shadow); position: relative; overflow: hidden; }
        .header::before { content: ""; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%); pointer-events: none; }
        .header h1 { font-size: 2rem; margin-bottom: 0.5rem; font-weight: 600; }
        .header h2 { font-size: 1.5rem; font-weight: 500; margin-bottom: 0.5rem; }
        .header h3 { font-size: 1.25rem; font-weight: 400; }
        .lipa-badge { position: absolute; top: 1.5rem; right: 1.5rem; background-color: var(--accent-color); color: var(--text-primary); padding: 0.5rem 1rem; border-radius: 30px; font-weight: bold; font-size: 0.9rem; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .summary-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
        .summary-card { background: white; border-radius: var(--border-radius); padding: 1.5rem; box-shadow: var(--card-shadow); transition: var(--transition); display: flex; flex-direction: column; align-items: center; text-align: center; }
        .summary-card:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.12); }
        .summary-card-icon { width: 60px; height: 60px; background: var(--primary-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; }
        .summary-card-icon i { font-size: 1.75rem; color: var(--primary-dark); }
        .summary-card h3 { font-size: 1rem; color: var(--text-secondary); margin-bottom: 0.5rem; font-weight: 500; }
        .summary-card .amount { font-size: 1.75rem; font-weight: 700; color: var(--primary-dark); margin-bottom: 0.5rem; }
        .summary-card .trend { color: #4CAF50; font-size: 0.9rem; display: flex; align-items: center; gap: 0.25rem; }
        .summary-card .trend.negative { color: #F44336; }
        .financial-table-container { background: white; border-radius: var(--border-radius); padding: 2rem; box-shadow: var(--card-shadow); margin-bottom: 2rem; overflow: hidden; }
        .table-title { font-size: 1.25rem; color: var(--primary-dark); margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; }
        .financial-table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        .financial-table th, .financial-table td { padding: 1rem; text-align: left; border-bottom: 1px solid #eeeeee; }
        .financial-table th { font-weight: 600; color: var(--text-secondary); text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px; }
        .financial-table td:nth-child(3), .financial-table td:nth-child(4) { text-align: right; font-family: 'Consolas', monospace; }
        .financial-table tr:hover { background-color: #f9f9f9; }
        .financial-table .empty-cell { color: #bbb; font-style: italic; }
        .financial-table .total-row { font-weight: 600; color: var(--text-primary); }
        .financial-table .total-row td { border-top: 2px solid var(--primary-light); border-bottom: 2px solid var(--primary-light); }
        .financial-table .saldo-row { background-color: #f9f9f9; font-weight: 500; }
        .charts-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 1.5rem; margin-bottom: 2rem; }
        .chart-container { background: white; border-radius: var(--border-radius); padding: 2rem; box-shadow: var(--card-shadow); }
        .chart-title { font-size: 1.1rem; color: var(--primary-dark); margin-bottom: 1.5rem; text-align: center; }
        .chart-wrapper { height: 300px; width: 100%; }
        .footer-section { display: flex; justify-content: space-between; margin-top: 3rem; flex-wrap: wrap; gap: 2rem; }
        .stats-card { background: white; border-radius: var(--border-radius); padding: 1.5rem; box-shadow: var(--card-shadow); flex: 1 1 300px; }
        .stats-card h4 { font-size: 1.1rem; color: var(--primary-dark); margin-bottom: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid var(--primary-light); }
        .stats-list { list-style-type: none; }
        .stats-list li { margin-bottom: 0.75rem; display: flex; align-items: center; gap: 0.75rem; }
        .stats-list i { color: var(--primary-color); font-size: 1.1rem; }
        .signature-card { background: white; border-radius: var(--border-radius); padding: 1.5rem; box-shadow: var(--card-shadow); flex: 1 1 300px; text-align: center; }
        .signature-card h4 { font-size: 1.1rem; color: var(--primary-dark); margin-bottom: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid var(--primary-light); }
        .signature-date { text-align: right; margin-bottom: 2rem; color: var(--text-secondary); }
        .signature-boxes { display: flex; justify-content: space-around; margin-top: 1rem; }
        .signature-box { flex: 1; max-width: 45%; }
        .signature-title { font-weight: 600; margin-bottom: 0.5rem; }
        .signature-line { width: 80%; height: 1px; background: #ddd; margin: 1.5rem auto 1rem; }
        .signature-name { font-weight: 600; margin-bottom: 0.25rem; }
        .signature-nip { font-size: 0.8rem; color: var(--text-secondary); }
        @media (max-width: 768px) { .container { padding: 1rem; } .header h1 { font-size: 1.5rem; } .header h2, .header h3 { font-size: 1.2rem; } .charts-grid { grid-template-columns: 1fr; } .signature-boxes { flex-direction: column; gap: 2rem; } .signature-box { max-width: 100%; } }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LAPORAN KEUANGAN PERKARA</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <h3>BULAN JUNI 2025</h3>
            <div class="lipa-badge">LIPA 7a</div>
        </div>
        <div class="summary-grid">
            <div class="summary-card">
                <div class="summary-card-icon"><i class="fas fa-wallet"></i></div>
                <h3>Total Penerimaan</h3>
                <div class="amount">Rp 36.913.000</div>
                <div class="trend"><i class="fas fa-arrow-up"></i> 4.1% dari bulan lalu</div>
            </div>
            <div class="summary-card">
                <div class="summary-card-icon"><i class="fas fa-hand-holding-usd"></i></div>
                <h3>Total Pengeluaran</h3>
                <div class="amount">Rp 23.680.000</div>
                <div class="trend"><i class="fas fa-arrow-up"></i> 8.2% dari bulan lalu</div>
            </div>
            <div class="summary-card">
                <div class="summary-card-icon"><i class="fas fa-balance-scale"></i></div>
                <h3>Saldo Akhir</h3>
                <div class="amount">Rp 13.233.000</div>
                <div class="trend negative"><i class="fas fa-arrow-down"></i> 8.5% dari bulan lalu</div>
            </div>
            <div class="summary-card">
                <div class="summary-card-icon"><i class="fas fa-file-invoice"></i></div>
                <h3>Perkara Masuk</h3>
                <div class="amount">82</div>
                <div class="trend"><i class="fas fa-arrow-down"></i> -25% dari bulan lalu</div>
            </div>
        </div>
        <div class="financial-table-container">
            <h3 class="table-title"><i class="fas fa-table"></i> Laporan Keuangan Perkara Juni 2025</h3>
            <div class="table-responsive">
                <table class="financial-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian</th>
                            <th>Penerimaan (Rp)</th>
                            <th>Pengeluaran (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Sisa Awal</td><td>12.198.000</td><td class="empty-cell">-</td></tr>
                        <tr><td>2</td><td>Penerimaan bulan ini</td><td>24.715.000</td><td class="empty-cell">-</td></tr>
                        <tr><td>3</td><td>Biaya Proses/ATK/Pemberkasan *)</td><td class="empty-cell">-</td><td>8.200.000</td></tr>
                        <tr><td>4</td><td>Biaya Panggilan</td><td class="empty-cell">-</td><td>2.502.500</td></tr>
                        <tr><td>5</td><td>Biaya Penterjemah</td><td class="empty-cell">-</td><td class="empty-cell">-</td></tr>
                        <tr><td>6</td><td>Biaya Pemberitahuan</td><td class="empty-cell">-</td><td>971.000</td></tr>
                        <tr><td>7</td><td>Biaya Sita</td><td class="empty-cell">-</td><td class="empty-cell">-</td></tr>
                        <tr><td>8</td><td>Biaya Pemeriksaan Setempat</td><td class="empty-cell">-</td><td class="empty-cell">-</td></tr>
                        <tr><td>9</td><td>Biaya Sumpah</td><td class="empty-cell">-</td><td class="empty-cell">-</td></tr>
                        <tr><td>10</td><td>Biaya Pengiriman</td><td class="empty-cell">-</td><td>300.000</td></tr>
                        <tr><td>11</td><td>Materai</td><td class="empty-cell">-</td><td>860.000</td></tr>
                        <tr><td>12</td><td>PNBP</td><td class="empty-cell">-</td><td class="empty-cell">-</td></tr>
                        <tr><td></td><td>Biaya Pendaftaran Tk I</td><td class="empty-cell">-</td><td>2.460.000</td></tr>
                        <tr><td></td><td>Biaya Pendaftaran Banding</td><td class="empty-cell">-</td><td>50.000</td></tr>
                        <tr><td></td><td>Biaya Pendaftaran Kasasi</td><td class="empty-cell">-</td><td class="empty-cell">-</td></tr>
                        <tr><td></td><td>Redaksi</td><td class="empty-cell">-</td><td>860.000</td></tr>
                        <tr><td></td><td>PNBP lainnya</td><td class="empty-cell">-</td><td>2.240.000</td></tr>
                        <tr><td>13</td><td>Pengembalian Sisa Panjar</td><td class="empty-cell">-</td><td>5.236.500</td></tr>
                        <tr class="total-row"><td></td><td>Jumlah</td><td>36.913.000</td><td>23.680.000</td></tr>
                        <tr class="saldo-row"><td></td><td>Saldo Akhir</td><td class="empty-cell">-</td><td>13.233.000</td></tr>
                        <tr class="saldo-row"><td></td><td>Saldo Bank</td><td class="empty-cell">-</td><td>5.566.500</td></tr>
                        <tr class="saldo-row"><td></td><td>Saldo Kas Tunai</td><td class="empty-cell">-</td><td>7.666.500</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="charts-grid">
            <div class="chart-container">
                <h3 class="chart-title">Perbandingan Penerimaan dan Pengeluaran</h3>
                <div class="chart-wrapper">
                    <canvas id="financeChart"></canvas>
                </div>
            </div>
            <div class="chart-container">
                <h3 class="chart-title">Distribusi Pengeluaran</h3>
                <div class="chart-wrapper">
                    <canvas id="expenseChart"></canvas>
                </div>
            </div>
        </div>
        <div class="footer-section">
            <div class="stats-card">
                <h4>Catatan Perkara</h4>
                <ul class="stats-list">
                    <li><i class="fas fa-file-alt"></i> Perkara Masuk: 82 perkara</li>
                    <li><i class="fas fa-balance-scale-right"></i> Perkara Masuk Banding: 1 perkara</li>
                    <li><i class="fas fa-gavel"></i> Perkara Putus: 85 perkara</li>
                    <li><i class="fas fa-calculator"></i> Perkara Putus Verzet: 1 perkara</li>
                </ul>
            </div>
            <div class="signature-card">
                <h4>Pengesahan</h4>
                <div class="signature-date">Amuntai, 01 Juli 2025</div>
                <div class="signature-boxes">
                    <div class="signature-box">
                        <div class="signature-title">Ketua</div>
                        <div class="signature-line"></div>
                        <div class="signature-name">Bahrul Maji, S.H.I.</div>
                    </div>
                    <div class="signature-box">
                        <div class="signature-title">Panitera</div>
                        <div class="signature-line"></div>
                        <div class="signature-name">H. Ahmad Salim Ridha, S.Ag.M.H.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Finance comparison chart
            const financeCtx = document.getElementById('financeChart').getContext('2d');
            const financeChart = new Chart(financeCtx, {
                type: 'bar',
                data: {
                    labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                    datasets: [{
                            label: 'Penerimaan',
                            data: [31500000, 33200000, 32800000, 36000000, 38137000, 36913000],
                            backgroundColor: 'rgba(56, 142, 60, 0.7)',
                            borderColor: 'rgba(56, 142, 60, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Pengeluaran',
                            data: [22800000, 24500000, 23400000, 23500000, 25939000, 23680000],
                            backgroundColor: 'rgba(255, 179, 0, 0.7)',
                            borderColor: 'rgba(255, 179, 0, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top' },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) { label += ': '; }
                                    if (context.parsed.y !== null) {
                                        label += new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(context.parsed.y);
                                    }
                                    return label;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(value);
                                }
                            }
                        }
                    }
                }
            });
            // Expense distribution chart
            const expenseCtx = document.getElementById('expenseChart').getContext('2d');
            const expenseChart = new Chart(expenseCtx, {
                type: 'doughnut',
                data: {
                    labels: [
                        'Biaya Proses/ATK',
                        'Biaya Panggilan',
                        'Biaya Pemberitahuan',
                        'Materai',
                        'Biaya Pengiriman',
                        'Biaya Pendaftaran Tk I',
                        'Redaksi',
                        'PNBP lainnya',
                        'Pengembalian Sisa Panjar'
                    ],
                    datasets: [{
                        data: [8200000, 2502500, 971000, 860000, 300000, 2460000, 860000, 2240000, 5236500],
                        backgroundColor: [
                            '#388e3c', '#43a047', '#81c784', '#ffb300', '#ff6f00', '#8d6e63', '#6d4c41', '#bdbdbd', '#cfd8dc'
                        ],
                        borderWidth: 1,
                        hoverOffset: 15
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'right' },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let label = context.label || '';
                                    if (label) { label += ': '; }
                                    const value = context.raw;
                                    const total = context.dataset.data.reduce((acc, val) => acc + val, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    label += new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(value) + ' (' + percentage + '%)';
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html> 