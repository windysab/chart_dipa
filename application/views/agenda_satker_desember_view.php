<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Satker PA Amuntai - Desember 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            --secondary-gradient: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            --success-gradient: linear-gradient(135deg, #059669 0%, #047857 100%);
            --warning-gradient: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            --info-gradient: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%);
            --dark-gradient: linear-gradient(135deg, #374151 0%, #1f2937 100%);
            --christmas-gradient: linear-gradient(135deg, #dc2626 0%, #059669 50%, #dc2626 100%);
            --light-bg: #fef2f2;
            --card-bg: rgba(255, 255, 255, 0.95);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --border-color: rgba(239, 68, 68, 0.2);
            --shadow-soft: 0 10px 25px rgba(220, 38, 38, 0.15);
            --shadow-hover: 0 20px 40px rgba(220, 38, 38, 0.25);
            --border-radius: 16px;
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--light-bg);
            color: var(--text-primary);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .main-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #059669 100%);
            position: relative;
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="snowflake" width="100" height="100" patternUnits="userSpaceOnUse"><text x="50" y="50" text-anchor="middle" font-size="20" fill="%23ffffff" opacity="0.1">❄</text></pattern></defs><rect width="100" height="100" fill="url(%23snowflake)"/></svg>') repeat;
            pointer-events: none;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .hero-section {
            text-align: center;
            padding: 3rem 0;
            margin-bottom: 3rem;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
            position: relative;
        }

        .hero-title::before {
            content: "🎄";
            position: absolute;
            left: -60px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 3rem;
            animation: rotate 10s linear infinite;
        }

        .hero-title::after {
            content: "🎅";
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 3rem;
            animation: bounce 2s ease-in-out infinite;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 400;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .month-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 1rem;
            backdrop-filter: blur(10px);
            position: relative;
        }

        .month-badge::before {
            content: "🎁";
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            animation: pulse 2s ease-in-out infinite;
        }

        .year-end-badge {
            background: linear-gradient(135deg, #fbbf24, #f59e0b);
            color: #92400e;
            font-size: 0.9rem;
            font-weight: 700;
            padding: 8px 16px;
            border-radius: 20px;
            margin-left: 15px;
            box-shadow: 0 4px 8px rgba(245, 158, 11, 0.3);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            animation: slideInUp 0.8s ease-out;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }

        .stat-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .stat-icon.coordination {
            background: var(--primary-gradient);
        }

        .stat-icon.meeting {
            background: var(--secondary-gradient);
        }

        .stat-icon.training {
            background: var(--success-gradient);
        }

        .stat-icon.monitoring {
            background: var(--warning-gradient);
        }

        .stat-icon.ceremony {
            background: var(--info-gradient);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-weight: 500;
        }

        .filter-section {
            margin-bottom: 2rem;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .filter-btn {
            padding: 0.6rem 1.2rem;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--text-primary);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            border: 2px solid transparent;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.2);
            border-color: #dc2626;
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
        }

        .date-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            animation: fadeInScale 0.8s ease-out;
        }

        .date-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .date-header {
            background: var(--primary-gradient);
            color: white;
            padding: 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-align: center;
            position: relative;
        }

        .date-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid rgba(220, 38, 38, 0.8);
        }

        .date-body {
            padding: 1.5rem;
        }

        .event-list {
            list-style: none;
        }

        .event-item {
            padding: 1.25rem;
            margin-bottom: 1rem;
            border-radius: 12px;
            border-left: 4px solid;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(254, 242, 242, 0.9) 100%);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .event-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(220, 38, 38, 0.05) 100%);
            opacity: 0;
            transition: var(--transition);
        }

        .event-item:hover::before {
            opacity: 1;
        }

        .event-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 25px rgba(220, 38, 38, 0.15);
        }

        .event-item[data-type="coordination"] {
            border-left-color: #dc2626;
        }

        .event-item[data-type="meeting"] {
            border-left-color: #ef4444;
        }

        .event-item[data-type="training"] {
            border-left-color: #059669;
        }

        .event-item[data-type="ceremony"] {
            border-left-color: #0ea5e9;
        }

        .event-item[data-type="monitoring"] {
            border-left-color: #f59e0b;
        }

        .event-item[data-type="service"] {
            border-left-color: #8b5cf6;
        }

        .event-item[data-type="evaluation"] {
            border-left-color: #06b6d4;
        }

        .event-item[data-type="year-end"] {
            border-left-color: #fbbf24;
            background: linear-gradient(135deg, rgba(254, 242, 242, 0.95) 0%, rgba(255, 251, 235, 0.95) 100%);
        }

        .event-type {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.75rem;
            color: white;
        }

        .event-type.coordination {
            background: var(--primary-gradient);
        }

        .event-type.meeting {
            background: var(--secondary-gradient);
        }

        .event-type.training {
            background: var(--success-gradient);
        }

        .event-type.ceremony {
            background: var(--info-gradient);
        }

        .event-type.monitoring {
            background: var(--warning-gradient);
        }

        .event-type.service {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        .event-type.evaluation {
            background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%);
        }

        .event-type.year-end {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            color: #92400e;
        }

        .event-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            line-height: 1.5;
        }

        .event-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .event-location,
        .event-time,
        .event-participant {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .event-location i,
        .event-time i,
        .event-participant i {
            color: #dc2626;
            opacity: 0.8;
        }

        .year-end-highlight {
            position: relative;
        }

        .year-end-highlight::after {
            content: "📊 AKHIR TAHUN";
            position: absolute;
            top: -8px;
            right: 10px;
            background: #fbbf24;
            color: #92400e;
            padding: 4px 12px;
            border-radius: 10px;
            font-size: 0.7rem;
            font-weight: 700;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes rotate {
            from {
                transform: translateY(-50%) rotate(0deg);
            }

            to {
                transform: translateY(-50%) rotate(360deg);
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(-50%);
            }

            40% {
                transform: translateY(-70%);
            }

            60% {
                transform: translateY(-60%);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: translateY(-50%) scale(1);
            }

            50% {
                transform: translateY(-50%) scale(1.2);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .agenda-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-title::before,
            .hero-title::after {
                display: none;
            }

            .filter-buttons {
                gap: 0.5rem;
            }

            .event-item {
                padding: 1rem;
            }

            .year-end-badge {
                display: block;
                margin: 10px auto;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .filter-btn {
                padding: 0.4rem 0.8rem;
                font-size: 0.875rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="container">
            <div class="hero-section">
                <h1 class="hero-title">AGENDA KEGIATAN SATKER</h1>
                <p class="hero-subtitle">Pengadilan Agama Amuntai</p>
                <div class="month-badge">
                    <i class="fas fa-calendar-alt"></i> Desember 2025
                    <span class="year-end-badge">Penutupan Tahun</span>
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-card" style="animation-delay: 0.1s">
                    <div class="stat-icon coordination">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="stat-number">12</div>
                    <div class="stat-label">Koordinasi</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.2s">
                    <div class="stat-icon meeting">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">8</div>
                    <div class="stat-label">Rapat</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.3s">
                    <div class="stat-icon training">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-number">10</div>
                    <div class="stat-label">Sosialisasi & Bimtek</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.4s">
                    <div class="stat-icon monitoring">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="stat-number">6</div>
                    <div class="stat-label">Monitoring & Evaluasi</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.5s">
                    <div class="stat-icon ceremony">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number">4</div>
                    <div class="stat-label">Upacara & Acara</div>
                </div>
            </div>

            <div class="filter-section">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-tasks"></i> Semua Kegiatan
                    </button>
                    <button class="filter-btn" data-filter="coordination">
                        <i class="fas fa-handshake"></i> Koordinasi
                    </button>
                    <button class="filter-btn" data-filter="meeting">
                        <i class="fas fa-users"></i> Rapat
                    </button>
                    <button class="filter-btn" data-filter="training">
                        <i class="fas fa-chalkboard-teacher"></i> Sosialisasi
                    </button>
                    <button class="filter-btn" data-filter="monitoring">
                        <i class="fas fa-chart-line"></i> Monitoring
                    </button>
                    <button class="filter-btn" data-filter="ceremony">
                        <i class="fas fa-award"></i> Upacara
                    </button>
                </div>
            </div>

            <div class="agenda-grid">
                <!-- 02 Desember 2025 -->
                <div class="date-card" data-date="2025-12-02" style="animation-delay: 0.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 02 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item year-end-highlight" data-type="coordination">
                                <span class="event-type coordination">Koordinasi</span>
                                <h3 class="event-title">Rapat Koordinasi Persiapan WBK</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-user-tie"></i>
                                        Sekretaris dan Tim WBK
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting dengan BUA Mahkamah Agung RI
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Orientasi</span>
                                <h3 class="event-title">Orientasi PPPK Tahap II</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-users"></i>
                                        Pegawai PPPK PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-laptop"></i>
                                        Zoom BSDK Mahkamah Agung
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 03 Desember 2025 -->
                <div class="date-card" data-date="2025-12-03" style="animation-delay: 0.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 03 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item year-end-highlight" data-type="monitoring">
                                <span class="event-type year-end">Laporan Akhir Tahun</span>
                                <h3 class="event-title">Bimbingan Monitoring Laporan Akhir Tahun</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-chart-bar"></i>
                                        Tim Pelaporan dan Evaluasi
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom dengan Ditjen Badilag
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">PKS</span>
                                <h3 class="event-title">Penandatanganan Perjanjian Kerjasama Badilag-BSI</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-handshake"></i>
                                        Tim Koordinasi PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-file-signature"></i>
                                        Zoom Meeting Badilag
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 04 Desember 2025 -->
                <div class="date-card" data-date="2025-12-04" style="animation-delay: 0.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 04 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Infrastruktur</span>
                                <h3 class="event-title">Identifikasi Kebutuhan Gedung Kantor</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-building"></i>
                                        Sekretaris dan Tim Infrastruktur
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat Internal</span>
                                <h3 class="event-title">Rapat Internal Kepaniteraan</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-gavel"></i>
                                        Seluruh Staff Kepaniteraan
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat Kepaniteraan
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Sekretaris</span>
                                <h3 class="event-title">Rapat Koordinasi Sekretaris se-Indonesia</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-user-tie"></i>
                                        Sekretaris PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting Badilag
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 05 Desember 2025 -->
                <div class="date-card" data-date="2025-12-05" style="animation-delay: 0.4s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 05 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Pelayanan</span>
                                <h3 class="event-title">Rapat Koordinasi Pelayanan Pencatatan Sipil</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-file-alt"></i>
                                        Tim Pelayanan Publik
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Koordinasi dengan PA dan PN
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 08 Desember 2025 -->
                <div class="date-card" data-date="2025-12-08" style="animation-delay: 0.5s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 08 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="monitoring">
                                <span class="event-type monitoring">Koordinasi</span>
                                <h3 class="event-title">Rapat Koordinasi Bulanan Desember 2025</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-users"></i>
                                        Seluruh Aparatur PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 12 Desember 2025 -->
                <div class="date-card" data-date="2025-12-12" style="animation-delay: 0.6s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 12 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="monitoring">
                                <span class="event-type monitoring">Monitoring</span>
                                <h3 class="event-title">Kunjungan Pembimbing Magang SMKN I</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-school"></i>
                                        Tim Pembimbing dan Peserta Magang
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <h3 class="event-title">Sosialisasi Proyek Perubahan Latsar CPNS</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-users-cog"></i>
                                        CPNS PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pajak</span>
                                <h3 class="event-title">Sosialisasi Core Tax</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-calculator"></i>
                                        Tim Keuangan dan Bendahara
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 15 Desember 2025 -->
                <div class="date-card" data-date="2025-12-15" style="animation-delay: 0.7s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 15 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="evaluation">
                                <span class="event-type evaluation">Data</span>
                                <h3 class="event-title">Verifikasi dan Validasi Data Kepegawaian</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-user-check"></i>
                                        Kasubbag Kepegawaian Ortala
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-database"></i>
                                        Ditjen Badilag
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Direktif</span>
                                <h3 class="event-title">Penguatan Dukungan Prioritas Direktif Presiden 2026</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-flag"></i>
                                        Sekretaris dan Tim Perencanaan
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 16 Desember 2025 -->
                <div class="date-card" data-date="2025-12-16" style="animation-delay: 0.8s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 16 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">WBK</span>
                                <h3 class="event-title">Penyerahan Simbolis Sertifikat dan PIN WBK</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-certificate"></i>
                                        Seluruh Pegawai PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Halaman PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Direktif</span>
                                <h3 class="event-title">Pembahasan Tindak Lanjut Direktif Presiden 2026</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-chart-line"></i>
                                        Sekretaris, Kasubbag PTIP dan Tim
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Kepegawaian</span>
                                <h3 class="event-title">Bimbingan Teknis Kepegawaian</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-graduation-cap"></i>
                                        Sekretaris dan Kasubbag Kepegawaian
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Biro Kepegawaian MA RI
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 17 Desember 2025 -->
                <div class="date-card" data-date="2025-12-17" style="animation-delay: 0.9s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 17 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="monitoring">
                                <span class="event-type monitoring">Evaluasi</span>
                                <h3 class="event-title">Monitoring dan Evaluasi Posbakum Triwulan IV</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-balance-scale"></i>
                                        Tim Posbakum PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="monitoring">
                                <span class="event-type monitoring">Kerjasama</span>
                                <h3 class="event-title">Monitoring dan Evaluasi dengan PT POS</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-shipping-fast"></i>
                                        Tim Layanan dan PT POS
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 18 Desember 2025 -->
                <div class="date-card" data-date="2025-12-18" style="animation-delay: 1.0s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 18 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">E-SAKIP</span>
                                <h3 class="event-title">Sosialisasi Fitur E-SAKIP</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-chart-bar"></i>
                                        Kasubbag PTIP dan Staf
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting
                                    </div>
                                </div>
                            </li>
                            <li class="event-item year-end-highlight" data-type="year-end">
                                <span class="event-type year-end">Laporan Tahunan</span>
                                <h3 class="event-title">Rapat Tim Penyusunan Laporan Pelaksanaan Kegiatan Tahun 2025</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-folder-open"></i>
                                        Tim Penyusun Laporan Tahunan
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 22 Desember 2025 -->
                <div class="date-card" data-date="2025-12-22" style="animation-delay: 1.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 22 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="monitoring">
                                <span class="event-type monitoring">Anggaran</span>
                                <h3 class="event-title">Diskusi Monitoring Evaluasi Perencanaan Anggaran 2026</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-chart-pie"></i>
                                        Sekretaris dan Tim dengan PTA Banjarmasin
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Latsar</span>
                                <h3 class="event-title">Seminar Hasil Aktualisasi Latsar CPNS Gelombang II</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-certificate"></i>
                                        6 CPNS PA Amuntai
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">PPPK</span>
                                <h3 class="event-title">Rapat Penentuan Uraian Tugas PPPK</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-clipboard-list"></i>
                                        Tim Kepegawaian dan PPPK
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 23 Desember 2025 -->
                <div class="date-card" data-date="2025-12-23" style="animation-delay: 1.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 23 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Analisis</span>
                                <h3 class="event-title">Sosialisasi Penyusunan Analisis Jabatan dan Beban Kerja</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-sitemap"></i>
                                        Kasubbag Kepegawaian OTL
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 24 Desember 2025 -->
                <div class="date-card" data-date="2025-12-24" style="animation-delay: 1.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 24 Desember 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item year-end-highlight" data-type="year-end">
                                <span class="event-type year-end">Program Kerja</span>
                                <h3 class="event-title">Rapat Penyusunan Program Kerja 2026</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-calendar-plus"></i>
                                        Seluruh Tim Perencanaan
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Aset</span>
                                <h3 class="event-title">Zoom Pengelolaan Aset dengan PTA Banjarmasin</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-building"></i>
                                        Sekretaris dan Kasubbag Umum Keuangan
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-video"></i>
                                        Zoom Meeting PTA
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Outsourcing</span>
                                <h3 class="event-title">Rapat dengan Tim Penyedia Outsourcing</h3>
                                <div class="event-meta">
                                    <div class="event-participant">
                                        <i class="fas fa-users"></i>
                                        Tim Pengadaan dan Penyedia
                                    </div>
                                    <div class="event-location">
                                        <i class="fas fa-building"></i>
                                        Ruang Rapat PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const dateCards = document.querySelectorAll('.date-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    dateCards.forEach(card => {
                        const eventItems = card.querySelectorAll('.event-item');
                        let hasVisibleEvents = false;

                        eventItems.forEach(item => {
                            if (filter === 'all' || item.getAttribute('data-type') === filter) {
                                item.style.display = 'block';
                                hasVisibleEvents = true;
                            } else {
                                item.style.display = 'none';
                            }
                        });

                        // Show/hide the entire date card based on visible events
                        if (hasVisibleEvents) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Add enhanced hover effects and animations
            const eventItems = document.querySelectorAll('.event-item');
            eventItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(12px) scale(1.02)';
                    this.style.boxShadow = '0 12px 30px rgba(220, 38, 38, 0.2)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0) scale(1)';
                    this.style.boxShadow = '0 8px 25px rgba(220, 38, 38, 0.15)';
                });
            });

            // Animate cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            dateCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Christmas snow effect
            function createSnowflake() {
                const container = document.querySelector('.main-container');
                const snowflake = document.createElement('div');
                snowflake.innerHTML = '❄';
                snowflake.style.cssText = `
                    position: absolute;
                    color: rgba(255, 255, 255, 0.8);
                    font-size: ${Math.random() * 20 + 10}px;
                    top: -50px;
                    left: ${Math.random() * 100}%;
                    animation: snowfall ${Math.random() * 3 + 2}s linear infinite;
                    pointer-events: none;
                    z-index: 1;
                `;

                container.appendChild(snowflake);

                setTimeout(() => {
                    snowflake.remove();
                }, 5000);
            }

            // Add snowfall animation keyframes
            const style = document.createElement('style');
            style.textContent = `
                @keyframes snowfall {
                    from { 
                        transform: translateY(-50px) rotate(0deg); 
                        opacity: 1;
                    }
                    to { 
                        transform: translateY(100vh) rotate(360deg); 
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);

            // Create snowflakes periodically
            setInterval(createSnowflake, 1000);

            // Add year-end celebration effects
            const yearEndCards = document.querySelectorAll('.year-end-highlight');
            yearEndCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.background = 'linear-gradient(135deg, rgba(254, 242, 242, 0.98) 0%, rgba(255, 251, 235, 0.98) 100%)';
                    this.style.borderLeftColor = '#fbbf24';
                    this.style.transform = 'translateX(15px) scale(1.03)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.background = 'linear-gradient(135deg, rgba(254, 242, 242, 0.95) 0%, rgba(255, 251, 235, 0.95) 100%)';
                    this.style.transform = 'translateX(0) scale(1)';
                });
            });
        });
    </script>
</body>

</html>