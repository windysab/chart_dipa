<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kerja Pimpinan - PA Amuntai Oktober 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #ea580c;
            --secondary-color: #f97316;
            --accent-color: #fb923c;
            --success-color: #16a34a;
            --info-color: #0891b2;
            --warning-color: #d97706;
            --danger-color: #dc2626;
            --light-color: #f8fafc;
            --dark-color: #1f2937;
            --white-color: #ffffff;
            --body-bg: linear-gradient(135deg, #ea580c 0%, #f97316 100%);
            --card-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            --card-hover-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
            --border-radius: 20px;
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --glass-bg: rgba(255, 255, 255, 0.25);
            --glass-border: rgba(255, 255, 255, 0.18);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--body-bg);
            color: var(--dark-color);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Enhanced Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(234, 88, 12, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(249, 115, 22, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(251, 146, 60, 0.3) 0%, transparent 50%);
            z-index: -1;
            animation: backgroundMove 25s ease-in-out infinite;
        }

        @keyframes backgroundMove {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-40px) rotate(0.5deg);
            }

            66% {
                transform: translateY(25px) rotate(-0.5deg);
            }
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
            animation: slideInDown 1s ease-out;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 120px;
            background: var(--glass-bg);
            border-radius: 50%;
            backdrop-filter: blur(15px);
            border: 2px solid var(--glass-border);
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateX(-50%) translateY(0px);
            }

            50% {
                transform: translateX(-50%) translateY(-15px);
            }
        }

        .header h1 {
            font-size: 3.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header h2 {
            font-size: 1.9rem;
            color: rgba(255, 255, 255, 0.95);
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .header .subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.85);
            font-weight: 400;
        }

        .month-selector {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            gap: 1rem;
            animation: slideInUp 1s ease-out 0.2s both;
            flex-wrap: wrap;
        }

        .month-btn {
            padding: 1.2rem 2.5rem;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .month-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .month-btn:hover::before {
            left: 100%;
        }

        .month-btn:hover {
            transform: translateY(-6px);
            box-shadow: var(--card-hover-shadow);
        }

        .month-btn.active {
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--warning-color) 100%);
            transform: translateY(-6px);
            box-shadow: var(--card-hover-shadow);
        }

        .timeline-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 1rem;
            animation: slideInUp 1s ease-out 0.4s both;
        }

        .filter-btn {
            padding: 0.9rem 1.8rem;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.95rem;
        }

        .filter-btn i {
            font-size: 1.1rem;
        }

        .filter-btn:hover {
            transform: translateY(-4px);
            background: rgba(255, 255, 255, 0.3);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--success-color) 0%, var(--info-color) 100%);
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            animation: fadeIn 1s ease-out 0.6s both;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: linear-gradient(180deg, var(--accent-color) 0%, var(--warning-color) 100%);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 10px;
            box-shadow: 0 0 25px rgba(234, 88, 12, 0.4);
        }

        .timeline-item {
            padding: 10px 50px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            margin-bottom: 3rem;
            animation: slideInFromSide 0.8s ease-out;
        }

        .timeline-item:nth-child(odd) {
            animation-name: slideInLeft;
        }

        .timeline-item:nth-child(even) {
            animation-name: slideInRight;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-60px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(60px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 32px;
            height: 32px;
            right: -16px;
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--warning-color) 100%);
            border: 4px solid var(--white-color);
            top: 30px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 0 25px rgba(234, 88, 12, 0.5);
            animation: pulse 2.5s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(234, 88, 12, 0.8);
            }

            70% {
                box-shadow: 0 0 0 12px rgba(234, 88, 12, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(234, 88, 12, 0);
            }
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .right::after {
            left: -16px;
        }

        .timeline-card {
            padding: 2.5rem;
            background: var(--glass-bg);
            backdrop-filter: blur(25px);
            border-radius: var(--border-radius);
            border: 1px solid var(--glass-border);
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .timeline-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-color) 0%, var(--warning-color) 100%);
        }

        .timeline-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: var(--card-hover-shadow);
        }

        .timeline-card.meeting::before {
            background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }

        .timeline-card.ceremony::before {
            background: linear-gradient(90deg, var(--success-color) 0%, var(--info-color) 100%);
        }

        .timeline-card.training::before {
            background: linear-gradient(90deg, var(--warning-color) 0%, var(--accent-color) 100%);
        }

        .timeline-card.coordination::before {
            background: linear-gradient(90deg, var(--info-color) 0%, var(--success-color) 100%);
        }

        .timeline-card.briefing::before {
            background: linear-gradient(90deg, var(--danger-color) 0%, var(--warning-color) 100%);
        }

        .timeline-card.monitoring::before {
            background: linear-gradient(90deg, #8b5cf6 0%, #a78bfa 100%);
        }

        .timeline-card.orientation::before {
            background: linear-gradient(90deg, #f59e0b 0%, #fbbf24 100%);
        }

        .timeline-card.webinar::before {
            background: linear-gradient(90deg, #10b981 0%, #34d399 100%);
        }

        .timeline-date {
            display: inline-block;
            padding: 0.6rem 1.4rem;
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--warning-color) 100%);
            color: var(--white-color);
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1.8rem;
            box-shadow: 0 6px 18px rgba(234, 88, 12, 0.4);
        }

        .timeline-title {
            font-size: 1.5rem;
            margin-bottom: 1.8rem;
            color: var(--white-color);
            line-height: 1.4;
            font-weight: 600;
        }

        .timeline-location {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.7rem;
        }

        .timeline-location i {
            margin-right: 0.9rem;
            color: var(--accent-color);
            font-size: 1.2rem;
        }

        .timeline-time {
            display: flex;
            align-items: center;
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .timeline-time i {
            margin-right: 0.9rem;
            color: var(--info-color);
        }

        .timeline-icon {
            position: absolute;
            top: 2.5rem;
            right: 2.5rem;
            font-size: 2.2rem;
            color: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .timeline-card:hover .timeline-icon {
            color: rgba(255, 255, 255, 0.25);
            transform: scale(1.15) rotate(8deg);
        }

        .timeline-activities {
            list-style: none;
            padding-left: 0;
        }

        .timeline-activities li {
            position: relative;
            padding-left: 1.8rem;
            margin-bottom: 1rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.5;
        }

        .timeline-activities li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
            font-size: 1.3rem;
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-60px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .header h1 {
                font-size: 2.8rem;
            }

            .header h2 {
                font-size: 1.5rem;
            }

            .month-selector {
                flex-direction: column;
                align-items: center;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 16px;
                right: auto;
            }

            .left,
            .right {
                left: 0;
            }

            .timeline-card {
                padding: 2rem;
            }

            .timeline-title {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>AGENDA KERJA PIMPINAN</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <p class="subtitle">Bulan Oktober 2025</p>
        </div>

        <div class="month-selector">
            <button class="month-btn">September 2025</button>
            <button class="month-btn active">Oktober 2025</button>
            <button class="month-btn">November 2025</button>
        </div>

        <div class="timeline-filter">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-tasks"></i> Semua Kegiatan
            </button>
            <button class="filter-btn" data-filter="ceremony">
                <i class="fas fa-medal"></i> Upacara/Peringatan
            </button>
            <button class="filter-btn" data-filter="monitoring">
                <i class="fas fa-chart-line"></i> Monitoring & Evaluasi
            </button>
            <button class="filter-btn" data-filter="coordination">
                <i class="fas fa-handshake"></i> Koordinasi
            </button>
            <button class="filter-btn" data-filter="training">
                <i class="fas fa-chalkboard-teacher"></i> Bimtek/Pelatihan
            </button>
            <button class="filter-btn" data-filter="orientation">
                <i class="fas fa-compass"></i> Orientasi
            </button>
            <button class="filter-btn" data-filter="webinar">
                <i class="fas fa-video"></i> Webinar & Daring
            </button>
        </div>

        <div class="timeline">
            <!-- 01 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">01 Oktober 2025</div>
                    <h3 class="timeline-title">Peringatan Hari Kesaktian Pancasila & Monitoring Posbakum</h3>
                    <ul class="timeline-activities">
                        <li>Peringatan Hari Kesaktian Pancasila di Aula PA Amuntai</li>
                        <li>Monitoring & Evaluasi Posbakum Triwulan III yang dipimpin Ketua PA</li>
                        <li>Monev Bersama PT Pos Indonesia Cabang Amuntai bersama Ketua & Panmud Gugatan</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Aula PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                </div>
            </div>

            <!-- 06 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">06 Oktober 2025</div>
                    <h3 class="timeline-title">Apel Senin & Penyambutan Mahasiswa PPL</h3>
                    <ul class="timeline-activities">
                        <li>Apel Senin: Penyerahan Sertifikat Magang STAI Rakha Kelompok 2</li>
                        <li>Penyambutan Mahasiswa PPL STAI Rakha Kelompok 3</li>
                        <li>Rapat Rutin Bagian Kesekretariatan</li>
                        <li>Pembukaan Latsar CPNS MA Gelombang II</li>
                        <li>"Perisai" Episode 10</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 07 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">07 Oktober 2025</div>
                    <h3 class="timeline-title">Sosialisasi & Monev Triwulan III</h3>
                    <ul class="timeline-activities">
                        <li>Sosialisasi Tata Tertib Persidangan, Gratifikasi & Zona Integritas</li>
                        <li>Monev Triwulan III & Proyeksi IV PA se-Kalsel</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 09 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">09 Oktober 2025</div>
                    <h3 class="timeline-title">Konsolidasi Laporan Keuangan & Sosialisasi Renstra</h3>
                    <ul class="timeline-activities">
                        <li>Pembukaan Konsolidasi Laporan Keuangan MA RI Triwulan III</li>
                        <li>Sosialisasi Renstra 2025 MA RI</li>
                        <li>Penerimaan Siswa Magang SMK 1 Amuntai</li>
                        <li>Pembentukan Tim Media Sosial PA Amuntai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>

            <!-- 10 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">10 Oktober 2025</div>
                    <h3 class="timeline-title">Rapat Internal Hakim & Rapat Bulanan Pengadilan</h3>
                    <ul class="timeline-activities">
                        <li>Rapat Internal Hakim</li>
                        <li>Rapat Bulanan Pengadilan</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Ruang Rapat PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 13 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">13 Oktober 2025</div>
                    <h3 class="timeline-title">Apel Senin & Kegiatan Peringatan</h3>
                    <ul class="timeline-activities">
                        <li>Apel Senin: Evaluasi Kinerja</li>
                        <li>Latsar CPNS PA Amuntai</li>
                        <li>Ketua Hadiri Peringatan Hari Lahir ke-103 Ponpes Rakha</li>
                        <li>Sekretaris Hadiri Rapat Paripurna DPRD HSU</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Ponpes Rakha
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 14 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">14 Oktober 2025</div>
                    <h3 class="timeline-title">Briefing PTSP & Pembekalan PPL</h3>
                    <ul class="timeline-activities">
                        <li>Briefing PTSP (BARISTA)</li>
                        <li>Pembekalan Tupoksi Kesekretariatan PPL STAI Rakha</li>
                        <li>Panitera Jadi Pemateri Pencegahan Perkawinan Usia Anak (Kab. Balangan)</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Kabupaten Balangan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 16 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">16 Oktober 2025</div>
                    <h3 class="timeline-title">PA Amuntai Berbagi Ilmu Hukum & Fit and Proper Test</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai Berbagi Ilmu Hukum</li>
                        <li>Ketua Ikuti Fit & Proper Test Calon Wakil Ketua Kelas IA (Daring)</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Online
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
            </div>

            <!-- 17 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card webinar">
                    <div class="timeline-date">17 Oktober 2025</div>
                    <h3 class="timeline-title">Webinar Nasional YSEALI</h3>
                    <ul class="timeline-activities">
                        <li>Webinar Nasional YSEALI</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Online/Virtual
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-video"></i>
                    </div>
                </div>
            </div>

            <!-- 21 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card orientation">
                    <div class="timeline-date">21 Oktober 2025</div>
                    <h3 class="timeline-title">Orientasi Nasional PPPK & Webinar KOPRI</h3>
                    <ul class="timeline-activities">
                        <li>Orientasi Nasional PPPK 2025 (Daring)</li>
                        <li>Webinar Nasional KOPRI ke-133</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Online/Virtual
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-compass"></i>
                    </div>
                </div>
            </div>

            <!-- 22 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">22 Oktober 2025</div>
                    <h3 class="timeline-title">Sosialisasi Kenaikan Pangkat ASN</h3>
                    <ul class="timeline-activities">
                        <li>Sosialisasi Kenaikan Pangkat ASN & Layanan Tenaga Teknis</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 23 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">23 Oktober 2025</div>
                    <h3 class="timeline-title">Rapat Penyusunan Renstra & Rakor Bimtek</h3>
                    <ul class="timeline-activities">
                        <li>Rapat Penyusunan Renstra 2025–2029</li>
                        <li>Rakor Bimtek Kepaniteraan PNBP 2025</li>
                        <li>Kunjungan Wawancara Akademik Mahasiswa IAI Darul Ulum Kandangan</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 28 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">28 Oktober 2025</div>
                    <h3 class="timeline-title">Apel Hari Sumpah Pemuda ke-97</h3>
                    <ul class="timeline-activities">
                        <li>Apel Hari Sumpah Pemuda ke-97</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 29 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">29 Oktober 2025</div>
                    <h3 class="timeline-title">Pembinaan Hakim Agung & Penandatanganan MoU</h3>
                    <ul class="timeline-activities">
                        <li>Pembinaan Hakim Agung Kamar Agama & Ditjen Badilag</li>
                        <li>Penandatanganan Nota Kesepahaman (Daring)</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Online
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 30 Oktober 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">30 Oktober 2025</div>
                    <h3 class="timeline-title">Bimtek Kepaniteraan & Pengelolaan PNBP</h3>
                    <ul class="timeline-activities">
                        <li>Bimtek Kepaniteraan & Pengelolaan PNBP di Banjarbaru</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Banjarbaru
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 31 Oktober 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">31 Oktober 2025</div>
                    <h3 class="timeline-title">Pembinaan Teknis & Administrasi Yudisial</h3>
                    <ul class="timeline-activities">
                        <li>Pembinaan Teknis & Administrasi Yudisial di Mahkamah Agung RI</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Mahkamah Agung RI
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const timelineItems = document.querySelectorAll('.timeline-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterType = this.getAttribute('data-filter');

                    timelineItems.forEach(item => {
                        const card = item.querySelector('.timeline-card');
                        if (filterType === 'all') {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            if (card.classList.contains(filterType)) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.style.opacity = '1';
                                    item.style.transform = 'translateY(0)';
                                }, 100);
                            } else {
                                item.style.opacity = '0';
                                item.style.transform = 'translateY(50px)';
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 400);
                            }
                        }
                    });
                });
            });

            // Month selection functionality
            const monthButtons = document.querySelectorAll('.month-btn');
            monthButtons.forEach(button => {
                button.addEventListener('click', function() {
                    monthButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    if (this.textContent.trim() !== 'Oktober 2025') {
                        alert(`Navigasi ke ${this.textContent.trim()} akan dimuat`);
                    }
                });
            });

            // Smooth scroll animation
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(50px)';
                item.style.transition = 'all 0.6s ease-out';
                observer.observe(item);
            });

            // Enhanced hover effects
            const timelineCards = document.querySelectorAll('.timeline-card');
            timelineCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });

                card.addEventListener('click', function() {
                    this.style.transform = 'translateY(-15px) scale(1.05)';
                    setTimeout(() => {
                        this.style.transform = 'translateY(-12px) scale(1.02)';
                    }, 150);
                });
            });
        });

        // Enhanced floating particle animation
        function createFloatingParticle() {
            const particle = document.createElement('div');
            particle.style.position = 'fixed';
            particle.style.width = Math.random() * 8 + 3 + 'px';
            particle.style.height = particle.style.width;
            particle.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            particle.style.borderRadius = '50%';
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.top = '100vh';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '0';

            document.body.appendChild(particle);

            const animationDuration = Math.random() * 4000 + 3000;
            const horizontalMovement = (Math.random() - 0.5) * 300;

            particle.animate([{
                    transform: 'translateY(0px) translateX(0px)',
                    opacity: 0
                },
                {
                    transform: `translateY(-50vh) translateX(${horizontalMovement/2}px)`,
                    opacity: 1
                },
                {
                    transform: `translateY(-100vh) translateX(${horizontalMovement}px)`,
                    opacity: 0
                }
            ], {
                duration: animationDuration,
                easing: 'linear'
            }).onfinish = () => {
                particle.remove();
            };
        }

        // Create floating particles periodically
        setInterval(createFloatingParticle, 1000);
    </script>
</body>

</html>