<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Satker PA Amuntai - November 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warning-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --dark-gradient: linear-gradient(135deg, #434343 0%, #000000 100%);
            --light-bg: #f8fafc;
            --card-bg: rgba(255, 255, 255, 0.95);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --border-color: rgba(226, 232, 240, 0.8);
            --shadow-soft: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
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
        }

        .stat-card:hover {
            transform: translateY(-8px);
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

        .stat-icon.briefing {
            background: var(--primary-gradient);
        }

        .stat-icon.meeting {
            background: var(--secondary-gradient);
        }

        .stat-icon.training {
            background: var(--success-gradient);
        }

        .stat-icon.ceremony {
            background: var(--warning-gradient);
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
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--text-primary);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
            border-top: 10px solid rgba(255, 255, 255, 0.2);
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
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 250, 252, 0.9) 100%);
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
            background: linear-gradient(135deg, transparent 0%, rgba(255, 255, 255, 0.1) 100%);
            opacity: 0;
            transition: var(--transition);
        }

        .event-item:hover::before {
            opacity: 1;
        }

        .event-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .event-item[data-type="briefing"] {
            border-left-color: #667eea;
        }

        .event-item[data-type="meeting"] {
            border-left-color: #f093fb;
        }

        .event-item[data-type="training"] {
            border-left-color: #4facfe;
        }

        .event-item[data-type="ceremony"] {
            border-left-color: #43e97b;
        }

        .event-item[data-type="coordination"] {
            border-left-color: #764ba2;
        }

        .event-item[data-type="visit"] {
            border-left-color: #f5576c;
        }

        .event-item[data-type="service"] {
            border-left-color: #38f9d7;
        }

        .event-item[data-type="other"] {
            border-left-color: #434343;
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

        .event-type.briefing {
            background: var(--primary-gradient);
        }

        .event-type.meeting {
            background: var(--secondary-gradient);
        }

        .event-type.training {
            background: var(--success-gradient);
        }

        .event-type.ceremony {
            background: var(--warning-gradient);
        }

        .event-type.coordination {
            background: var(--dark-gradient);
        }

        .event-type.visit {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
        }

        .event-type.service {
            background: linear-gradient(135deg, #00d2d3 0%, #54a0ff 100%);
        }

        .event-type.other {
            background: linear-gradient(135deg, #5f27cd 0%, #341f97 100%);
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
        .event-time {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .event-location i,
        .event-time i {
            color: var(--text-secondary);
            opacity: 0.7;
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

            .filter-buttons {
                gap: 0.5rem;
            }

            .event-item {
                padding: 1rem;
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
                    <i class="fas fa-calendar-alt"></i> November 2025
                </div>
            </div>

            <div class="stats-grid">
                <div class="stat-card" style="animation-delay: 0.1s">
                    <div class="stat-icon briefing">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="stat-number">8</div>
                    <div class="stat-label">Briefing & Apel</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.2s">
                    <div class="stat-icon meeting">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">6</div>
                    <div class="stat-label">Rapat</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.3s">
                    <div class="stat-icon training">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-number">12</div>
                    <div class="stat-label">Sosialisasi & Bimtek</div>
                </div>

                <div class="stat-card" style="animation-delay: 0.4s">
                    <div class="stat-icon ceremony">
                        <i class="fas fa-flag"></i>
                    </div>
                    <div class="stat-number">2</div>
                    <div class="stat-label">Upacara & Acara</div>
                </div>
            </div>

            <div class="filter-section">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-tasks"></i> Semua Kegiatan
                    </button>
                    <button class="filter-btn" data-filter="briefing">
                        <i class="fas fa-bullhorn"></i> Briefing
                    </button>
                    <button class="filter-btn" data-filter="meeting">
                        <i class="fas fa-users"></i> Rapat
                    </button>
                    <button class="filter-btn" data-filter="training">
                        <i class="fas fa-chalkboard-teacher"></i> Sosialisasi
                    </button>
                    <button class="filter-btn" data-filter="ceremony">
                        <i class="fas fa-flag"></i> Upacara
                    </button>
                </div>
            </div>

            <div class="agenda-grid">
                <!-- 03 November 2025 -->
                <div class="date-card" data-date="2025-11-03" style="animation-delay: 0.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 03 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Upacara</span>
                                <div class="event-title">Apel Pagi Senin</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Halaman PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Koordinasi</span>
                                <div class="event-title">Penyambutan Mahasiswa Magang STAI Rakha Amuntai Kelompok 4</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Acara</span>
                                <div class="event-title">Pembacaan Burdah & Perpisahan Mahasiswa Magang STAI Rakha Amuntai Kelompok 3</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Aula Pengadilan Agama Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 04 November 2025 -->
                <div class="date-card" data-date="2025-11-04" style="animation-delay: 0.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 04 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <div class="event-title">Briefing Selasa PTSP (BARISTA)</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 05 November 2025 -->
                <div class="date-card" data-date="2025-11-05" style="animation-delay: 0.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 05 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <div class="event-title">BRASTAGI PA Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Halaman PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Terbatas Bagian Keuangan PA Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Ruang Ketua PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 06 November 2025 -->
                <div class="date-card" data-date="2025-11-06" style="animation-delay: 0.4s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 06 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Terbatas Bagian Kesekretariatan PA Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Ruang Sekretaris PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Terbatas Kepaniteraan membahas pengoptimalan penggunaan SIPP</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 07 November 2025 -->
                <div class="date-card" data-date="2025-11-07" style="animation-delay: 0.5s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 07 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">PA Amuntai Ikuti Sosialisasi Indeks Pengelolaan Aset (IPA)</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 10 November 2025 -->
                <div class="date-card" data-date="2025-11-10" style="animation-delay: 0.6s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 10 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Upacara</span>
                                <div class="event-title">Upacara Hari Pahlawan ke-80 Tahun 2025</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Halaman PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Seminar</span>
                                <div class="event-title">Seminar Rancangan Aktualisasi Calon Pegawai Negeri Sipil (CPNS) Golongan II dan III</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Terbatas Pimpinan dan Para Hakim</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Ruang Tamu Ketua PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 11 November 2025 -->
                <div class="date-card" data-date="2025-11-11" style="animation-delay: 0.7s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 11 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">PA Amuntai Ikuti Sosialisasi dan Penandatanganan MoU IKAHI – BTN</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pembekalan</span>
                                <div class="event-title">Tim Kesekretariatan PA Amuntai Beri Materi kepada Mahasiswa Magang STAI Rakha Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 12 November 2025 -->
                <div class="date-card" data-date="2025-11-12" style="animation-delay: 0.8s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 12 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <div class="event-title">BRASTAGI (Briefing Setiap Rabu Pagi)</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Halaman PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Talkshow</span>
                                <div class="event-title">Talkshow Pencegahan P2GP dan Perkawinan Anak secara Daring</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pembekalan</span>
                                <div class="event-title">Pembekalan Keperkaraan & Mediasi kepada Mahasiswa STAI Rakha Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 13 November 2025 -->
                <div class="date-card" data-date="2025-11-13" style="animation-delay: 0.9s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 13 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="other">
                                <span class="event-type other">Press Conference</span>
                                <div class="event-title">Press Conference Kinerja APBN dan Evaluasi Anggaran November 2025 secara daring</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Bulanan & Rapat Tinjauan Manajemen (RTM) PA Amuntai – November 2025</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Aula Serba Guna PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 14 November 2025 -->
                <div class="date-card" data-date="2025-11-14" style="animation-delay: 1.0s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 14 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Pembahasan Target Renstra 2025</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 17 November 2025 -->
                <div class="date-card" data-date="2025-11-17" style="animation-delay: 1.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 17 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">Sosialisasi Penatausahaan RPL dan Pendampingan Pengajuan Tunkin Desember 2025</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 18 November 2025 -->
                <div class="date-card" data-date="2025-11-18" style="animation-delay: 1.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 18 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <div class="event-title">Rapat Koordinasi Akhir Tahun 2025</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">Sosialisasi Pembaruan SIPP Versi 6.0.1</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">Sosialisasi Anti Korupsi dan Gratifikasi</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Di depan Ruang Sidang
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 19 November 2025 -->
                <div class="date-card" data-date="2025-11-19" style="animation-delay: 1.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 19 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Koordinasi</span>
                                <div class="event-title">PKS IKAHI–BSI dan Sosialisasi Hunian Hakim</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 20 November 2025 -->
                <div class="date-card" data-date="2025-11-20" style="animation-delay: 1.4s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 20 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pembekalan</span>
                                <div class="event-title">Pembekalan Keperkaraan untuk Mahasiswa Magang STAI Rakha</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 24 November 2025 -->
                <div class="date-card" data-date="2025-11-24" style="animation-delay: 1.5s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 24 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">Sosialisasikan Pembaruan SIPP 6.0.1 & Fitur Smart Majelis</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Aula Serba Guna PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Koordinasi</span>
                                <div class="event-title">Sosialisasi & Penandatanganan Rencana Strategis 2025-2029</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Aula Serba Guna PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="other">
                                <span class="event-type other">Serah Terima</span>
                                <div class="event-title">Pemerintah Kabupaten HSU menyerahkan satu unit kendaraan dinas operasional kepada PA Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 26 November 2025 -->
                <div class="date-card" data-date="2025-11-26" style="animation-delay: 1.6s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 26 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="other">
                                <span class="event-type other">Pembinaan</span>
                                <div class="event-title">Pembinaan dan Pengawasan, Hawasbid Pengadilan Agama Amuntai</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 27 November 2025 -->
                <div class="date-card" data-date="2025-11-27" style="animation-delay: 1.7s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i> 27 November 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Bimtek</span>
                                <div class="event-title">Bimbingan Teknis Manajemen Teknis PPPK Tahun 2025 oleh Biro Kepegawaian Mahkamah Agung RI</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        PA Amuntai
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Sosialisasi</span>
                                <div class="event-title">Sosialisasi Hasil Monitoring dan Evaluasi Pemetaan Data Tanah dan Bangunan</div>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Media Center PA Amuntai
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
                            if (filter === 'all') {
                                item.style.display = 'block';
                                hasVisibleEvents = true;
                            } else {
                                if (item.getAttribute('data-type') === filter) {
                                    item.style.display = 'block';
                                    hasVisibleEvents = true;
                                } else {
                                    item.style.display = 'none';
                                }
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

            // Add smooth scrolling effect and hover animations
            const eventItems = document.querySelectorAll('.event-item');
            eventItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(12px) scale(1.02)';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0) scale(1)';
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

            // Create floating background elements
            function createFloatingElements() {
                const container = document.querySelector('.main-container');
                const element = document.createElement('div');
                element.style.cssText = `
                    position: absolute;
                    width: ${Math.random() * 20 + 5}px;
                    height: ${Math.random() * 20 + 5}px;
                    background: rgba(255, 255, 255, 0.1);
                    border-radius: 50%;
                    top: ${Math.random() * 100}%;
                    left: ${Math.random() * 100}%;
                    animation: float ${Math.random() * 3 + 2}s ease-in-out infinite alternate;
                    pointer-events: none;
                `;

                container.appendChild(element);

                setTimeout(() => {
                    element.remove();
                }, 5000);
            }

            // Add floating animation keyframes
            const style = document.createElement('style');
            style.textContent = `
                @keyframes float {
                    from { transform: translateY(0px) rotate(0deg); }
                    to { transform: translateY(-20px) rotate(360deg); }
                }
            `;
            document.head.appendChild(style);

            // Create floating elements periodically
            setInterval(createFloatingElements, 3000);
        });
    </script>
</body>

</html>
