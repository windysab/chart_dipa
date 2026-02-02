<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Perkara - Januari 2026</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: #ffffff;
            padding: 30px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: "💰";
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 3rem;
            opacity: 0.3;
        }

        .header h1 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .header .subtitle {
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0.9;
        }

        .badge-2026 {
            position: absolute;
            top: 20px;
            left: 30px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: 600;
            backdrop-filter: blur(10px);
        }

        .table-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            background-color: #ffffff;
        }

        .custom-table th,
        .custom-table td {
            padding: 15px 20px;
            border: 1px solid #e1e8ed;
            text-align: left;
        }

        .custom-table th {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            font-size: 18px;
        }

        .custom-table .header-row {
            background: linear-gradient(135deg, #2c3e50, #3498db);
            color: white;
            font-size: 20px;
            font-weight: 700;
        }

        .custom-table tbody tr:nth-of-type(even) {
            background-color: #f8fafc;
        }

        .custom-table tbody tr:hover {
            background-color: #e3f2fd;
            transform: scale(1.01);
            transition: all 0.3s ease;
        }

        .custom-table .number-col {
            text-align: center;
            font-weight: bold;
            color: #2c3e50;
            background: #ecf0f1;
        }

        .custom-table .amount-col {
            text-align: right;
            font-weight: 600;
            color: #27ae60;
        }

        .custom-table .expense-col {
            text-align: right;
            font-weight: 600;
            color: #e74c3c;
        }

        .total-row {
            background: linear-gradient(135deg, #f39c12, #e67e22) !important;
            color: white !important;
            font-weight: bold !important;
            font-size: 18px !important;
        }

        .total-row td {
            border-top: 3px solid #d35400 !important;
        }

        .saldo-section {
            background: linear-gradient(135deg, #16a085, #2ecc71);
            color: white;
        }

        .saldo-section td {
            font-weight: 600;
            font-size: 16px;
        }

        .info-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-card {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .info-card h3 {
            margin: 0 0 10px 0;
            font-size: 1.8rem;
        }

        .info-card p {
            margin: 0;
            opacity: 0.9;
            font-size: 1.1rem;
        }

        .signature-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .signature-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            text-align: center;
        }

        .signature-box {
            padding: 20px;
        }

        .signature-box h4 {
            color: #2c3e50;
            margin-bottom: 80px;
            font-size: 1.1rem;
        }

        .signature-box .name {
            border-top: 2px solid #3498db;
            padding-top: 10px;
            font-weight: bold;
            color: #2c3e50;
        }

        .catatan {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .catatan h4 {
            color: #856404;
            margin: 0 0 15px 0;
        }

        .catatan ul {
            margin: 0;
            padding-left: 20px;
            color: #856404;
        }

        .footer {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: #ffffff;
            text-align: center;
            padding: 20px;
            border-radius: 15px;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }

            .custom-table {
                font-size: 14px;
            }

            .custom-table th,
            .custom-table td {
                padding: 10px 12px;
            }

            .signature-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .badge-2026 {
                position: static;
                margin-bottom: 15px;
                display: inline-block;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="badge-2026">📊 Tahun 2026</div>
            <h1>LAPORAN KEUANGAN PERKARA</h1>
            <div class="subtitle">PENGADILAN AGAMA AMUNTAI</div>
            <div class="subtitle">BULAN JANUARI 2026 - LIPA 7a</div>
        </div>

        <!-- Summary Cards -->
        <div class="info-cards">
            <div class="info-card">
                <h3>Rp 28.126.000</h3>
                <p>Total Penerimaan</p>
            </div>
            <div class="info-card">
                <h3>Rp 19.347.000</h3>
                <p>Total Pengeluaran</p>
            </div>
            <div class="info-card">
                <h3>Rp 8.779.000</h3>
                <p>Saldo Akhir</p>
            </div>
            <div class="info-card">
                <h3>111 Perkara</h3>
                <p>Perkara Masuk</p>
            </div>
        </div>

        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr class="header-row">
                        <th>NO</th>
                        <th>URAIAN</th>
                        <th>PENERIMAAN (Rp)</th>
                        <th>PENGELUARAN (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="number-col">1</td>
                        <td><strong>Sisa Awal</strong></td>
                        <td class="amount-col">Rp 1.711.000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="number-col">2</td>
                        <td><strong>Penerimaan bulan ini</strong></td>
                        <td class="amount-col">Rp 26.415.000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="number-col">3</td>
                        <td>Biaya Proses/ATK/Pemberkasan *)</td>
                        <td></td>
                        <td class="expense-col">Rp 9.800.000</td>
                    </tr>
                    <tr>
                        <td class="number-col">4</td>
                        <td>Biaya Panggilan</td>
                        <td></td>
                        <td class="expense-col">Rp 1.852.500</td>
                    </tr>
                    <tr>
                        <td class="number-col">5</td>
                        <td>Biaya Penterjemah</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td class="number-col">6</td>
                        <td>Biaya Pemberitahuan</td>
                        <td></td>
                        <td class="expense-col">Rp 178.500</td>
                    </tr>
                    <tr>
                        <td class="number-col">7</td>
                        <td>Biaya Sita</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td class="number-col">8</td>
                        <td>Biaya Pemeriksaan Setempat</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td class="number-col">9</td>
                        <td>Biaya Sumpah</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td class="number-col">10</td>
                        <td>Biaya Pengiriman</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td class="number-col">11</td>
                        <td>Materai</td>
                        <td></td>
                        <td class="expense-col">Rp 240.000</td>
                    </tr>
                    <tr>
                        <td class="number-col">12</td>
                        <td><strong>PNBP</strong></td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;&nbsp;• Biaya Pendaftaran Tk I</td>
                        <td></td>
                        <td class="expense-col">Rp 2.940.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;&nbsp;• Biaya Pendaftaran Banding</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;&nbsp;• Biaya Pendaftaran Kasasi</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;&nbsp;• Redaksi</td>
                        <td></td>
                        <td class="expense-col">Rp 240.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;&nbsp;• PNBP lainnya</td>
                        <td></td>
                        <td class="expense-col">Rp 2.110.000</td>
                    </tr>
                    <tr>
                        <td class="number-col">13</td>
                        <td>Pengembalian Sisa Panjar</td>
                        <td></td>
                        <td class="expense-col">Rp 1.986.000</td>
                    </tr>
                    <tr class="total-row">
                        <td></td>
                        <td><strong>JUMLAH</strong></td>
                        <td><strong>Rp 28.126.000</strong></td>
                        <td><strong>Rp 19.347.000</strong></td>
                    </tr>
                    <tr class="saldo-section">
                        <td></td>
                        <td><strong>Saldo Akhir</strong></td>
                        <td></td>
                        <td><strong>Rp 8.779.000</strong></td>
                    </tr>
                    <tr class="saldo-section">
                        <td></td>
                        <td><strong>Saldo Bank</strong></td>
                        <td></td>
                        <td><strong>Rp 2.181.000</strong></td>
                    </tr>
                    <tr class="saldo-section">
                        <td></td>
                        <td><strong>Saldo Kas Tunai</strong></td>
                        <td></td>
                        <td><strong>Rp 6.598.000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Catatan -->
        <div class="info-section">
            <div class="catatan">
                <h4>📋 Catatan Penting:</h4>
                <ul>
                    <li><strong>Perkara masuk:</strong> 111 perkara (13 Prodeo)</li>
                    <li><strong>Perkara putus:</strong> 25 Perkara (1 Prodeo)</li>
                    <li><strong>Period:</strong> Januari 2026</li>
                    <li><strong>Status:</strong> Laporan Bulanan LIPA 7a</li>
                </ul>
            </div>
        </div>

        <!-- Signature Section -->
        <div class="signature-section">
            <p style="text-align: center; margin-bottom: 30px; color: #2c3e50; font-weight: 600;">
                Mengetahui: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amuntai, 02 Februari 2026
            </p>
            <div class="signature-content">
                <div class="signature-box">
                    <h4>Wakil Ketua</h4>
                    <div class="name">Hj. Mursidah, S.Ag., M.H.</div>
                </div>
                <div class="signature-box">
                    <h4>Panitera,</h4>
                    <div class="name">H. Ahmad Ramli, S.H.</div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2026 Pengadilan Agama Amuntai. All rights reserved.</p>
        </div>
    </div>

    <script>
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const cards = document.querySelectorAll('.info-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'slideInUp 0.6s ease forwards';
                    }
                });
            });

            cards.forEach(card => observer.observe(card));

            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('.custom-table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
                });
                row.addEventListener('mouseleave', function() {
                    this.style.boxShadow = 'none';
                });
            });
        });
    </script>

    <style>
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</body>

</html>