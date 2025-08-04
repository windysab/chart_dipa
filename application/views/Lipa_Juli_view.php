<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perkara LIPA Juli 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #1e3a8a;
            --secondary-color: #3b82f6;
            --accent-color: #f59e0b;
            --highlight-color: #10b981;
            --background-color: #f8fafc;
            --card-color: #ffffff;
            --text-dark: #1e293b;
            --text-light: #64748b;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        * { box-sizing: border-box; font-family: 'Segoe UI', 'Roboto', sans-serif; }
        body { background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); color: var(--text-dark); line-height: 1.6; margin: 0; min-height: 100vh; }
        .container { max-width: 1440px; margin: 0 auto; padding: 30px; }
        .dashboard-header { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-bottom: 30px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 30px; border-radius: 20px; box-shadow: var(--shadow); }
        .dashboard-title { flex-grow: 1; }
        .dashboard-title h1 { font-size: 2.5rem; font-weight: 700; margin-bottom: 10px; text-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .dashboard-title h2 { font-size: 1.3rem; font-weight: 400; opacity: 0.9; }
        .dashboard-date { background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; padding: 15px 30px; border-radius: 50px; font-size: 1.2rem; font-weight: 600; border: 1px solid rgba(255,255,255,0.3); }
        .stats-container { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-bottom: 40px; }
        .stat-card { background: linear-gradient(135deg, var(--card-color), #f1f5f9); border-radius: 20px; padding: 30px; box-shadow: var(--shadow); transition: var(--transition); position: relative; overflow: hidden; border: 1px solid rgba(59, 130, 246, 0.1); }
        .stat-card:hover { transform: translateY(-15px) scale(1.02); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); }
        .stat-card::before { content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 5px; background: linear-gradient(90deg, var(--secondary-color), var(--accent-color)); }
        .stat-card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .stat-card-title { font-size: 1.1rem; color: var(--text-light); font-weight: 600; }
        .stat-card-icon { width: 55px; height: 55px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.2)); color: var(--secondary-color); font-size: 1.6rem; }
        .stat-card:nth-child(2) .stat-card-icon { background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(245, 158, 11, 0.2)); color: var(--accent-color); }
        .stat-card:nth-child(3) .stat-card-icon { background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.2)); color: var(--highlight-color); }
        .stat-card:nth-child(4) .stat-card-icon { background: linear-gradient(135deg, rgba(139, 69, 19, 0.1), rgba(139, 69, 19, 0.2)); color: #8b4513; }
        .stat-value { font-size: 3rem; font-weight: 800; color: var(--primary-color); margin-bottom: 8px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .stat-description { font-size: 1rem; color: var(--text-light); font-weight: 500; }
        .card { background-color: var(--card-color); border-radius: 20px; box-shadow: var(--shadow); margin-bottom: 30px; overflow: hidden; position: relative; border: 1px solid rgba(59, 130, 246, 0.1); }
        .card-header { background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; padding: 25px; font-weight: 700; font-size: 1.3rem; display: flex; align-items: center; gap: 15px; }
        .card-header i { font-size: 1.5rem; }
        .card-body { padding: 30px; }
        .table-responsive { overflow-x: auto; border-radius: 15px; }
        table { width: 100%; border-collapse: separate; border-spacing: 0; font-size: 0.95rem; min-width: 1100px; background: white; border-radius: 15px; overflow: hidden; }
        th { background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05)); color: var(--primary-color); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.5px; padding: 18px; text-align: center; border-bottom: 2px solid rgba(59, 130, 246, 0.2); }
        td { padding: 16px; text-align: center; border-bottom: 1px solid #f1f5f9; transition: var(--transition); }
        tr:hover td { background-color: rgba(59, 130, 246, 0.05); }
        .jenis-perkara { text-align: left; padding-left: 20px; font-weight: 600; color: var(--primary-color); }
        .total-row { background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(59, 130, 246, 0.05)); font-weight: 700; color: var(--primary-color); }
        .total-row td { border-top: 2px solid var(--secondary-color); }
        @media (max-width: 992px) { .stats-container { grid-template-columns: 1fr; } }
        @media (max-width: 768px) { .container { padding: 15px; } .dashboard-header { flex-direction: column; align-items: flex-start; gap: 20px; padding: 20px; } .dashboard-date { align-self: flex-end; } .dashboard-title h1 { font-size: 2rem; } .dashboard-title h2 { font-size: 1.1rem; } .stat-value { font-size: 2.5rem; } }
    </style>
</head>
<body>
<div class="container">
    <div class="dashboard-header">
        <div class="dashboard-title">
            <h1>LAPORAN PERKARA LIPA JULI 2025</h1>
            <h2>Statistik Perkara Diterima, Dicabut, dan Diputus Menurut Jenis</h2>
        </div>
        <div class="dashboard-date">JULI 2025</div>
    </div>
    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Sisa Bulan Lalu</div>
                <div class="stat-card-icon"><i class="fas fa-file-import"></i></div>
            </div>
            <div class="stat-value">86</div>
            <div class="stat-description">Perkara yang belum selesai</div>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Perkara Masuk</div>
                <div class="stat-card-icon"><i class="fas fa-folder-plus"></i></div>
            </div>
            <div class="stat-value">146</div>
            <div class="stat-description">Perkara baru bulan ini</div>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Perkara Putus</div>
                <div class="stat-card-icon"><i class="fas fa-gavel"></i></div>
            </div>
            <div class="stat-value">102</div>
            <div class="stat-description">Perkara diselesaikan bulan ini</div>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <div class="stat-card-title">Sisa Akhir</div>
                <div class="stat-card-icon"><i class="fas fa-balance-scale"></i></div>
            </div>
            <div class="stat-value">130</div>
            <div class="stat-description">Perkara yang masih dalam proses</div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <i class="fas fa-table"></i> Rincian Perkara Bulan Juli 2025
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
                        <tr><td>1</td><td class="jenis-perkara">Izin Poligami</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>2</td><td class="jenis-perkara">Pencegahan Perkawinan</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>3</td><td class="jenis-perkara">Penolakan Perkawinan</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>4</td><td class="jenis-perkara">Pembatalan Perkawinan</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>5</td><td class="jenis-perkara">Kekeliruan Atas Kewajiban Suami / Istri</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>6</td><td class="jenis-perkara">Cerai Talak</td><td>8</td><td>7</td><td>15</td><td>-</td><td>10</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>10</td><td>5</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>7</td><td class="jenis-perkara">Cerai Gugat</td><td>57</td><td>63</td><td>120</td><td>1</td><td>48</td><td>-</td><td>2</td><td>1</td><td>-</td><td>-</td><td>-</td><td>52</td><td>68</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>8</td><td class="jenis-perkara">Harta Bersama</td><td>1</td><td>1</td><td>2</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>2</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>9</td><td class="jenis-perkara">Penguasaan Anak</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>10</td><td class="jenis-perkara">Nafkah Anak Oleh Ibu karena Ayah tidak mampu</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>11</td><td class="jenis-perkara">Hak-hak bekas istri kewajiban bekas Suami</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>12</td><td class="jenis-perkara">Pengesahan Anak</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>13</td><td class="jenis-perkara">Pencabutan Kekuasaan Orang Tua</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>14</td><td class="jenis-perkara">Pewarisan</td><td>1</td><td>1</td><td>2</td><td>-</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>1</td><td>1</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>15</td><td class="jenis-perkara">Pencabutan Kekuasaan Wali</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>16</td><td class="jenis-perkara">Penunjukan orang lain sebagai Wali oleh Pengadilan</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>17</td><td class="jenis-perkara">Ganti Rugi terhadap Wali</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>18</td><td class="jenis-perkara">Asal Usul Anak</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>19</td><td class="jenis-perkara">Perkawinan Campuran</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>20</td><td class="jenis-perkara">Pengesahan Perkawinan Isbat Nikah</td><td>6</td><td>46</td><td>52</td><td>-</td><td>8</td><td>-</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td><td>9</td><td>43</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>21</td><td class="jenis-perkara">Izin Kawin</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>22</td><td class="jenis-perkara">Dispensasi Kawin</td><td>-</td><td>7</td><td>7</td><td>-</td><td>6</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>6</td><td>1</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>23</td><td class="jenis-perkara">Wali Adhol</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>24</td><td class="jenis-perkara">Kewarisan</td><td>1</td><td>-</td><td>1</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>1</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>25</td><td class="jenis-perkara">Wasiat</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>26</td><td class="jenis-perkara">Hibah</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>27</td><td class="jenis-perkara">Wakaf</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>28</td><td class="jenis-perkara">Lain-Lain</td><td>10</td><td>14</td><td>24</td><td>-</td><td>19</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>19</td><td>5</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>29</td><td class="jenis-perkara">Ekonomi Syariah</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr><td>30</td><td class="jenis-perkara">PSHP Penetapan Ahli Waris</td><td>2</td><td>7</td><td>9</td><td>1</td><td>4</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>5</td><td>4</td><td>-</td><td>-</td><td>-</td></tr>
                        <tr class="total-row"><td colspan="2">JUMLAH</td><td>86</td><td>146</td><td>232</td><td>2</td><td>96</td><td>-</td><td>3</td><td>1</td><td>-</td><td>-</td><td>-</td><td>102</td><td>130</td><td>-</td><td>-</td><td>-</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="chart-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); gap: 30px; margin-bottom: 30px;">
        <div class="chart-card" style="background: linear-gradient(135deg, #fff, #f8fafc); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); padding: 25px; border: 1px solid rgba(59, 130, 246, 0.1);">
            <div class="chart-title" style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #e2e8f0; font-weight: 700;"><i class="fas fa-chart-pie"></i> Distribusi Perkara Juli</div>
            <div class="chart-wrapper" style="height: 380px; width: 100%;">
                <canvas id="caseDistribution"></canvas>
            </div>
        </div>
        <div class="chart-card" style="background: linear-gradient(135deg, #fff, #f8fafc); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); padding: 25px; border: 1px solid rgba(59, 130, 246, 0.1);">
            <div class="chart-title" style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #e2e8f0; font-weight: 700;"><i class="fas fa-chart-bar"></i> Tren Penyelesaian Perkara</div>
            <div class="chart-wrapper" style="height: 380px; width: 100%;">
                <canvas id="caseTrend"></canvas>
            </div>
        </div>
    </div>
    <div class="chart-container" style="display: grid; grid-template-columns: 1fr; gap: 30px; margin-bottom: 30px;">
        <div class="chart-card" style="background: linear-gradient(135deg, #fff, #f8fafc); border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); padding: 25px; border: 1px solid rgba(59, 130, 246, 0.1);">
            <div class="chart-title" style="font-size: 1.3rem; color: #1e3a8a; margin-bottom: 25px; padding-bottom: 15px; border-bottom: 2px solid #e2e8f0; font-weight: 700;"><i class="fas fa-chart-line"></i> Perbandingan Bulanan Perkara Masuk vs Selesai</div>
            <div class="chart-wrapper" style="height: 400px; width: 100%;">
                <canvas id="monthlyComparison"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Pie/Donut Chart: Distribusi Perkara Juli
        const caseDistributionCtx = document.getElementById('caseDistribution').getContext('2d');
        new Chart(caseDistributionCtx, {
            type: 'doughnut',
            data: {
                labels: ['Cerai Talak', 'Cerai Gugat', 'Harta Bersama', 'Isbat Nikah', 'Dispensasi Kawin', 'Lain-lain', 'PSHP Ahli Waris'],
                datasets: [{
                    data: [15, 120, 2, 52, 7, 24, 9],
                    backgroundColor: [
                        '#3b82f6',
                        '#f59e0b',
                        '#10b981',
                        '#8b5cf6',
                        '#ef4444',
                        '#06b6d4',
                        '#f97316'
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
                        position: 'right',
                        labels: {
                            padding: 20,
                            font: {
                                size: 12,
                                weight: '600'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(30, 58, 138, 0.9)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#3b82f6',
                        borderWidth: 2,
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
                cutout: '60%',
            }
        });
        
        // Bar Chart: Tren Penyelesaian Perkara
        const caseTrendCtx = document.getElementById('caseTrend').getContext('2d');
        new Chart(caseTrendCtx, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                datasets: [
                    {
                        label: 'Perkara Masuk',
                        data: [70, 75, 80, 90, 110, 82, 146],
                        backgroundColor: '#3b82f6',
                        borderRadius: 8,
                        borderWidth: 0
                    },
                    {
                        label: 'Perkara Selesai',
                        data: [65, 70, 78, 85, 99, 85, 102],
                        backgroundColor: '#10b981',
                        borderRadius: 8,
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
                        labels: {
                            padding: 20,
                            font: {
                                size: 13,
                                weight: '600'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(30, 58, 138, 0.9)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#3b82f6',
                        borderWidth: 2
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: { 
                            display: true, 
                            text: 'Jumlah Perkara',
                            font: {
                                size: 14,
                                weight: '600'
                            },
                            color: '#1e3a8a'
                        },
                        grid: {
                            color: 'rgba(59, 130, 246, 0.1)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                weight: '600'
                            },
                            color: '#1e3a8a'
                        }
                    }
                }
            }
        });
        
        // Line Chart: Perbandingan Bulanan
        const monthlyComparisonCtx = document.getElementById('monthlyComparison').getContext('2d');
        new Chart(monthlyComparisonCtx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                datasets: [
                    {
                        label: 'Perkara Masuk',
                        data: [70, 75, 80, 90, 110, 82, 146],
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        borderWidth: 4,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#3b82f6',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 3,
                        pointRadius: 8
                    },
                    {
                        label: 'Perkara Selesai',
                        data: [65, 70, 78, 85, 99, 85, 102],
                        borderColor: '#10b981',
                        backgroundColor: 'rgba(16, 185, 129, 0.1)',
                        borderWidth: 4,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#10b981',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 3,
                        pointRadius: 8
                    },
                    {
                        label: 'Sisa Perkara',
                        data: [95, 100, 102, 107, 118, 115, 159],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.1)',
                        borderWidth: 4,
                        fill: true,
                        tension: 0.4,
                        pointBackgroundColor: '#f59e0b',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 3,
                        pointRadius: 8
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            padding: 20,
                            font: {
                                size: 14,
                                weight: '600'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(30, 58, 138, 0.9)',
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        borderColor: '#3b82f6',
                        borderWidth: 2
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah Perkara',
                            font: {
                                size: 14,
                                weight: '600'
                            },
                            color: '#1e3a8a'
                        },
                        grid: {
                            color: 'rgba(59, 130, 246, 0.1)'
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(59, 130, 246, 0.1)'
                        },
                        ticks: {
                            font: {
                                weight: '600'
                            },
                            color: '#1e3a8a'
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