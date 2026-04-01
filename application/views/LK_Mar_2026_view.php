<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan Perkara - Maret 2026</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #059669, #10b981);
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
            content: "🌸";
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

        .spring-badge {
            position: absolute;
            bottom: 20px;
            right: 30px;
            background: rgba(187, 247, 208, 0.9);
            color: #065f46;
            padding: 8px 16px;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .table-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
            border: 1px solid rgba(5, 150, 105, 0.1);
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
            border: 1px solid rgba(5, 150, 105, 0.1);
            text-align: left;
        }

        .custom-table th {
            background: linear-gradient(135deg, #059669, #10b981);
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            font-size: 18px;
        }

        .custom-table .header-row {
            background: linear-gradient(135deg, #059669, #10b981);
            color: white;
            font-size: 20px;
            font-weight: 700;
        }

        .custom-table tbody tr:nth-of-type(even) {
            background-color: #f0fdf4;
        }

        .custom-table tbody tr:hover {
            background-color: rgba(5, 150, 105, 0.05);
            transform: scale(1.01);
            transition: all 0.3s ease;
        }

        .custom-table .number-col {
            text-align: center;
            font-weight: bold;
            color: #059669;
            background: rgba(5, 150, 105, 0.05);
        }

        .custom-table .amount-col {
            text-align: right;
            font-weight: 600;
            color: #059669;
        }

        .custom-table .expense-col {
            text-align: right;
            font-weight: 600;
            color: #dc2626;
        }

        .total-row {
            background: linear-gradient(135deg, #059669, #10b981) !important;
            color: white !important;
            font-weight: bold !important;
            font-size: 18px !important;
        }

        .total-row td {
            border-top: 3px solid #047857 !important;
        }

        .saldo-section {
            background: linear-gradient(135deg, #059669, #10b981);
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
            border: 1px solid rgba(5, 150, 105, 0.1);
        }

        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-card {
            background: linear-gradient(135deg, #059669, #10b981);
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(5, 150, 105, 0.2);
            position: relative;
            overflow: hidden;
        }

        .info-card::before {
            content: "🌱";
            position: absolute;
            top: 10px;
            right: 15px;
            opacity: 0.2;
            font-size: 1.5rem;
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
            border: 1px solid rgba(5, 150, 105, 0.1);
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
            color: #059669;
            margin-bottom: 80px;
            font-size: 1.1rem;
        }

        .signature-box .name {
            border-top: 2px solid #059669;
            padding-top: 10px;
            font-weight: bold;
            color: #059669;
        }

        .catatan {
            background: #f0fdf4;
            border: 2px solid #10b981;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .catatan h4 {
            color: #059669;
            margin: 0 0 15px 0;
        }

        .catatan ul {
            margin: 0;
            padding-left: 20px;
            color: #047857;
        }

        .footer {
            background: linear-gradient(135deg, #059669, #10b981);
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

            .spring-badge {
                position: static;
                margin-top: 15px;
                display: inline-block;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="badge-2026">🌱 Tahun 2026</div>
            <h1>LAPORAN KEUANGAN PERKARA</h1>
            <div class="subtitle">PENGADILAN AGAMA AMUNTAI</div>
            <div class="subtitle">BULAN MARET 2026 - LIPA 7a</div>
            <div class="spring-badge">🌸 Musim Semi</div>
        </div>

        <!-- Summary Cards -->
        <div class="info-cards">
            <div class="info-card">
                <h3>Rp 48.725.000</h3>
                <p>Total Penerimaan</p>
            </div>
            <div class="info-card">
                <h3>Rp 29.865.500</h3>
                <p>Total Pengeluaran</p>
            </div>
            <div class="info-card">
                <h3>Rp 18.859.500</h3>
                <p>Saldo Akhir</p>
            </div>
            <div class="info-card">
                <h3>158 Perkara</h3>
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
                        <td class="amount-col">Rp 16.359.500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="number-col">2</td>
                        <td><strong>Penerimaan bulan ini</strong></td>
                        <td class="amount-col">Rp 32.365.500</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="number-col">3</td>
                        <td>Biaya Proses/ATK/Pemberkasan *)</td>
                        <td></td>
                        <td class="expense-col">Rp 15.750.000</td>
                    </tr>
                    <tr>
                        <td class="number-col">4</td>
                        <td>Biaya Panggilan</td>
                        <td></td>
                        <td class="expense-col">Rp 2.380.000</td>
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
                        <td class="expense-col">Rp 225.500</td>
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
                        <td class="expense-col">Rp 315.000</td>
                    </tr>
                    <tr>
                        <td class="number-col">12</td>
                        <td><strong>PNBP</strong></td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Biaya Pendaftaran Tk I</td>
                        <td></td>
                        <td class="expense-col">Rp 3.950.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Biaya Pendaftaran Banding</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Biaya Pendaftaran Kasasi</td>
                        <td></td>
                        <td class="expense-col">Rp -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Redaksi</td>
                        <td></td>
                        <td class="expense-col">Rp 1.185.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>PNBP lainnya</td>
                        <td></td>
                        <td class="expense-col">Rp 2.890.000</td>
                    </tr>
                    <tr>
                        <td class="number-col">13</td>
                        <td>Pengembalian Sisa Panjar</td>
                        <td></td>
                        <td class="expense-col">Rp 3.170.000</td>
                    </tr>
                    <tr class="total-row">
                        <td></td>
                        <td><strong>Jumlah</strong></td>
                        <td><strong>Rp 48.725.000</strong></td>
                        <td><strong>Rp 29.865.500</strong></td>
                    </tr>
                    <tr class="saldo-section">
                        <td></td>
                        <td><strong>Saldo Akhir</strong></td>
                        <td></td>
                        <td><strong>Rp 18.859.500</strong></td>
                    </tr>
                    <tr class="saldo-section">
                        <td></td>
                        <td><strong>Saldo Bank</strong></td>
                        <td></td>
                        <td><strong>Rp 16.601.000</strong></td>
                    </tr>
                    <tr class="saldo-section">
                        <td></td>
                        <td><strong>Saldo Kas Tunai</strong></td>
                        <td></td>
                        <td><strong>Rp 2.258.500</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Catatan -->
        <div class="info-section">
            <div class="catatan">
                <h4>🌸 Catatan Penting - Maret 2026:</h4>
                <ul>
                    <li><strong>Perkara masuk:</strong> 158 perkara (18 Prodeo) - Peningkatan di musim semi</li>
                    <li><strong>Perkara putus:</strong> 95 Perkara (12 Prodeo) - Target penyelesaian optimal</li>
                    <li><strong>Period:</strong> Maret 2026 - Musim Semi dan Kebangkitan</li>
                    <li><strong>Status:</strong> Laporan Bulanan LIPA 7a</li>
                    <li><strong>Catatan Khusus:</strong> Peningkatan signifikan perkara perwalian dan waris</li>
                    <li><strong>Efisiensi Q1 2026:</strong> Capaian target 60.1% untuk kuartal pertama</li>
                </ul>
            </div>
        </div>

        <!-- Signature Section -->
        <div class="signature-section">
            <p style="text-align: center; margin-bottom: 30px; color: #059669; font-weight: 600;">
                Mengetahui: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Amuntai, 01 April 2026
            </p>
            <p style="text-align: center; margin-bottom: 30px; color: #047857; font-weight: 500; font-style: italic;">
                Ketua, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Panitera,
            </p>
            <div class="signature-content">
                <div class="signature-box">
                    <h4>Ketua</h4>
                    <div class="name">Bahrul Maji, S.H.I.</div>
                </div>
                <div class="signature-box">
                    <h4>Panitera,</h4>
                    <div class="name">H. Ahmad Ramli, S.H.</div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2026 Pengadilan Agama Amuntai. All rights reserved. 🌸 Maret - Musim Semi & Kebangkitan</p>
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
                    this.style.boxShadow = '0 5px 15px rgba(5, 150, 105, 0.2)';
                });
                row.addEventListener('mouseleave', function() {
                    this.style.boxShadow = 'none';
                });
            });

            // Add floating spring elements effect
            function createFloatingSpring() {
                const springs = ['🌱', '🌸', '🍃', '🌿'];
                const spring = document.createElement('div');
                spring.innerHTML = springs[Math.floor(Math.random() * springs.length)];
                spring.style.position = 'fixed';
                spring.style.left = Math.random() * 100 + 'vw';
                spring.style.animationDuration = Math.random() * 4 + 3 + 's';
                spring.style.opacity = '0.6';
                spring.style.fontSize = '1.2rem';
                spring.style.zIndex = '-1';
                spring.style.animation = 'floatUp 5s linear infinite';
                document.body.appendChild(spring);

                setTimeout(() => {
                    spring.remove();
                }, 5000);
            }

            // Create floating spring elements every 4 seconds
            setInterval(createFloatingSpring, 4000);
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

        @keyframes floatUp {
            0% {
                bottom: -10vh;
                transform: translateX(0px) rotate(0deg);
            }

            25% {
                transform: translateX(10px) rotate(90deg);
            }

            50% {
                transform: translateX(-10px) rotate(180deg);
            }

            75% {
                transform: translateX(10px) rotate(270deg);
            }

            100% {
                bottom: 100vh;
                transform: translateX(0px) rotate(360deg);
            }
        }
    </style>
</body>

</html>