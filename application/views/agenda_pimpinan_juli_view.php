<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kerja Pimpinan - PA Amuntai Juli 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --success-color: #4facfe;
            --info-color: #43e97b;
            --warning-color: #fa709a;
            --danger-color: #ff6b6b;
            --light-color: #f8fafc;
            --dark-color: #2d3748;
            --white-color: #ffffff;
            --body-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

        /* Animated Background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            z-index: -1;
            animation: backgroundMove 20s ease-in-out infinite;
        }

        @keyframes backgroundMove {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-30px) rotate(0.5deg); }
            66% { transform: translateY(20px) rotate(-0.5deg); }
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
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            background: var(--glass-bg);
            border-radius: 50%;
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateX(-50%) translateY(0px); }
            50% { transform: translateX(-50%) translateY(-10px); }
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header h2 {
            font-size: 1.8rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 400;
            margin-bottom: 1rem;
        }

        .header .subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
        }

        .month-selector {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            gap: 1rem;
            animation: slideInUp 1s ease-out 0.2s both;
        }

        .month-btn {
            padding: 1rem 2rem;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
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
            transition: left 0.5s;
        }

        .month-btn:hover::before {
            left: 100%;
        }

        .month-btn:hover {
            transform: translateY(-5px);
            box-shadow: var(--card-hover-shadow);
        }

        .month-btn.active {
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--warning-color) 100%);
            transform: translateY(-5px);
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
            padding: 0.8rem 1.5rem;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
        }

        .filter-btn i {
            font-size: 1.1rem;
        }

        .filter-btn:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, 0.3);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, var(--success-color) 0%, var(--info-color) 100%);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.3);
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
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            right: -15px;
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--warning-color) 100%);
            border: 4px solid var(--white-color);
            top: 25px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 0 20px rgba(102, 126, 234, 0.4);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(102, 126, 234, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(102, 126, 234, 0);
            }
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .right::after {
            left: -15px;
        }

        .timeline-card {
            padding: 2rem;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
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
            height: 4px;
            background: linear-gradient(90deg, var(--accent-color) 0%, var(--warning-color) 100%);
        }

        .timeline-card:hover {
            transform: translateY(-10px) scale(1.02);
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

        .timeline-date {
            display: inline-block;
            padding: 0.5rem 1.2rem;
            background: linear-gradient(135deg, var(--accent-color) 0%, var(--warning-color) 100%);
            color: var(--white-color);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 15px rgba(240, 147, 251, 0.3);
        }

        .timeline-title {
            font-size: 1.4rem;
            margin-bottom: 1.5rem;
            color: var(--white-color);
            line-height: 1.4;
            font-weight: 600;
        }

        .timeline-location {
            display: flex;
            align-items: center;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.5rem;
        }

        .timeline-location i {
            margin-right: 0.8rem;
            color: var(--accent-color);
            font-size: 1.1rem;
        }

        .timeline-time {
            display: flex;
            align-items: center;
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .timeline-time i {
            margin-right: 0.8rem;
            color: var(--info-color);
        }

        .timeline-icon {
            position: absolute;
            top: 2rem;
            right: 2rem;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .timeline-card:hover .timeline-icon {
            color: rgba(255, 255, 255, 0.2);
            transform: scale(1.1) rotate(5deg);
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
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
                font-size: 2.5rem;
            }

            .header h2 {
                font-size: 1.4rem;
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
                padding: 1.5rem;
            }

            .timeline-title {
                font-size: 1.2rem;
            }
        }

        /* Floating Elements */
        .floating-element {
            position: fixed;
            pointer-events: none;
            z-index: 0;
        }

        .floating-element:nth-child(1) {
            top: 20%;
            left: 10%;
            animation: floatAnimation 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2) {
            top: 60%;
            right: 10%;
            animation: floatAnimation 8s ease-in-out infinite reverse;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            animation: floatAnimation 7s ease-in-out infinite;
        }

        @keyframes floatAnimation {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }
    </style>
</head>

<body>
    <!-- Floating Elements -->
    <div class="floating-element">
        <i class="fas fa-calendar-alt" style="font-size: 3rem; color: rgba(255, 255, 255, 0.05);"></i>
    </div>
    <div class="floating-element">
        <i class="fas fa-users" style="font-size: 2.5rem; color: rgba(255, 255, 255, 0.05);"></i>
    </div>
    <div class="floating-element">
        <i class="fas fa-gavel" style="font-size: 2rem; color: rgba(255, 255, 255, 0.05);"></i>
    </div>

    <div class="container">
        <div class="header">
            <h1>AGENDA KERJA PIMPINAN</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <p class="subtitle">Bulan Juli 2025</p>
        </div>

        <div class="month-selector">
            <button class="month-btn">Juni 2025</button>
            <button class="month-btn active">Juli 2025</button>
            <button class="month-btn">Agustus 2025</button>
        </div>

        <div class="timeline-filter">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-tasks"></i> Semua Kegiatan
            </button>
            <button class="filter-btn" data-filter="meeting">
                <i class="fas fa-users"></i> Rapat
            </button>
            <button class="filter-btn" data-filter="ceremony">
                <i class="fas fa-medal"></i> Upacara/Peringatan
            </button>
            <button class="filter-btn" data-filter="training">
                <i class="fas fa-chalkboard-teacher"></i> Bimtek/Pelatihan
            </button>
            <button class="filter-btn" data-filter="coordination">
                <i class="fas fa-handshake"></i> Koordinasi
            </button>
            <button class="filter-btn" data-filter="briefing">
                <i class="fas fa-bullhorn"></i> Briefing
            </button>
        </div>

        <div class="timeline">
            <!-- 01 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">01 Juli 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 02 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">02 Juli 2025</div>
                    <h3 class="timeline-title">Sosialisasi Aplikasi SIPP (Sistem Informasi Penelusuran Perkara) untuk Advokat</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Sidang PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 12:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>

            <!-- 03 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">03 Juli 2025</div>
                    <h3 class="timeline-title">Rapat Persiapan Kegiatan Bulan Agustus 2025</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>10:00 - 12:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                </div>
            </div>

            <!-- 04 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">04 Juli 2025</div>
                    <h3 class="timeline-title">Apel Pagi Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 07 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">07 Juli 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 08 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">08 Juli 2025</div>
                    <h3 class="timeline-title">Rapat Koordinasi Bulanan Tim Kesekretariatan PA Amuntai</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 11:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 09 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">09 Juli 2025</div>
                    <h3 class="timeline-title">Bimbingan Teknis Pengelolaan Arsip Digital</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>08:00 - 16:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-archive"></i>
                    </div>
                </div>
            </div>

            <!-- 10 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">10 Juli 2025</div>
                    <h3 class="timeline-title">Kunjungan Kerja Tim Monitoring Mahkamah Agung RI</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>10:00 - 14:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                </div>
            </div>

            <!-- 11 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">11 Juli 2025</div>
                    <h3 class="timeline-title">Apel Pagi Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 14 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card briefing">
                    <div class="timeline-date">14 Juli 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 15 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">15 Juli 2025</div>
                    <h3 class="timeline-title">Bimbingan Teknis Sistem Informasi Manajemen Kepegawaian (SIMPEG)</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Secara Virtual (Online)</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 15:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
            </div>

            <!-- 16 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">16 Juli 2025</div>
                    <h3 class="timeline-title">Rapat Evaluasi Kinerja Triwulan II Tahun 2025</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 12:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>

            <!-- 17 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">17 Juli 2025</div>
                    <h3 class="timeline-title">Upacara Peringatan Hari Keadilan Nasional</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>08:00 - 09:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                </div>
            </div>

            <!-- 18 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">18 Juli 2025</div>
                    <h3 class="timeline-title">Apel Pagi Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 21 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">21 Juli 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 22 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">22 Juli 2025</div>
                    <h3 class="timeline-title">Sidang Keliling di Desa Tanjung Harapan</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Balai Desa Tanjung Harapan</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 15:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
            </div>

            <!-- 23 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">23 Juli 2025</div>
                    <h3 class="timeline-title">Workshop Penulisan Putusan yang Berkualitas</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>08:00 - 16:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                </div>
            </div>

            <!-- 24 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">24 Juli 2025</div>
                    <h3 class="timeline-title">Rapat Koordinasi dengan Stakeholder Terkait</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>10:00 - 12:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 25 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">25 Juli 2025</div>
                    <h3 class="timeline-title">Apel Pagi Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 28 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card briefing">
                    <div class="timeline-date">28 Juli 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>07:30 - 08:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 29 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">29 Juli 2025</div>
                    <h3 class="timeline-title">Koordinasi dengan Dinas Kependudukan dan Pencatatan Sipil Kabupaten HSU</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor Disdukcapil HSU</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>10:00 - 12:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 30 Juli 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">30 Juli 2025</div>
                    <h3 class="timeline-title">Sosialisasi Peraturan Mahkamah Agung Terbaru tentang Administrasi Perkara</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 12:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>

            <!-- 31 Juli 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">31 Juli 2025</div>
                    <h3 class="timeline-title">Rapat Evaluasi Kegiatan Bulan Juli dan Persiapan Bulan Agustus 2025</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat PA Amuntai</span>
                    </div>
                    <div class="timeline-time">
                        <i class="far fa-clock"></i>
                        <span>09:00 - 11:00 WITA</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-clipboard-check"></i>
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

                    const filterValue = this.getAttribute('data-filter');

                    timelineItems.forEach(item => {
                        const card = item.querySelector('.timeline-card');
                        if (filterValue === 'all') {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            if (card.classList.contains(filterValue)) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.style.opacity = '1';
                                    item.style.transform = 'translateY(0)';
                                }, 100);
                            } else {
                                item.style.opacity = '0';
                                item.style.transform = 'translateY(20px)';
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 300);
                            }
                        }
                    });
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

            // Add hover effects
            const timelineCards = document.querySelectorAll('.timeline-card');
            timelineCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Add click animation
            timelineCards.forEach(card => {
                card.addEventListener('click', function() {
                    this.style.transform = 'scale(0.98)';
                    setTimeout(() => {
                        this.style.transform = 'translateY(-10px) scale(1.02)';
                    }, 150);
                });
            });
        });

        // Dynamic background animation
        function createFloatingParticle() {
            const particle = document.createElement('div');
            particle.style.position = 'fixed';
            particle.style.width = Math.random() * 6 + 2 + 'px';
            particle.style.height = particle.style.width;
            particle.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
            particle.style.borderRadius = '50%';
            particle.style.left = Math.random() * 100 + 'vw';
            particle.style.top = '100vh';
            particle.style.pointerEvents = 'none';
            particle.style.zIndex = '0';
            
            document.body.appendChild(particle);
            
            const animationDuration = Math.random() * 3000 + 2000;
            const horizontalMovement = (Math.random() - 0.5) * 200;
            
            particle.animate([
                {
                    transform: 'translateY(0px) translateX(0px)',
                    opacity: 0
                },
                {
                    transform: `translateY(-100vh) translateX(${horizontalMovement}px)`,
                    opacity: 1
                },
                {
                    transform: `translateY(-120vh) translateX(${horizontalMovement * 1.2}px)`,
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
        setInterval(createFloatingParticle, 800);
    </script>
</body>

</html>