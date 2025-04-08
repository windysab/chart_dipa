<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perkara - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4a6baf;
            --secondary-color: #8bc34a;
            --accent-color: #ff9800;
            --dark-color: #2c3e50;
            --light-color: #f5f7fa;
            --border-color: #e0e6ed;
            --hover-color: #eef2ff;
            --header-gradient: linear-gradient(135deg, #4a6baf, #5c7cbe);
            --footer-gradient: linear-gradient(135deg, #4a6baf, #3f5a96);
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
            background-color: rgba(139, 195, 74, 0.1);
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
            <h3>BULAN MARET TAHUN 2025</h3>
            <div class="lipa-badge">LIPA 8</div>
        </div>

        <div class="summary-cards">
            <div class="summary-card">
                <i class="fas fa-folder-open"></i>
                <h3>Total Perkara</h3>
                <div class="count">123</div>
                <p>Perkara diproses</p>
            </div>
            <div class="summary-card">
                <i class="fas fa-file-import"></i>
                <h3>Perkara Masuk</h3>
                <div class="count">58</div>
                <p>Bulan ini</p>
            </div>
            <div class="summary-card">
                <i class="fas fa-gavel"></i>
                <h3>Perkara Putus</h3>
                <div class="count">68</div>
                <p>Bulan ini</p>
            </div>
            <div class="summary-card">
                <i class="fas fa-balance-scale"></i>
                <h3>Sisa Perkara</h3>
                <div class="count">55</div>
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
                            <th colspan="19">BULAN MARET TAHUN 2025</th>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td class="icon-cell"><i class="fas fa-male case-type-icon"></i>Cerai Talak</td>
                            <td class="case-count">10</td>
                            <td class="case-count">2</td>
                            <td class="case-count highlight-cell">12</td>
                            <td>-</td>
                            <td class="case-count">10</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">10</td>
                            <td class="case-count">2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td class="icon-cell"><i class="fas fa-female case-type-icon"></i>Cerai Gugat</td>
                            <td class="case-count">42</td>
                            <td class="case-count">36</td>
                            <td class="case-count highlight-cell">78</td>
                            <td class="case-count">4</td>
                            <td class="case-count">34</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">39</td>
                            <td class="case-count">39</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
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
                            <td>-</td>
                            <td></td>
                        </tr>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td class="icon-cell"><i class="fas fa-money-bill-wave case-type-icon"></i>Nafkah Anak Oleh Ibu karena Ayah tidak mampu</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td class="icon-cell"><i class="fas fa-hand-holding-usd case-type-icon"></i>Hak - hak bekas istri/kewajiban bekas Suami</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td class="icon-cell"><i class="fas fa-baby case-type-icon"></i>Pengesahan Anak</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td class="icon-cell"><i class="fas fa-user-slash case-type-icon"></i>Pencabutan Kekuasaan Orang Tua</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td class="icon-cell"><i class="fas fa-user-shield case-type-icon"></i>Perwalian</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="highlight-cell">2</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="highlight-cell">2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td class="icon-cell"><i class="fas fa-user-times case-type-icon"></i>Pencabutan Kekuasaan Wali</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td class="icon-cell"><i class="fas fa-user-plus case-type-icon"></i>Penunjukan orang lain sebagai Wali oleh Pengadilan</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td class="icon-cell"><i class="fas fa-hand-holding case-type-icon"></i>Ganti Rugi terhadap Wali</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td class="icon-cell"><i class="fas fa-dna case-type-icon"></i>Asal Usul Anak</td>
                            <td>-</td>
                            <td>1</td>
                            <td class="highlight-cell">1</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="highlight-cell">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
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
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td class="icon-cell"><i class="fas fa-id-card case-type-icon"></i>Isbat Nikah</td>
                            <td>2</td>
                            <td>15</td>
                            <td class="highlight-cell">17</td>
                            <td>-</td>
                            <td>14</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="highlight-cell">14</td>
                            <td>3</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td class="icon-cell"><i class="fas fa-exclamation-triangle case-type-icon"></i>Dispensasi Kawin</td>
                            <td>-</td>
                            <td>3</td>
                            <td class="highlight-cell">3</td>
                            <td>-</td>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="highlight-cell">2</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                        </tr>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td class="icon-cell"><i class="fas fa-scroll case-type-icon"></i>Itsbat Wakaf</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td class="icon-cell"><i class="fas fa-landmark case-type-icon"></i>Penetapan Ahli Waris</td>
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
                            <td>-</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td class="icon-cell"><i class="fas fa-briefcase case-type-icon"></i>Lain-lain</td>
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
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="icon-cell"><i class="fas fa-calculator"></i> JUMLAH</td>
                            <td class="case-count">55</td>
                            <td class="case-count">58</td>
                            <td class="case-count highlight-cell">113</td>
                            <td class="case-count">4</td>
                            <td class="case-count">63</td>
                            <td class="case-count">1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td class="case-count highlight-cell">68</td>
                            <td class="case-count">45</td>
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
        <div class="table-wrapper">
            <div style="padding: 20px;">
                <h3 style="color: var(--primary-color); margin-bottom: 20px; text-align: center;">
                    <i class="fas fa-chart-pie"></i> Visualisasi Data Perkara
                </h3>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>
        </div>

        <div class="signature-section">
            <div class="signature-box">
                <h4><i class="fas fa-pen-fancy"></i> Pengesahan</h4>
                <p>Amuntai, 31 Maret 2025</p>
                <p>Panitera</p>
                <div class="signature-line"></div>
                <p><strong>H. Muhammad Arsyad, S.Ag., M.H.</strong></p>
                <p>NIP. 19750615 200112 1 002</p>
            </div>
        </div>
    </div>

    <div class="page-footer">
        <p><i class="fas fa-copyright"></i> 2025 Pengadilan Agama Amuntai</p>
        <p>Laporan Perkara LIPA 8 | Bulan Maret 2025</p>
    </div>

    <!-- Add CanvasJS for charts -->
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light2",
                animationEnabled: true,
                title: {
                    text: "Distribusi Perkara Bulan Maret 2025"
                },
                data: [{
                    type: "pie",
                    showInLegend: true,
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    dataPoints: [
                        { y: 12, label: "Cerai Talak" },
                        { y: 78, label: "Cerai Gugat" },
                        { y: 17, label: "Isbat Nikah" },
                        { y: 3, label: "Dispensasi Kawin" },
                        { y: 2, label: "Perwalian" },
                        { y: 1, label: "Asal Usul Anak" }
                    ]
                }]
            });
            chart.render();
        }
    </script>
</body>
</html>
