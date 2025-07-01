<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perkara LIPA Juni 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #27ae60;
            --accent-color: #e67e22;
            --highlight-color: #f39c12;
            --background-color: #ecf0f1;
            --card-color: #ffffff;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        * { box-sizing: border-box; font-family: 'Segoe UI', 'Roboto', sans-serif; }
        body { background-color: var(--background-color); color: var(--text-dark); line-height: 1.6; margin: 0; }
        .container { max-width: 1440px; margin: 0 auto; padding: 30px; }
        .dashboard-header { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .dashboard-title { flex-grow: 1; }
        .dashboard-title h1 { font-size: 2.2rem; font-weight: 600; color: var(--primary-color); margin-bottom: 10px; }
        .dashboard-title h2 { font-size: 1.2rem; font-weight: 500; color: var(--text-light); }
        .dashboard-date { background: linear-gradient(135deg, var(--secondary-color), var(--primary-color)); color: white; padding: 10px 25px; border-radius: 50px; box-shadow: var(--shadow); font-size: 1.1rem; font-weight: 500; }
        .stats-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-bottom: 30px; }
        .stat-card { background-color: var(--card-color); border-radius: 12px; padding: 25px; box-shadow: var(--shadow); transition: var(--transition); position: relative; overflow: hidden; }
        .stat-card:hover { transform: translateY(-10px); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1); }
        .stat-card::before { content: ""; position: absolute; top: 0; left: 0; width: 5px; height: 100%; background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color)); }
        .stat-card-header { display: flex; justify-content: space-between; margin-bottom: 20px; }
        .stat-card-title { font-size: 1rem; color: var(--text-light); font-weight: 500; }
        .stat-card-icon { width: 45px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background-color: rgba(39, 174, 96, 0.1); color: var(--secondary-color); font-size: 1.4rem; }
        .stat-card:nth-child(2) .stat-card-icon { background-color: rgba(230, 126, 34, 0.1); color: var(--accent-color); }
        .stat-card:nth-child(3) .stat-card-icon { background-color: rgba(243, 156, 18, 0.1); color: var(--highlight-color); }
        .stat-card:nth-child(4) .stat-card-icon { background-color: rgba(46, 204, 113, 0.1); color: #27ae60; }
        .stat-value { font-size: 2.5rem; font-weight: 700; color: var(--primary-color); margin-bottom: 5px; }
        .stat-description { font-size: 0.9rem; color: var(--text-light); }
        .card { background-color: var(--card-color); border-radius: 12px; box-shadow: var(--shadow); margin-bottom: 30px; overflow: hidden; position: relative; }
        .card-header { background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 20px; font-weight: 600; font-size: 1.2rem; display: flex; align-items: center; gap: 10px; }
        .card-header i { font-size: 1.4rem; }
        .card-body { padding: 25px; }
        .table-responsive { overflow-x: auto; }
        table { width: 100%; border-collapse: separate; border-spacing: 0; font-size: 0.95rem; min-width: 1100px; }
        th { background-color: rgba(39, 174, 96, 0.08); color: var(--primary-color); font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; padding: 15px; text-align: center; border-bottom: 1px solid #e0e6ed; }
        td { padding: 15px; text-align: center; border-bottom: 1px solid #f0f0f0; transition: var(--transition); }
        tr:hover td { background-color: rgba(39, 174, 96, 0.03); }
        .jenis-perkara { text-align: left; padding-left: 15px; font-weight: 500; color: var(--primary-color); }
        .total-row { background-color: rgba(39, 174, 96, 0.07); font-weight: 600; color: var(--primary-color); }
        @media (max-width: 992px) { .stats-container { grid-template-columns: 1fr; } }
        @media (max-width: 768px) { .container { padding: 15px; } .dashboard-header { flex-direction: column; align-items: flex-start; gap: 15px; } .dashboard-date { align-self: flex-end; } .dashboard-title h1 { font-size: 1.8rem; } .dashboard-title h2 { font-size: 1.2rem; } .stat-value { font-size: 2rem; } }
    </style>
</head>
<body>
<div class="container">
    <div class="dashboard-header">
        <div class="dashboard-title">
            <h1>LAPORAN PERKARA LIPA JUNI 2025</h1>
            <h2>Statistik Perkara Diterima, Dicabut, dan Diputus Menurut Jenis</h2>
        </div>
        <div class="dashboard-date">JUNI 2025</div>
    </div>
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Sisa Bulan Lalu</div>
                <div class="stat-card-icon"><i class="fas fa-file-import"></i></div>
            </div>
            <div class="stat-value">89</div>
            <div class="stat-description">Perkara yang belum selesai</div>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Perkara Masuk</div>
                <div class="stat-card-icon"><i class="fas fa-folder-plus"></i></div>
            </div>
            <div class="stat-value">82</div>
            <div class="stat-description">Perkara baru bulan ini</div>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Perkara Putus</div>
                <div class="stat-card-icon"><i class="fas fa-gavel"></i></div>
            </div>
            <div class="stat-value">85</div>
            <div class="stat-description">Perkara diselesaikan bulan ini</div>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Sisa Akhir</div>
                <div class="stat-card-icon"><i class="fas fa-balance-scale"></i></div>
            </div>
            <div class="stat-value">86</div>
            <div class="stat-description">Perkara yang masih dalam proses</div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <i class="fas fa-table"></i> Rincian Perkara Bulan Juni 2025
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Perkara</th>
                            <th rowspan="2">Sisa bulan lalu</th>
                            <th rowspan="2">Diterima bulan ini</th>
                            <th rowspan="2">Jumlah</th>
                            <th colspan="9">Dicabut dan diputus bulan ini</th>
                            <th rowspan="2">Sisa akhir bulan (5-14)</th>
                            <th rowspan="2">Banding</th>
                            <th rowspan="2">Kasasi</th>
                            <th rowspan="2">PK</th>
                            <th rowspan="2">Ket</th>
                        </tr>
                        <tr>
                            <th>Dicabut</th>
                            <th>Dikabulkan</th>
                            <th>Ditolak</th>
                            <th>Tidak diterima</th>
                            <th>Digugurkan</th>
                            <th>Dicoret dari register</th>
                            <th>Perdamaian</th>
                            <th>Dismissal</th>
                            <th>Jumlah lajur 6 s/d 13</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td class="jenis-perkara">Izin Poligami</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>2</td><td class="jenis-perkara">Pencegahan Perkawinan</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>3</td><td class="jenis-perkara">Penolakan Perkawinan</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>4</td><td class="jenis-perkara">Pembatalan Perkawinan</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>5</td><td class="jenis-perkara">Kekeliruan Atas Kewajiban Suami / Istri</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>6</td><td class="jenis-perkara">Cerai Talak</td><td>17</td><td>19</td><td>36</td><td></td><td>13</td><td></td><td></td><td></td><td></td><td></td><td></td><td>13</td><td>6</td><td></td><td></td><td></td></tr>
                        <tr><td>7</td><td class="jenis-perkara">Cerai Gugat</td><td>25</td><td>59</td><td>84</td><td>2</td><td>40</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td>43</td><td>59</td><td></td><td></td><td></td></tr>
                        <tr><td>8</td><td class="jenis-perkara">Harta Bersama</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>9</td><td class="jenis-perkara">Penguasaan Anak</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>10</td><td class="jenis-perkara">Nafkah Anak Oleh Ibu karena Ayah tidak mampu</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>11</td><td class="jenis-perkara">Hak-hak bekas istri kewajiban bekas Suami</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>12</td><td class="jenis-perkara">Pengesahan Anak</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>13</td><td class="jenis-perkara">Pencabutan Kekuasaan Orang Tua</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>14</td><td class="jenis-perkara">Pewarisan</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>15</td><td class="jenis-perkara">Pencabutan Kekuasaan Wali</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>16</td><td class="jenis-perkara">Penunjukan orang lain sebagai Wali oleh Pengadilan</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>17</td><td class="jenis-perkara">Ganti Rugi terhadap Wali</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>18</td><td class="jenis-perkara">Asal Usul Anak</td><td>3</td><td>1</td><td>4</td><td></td><td>4</td><td></td><td></td><td></td><td></td><td></td><td></td><td>4</td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>19</td><td class="jenis-perkara">Perkawinan Campuran</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>20</td><td class="jenis-perkara">Pengesahan Perkawinan Isbat Nikah</td><td>4</td><td>15</td><td>19</td><td>2</td><td>8</td><td></td><td></td><td></td><td></td><td></td><td></td><td>8</td><td>7</td><td></td><td></td><td></td></tr>
                        <tr><td>21</td><td class="jenis-perkara">Izin Kawin</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>22</td><td class="jenis-perkara">Dispensasi Kawin</td><td></td><td>2</td><td>2</td><td></td><td>2</td><td></td><td></td><td></td><td></td><td></td><td></td><td>2</td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>23</td><td class="jenis-perkara">Wali Adhol</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td><td></td><td></td><td></td></tr>
                        <tr><td>24</td><td class="jenis-perkara">Kewarisan</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>25</td><td class="jenis-perkara">Wasiat</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>26</td><td class="jenis-perkara">Hibah</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>27</td><td class="jenis-perkara">Wakaf</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>28</td><td class="jenis-perkara">Lain-Lain</td><td>10</td><td>13</td><td>23</td><td></td><td>14</td><td></td><td></td><td></td><td></td><td></td><td></td><td>14</td><td>9</td><td></td><td></td><td></td></tr>
                        <tr><td>29</td><td class="jenis-perkara">Ekonomi Syariah</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                        <tr><td>30</td><td class="jenis-perkara">PSHP Penetapan Ahli Waris</td><td>1</td><td>2</td><td>3</td><td></td><td>1</td><td></td><td></td><td></td><td></td><td></td><td></td><td>1</td><td>2</td><td></td><td></td><td></td></tr>
                        <tr class="total-row"><td colspan="2">JUMLAH</td><td>89</td><td>82</td><td>171</td><td>2</td><td>82</td><td>1</td><td></td><td></td><td></td><td></td><td></td><td>85</td><td>86</td><td></td><td></td><td></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="chart-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 30px; margin-bottom: 30px;">
        <div class="chart-card" style="background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); padding: 20px;">
            <div class="chart-title" style="font-size: 1.2rem; color: #2c3e50; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #f0f0f0; font-weight: 600;"><i class="fas fa-chart-pie"></i> Distribusi Perkara</div>
            <div class="chart-wrapper" style="height: 350px; width: 100%;">
                <canvas id="caseDistribution"></canvas>
            </div>
        </div>
        <div class="chart-card" style="background: #fff; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); padding: 20px;">
            <div class="chart-title" style="font-size: 1.2rem; color: #2c3e50; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid #f0f0f0; font-weight: 600;"><i class="fas fa-chart-bar"></i> Tren Penyelesaian Perkara</div>
            <div class="chart-wrapper" style="height: 350px; width: 100%;">
                <canvas id="caseTrend"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Pie/Donut Chart: Distribusi Perkara
        const caseDistributionCtx = document.getElementById('caseDistribution').getContext('2d');
        new Chart(caseDistributionCtx, {
            type: 'doughnut',
            data: {
                labels: ['Cerai Talak', 'Cerai Gugat', 'Asal Usul Anak', 'Isbat Nikah', 'Dispensasi Kawin', 'Lain-lain'],
                datasets: [{
                    data: [36, 84, 4, 19, 2, 23],
                    backgroundColor: [
                        '#27ae60',
                        '#e67e22',
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
                    legend: { position: 'right' },
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
        // Bar Chart: Tren Penyelesaian Perkara
        const caseTrendCtx = document.getElementById('caseTrend').getContext('2d');
        new Chart(caseTrendCtx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
                datasets: [
                    {
                        label: 'Perkara Masuk',
                        data: [70, 75, 80, 90, 110, 82], // Dummy data, update if real data available
                        backgroundColor: '#27ae60',
                        borderWidth: 0
                    },
                    {
                        label: 'Perkara Selesai',
                        data: [65, 70, 78, 85, 99, 85], // Dummy data, update if real data available
                        backgroundColor: '#e67e22',
                        borderWidth: 0
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { position: 'top' } },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: { display: true, text: 'Jumlah Perkara' }
                    }
                }
            }
        });
    });
</script>
</body>
</html> 