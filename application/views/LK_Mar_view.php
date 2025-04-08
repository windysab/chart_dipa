<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Perkara - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3f51b5;
            --secondary-color: #ff4081;
            --bg-color: #f5f7ff;
            --text-color: #2c3e50;
            --border-color: #e0e6ed;
            --header-gradient: linear-gradient(135deg, #3f51b5, #5c6bc0);
            --footer-gradient: linear-gradient(135deg, #3f51b5, #303f9f);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: var(--header-gradient);
            color: #ffffff;
            padding: 30px;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,5 C60,20 40,20 0,5 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: 100% 100%;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .header h2 {
            margin: 10px 0;
            font-size: 1.8rem;
            font-weight: 500;
        }

        .header h3 {
            margin: 10px 0;
            font-size: 1.5rem;
            font-weight: 400;
        }

        .header p {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            margin: 30px 0;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .table-container:hover {
            transform: translateY(-5px);
        }

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            font-size: 15px;
            text-align: left;
        }

        .custom-table th,
        .custom-table td {
            padding: 15px 20px;
            border: none;
            border-bottom: 1px solid var(--border-color);
        }

        .custom-table th {
            background: var(--primary-color);
            color: #ffffff;
            font-weight: 600;
            text-align: center;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 14px;
        }

        .custom-table th:first-child {
            border-top-left-radius: 12px;
        }

        .custom-table th:last-child {
            border-top-right-radius: 12px;
        }

        .custom-table tbody tr:last-child td:first-child {
            border-bottom-left-radius: 12px;
        }

        .custom-table tbody tr:last-child td:last-child {
            border-bottom-right-radius: 12px;
        }

        .custom-table tbody tr {
            transition: background-color 0.2s ease;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #f8faff;
        }

        .custom-table tbody tr:hover {
            background-color: #eef2ff;
        }

        .amount-cell {
            text-align: right;
            font-family: 'Consolas', monospace;
            position: relative;
        }

        .amount-cell::before {
            content: 'Rp';
            margin-right: 5px;
            opacity: 0.7;
        }

        .empty-cell::before {
            content: '';
        }

        .total-row {
            font-weight: bold;
            background-color: #e8eaf6 !important;
        }

        .total-row td {
            border-top: 2px solid var(--primary-color);
            border-bottom: 2px solid var(--primary-color);
        }

        .saldo-row td {
            background-color: #f5f5f5;
            font-weight: 500;
        }

        .signature-section {
            display: flex;
            justify-content: space-between;
            margin: 40px 0;
        }

        .info-box {
            flex: 0 0 48%;
            padding: 20px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .info-box:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .info-box h4 {
            margin-top: 0;
            color: var(--primary-color);
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 10px;
            font-size: 18px;
        }

        .signature-box {
            text-align: center;
        }

        .signature-box p {
            margin: 5px 0;
        }

        .signature-line {
            margin: 30px 0 10px;
            border-bottom: 1px solid var(--border-color);
            width: 70%;
            display: inline-block;
        }

        .footer {
            background: var(--footer-gradient);
            color: #ffffff;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
            border-radius: 20px 20px 0 0;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }

        .icon-cell {
            position: relative;
        }

        .icon-cell i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        @media print {
            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                border-radius: 0;
            }

            body {
                background-color: #fff;
            }

            .table-container {
                box-shadow: none;
            }

            .header {
                box-shadow: none;
                border-radius: 0;
            }
        }

        @media (max-width: 768px) {
            .signature-section {
                flex-direction: column;
            }

            .info-box {
                flex: 0 0 100%;
                margin-bottom: 20px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .header h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>LAPORAN KEUANGAN PERKARA</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <h3>BULAN MARET 2025</h3>
            <p>LIPA 7a</p>
        </div>

        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th width="5%">NO</th>
                        <th width="45%">URAIAN</th>
                        <th width="25%">PENERIMAAN (Rp)</th>
                        <th width="25%">PENGELUARAN (Rp)</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>1</td>
                        <td class="icon-cell"><i class="fas fa-wallet"></i>Sisa Awal</td>
                        <td class="amount-cell">8.243.500</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="icon-cell"><i class="fas fa-money-bill-wave"></i>Penerimaan bulan ini</td>
                        <td class="amount-cell">16.417.500</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="icon-cell"><i class="fas fa-file-invoice"></i>Biaya Proses/ATK/Pemberkasan *)</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">5.800.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="icon-cell"><i class="fas fa-phone"></i>Biaya Panggilan</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">2.072.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td class="icon-cell"><i class="fas fa-language"></i>Biaya Penterjemah</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td class="icon-cell"><i class="fas fa-envelope"></i>Biaya Pemberitahuan</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">646.500</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="icon-cell"><i class="fas fa-gavel"></i>Biaya Sita</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="icon-cell"><i class="fas fa-search-location"></i>Biaya Pemeriksaan Setempat</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td class="icon-cell"><i class="fas fa-book"></i>Biaya Sumpah</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td class="icon-cell"><i class="fas fa-shipping-fast"></i>Biaya Pengiriman</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="icon-cell"><i class="fas fa-stamp"></i>Materai</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">680.000</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td class="icon-cell"><i class="fas fa-file-invoice-dollar"></i>PNBP</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-file-signature"></i>Biaya Pendaftaran Tk I</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">1.740.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-balance-scale"></i>Biaya Pendaftaran Banding</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-balance-scale-right"></i>Biaya Pendaftaran Kasasi</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-edit"></i>Redaksi</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">680.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-coins"></i>PNBP lainnya</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">1.520.000</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="icon-cell"><i class="fas fa-undo-alt"></i>Pengembalian Sisa Panjar</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">4.780.000</td>
                    </tr>
                    <tr class="total-row">
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-calculator"></i>Jumlah</td>
                        <td class="amount-cell">24.661.000</td>
                        <td class="amount-cell">17.918.500</td>
                    </tr>
                    <tr class="saldo-row">
                        <td colspan="2" class="icon-cell"><i class="fas fa-balance-scale-left"></i>Saldo Akhir</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">6.742.500</td>
                    </tr>
                    <tr class="saldo-row">
                        <td colspan="2" class="icon-cell"><i class="fas fa-university"></i>Saldo Bank</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">1.395.500</td>
                    </tr>
                    <tr class="saldo-row">
                        <td colspan="2" class="icon-cell"><i class="fas fa-cash-register"></i>Saldo Kas Tunai</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">5.347.000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="signature-section">
            <div class="info-box">
                <h4><i class="fas fa-info-circle"></i> Catatan Perkara</h4>
                <p><i class="fas fa-file-alt"></i> Perkara masuk: 87 perkara</p>
                <p><i class="fas fa-gavel"></i> Perkara putus: 92 Perkara</p>
                <p><i class="fas fa-chart-line"></i> Rasio penyelesaian: 105.7%</p>
            </div>
            
            <div class="info-box signature-box">
                <h4><i class="fas fa-pen-fancy"></i> Pengesahan</h4>
                <p>Amuntai, 31 Maret 2025</p>
                <p>Panitera</p>
                <div class="signature-line"></div>
                <p><strong>H. Muhammad Arsyad, S.Ag., M.H.</strong></p>
                <p>NIP. 19750615 200112 1 002</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p><i class="fas fa-copyright"></i> 2025 Pengadilan Agama Amuntai | Laporan Keuangan Perkara LIPA 7a</p>
    </div>
</body>

</html>