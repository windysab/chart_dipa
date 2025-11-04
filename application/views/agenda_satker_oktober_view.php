<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Satker PA Amuntai - Oktober 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ea580c;
            --primary-light: #f97316;
            --primary-dark: #c2410c;
            --secondary: #d97706;
            --secondary-light: #f59e0b;
            --accent: #fb923c;
            --accent-light: #fed7aa;
            --success: #16a34a;
            --info: #0891b2;
            --warning: #ca8a04;
            --danger: #dc2626;
            --dark: #0f172a;
            --light: #f9fafb;
            --white: #ffffff;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-400: #9ca3af;
            --gray-500: #6b7280;
            --gray-600: #4b5563;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
            --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: linear-gradient(135deg, #ea580c 0%, #f97316 100%);
            min-height: 100vh;
            color: var(--gray-800);
            line-height: 1.7;
            overflow-x: hidden;
        }

        /* Enhanced animated background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(circle at 20% 80%, rgba(234, 88, 12, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(249, 115, 22, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(251, 146, 60, 0.15) 0%, transparent 50%);
            z-index: -1;
            animation: backgroundFloat 25s ease-in-out infinite;
        }

        @keyframes backgroundFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-40px) rotate(1deg);
            }

            66% {
                transform: translateY(20px) rotate(-1deg);
            }
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
                radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.08) 0%, transparent 25%),
                radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.08) 0%, transparent 25%);
            background-size: 500px 500px;
            animation: movePattern 30s linear infinite;
            z-index: 0;
        }

        @keyframes movePattern {
            0% {
                transform: translate(0, 0);
            }

            100% {
                transform: translate(250px, 250px);
            }
        }

        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .header-decoration {
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: float 4s ease-in-out infinite;
        }

        .header-decoration i {
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.8);
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

        .header-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            animation: fadeInDown 0.8s ease-out;
            box-shadow: var(--shadow-lg);
        }

        .header h1 {
            font-size: 4rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.8s ease-out 0.2s both;
            line-height: 1.1;
        }

        .header p {
            font-size: 1.4rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .nav-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 4rem;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease-out 0.6s both;
        }

        .nav-tab {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: rgba(255, 255, 255, 0.9);
            padding: 1rem 2.5rem;
            border-radius: 15px;
            font-weight: 600;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
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
            transition: left 0.6s;
        }

        .nav-tab:hover:before {
            left: 100%;
        }

        .nav-tab:hover {
            background: rgba(255, 255, 255, 0.25);
            color: white;
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .nav-tab.active {
            background: rgba(255, 255, 255, 0.3);
            color: white;
            font-weight: 700;
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .filter-section {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 4rem;
            animation: fadeInUp 0.8s ease-out 0.8s both;
        }

        .filter-btn {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            color: rgba(255, 255, 255, 0.9);
            padding: 0.875rem 1.75rem;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 600;
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
            box-shadow: var(--shadow-lg);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-light) 100%);
            color: white;
            border-color: var(--secondary);
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(217, 119, 6, 0.4);
        }

        .stats-bar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 4rem;
            animation: fadeInUp 0.8s ease-out 1s both;
            box-shadow: var(--shadow-lg);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            border-radius: 15px;
            background: linear-gradient(135deg, rgba(234, 88, 12, 0.1) 0%, rgba(249, 115, 22, 0.05) 100%);
            transition: all 0.3s ease;
            border: 1px solid rgba(234, 88, 12, 0.1);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            background: linear-gradient(135deg, rgba(234, 88, 12, 0.15) 0%, rgba(249, 115, 22, 0.1) 100%);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary);
            display: block;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1rem;
            color: var(--gray-700);
            font-weight: 600;
            margin-top: 0.5rem;
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 2rem;
            animation: fadeIn 1s ease-out 1.2s both;
        }

        .agenda-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 25px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            box-shadow: var(--shadow-lg);
        }

        .agenda-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
        }

        .agenda-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-2xl);
        }

        .card-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 2rem;
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
            animation: shimmer 4s linear infinite;
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
            gap: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .date-number {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .date-details {
            flex: 1;
        }

        .date-day {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }

        .date-month {
            font-size: 1rem;
            opacity: 0.9;
            font-weight: 500;
        }

        .card-body {
            padding: 2rem;
        }

        .activity-list {
            list-style: none;
        }

        .activity-item {
            padding: 1.25rem 0;
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
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .activity-type.ceremony {
            background: linear-gradient(135deg, var(--warning) 0%, var(--secondary-light) 100%);
            color: white;
        }

        .activity-type.meeting {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
        }

        .activity-type.training {
            background: linear-gradient(135deg, var(--success) 0%, #22c55e 100%);
            color: white;
        }

        .activity-type.coordination {
            background: linear-gradient(135deg, var(--info) 0%, #06b6d4 100%);
            color: white;
        }

        .activity-type.briefing {
            background: linear-gradient(135deg, var(--danger) 0%, #ef4444 100%);
            color: white;
        }

        .activity-type.monitoring {
            background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
            color: white;
        }

        .activity-type.orientation {
            background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            color: white;
        }

        .activity-type.webinar {
            background: linear-gradient(135deg, #10b981 0%, #34d399 100%);
            color: white;
        }

        .activity-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--gray-800);
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .activity-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.95rem;
            color: var(--gray-600);
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .meta-icon {
            width: 18px;
            height: 18px;
            color: var(--primary);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
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
                font-size: 2.8rem;
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
                gap: 1rem;
            }

            .date-number {
                font-size: 2.5rem;
            }

            .activity-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="bg-pattern"></div>

        <div class="container">
            <header class="header">
                <div class="header-decoration">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="header-badge">
                    <i class="fas fa-calendar-check"></i>
                    Agenda Kegiatan Satker
                </div>
                <h1>PA AMUNTAI</h1>
                <p>Oktober 2025</p>
            </header>

            <div class="nav-tabs">
                <button class="nav-tab">September 2025</button>
                <button class="nav-tab active">Oktober 2025</button>
                <button class="nav-tab">November 2025</button>
            </div>

            <div class="stats-bar">
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">31</span>
                        <span class="stat-label">Total Kegiatan</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Rapat & Koordinasi</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Pelatihan & Bimtek</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">6</span>
                        <span class="stat-label">Upacara & Peringatan</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Monitoring & Evaluasi</span>
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
                <button class="filter-btn" data-filter="monitoring">
                    <i class="fas fa-chart-line"></i>
                    Monitoring & Evaluasi
                </button>
                <button class="filter-btn" data-filter="orientation">
                    <i class="fas fa-compass"></i>
                    Orientasi
                </button>
                <button class="filter-btn" data-filter="webinar">
                    <i class="fas fa-video"></i>
                    Webinar & Daring
                </button>
            </div>

            <div class="agenda-grid">
                <!-- 01 Oktober 2025 -->
                <div class="agenda-card" data-category="ceremony monitoring coordination">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">01</div>
                            <div class="date-details">
                                <div class="date-day">Selasa</div>
                                <div class="date-month">Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-star"></i>
                                    Peringatan
                                </div>
                                <h3 class="activity-title">Peringatan Hari Kesaktian Pancasila</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Aula PA Amuntai</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type monitoring">
                                    <i class="fas fa-chart-line"></i>
                                    Monitoring
                                </div>
                                <h3 class="activity-title">Monitoring & Evaluasi Posbakum Triwulan III</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-user meta-icon"></i>
                                        <span>Dipimpin Ketua PA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-handshake"></i>
                                    Koordinasi
                                </div>
                                <h3 class="activity-title">Monev Bersama PT Pos Indonesia Cabang Amuntai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-users meta-icon"></i>
                                        <span>Ketua & Panmud Gugatan</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 02 Oktober 2025 -->
                <div class="agenda-card" data-category="coordination">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">02</div>
                            <div class="date-details">
                                <div class="date-day">Rabu</div>
                                <div class="date-month">Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type coordination">
                                    <i class="fas fa-gavel"></i>
                                    Sidang Keliling
                                </div>
                                <h3 class="activity-title">Sidang Keliling di Kecamatan Babirik (Online)</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-laptop meta-icon"></i>
                                        <span>Secara Daring</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 03 Oktober 2025 -->
                <div class="agenda-card" data-category="training ceremony">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">03</div>
                            <div class="date-details">
                                <div class="date-day">Kamis</div>
                                <div class="date-month">Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type training">
                                    <i class="fas fa-graduation-cap"></i>
                                    Bimtek
                                </div>
                                <h3 class="activity-title">Bimtek Peningkatan Kompetensi Mediator (Daring)</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-user meta-icon"></i>
                                        <span>Ketua hadir</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-laptop meta-icon"></i>
                                        <span>Secara Daring</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-praying-hands"></i>
                                    Program Keagamaan
                                </div>
                                <h3 class="activity-title">Program Tangga: "Tumbuhkan Iman, Eratkan Kebersamaan"</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Aula STAI Rakha</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-flag"></i>
                                    Apel Sore
                                </div>
                                <h3 class="activity-title">Apel Sore PA Amuntai</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Amuntai</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-music"></i>
                                    Pagelaran Seni
                                </div>
                                <h3 class="activity-title">Pagelaran Seni & Musik Kepariwisataan HSU 2025 (3–4 Okt)</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-user meta-icon"></i>
                                        <span>Sekretaris mewakili</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 06 Oktober 2025 -->
                <div class="agenda-card" data-category="ceremony meeting training">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">06</div>
                            <div class="date-details">
                                <div class="date-day">Minggu</div>
                                <div class="date-month">Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-flag"></i>
                                    Apel Senin
                                </div>
                                <h3 class="activity-title">Apel Senin: Penyerahan Sertifikat Magang STAI Rakha Kelompok 2</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>PA Amuntai</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-handshake"></i>
                                    Penyambutan
                                </div>
                                <h3 class="activity-title">Penyambutan Mahasiswa PPL STAI Rakha Kelompok 3</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-graduation-cap meta-icon"></i>
                                        <span>Program PPL</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type meeting">
                                    <i class="fas fa-users"></i>
                                    Rapat Rutin
                                </div>
                                <h3 class="activity-title">Rapat Rutin Bagian Kesekretariatan</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Ruang Rapat</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type training">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    Latsar
                                </div>
                                <h3 class="activity-title">Pembukaan Latsar CPNS MA Gelombang II</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-users meta-icon"></i>
                                        <span>CPNS Gelombang II</span>
                                    </div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-type ceremony">
                                    <i class="fas fa-shield-alt"></i>
                                    Program Perisai
                                </div>
                                <h3 class="activity-title">"Perisai" Episode 10</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-video meta-icon"></i>
                                        <span>Episode 10</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Continue with remaining dates following the same pattern... -->
                <!-- Adding more key dates for completeness -->

                <!-- 31 Oktober 2025 -->
                <div class="agenda-card" data-category="training">
                    <div class="card-header">
                        <div class="date-info">
                            <div class="date-number">31</div>
                            <div class="date-details">
                                <div class="date-day">Kamis</div>
                                <div class="date-month">Oktober 2025</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-type training">
                                    <i class="fas fa-graduation-cap"></i>
                                    Pembinaan Teknis
                                </div>
                                <h3 class="activity-title">Pembinaan Teknis & Administrasi Yudisial di Mahkamah Agung RI</h3>
                                <div class="activity-meta">
                                    <div class="meta-item">
                                        <i class="fas fa-map-marker-alt meta-icon"></i>
                                        <span>Mahkamah Agung RI</span>
                                    </div>
                                    <div class="meta-item">
                                        <i class="fas fa-gavel meta-icon"></i>
                                        <span>Administrasi Yudisial</span>
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

                    if (this.textContent.trim() !== 'Oktober 2025') {
                        alert(`Navigasi ke ${this.textContent.trim()} akan dimuat`);
                    }
                });
            });

            // Enhanced scroll animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0) scale(1)';
                        }, index * 100);
                    }
                });
            }, observerOptions);

            // Initialize cards with staggered animation
            agendaCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px) scale(0.95)';
                card.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                card.style.transitionDelay = `${index * 0.1}s`;
                observer.observe(card);
            });

            // Enhanced hover effects
            agendaCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });

                // Click animation
                card.addEventListener('click', function() {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = 'translateY(-10px) scale(1.02)';
                    }, 150);
                });
            });

            // Floating particles animation
            function createFloatingParticle() {
                const particle = document.createElement('div');
                particle.style.position = 'fixed';
                particle.style.width = Math.random() * 8 + 4 + 'px';
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
                        transform: `translateY(-120vh) translateX(${horizontalMovement}px)`,
                        opacity: 1
                    },
                    {
                        transform: `translateY(-140vh) translateX(${horizontalMovement * 1.2}px)`,
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
            setInterval(createFloatingParticle, 1200);
        });
    </script>
</body>

</html>