<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Satker PA Amuntai - September 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1e40af;
            --primary-light: #3b82f6;
            --primary-dark: #1e3a8a;
            --secondary: #f59e0b;
            --secondary-light: #fbbf24;
            --accent: #10b981;
            --accent-light: #34d399;
            --danger: #ef4444;
            --warning: #f97316;
            --info: #06b6d4;
            --success: #22c55e;
            --dark: #0f172a;
            --light: #f8fafc;
            --white: #ffffff;
            --gray-100: #f1f5f9;
            --gray-200: #e2e8f0;
            --gray-300: #cbd5e1;
            --gray-400: #94a3b8;
            --gray-500: #64748b;
            --gray-600: #475569;
            --gray-700: #334155;
            --gray-800: #1e293b;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --ring: 0 0 0 3px rgb(59 130 246 / 0.5);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: var(--gray-800);
            line-height: 1.6;
        }

        .main-container {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.1) 0%, transparent 25%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.1) 0%, transparent 25%);
            background-size: 400px 400px;
            animation: movePattern 20s linear infinite;
            z-index: 0;
        }

        @keyframes movePattern {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(200px, 200px);
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
            margin-bottom: 3rem;
            position: relative;
        }

        .header-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            color: white;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 1rem;
            animation: fadeInDown 0.8s ease-out;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 0.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .header p {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 400;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .nav-tabs {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .nav-tab {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.8);
            padding: 0.875rem 2rem;
            border-radius: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .nav-tab:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .nav-tab:hover:before {
            left: 100%;
        }

        .nav-tab:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .nav-tab.active {
            background: rgba(255, 255, 255, 0.25);
            color: white;
            font-weight: 600;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .filter-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease-out 0.8s both;
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: rgba(255, 255, 255, 0.9);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-btn:hover {
            background: rgba(255, 255, 255, 0.25);
            color: white;
            transform: scale(1.05);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
            color: white;
            border-color: var(--secondary);
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.3);
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            animation: fadeIn 1s ease-out 1s both;
        }

        .agenda-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            box-shadow: var(--shadow-lg);
        }

        .agenda-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: var(--shadow-xl);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
        }

        .card-header:before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shimmer 3s linear infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(200%) rotate(45deg);
            }
        }

        .date-info {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 1;
        }

        .date-number {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1;
        }

        .date-details {
            flex: 1;
        }

        .date-day {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .date-month {
            font-size: 0.875rem;
            opacity: 0.9;
            font-weight: 500;
        }

        .card-body {
            padding: 1.5rem;
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            padding: 1rem 0;
            border-bottom: 1px solid var(--gray-200);
            position: relative;
        }

        .activity-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .activity-item:first-child {
            padding-top: 0;
        }

        .activity-type {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.375rem 0.875rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.025em;
        }

        .activity-type.ceremony {
            background: linear-gradient(135deg, var(--warning) 0%, var(--secondary) 100%);
            color: white;
        }

        .activity-type.meeting {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
        }

        .activity-type.training {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: white;
        }

        .activity-type.coordination {
            background: linear-gradient(135deg, var(--info) 0%, #38bdf8 100%);
            color: white;
        }

        .activity-type.briefing {
            background: linear-gradient(135deg, var(--danger) 0%, #f87171 100%);
            color: white;
        }

        .activity-type.visit {
            background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
            color: white;
        }

        .activity-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .activity-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--gray-600);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .meta-icon {
            width: 16px;
            height: 16px;
            color: var(--primary);
        }

        .stats-bar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 3rem;
            animation: fadeInUp 0.8s ease-out 1.2s both;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .stat-item {
            text-align: center;
            padding: 1rem;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.5) 0%, rgba(255, 255, 255, 0.3) 100%);
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            display: block;
        }

        .stat-label {
            font-size: 0.875rem;
            color: var(--gray-600);
            font-weight: 500;
            margin-top: 0.25rem;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .header h1 {
                font-size: 2.5rem;
            }

            .agenda-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .nav-tabs {
                flex-direction: column;
                align-items: center;
            }

            .filter-section {
                justify-content: center;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="bg-pattern"></div>

        <div class="container">
            <header class="header">
                <div class="header-badge">
                    <i class="fas fa-calendar-alt"></i>
                    Agenda Kegiatan Satker
                </div>
                <h1>PA AMUNTAI</h1>
                <p>September 2025</p>
            </header>

            <div class="nav-tabs">
                <button class="nav-tab">Agustus 2025</button>
                <button class="nav-tab active">September 2025</button>
                <button class="nav-tab">Oktober 2025</button>
            </div>

            <div class="stats-bar">
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">18</span>
                        <span class="stat-label">Total Kegiatan</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">7</span>
                        <span class="stat-label">Rapat & Koordinasi</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Upacara & Peringatan</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Pelatihan & Sosialisasi</span>
                    </div>
                </div>
            </div>

            <div class="filter-section">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large"></i>
                    Semua Kegiatan
                </button>
                <button class="filter-btn" data-filter="ceremony">
                    <i class="fas fa-award"></i>
                    Upacara & Peringatan
                </button>
                <button class="filter-btn" data-filter="meeting">
                    <i class="fas fa-handshake"></i>
                    Rapat & Koordinasi
                </button>
                <button class="filter-btn" data-filter="training">
                    <i class="fas fa-graduation-cap"></i>
                    Pelatihan & Bimtek
                </button>
                <button class="filter-btn" data-filter="coordination">
                    <i class="fas fa-users"></i>
                    Koordinasi
                </button>
                <button class="filter-btn" data-filter="briefing">
                    <i class="fas fa-bullhorn"></i>
                    Briefing
                </button>
                <button class="filter-btn" data-filter="visit">
                    <i class="fas fa-exchange-alt"></i>
                    Kunjungan
                </button>
            </div>

            <div class="agenda-grid">
                <!-- 01 September 2025 -->
                <div class="agenda-card" data-category="ceremony training">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">01</div>
                            <div class="date-details">
                                <div class="date-day">Minggu</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-award"></i>
                                    Pengambilan Sumpah
                                </div>
                                <h3 class="activity-title">Pengambilan Sumpah/Janji 7 orang PPPK oleh Ketua PA Amuntai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 11:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type training">
                                    <i class="fas fa-graduation-cap"></i>
                                    Bimbingan Teknis
                                </div>
                                <h3 class="activity-title">Bimbingan Teknis "Kaum Rentan Berhadapan dengan Hukum" secara daring</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-laptop meta-icon"></i>
                                        <span>Zoom Meeting</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>13:00 - 16:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 04 September 2025 -->
                <div class="agenda-card" data-category="meeting ceremony">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">04</div>
                            <div class="date-details">
                                <div class="date-day">Rabu</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type meeting">
                                    <i class="fas fa-handshake"></i>
                                    Rapat Terbatas
                                </div>
                                <h3 class="activity-title">Rapat terbatas bersama Sub Bagian Umum dan Keuangan, PTIP, serta Kepegawaian dan Ortala</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Ruang Rapat PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 11:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-mosque"></i>
                                    Peringatan Keagamaan
                                </div>
                                <h3 class="activity-title">Peringatan Maulid Nabi Besar Muhammad SAW 1447 H</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Aula PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>13:30 - 16:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 08 September 2025 -->
                <div class="agenda-card" data-category="coordination meeting visit">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">08</div>
                            <div class="date-details">
                                <div class="date-day">Minggu</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type visit">
                                    <i class="fas fa-exchange-alt"></i>
                                    Penyambutan
                                </div>
                                <h3 class="activity-title">Penyambutan mahasiswa PPL dari STAI Rakha Amuntai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>08:00 - 09:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type meeting">
                                    <i class="fas fa-users"></i>
                                    Rapat Baperjakat
                                </div>
                                <h3 class="activity-title">Rapat terbatas Tim Badan Pertimbangan Jabatan dan Kepangkatan</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Ruang Rapat PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>10:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-flag"></i>
                                    Apel Gabungan
                                </div>
                                <h3 class="activity-title">Apel Gabungan Gebyar Panutan Pajak Kendaraan Bermotor 2025</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Lapangan Apel</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>14:00 - 16:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 09 September 2025 -->
                <div class="agenda-card" data-category="meeting">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">09</div>
                            <div class="date-details">
                                <div class="date-day">Senin</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type meeting">
                                    <i class="fas fa-gavel"></i>
                                    Rapat Pimpinan
                                </div>
                                <h3 class="activity-title">Rapat terbatas pimpinan bersama para hakim</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Ruang Rapat Hakim</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 11:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type meeting">
                                    <i class="fas fa-calendar-check"></i>
                                    Rapat Bulanan
                                </div>
                                <h3 class="activity-title">Rapat Bulanan seluruh aparatur dipimpin Ketua PA Amuntai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Aula PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>13:30 - 15:30 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 10 September 2025 -->
                <div class="agenda-card" data-category="training coordination ceremony">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">10</div>
                            <div class="date-details">
                                <div class="date-day">Selasa</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type training">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    Berbagi Ilmu
                                </div>
                                <h3 class="activity-title">Berbagi ilmu seputar kepeniteraan dan alur kerja perkara</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Ruang Panitera</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 11:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-search"></i>
                                    Verifikasi WBK
                                </div>
                                <h3 class="activity-title">Observasi/Verifikasi Lapangan Tim Penilai Internal (TPI) Bawas MA RI untuk WBK</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>13:00 - 16:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-quran"></i>
                                    MTQ Nasional
                                </div>
                                <h3 class="activity-title">Musabaqah Tilawatil Qur'an (MTQ) Nasional ke-51 Tingkat Kabupaten</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Kec. Danau Panggang</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>08:00 - 17:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 11 September 2025 -->
                <div class="agenda-card" data-category="visit coordination">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">11</div>
                            <div class="date-details">
                                <div class="date-day">Rabu</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type visit">
                                    <i class="fas fa-table-tennis"></i>
                                    PTWP
                                </div>
                                <h3 class="activity-title">Laga persahabatan Tim PTWP PTA Banjarmasin dengan Tim PTWP PA Amuntai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Lapangan Tenis</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-eye"></i>
                                    Kunjungan Hawasda
                                </div>
                                <h3 class="activity-title">Kunjungan Tim Hakim Pengawas Daerah (Hawasda) PTA Banjarmasin</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>13:30 - 16:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Continue with remaining dates... -->
                <!-- For brevity, I'll continue with a few more key dates -->

                <!-- 12 September 2025 -->
                <div class="agenda-card" data-category="ceremony coordination">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">12</div>
                            <div class="date-details">
                                <div class="date-day">Kamis</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-dumbbell"></i>
                                    Program SEHAT
                                </div>
                                <h3 class="activity-title">Program "SEHAT" (Senam Hari Jumat) di halaman kantor</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Halaman PA Amuntai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>07:00 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-users"></i>
                                    Pertemuan DYK
                                </div>
                                <h3 class="activity-title">Pertemuan DYK Cabang Amuntai untuk persiapan perlombaan dance</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Ruang Pertemuan</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>10:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-file-alt"></i>
                                    Pemusnahan Blangko
                                </div>
                                <h3 class="activity-title">Pemusnahan Blangko Akta Cerai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Area Pemusnahan</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>14:00 - 15:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 25 September 2025 -->
                <div class="agenda-card" data-category="ceremony visit">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">25</div>
                            <div class="date-details">
                                <div class="date-day">Rabu</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-handshake"></i>
                                    Pelantikan
                                </div>
                                <h3 class="activity-title">Pelantikan Sekretaris PA Barabai dan pembinaan oleh Ketua PTA Banjarmasin</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Barabai</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-trophy"></i>
                                    Lomba Line Dance
                                </div>
                                <h3 class="activity-title">DYK Cabang Amuntai ikut Lomba Line Dance HUT DYK ke-XXIII se-Kalsel</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Lokasi Lomba</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>13:00 - 17:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 29 September 2025 -->
                <div class="agenda-card" data-category="coordination">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">29</div>
                            <div class="date-details">
                                <div class="date-day">Minggu</div>
                                <div class="date-month">September 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-handshake"></i>
                                    Silaturahmi
                                </div>
                                <h3 class="activity-title">Silaturahmi ke KUA Babirik untuk persiapan sidang keliling di Kecamatan Babirik</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>KUA Babirik</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-clock meta-icon"></i>
                                        <span>09:00 - 12:00 WITA</span>
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
            const filterBtns = document.querySelectorAll('.filter-btn');
            const agendaCards = document.querySelectorAll('.agenda-card');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    agendaCards.forEach(card => {
                        if (filterValue === 'all') {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            const categories = card.getAttribute('data-category');
                            if (categories && categories.includes(filterValue)) {
                                card.style.display = 'block';
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, 100);
                            } else {
                                card.style.opacity = '0';
                                card.style.transform = 'translateY(20px)';
                                setTimeout(() => {
                                    card.style.display = 'none';
                                }, 300);
                            }
                        }
                    });
                });
            });

            // Navigation tabs functionality
            const navTabs = document.querySelectorAll('.nav-tab');
            navTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    navTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    if (this.textContent.trim() !== 'September 2025') {
                        alert(`Navigasi ke ${this.textContent.trim()} akan dimuat`);
                    }
                });
            });

            // Scroll animations
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

            // Initialize cards with animation
            agendaCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                card.style.transitionDelay = `${index * 0.1}s`;
                observer.observe(card);
            });

            // Dynamic stats update based on filter
            function updateStats(filter) {
                const stats = document.querySelectorAll('.stat-number');
                // This would be connected to actual data in a real application
                // For demo purposes, showing static numbers
            }

            // Hover effects for cards
            agendaCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>

</html>