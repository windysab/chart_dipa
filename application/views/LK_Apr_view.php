<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Perkara - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            /* New Color Scheme: Blue & Gray with Accent */
            --primary-color: #0056b3; /* Deeper Blue */
            --secondary-color: #6c757d; /* Medium Gray */
            --accent-color: #17a2b8; /* Cyan Accent */
            --bg-color: #eef2f7; /* Lighter Blue-Gray Background */
            --text-color: #343a40; /* Dark Gray Text */
            --border-color: #ced4da;
            --header-bg: #ffffff; /* White Header Background */
            --footer-bg: #343a40; /* Dark Footer */
            --hover-color: #f1f3f5; /* Light Gray Hover */
            --box-shadow: 0 5px 15px rgba(0, 86, 179, 0.1); /* Softer Blue Shadow */
            --table-header-bg: #0056b3;
            --table-header-text: #ffffff;
            --total-row-bg: #e6f0ff; /* Light Blue for Total */
            --saldo-row-bg: #f8f9fa; /* Very Light Gray for Saldo */
        }

        body {
            font-family: 'Nunito Sans', sans-serif; /* Changed font for softer look */
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.7; /* Slightly increased line height */
        }

        .container {
            max-width: 1140px; /* Slightly narrower */
            margin: 30px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px; /* Slightly smaller radius */
            box-shadow: var(--box-shadow);
            border: 1px solid #dee2e6; /* Subtle border */
        }

        .header {
            background: var(--header-bg);
            color: var(--primary-color); /* Header text uses primary color */
            padding: 25px 20px;
            text-align: center;
            margin-bottom: 35px;
            border-bottom: 3px solid var(--primary-color); /* Solid border bottom */
            border-radius: 0; /* Remove header radius */
        }

        .header h1 {
            margin: 0 0 8px 0;
            font-size: 2.1rem;
            font-weight: 700;
            color: #212529; /* Darker heading */
        }

        .header h2 {
            margin: 0 0 12px 0;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .header h3 {
            margin: 0 0 15px 0;
            font-size: 1.25rem;
            font-weight: 400;
            color: var(--secondary-color); /* Gray for subtitle */
        }

        .header p {
            margin: 0;
            font-size: 1rem;
            font-style: normal; /* Removed italic */
            font-weight: 500;
            color: var(--secondary-color);
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 35px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05); /* Subtle shadow on table */
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem; /* Slightly smaller font */
            text-align: left;
            background-color: #fff;
        }

        .custom-table th,
        .custom-table td {
            padding: 12px 15px; /* Adjusted padding */
            border: none;
            border-bottom: 1px solid #e9ecef; /* Lighter horizontal lines */
            vertical-align: middle;
        }

        .custom-table th {
            background-color: var(--table-header-bg);
            color: var(--table-header-text);
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--primary-color); /* Stronger border under header */
        }
        .custom-table th:first-child { border-top-left-radius: 7px; } /* Rounded corners for header */
        .custom-table th:last-child { border-top-right-radius: 7px; }

        .custom-table tbody tr:hover {
            background-color: var(--hover-color);
        }

        .custom-table tbody tr:last-child td {
             border-bottom: none;
        }

        .icon-cell {
            text-align: left;
            font-weight: 500;
            color: #495057; /* Slightly darker text for items */
        }

        .icon-cell i {
            margin-right: 12px; /* Increased icon margin */
            color: var(--accent-color); /* Use accent color for icons */
            width: 20px;
            text-align: center;
            font-size: 1.1em; /* Slightly larger icons */
        }

        .amount-cell {
            text-align: right;
            font-family: 'Roboto Mono', monospace;
            font-weight: 500;
            color: #212529; /* Darker numbers */
        }

        .empty-cell {
            color: #adb5bd;
            font-style: italic; /* Italicize empty cells */
        }

        .total-row {
            font-weight: 700;
            background-color: var(--total-row-bg) !important;
            border-top: 2px solid var(--primary-color);
            border-bottom: 1px solid var(--primary-color); /* Add bottom border too */
        }
        .total-row .icon-cell i { color: var(--primary-color); } /* Match icon color */

        .saldo-row {
            font-weight: 600;
            background-color: var(--saldo-row-bg) !important;
        }
        .saldo-row .icon-cell i { color: var(--secondary-color); } /* Gray icons for saldo */

        .saldo-row:last-child td {
            border-bottom: none;
        }
        .saldo-row td:first-child { border-bottom-left-radius: 7px; } /* Rounded bottom corners */
        .saldo-row:last-child td:last-child { border-bottom-right-radius: 7px; }


        .signature-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid var(--border-color); /* Lighter separator */
            flex-wrap: wrap;
            gap: 20px; /* Add gap between boxes */
        }

        .info-box {
            background-color: #f8f9fa; /* Light gray background for boxes */
            padding: 25px; /* Increased padding */
            border-radius: 8px;
            border: 1px solid #e9ecef; /* Lighter border */
            box-shadow: none; /* Remove individual shadow */
            flex: 1; /* Allow boxes to grow */
            min-width: 280px; /* Minimum width before wrapping */
        }

        .info-box h4 {
            margin-top: 0;
            margin-bottom: 18px; /* Increased margin */
            color: var(--primary-color);
            font-size: 1.15rem; /* Slightly larger heading */
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 10px;
            font-weight: 600;
        }

        .info-box h4 i {
            margin-right: 10px;
        }

        .info-box p {
            margin: 10px 0; /* Increased paragraph margin */
            font-size: 0.95rem;
            color: #495057;
        }

        .info-box p i {
            margin-right: 10px;
            color: var(--accent-color); /* Accent color for info icons */
            width: 18px;
            text-align: center;
        }

        .signature-box {
            text-align: center;
            background-color: #fff; /* White background for signature */
        }

        .signature-line {
            height: 1px;
            background-color: var(--secondary-color); /* Gray line */
            margin: 35px auto 15px auto; /* Adjusted margin */
            width: 60%;
        }

        .signature-box p {
            margin: 8px 0;
            font-size: 0.95rem;
        }

        .signature-box strong {
            font-size: 1.05rem; /* Slightly larger name */
            color: #212529;
        }

        .footer {
            background: var(--footer-bg);
            color: rgba(255, 255, 255, 0.8); /* Lighter footer text */
            text-align: center;
            padding: 25px; /* Increased padding */
            margin-top: 40px;
            border-radius: 0; /* Remove footer radius */
            font-size: 0.85rem; /* Smaller footer text */
        }

        .footer i {
            margin-right: 5px;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .container { max-width: 960px; padding: 25px; }
        }
        @media (max-width: 768px) {
            .container { max-width: 720px; padding: 20px; margin: 20px auto; }
            .header h1 { font-size: 1.9rem; }
            .header h2 { font-size: 1.4rem; }
            .custom-table { font-size: 0.85rem; }
            .custom-table th, .custom-table td { padding: 10px 12px; }
            .signature-section { flex-direction: column; gap: 15px; }
            .info-box { min-width: 100%; } /* Stack boxes */
        }

        @media (max-width: 576px) {
            .container { max-width: 100%; padding: 15px; margin: 15px auto; border-radius: 0; border: none; box-shadow: none; }
            .header h1 { font-size: 1.6rem; }
            .header h2 { font-size: 1.2rem; }
            .header h3 { font-size: 1.1rem; }
            .custom-table { font-size: 0.8rem; }
            .custom-table th, .custom-table td { padding: 8px 10px; }
            .icon-cell i { margin-right: 8px; }
            .info-box { padding: 20px; }
        }
    </style>
    <!-- Link to Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LAPORAN KEUANGAN PERKARA</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <h3>BULAN APRIL 2025</h3> {/* Updated month */}
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
                    {/* Data tabel masih sama dengan Maret, perlu disesuaikan nanti */}
                    <tr>
                        <td>1</td>
                        <td class="icon-cell"><i class="fas fa-wallet"></i>Sisa Awal</td>
                        <td class="amount-cell">8.243.500</td> {/* Placeholder data */}
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="icon-cell"><i class="fas fa-money-bill-wave"></i>Penerimaan bulan ini</td>
                        <td class="amount-cell">16.417.500</td> {/* Placeholder data */}
                        <td class="amount-cell empty-cell">-</td>
                    </tr>
                    {/* Rows 3 to 13 with placeholder data */}
                    <tr>
                        <td>3</td>
                        <td class="icon-cell"><i class="fas fa-file-invoice"></i>Biaya Proses/ATK/Pemberkasan *)</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">5.800.000</td> {/* Placeholder data */}
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="icon-cell"><i class="fas fa-phone"></i>Biaya Panggilan</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">2.072.000</td> {/* Placeholder data */}
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
                        <td class="amount-cell">646.500</td> {/* Placeholder data */}
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
                        <td class="amount-cell">680.000</td> {/* Placeholder data */}
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
                        <td class="amount-cell">1.740.000</td> {/* Placeholder data */}
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
                        <td class="amount-cell">680.000</td> {/* Placeholder data */}
                    </tr>
                    <tr>
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-coins"></i>PNBP lainnya</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">1.520.000</td> {/* Placeholder data */}
                    </tr>
                    <tr>
                        <td>13</td>
                        <td class="icon-cell"><i class="fas fa-undo-alt"></i>Pengembalian Sisa Panjar</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">4.780.000</td> {/* Placeholder data */}
                    </tr>
                    {/* ... existing code ... */}
                    <tr class="total-row">
                        <td></td>
                        <td class="icon-cell"><i class="fas fa-calculator"></i>Jumlah</td>
                        <td class="amount-cell">24.661.000</td> {/* Placeholder data */}
                        <td class="amount-cell">17.918.500</td> {/* Placeholder data */}
                    </tr>
                    <tr class="saldo-row">
                        <td colspan="2" class="icon-cell"><i class="fas fa-balance-scale-left"></i>Saldo Akhir</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">6.742.500</td> {/* Placeholder data */}
                    </tr>
                    <tr class="saldo-row">
                        <td colspan="2" class="icon-cell"><i class="fas fa-university"></i>Saldo Bank</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">1.395.500</td> {/* Placeholder data */}
                    </tr>
                    <tr class="saldo-row">
                        <td colspan="2" class="icon-cell"><i class="fas fa-cash-register"></i>Saldo Kas Tunai</td>
                        <td class="amount-cell empty-cell">-</td>
                        <td class="amount-cell">5.347.000</td> {/* Placeholder data */}
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="signature-section">
            <div class="info-box">
                <h4><i class="fas fa-info-circle"></i> Catatan Perkara</h4>
                {/* Placeholder data */}
                <p><i class="fas fa-file-alt"></i> Perkara masuk: 87 perkara</p>
                <p><i class="fas fa-gavel"></i> Perkara putus: 92 Perkara</p>
                <p><i class="fas fa-chart-line"></i> Rasio penyelesaian: 105.7%</p>
            </div>

            <div class="info-box signature-box">
                <h4><i class="fas fa-pen-fancy"></i> Pengesahan</h4>
                <p>Amuntai, April 2025</p> {/* Updated date */}
                <p>Panitera</p>
                <div class="signature-line"></div>
                <p><strong>H. Ahmad Salim Ridha, S.Ag., M.H.</strong></p>
                <p>NIP. 19780630 200704 1 001</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p><i class="fas fa-copyright"></i> 2025 Pengadilan Agama Amuntai | Laporan Keuangan Perkara LIPA 7a</p>
    </div>
</body>

</html>
