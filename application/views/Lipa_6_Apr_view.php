<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perkara - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-header {
            background: var(--header-gradient);
            color: white;
            padding: 30px 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,5 C60,20 40,20 0,5 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: 100% 100%;
        }

        .page-header h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .page-header h2 {
            font-size: 1.8rem;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .page-header h3 {
            font-size: 1.5rem;
            font-weight: 400;
        }

        .lipa-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: var(--accent-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .table-wrapper {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            padding: 10px;
        }

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 14px;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            text-align: center;
        }

        .custom-table td:nth-child(2) {
            text-align: left;
            white-space: normal;
            min-width: 200px;
        }

        .custom-table th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 10;
            white-space: nowrap;
        }

        .custom-table thead tr:first-child th,
        .custom-table thead tr:nth-child(2) th,
        .custom-table thead tr:nth-child(3) th {
            background-color: var(--dark-color);
            text-align: center;
        }

        .custom-table tbody tr {
            transition: all 0.2s ease;
        }

        .custom-table tbody tr:nth-of-type(even) {
            background-color: #f8faff;
        }

        .custom-table tbody tr:hover {
            background-color: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .custom-table tfoot {
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
        }

        .custom-table tfoot td {
            padding: 15px;
        }

        .highlight-cell {
            background-color: rgba(30, 86, 49, 0.1);
            font-weight: 500;
        }

        .zero-value {
            color: #bbb;
        }

        .case-count {
            font-weight: bold;
            color: var(--primary-color);
        }

        .signature-section {
            display: flex;
            justify-content: flex-end;
            margin: 40px 0;
        }

        .signature-box {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            width: 300px;
        }

        .signature-box h4 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 18px;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 10px;
        }

        .signature-line {
            margin: 30px auto 10px;
            border-bottom: 1px solid var(--border-color);
            width: 70%;
        }

        .page-footer {
            background: var(--footer-gradient);
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
        }

        .page-footer p {
            margin: 5px 0;
            font-size: 14px;
        }

        .icon-cell {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .icon-cell i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .case-type-icon {
            width: 24px;
            text-align: center;
            margin-right: 10px;
        }

        .summary-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }

        .summary-card {
            flex: 1 1 200px;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            transition: all 0.3s ease;
        }

        .summary-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .summary-card i {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .summary-card h3 {
            color: var(--dark-color);
            margin-bottom: 10px;
            font-size: 1.2rem;
        }

        .summary-card .count {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .chart-container {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .chart-box {
            flex: 1;
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        .chart-title {
            font-size: 18px;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-align: center;
            font-weight: 600;
        }

        .chart-wrapper {
            height: 350px;
            width: 100%;
        }

        @media (max-width: 1200px) {
            .container {
                padding: 10px;
            }

            .custom-table {
                font-size: 13px;
            }

            .custom-table th,
            .custom-table td {
                padding: 10px;
            }

            .chart-container {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 1.8rem;
            }

            .page-header h2 {
                font-size: 1.5rem;
            }

            .page-header h3 {
                font-size: 1.2rem;
            }

            .summary-cards {
                flex-direction: column;
            }

            .summary-card {
                flex: 1 1 100%;
            }

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="page-header">
            <h1>LAPORAN PERKARA DITERIMA, DICABUT DAN DIPUTUS MENURUT JENIS PERKARA</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <h3>BULAN APRIL TAHUN 2025</h3>
            <div class="lipa-badge">LIPA 6</div>
        </div>

        <div class="summary-cards">
            <div class="summary-card">
                <i class="fas fa-folder-open"></i>
                <h3>Total Perkara</h3>
                <div class="count">128</div>
                <p>Perkara diproses</p>
            </div>
            <div class="summary-card">
                <i class="fas fa-file-import"></i>
                <h3>Perkara Masuk</h3>
                <div class="count">55</div>
                <p>Bulan ini</p>
            </div>
            <div class="summary-card">
                <i class="fas fa-gavel"></i>
                <h3>Perkara Putus</h3>
                <div class="count">57</div>
                <p>Bulan ini</p>
            </div>
            <div class="summary-card">
                <i class="fas fa-balance-scale"></i>
                <h3>Sisa Perkara</h3>
                <div class="count">75</div>
                <p>Akhir bulan</p>
            </div>
        </div>

        <div class="table-wrapper">
            <div class="table-container">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th colspan="19">LAPORAN PERKARA DITERIMA, DICABUT DAN DIPUTUS MENURUT JENIS PERKARA</th>
                        </tr>
                        <tr>
                            <th colspan="19">PENGADILAN AGAMA AMUNTAI</th>
                        </tr>
                        <tr>
                            <th colspan="19">BULAN APRIL TAHUN 2025</th>
                        </tr>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Perkara</th>
                            <th colspan="3">Banyaknya Perkara</th>
                            <th colspan="9">Dicabut dan diputus bulan ini</th>
                            <th rowspan="2">Sisa akhir bulan (5-14)</th>
                            <th rowspan="2">Banding</th>
                            <th rowspan="2">Kasasi</th>
                            <th rowspan="2">PK</th>
                            <th rowspan="2">Ket</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td>1</td>
                            <td class="icon-cell"><i class="fas fa-user-tie case-type-icon"></i>Izin Poligami</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 2 -->
                        <tr>
                            <td>2</td>
                            <td class="icon-cell"><i class="fas fa-ban case-type-icon"></i>Pencegahan Perkawinan</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 3 -->
                        <tr>
                            <td>3</td>
                            <td class="icon-cell"><i class="fas fa-times-circle case-type-icon"></i>Penolakan Perkawinan</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 4 -->
                        <tr>
                            <td>4</td>
                            <td class="icon-cell"><i class="fas fa-unlink case-type-icon"></i>Pembatalan Perkawinan</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 5 -->
                        <tr>
                            <td>5</td>
                            <td class="icon-cell"><i class="fas fa-gavel case-type-icon"></i>Kelalaian Atas Kewajiban Suami / Istri</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 6 -->
                        <tr>
                            <td>6</td>
                            <td class="icon-cell"><i class="fas fa-male case-type-icon"></i>Cerai Talak</td>
                            <td class="case-count">10</td>
                            <td class="case-count">8</td>
                            <td class="case-count highlight-cell">18</td>
                            <td>-</td>
                            <td class="case-count">5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">5</td>
                            <td class="case-count">13</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 7 -->
                        <tr>
                            <td>7</td>
                            <td class="icon-cell"><i class="fas fa-female case-type-icon"></i>Cerai Gugat</td>
                            <td class="case-count">39</td>
                            <td class="case-count">30</td>
                            <td class="case-count highlight-cell">69</td>
                            <td class="case-count">4</td>
                            <td class="case-count">34</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">39</td>
                            <td class="case-count">30</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 8 -->
                        <tr>
                            <td>8</td>
                            <td class="icon-cell"><i class="fas fa-home case-type-icon"></i>Harta Bersama</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 9 -->
                        <tr>
                            <td>9</td>
                            <td class="icon-cell"><i class="fas fa-child case-type-icon"></i>Penguasaan Anak</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Remaining rows based on image data -->
                        <!-- Row 19 -->
                        <tr>
                            <td>19</td>
                            <td class="icon-cell"><i class="fas fa-globe-americas case-type-icon"></i>Perkawinan Campuran</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 20 -->
                        <tr>
                            <td>20</td>
                            <td class="icon-cell"><i class="fas fa-id-card case-type-icon"></i>Isbat Nikah</td>
                            <td class="case-count">1</td>
                            <td class="case-count">22</td>
                            <td class="case-count highlight-cell">23</td>
                            <td>-</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">1</td>
                            <td class="case-count">22</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 21 -->
                        <tr>
                            <td>21</td>
                            <td class="icon-cell"><i class="fas fa-exclamation-triangle case-type-icon"></i>Dispensasi Kawin</td>
                            <td class="case-count">1</td>
                            <td class="case-count">2</td>
                            <td class="case-count highlight-cell">3</td>
                            <td>-</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">1</td>
                            <td class="case-count">2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 22 -->
                        <tr>
                            <td>22</td>
                            <td class="icon-cell"><i class="fas fa-ban case-type-icon"></i>Wali Adhal</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Rows 23-29 with example data -->
                        <tr>
                            <td>26</td>
                            <td class="icon-cell"><i class="fas fa-poll case-type-icon"></i>P3HP</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 27 -->
                        <tr>
                            <td>27</td>
                            <td class="icon-cell"><i class="fas fa-pray case-type-icon"></i>Waqaf</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 28 -->
                        <tr>
                            <td>28</td>
                            <td class="icon-cell"><i class="fas fa-map-marked-alt case-type-icon"></i>Lain-Lain</td>
                            <td class="case-count">4</td>
                            <td class="case-count">4</td>
                            <td class="case-count highlight-cell">8</td>
                            <td>-</td>
                            <td class="case-count">4</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">4</td>
                            <td class="case-count">4</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 29 -->
                        <tr>
                            <td>29</td>
                            <td class="icon-cell"><i class="fas fa-synagogue case-type-icon"></i>Ekonomi Syariah</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <!-- Row 30 -->
                        <tr>
                            <td>30</td>
                            <td class="icon-cell"><i class="fas fa-file-signature case-type-icon"></i>PKTP/Penetapan Ahli Waris</td>
                            <td>-</td>
                            <td class="case-count">2</td>
                            <td class="case-count highlight-cell">2</td>
                            <td>-</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">1</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="icon-cell"><i class="fas fa-calculator"></i> JUMLAH</td>
                            <td class="case-count">55</td>
                            <td class="case-count">66</td>
                            <td class="case-count highlight-cell">128</td>
                            <td class="case-count">4</td>
                            <td class="case-count">52</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">57</td>
                            <td class="case-count">75</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <!-- Chart visualization section -->
        <div class="chart-container">
            <div class="chart-box">
                <div class="chart-title">
                    <i class="fas fa-chart-pie"></i> Distribusi Jenis Perkara April 2025
                </div>
                <div id="caseTypeChart" class="chart-wrapper"></div>
            </div>
            <div class="chart-box">
                <div class="chart-title">
                    <i class="fas fa-chart-bar"></i> Perbandingan Perkara Masuk & Putus
                </div>
                <div id="caseComparisonChart" class="chart-wrapper"></div>
            </div>
        </div>

        <div class="signature-section">
            <div class="signature-box">
                <h4><i class="fas fa-pen-fancy"></i> Pengesahan</h4>
                <p>Amuntai, 30 April 2025</p>
                <p>Panitera</p>
                <div class="signature-line"></div>
                <p><strong>H. Ahmad Salim Ridha, S.Ag., M.H</strong></p>
                <p>NIP. 19780630 200704 1 001</p>
            </div>
        </div>
    </div>

    <div class="page-footer">
        <p><i class="fas fa-copyright"></i> 2025 Pengadilan Agama Amuntai</p>
        <p>Laporan Perkara LIPA 6 | Bulan April 2025</p>
    </div>

    <!-- Add ApexCharts for better visualizations -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pie Chart for Case Types
            var caseTypeOptions = {
                series: [18, 69, 23, 3, 8, 2],
                chart: {
                    width: '100%',
                    type: 'pie',
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        speed: 800,
                        animateGradually: {
                            enabled: true,
                            delay: 150
                        },
                        dynamicAnimation: {
                            enabled: true,
                            speed: 350
                        }
                    }
                },
                labels: ['Cerai Talak', 'Cerai Gugat', 'Isbat Nikah', 'Dispensasi Kawin', 'Lain-Lain', 'PKTP'],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 300
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                colors: ['#1e5631', '#3c8dbc', '#f39c12', '#e74c3c', '#9b59b6', '#2ecc71'],
                tooltip: {
                    y: {
                        formatter: function(value) {
                            return value + " perkara";
                        }
                    }
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center'
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val, opts) {
                        return opts.w.config.series[opts.seriesIndex] + ' (' + val.toFixed(1) + '%)';
                    }
                }
            };

            var caseTypeChart = new ApexCharts(document.querySelector("#caseTypeChart"), caseTypeOptions);
            caseTypeChart.render();

            // Bar chart for Case Comparison
            var caseComparisonOptions = {
                series: [{
                    name: 'Sisa Bulan Lalu',
                    data: [55]
                }, {
                    name: 'Perkara Masuk',
                    data: [66]
                }, {
                    name: 'Perkara Putus',
                    data: [57]
                }, {
                    name: 'Sisa Akhir',
                    data: [75]
                }],
                chart: {
                    type: 'bar',
                    height: 350,
                    stacked: false,
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        borderRadius: 5,
                        dataLabels: {
                            position: 'top'
                        },
                    },
                },
                dataLabels: {
                    enabled: true,
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['April 2025'],
                },
                yaxis: {
                    title: {
                        text: 'Jumlah Perkara'
                    }
                },
                fill: {
                    opacity: 1
                },
                colors: ['#2c3e50', '#3c8dbc', '#1e5631', '#f39c12'],
                tooltip: {
                    y: {
                        formatter: function(val) {
                            return val + " perkara";
                        }
                    }
                },
                legend: {
                    position: 'bottom',
                    horizontalAlign: 'center'
                }
            };

            var caseComparisonChart = new ApexCharts(document.querySelector("#caseComparisonChart"), caseComparisonOptions);
            caseComparisonChart.render();
        });
    </script>
</body>

</html>