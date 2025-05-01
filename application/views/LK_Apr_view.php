<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Perkara - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            /* New Theme: Emerald Green & Neutrals */
            --primary-color: #20c997; /* Vibrant Emerald Green */
            --secondary-color: #6c757d; /* Medium Gray */
            --bg-color: #f8f9fa; /* Light Gray Background */
            --text-color: #343a40; /* Dark Gray Text */
            --border-color: #dee2e6;
            --header-bg: linear-gradient(135deg, #28a745, #20c997); /* Green Gradient Header */
            --header-text: #ffffff;
            --footer-bg: #343a40; /* Dark Footer */
            --hover-color: #e9f7f1; /* Light Green Hover */
            --box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); /* Softer Shadow */
            --table-header-bg: #28a745; /* Darker Green for Table Header */
            --table-header-text: #ffffff;
            --total-row-bg: #d4edda; /* Light Green for Total */
            --saldo-row-bg: #f1f3f5; /* Lighter Gray for Saldo */
            --icon-color: #198754; /* Darker Green for Icons */
        }

        body {
            font-family: 'Lato', sans-serif; /* Changed font to Lato */
            margin: 0;
            padding: 0;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1140px;
            margin: 30px auto;
            padding: 0; /* Remove container padding, apply to sections */
            background-color: #ffffff;
            border-radius: 12px; /* Slightly larger radius */
            box-shadow: var(--box-shadow);
            overflow: hidden; /* Ensure radius clips content */
        }

        .header {
            background: var(--header-bg);
            color: var(--header-text);
            padding: 30px 25px;
            text-align: center;
            /* Removed bottom border, rely on gradient */
        }

        .header h1 {
            margin: 0 0 5px 0;
            font-size: 2rem;
            font-weight: 700;
        }

        .header h2 {
            margin: 0 0 10px 0;
            font-size: 1.5rem;
            font-weight: 500;
            opacity: 0.9;
        }

        .header h3 {
            margin: 0 0 15px 0;
            font-size: 1.2rem;
            font-weight: 400;
            opacity: 0.85;
        }

        .header p {
            margin: 0;
            font-size: 1rem;
            font-style: normal;
            font-weight: 500;
            opacity: 0.8;
        }

        .content-padding { /* Added class for consistent padding */
             padding: 30px 25px;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            margin-bottom: 30px;
            border: none; /* Remove border around container */
            border-radius: 0;
            box-shadow: none;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.92rem; /* Slightly adjusted font size */
            text-align: left;
            background-color: #fff;
        }

        .custom-table th,
        .custom-table td {
            padding: 14px 18px; /* Increased padding */
            border: none;
            border-bottom: 1px solid #f1f3f5; /* Very light horizontal lines */
            vertical-align: middle;
        }

        .custom-table th {
            background-color: var(--table-header-bg);
            color: var(--table-header-text);
            font-weight: 600;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #1e7e34; /* Darker green border */
        }
        /* Remove table header radius */
        .custom-table th:first-child { border-top-left-radius: 0; }
        .custom-table th:last-child { border-top-right-radius: 0; }

        .custom-table tbody tr:hover {
            background-color: var(--hover-color);
        }

        .custom-table tbody tr:last-child td {
             border-bottom: none;
        }

        .icon-cell {
            text-align: left;
            font-weight: 500;
            color: #495057;
        }

        .icon-cell i {
            margin-right: 10px;
            color: var(--icon-color); /* Use defined icon color */
            width: 18px;
            text-align: center;
            font-size: 1em;
        }

        .amount-cell {
            text-align: right;
            font-family: 'Roboto Mono', monospace;
            font-weight: 500;
            color: #212529;
        }

        .empty-cell {
            color: #adb5bd;
            font-style: italic;
        }

        .total-row {
            font-weight: 700;
            background-color: var(--total-row-bg) !important;
            border-top: 2px solid var(--icon-color);
            border-bottom: 1px solid var(--icon-color);
        }
        .total-row .icon-cell i { color: var(--icon-color); }

        .saldo-row {
            font-weight: 600;
            background-color: var(--saldo-row-bg) !important;
        }
        .saldo-row .icon-cell i { color: var(--secondary-color); }

        .saldo-row:last-child td {
            border-bottom: none;
        }
        /* Remove table bottom radius */
        .saldo-row td:first-child { border-bottom-left-radius: 0; }
        .saldo-row:last-child td:last-child { border-bottom-right-radius: 0; }


        .signature-section {
            display: flex;
            justify-content: space-between;
            align-items: stretch; /* Make boxes same height */
            margin-top: 0; /* Remove top margin */
            padding-top: 25px;
            border-top: 1px solid var(--border-color);
            flex-wrap: wrap;
            gap: 25px; /* Increased gap */
        }

        .info-box {
            background-color: #ffffff; /* White background */
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06); /* Subtle shadow on boxes */
            flex: 1;
            min-width: calc(50% - 12.5px); /* Adjust for gap */
            display: flex; /* Use flex for internal alignment */
            flex-direction: column; /* Stack content vertically */
        }

        .info-box h4 {
            margin-top: 0;
            margin-bottom: 18px;
            color: var(--icon-color); /* Use icon color for heading */
            font-size: 1.1rem;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 10px;
            font-weight: 600;
        }

        .info-box h4 i {
            margin-right: 10px;
        }

        .info-box p {
            margin: 8px 0;
            font-size: 0.9rem;
            color: #495057;
            flex-grow: 1; /* Allow paragraph to take space if needed */
        }

        .info-box p i {
            margin-right: 10px;
            color: var(--primary-color); /* Use primary green for info icons */
            width: 16px;
            text-align: center;
        }

        .signature-box {
            text-align: center;
        }

        .signature-line {
            height: 1px;
            background-color: var(--secondary-color);
            margin: auto auto 15px auto; /* Center vertically and horizontally */
            width: 65%;
            margin-top: 20px; /* Add space above line */
        }

        .signature-box p {
            margin: 5px 0;
            font-size: 0.9rem;
            flex-grow: 0; /* Don't allow signature text to grow */
        }

        .signature-box strong {
            font-size: 1rem;
            color: #212529;
        }

        .footer {
            background: var(--footer-bg);
            color: rgba(255, 255, 255, 0.75);
            text-align: center;
            padding: 20px 25px;
            margin-top: 0; /* Remove top margin */
            border-radius: 0;
            font-size: 0.85rem;
        }

        .footer i {
            margin-right: 5px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .content-padding { padding: 20px 15px; }
            .header { padding: 25px 15px; }
            .header h1 { font-size: 1.8rem; }
            .header h2 { font-size: 1.3rem; }
            .custom-table { font-size: 0.88rem; }
            .custom-table th, .custom-table td { padding: 12px 15px; }
            .signature-section { flex-direction: column; gap: 20px; }
            .info-box { min-width: 100%; }
        }

        @media (max-width: 576px) {
            body { font-size: 14px; } /* Adjust base font size */
             .content-padding { padding: 15px 10px; }
             .header { padding: 20px 10px; }
            .header h1 { font-size: 1.6rem; }
            .header h2 { font-size: 1.2rem; }
            .header h3 { font-size: 1.1rem; }
            .custom-table { font-size: 0.8rem; }
            .custom-table th, .custom-table td { padding: 10px 12px; }
            .icon-cell i { margin-right: 8px; }
            .info-box { padding: 20px; }
            .footer { padding: 15px 10px; font-size: 0.8rem; }
        }
    </style>
    <!-- Link to Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>LAPORAN KEUANGAN PERKARA</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <h3>BULAN APRIL 2025</h3> {/* Updated month */}
            <p>LIPA 7a</p>
        </div>

        <div class="content-padding"> {/* Added padding wrapper */}
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
        </div> {/* End content-padding */}
    </div> {/* End container */}

    <div class="footer">
        <p><i class="fas fa-copyright"></i> 2025 Pengadilan Agama Amuntai | Laporan Keuangan Perkara LIPA 7a</p>
    </div>
</body>
</html>
