<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kerja Pimpinan - PA Amuntai September 2025</title>
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

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-30px) rotate(0.5deg);
            }

            66% {
                transform: translateY(20px) rotate(-0.5deg);
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

            0%,
            100% {
                transform: translateX(-50%) translateY(0px);
            }

            50% {
                transform: translateX(-50%) translateY(-10px);
            }
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

        .timeline-activities {
            list-style: none;
            padding-left: 0;
        }

        .timeline-activities li {
            position: relative;
            padding-left: 1.5rem;
            margin-bottom: 0.8rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.4;
        }

        .timeline-activities li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--accent-color);
            font-weight: bold;
            font-size: 1.2rem;
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

            0%,
            100% {
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
            <p class="subtitle">Bulan September 2025</p>
        </div>

        <div class="month-selector">
            <button class="month-btn">Agustus 2025</button>
            <button class="month-btn active">September 2025</button>
            <button class="month-btn">Oktober 2025</button>
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
            <!-- 01 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">01 September 2025</div>
                    <h3 class="timeline-title">Pengambilan Sumpah/Janji PPPK dan Bimbingan Teknis Kaum Rentan</h3>
                    <ul class="timeline-activities">
                        <li>Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I., mengambil sumpah/janji 7 (tujuh) orang Pegawai Pemerintah dengan Perjanjian Kerja (PPPK)</li>
                        <li>PA Amuntai Kelas IB mengikuti Bimbingan Teknis "Kaum Rentan Berhadapan dengan Hukum" secara daring melalui Zoom</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Zoom Meeting
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                </div>
            </div>

            <!-- 04 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">04 September 2025</div>
                    <h3 class="timeline-title">Rapat Terbatas dan Peringatan Maulid Nabi</h3>
                    <ul class="timeline-activities">
                        <li>Sekretaris PA Amuntai, Bapak Salmani, S.Ag., memimpin rapat terbatas bersama Sub Bagian Umum dan Keuangan, Sub Bagian PTIP, serta Sub Bagian Kepegawaian dan Ortala</li>
                        <li>PA Amuntai Kelas IB menyelenggarakan peringatan Maulid Nabi Besar Muhammad SAW 1447 H. Kegiatan ini melibatkan seluruh aparatur pengadilan dan mahasiswa magang dari STAI Rasyidiyah Khalidiyah (Rakha) Amuntai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai Kelas IB
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                </div>
            </div>

            <!-- 08 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">08 September 2025</div>
                    <h3 class="timeline-title">Penyambutan Mahasiswa PPL dan Berbagai Kegiatan Koordinasi</h3>
                    <ul class="timeline-activities">
                        <li>Wakil Ketua PA Amuntai, Ibu Mursidah, S.Ag., M.H., bersama Panitera dan Sekretaris, menyambut kedatangan mahasiswa/i Praktik Pengalaman Lapangan (PPL) dari STAI Rasyidiyah Khalidiyah (Rakha) Amuntai</li>
                        <li>PA Amuntai Kelas IB menggelar rapat terbatas Tim Badan Pertimbangan Jabatan dan Kepangkatan (Baperjakat)</li>
                        <li>Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I., menghadiri Apel Gabungan dalam rangka Gebyar Panutan Pajak Kendaraan Bermotor Tahun 2025</li>
                        <li>Menindaklanjuti arahan pimpinan, PA Amuntai menggelar rapat internal bagian kepaniteraan</li>
                        <li>Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I., menghadiri acara pelantikan Dewan Hakim dan Panitera Musabaqah Tilawatil Qur'an (MTQ) Nasional ke-51 Tingkat Kabupaten Hulu Sungai Utara</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Berbagai Lokasi
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 09 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">09 September 2025</div>
                    <h3 class="timeline-title">Rapat Terbatas Pimpinan dan Rapat Bulanan</h3>
                    <ul class="timeline-activities">
                        <li>Pimpinan PA Amuntai Kelas IB melaksanakan rapat terbatas bersama para hakim</li>
                        <li>Seluruh aparatur mengikuti Rapat Bulanan yang dipimpin langsung oleh Ketua PA Amuntai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai Kelas IB
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 10 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">10 September 2025</div>
                    <h3 class="timeline-title">Berbagi Ilmu Kepaniteraan dan Verifikasi WBK</h3>
                    <ul class="timeline-activities">
                        <li>Panitera PA Amuntai, Bapak H. Ahmad Ramli, S.H., bersama para Panitera Muda dan Jurusita, berbagi ilmu seputar kepeniteraan dan alur kerja perkara</li>
                        <li>PA Amuntai menghadapi tahap Observasi atau Verifikasi Lapangan oleh Tim Penilai Internal (TPI) Badan Pengawasan Mahkamah Agung RI dalam rangka meraih predikat Wilayah Bebas dari Korupsi (WBK)</li>
                        <li>Digelar Musabaqah Tilawatil Qur'an (MTQ) Nasional ke-51 Tingkat Kabupaten di Kecamatan Danau Panggang</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Danau Panggang
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 11 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">11 September 2025</div>
                    <h3 class="timeline-title">Laga Persahabatan PTWP dan Kunjungan Tim Hawasda</h3>
                    <ul class="timeline-activities">
                        <li>Tim Persatuan Tenis Warga Peradilan (PTWP) Pengadilan Tinggi Agama (PTA) Banjarmasin melaksanakan laga persahabatan bersama Tim PTWP PA Amuntai</li>
                        <li>PA Amuntai Kelas IB menerima kunjungan Tim Hakim Pengawas Daerah (Hawasda) PTA Banjarmasin</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai Kelas IB
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 12 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">12 September 2025</div>
                    <h3 class="timeline-title">Program SEHAT, Pertemuan DYK, dan Pemusnahan Blangko</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai Kelas IB menggelar Program "SEHAT" (Senam Hari Jumat) di halaman kantor</li>
                        <li>Ibu-ibu Dharmayukti Karini (DYK) Cabang Amuntai mengadakan pertemuan untuk persiapan mengikuti perlombaan dance yang akan digelar oleh DYK Provinsi</li>
                        <li>PA Amuntai Kelas IB melaksanakan kegiatan Pemusnahan Blangko Akta Cerai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai Kelas IB
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                </div>
            </div>

            <!-- 13 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">13 September 2025</div>
                    <h3 class="timeline-title">Penyampaian Materi Penyelesaian Perkara</h3>
                    <ul class="timeline-activities">
                        <li>Ketua PA Amuntai, Bahrul Maji, S.H.I., menyampaikan materi mengenai penyelesaian perkara di Pengadilan Agama di Aula H. Rudy Arifin STAI Rakha Amuntai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Aula H. Rudy Arifin STAI Rakha Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 15 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">15 September 2025</div>
                    <h3 class="timeline-title">Peringatan Maulid Nabi Muhammad SAW 1447 H</h3>
                    <ul class="timeline-activities">
                        <li>Peringatan Maulid Nabi Muhammad SAW 1447 H digelar di Ruang Rapat Paripurna DPRD Kabupaten Hulu Sungai Utara (HSU) yang dihadiri oleh Sekretaris PA Amuntai</li>
                        <li>Keluarga besar PA Amuntai menggelar peringatan Maulid Nabi Muhammad SAW 1447 H di Aula PA Amuntai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        DPRD HSU & Aula PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                </div>
            </div>

            <!-- 16 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card briefing">
                    <div class="timeline-date">16 September 2025</div>
                    <h3 class="timeline-title">Briefing PTSP dan Kegiatan Lainnya</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai Kelas IB melaksanakan Briefing PTSP yang dipimpin oleh Wakil Ketua Ibu Mursidah, S.Ag., M.H.</li>
                        <li>Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I., menegaskan bahwa mediasi adalah kewajiban utama sebelum perkara diperiksa majelis hakim</li>
                        <li>Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I., bersama Forkopimda HSU menghadiri peringatan Maulid Nabi Muhammad SAW 1447 H di Aula Serbaguna Lapas Kelas IIB Amuntai</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Lapas Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 17 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">17 September 2025</div>
                    <h3 class="timeline-title">Rapat Paripurna DPRD HSU</h3>
                    <ul class="timeline-activities">
                        <li>Ketua PA Amuntai Kelas IB, Bapak Bahrul Maji, S.H.I., menghadiri Rapat Paripurna Dewan Perwakilan Rakyat Daerah (DPRD) Kabupaten Hulu Sungai Utara</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        DPRD Kabupaten HSU
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 18 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">18 September 2025</div>
                    <h3 class="timeline-title">Pengambilan Sumpah Panitera dan Sidang Keliling</h3>
                    <ul class="timeline-activities">
                        <li>Sekretaris PA Amuntai, Bapak Salmani, S.Ag., menghadiri dan menjadi saksi dalam acara Pengambilan Sumpah Jabatan dan Pelantikan Panitera baru di Pengadilan Negeri Amuntai</li>
                        <li>PA Amuntai Kelas IB melaksanakan program sidang keliling di Desa Sungai Tabukan</li>
                        <li>Mahasiswa PPL dari STAI Rakha Amuntai Kelompok 2 dibekali wawasan tentang Tugas Pokok & Fungsi (Tupoksi) Kesekretariatan</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PN Amuntai & Desa Sungai Tabukan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 19 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">19 September 2025</div>
                    <h3 class="timeline-title">Bimbingan Teknis dan Rapat Pendataan</h3>
                    <ul class="timeline-activities">
                        <li>Wakil Ketua PA Amuntai, YM. Hj. Mursidah, S.Ag., M.H., bersama para hakim dan tenaga teknis, mengikuti kegiatan Bimbingan Teknis (Bimtek) Kaum Rentan Berhadapan dengan Hukum</li>
                        <li>PA Amuntai Kelas IB turut serta dalam Rapat Pendataan Honorer Non-DIPA Mahkamah Agung RI dan Badan Peradilan di bawahnya secara daring</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai & Online
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 20 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">20 September 2025</div>
                    <h3 class="timeline-title">World Cleanup Day Indonesia 2025</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai Kelas IB turut serta dalam gerakan World Cleanup Day Indonesia Tahun 2025</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Lokasi Kegiatan Cleanup
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                </div>
            </div>

            <!-- 22 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">22 September 2025</div>
                    <h3 class="timeline-title">Fit and Proper Test dan Sosialisasi SIMAN</h3>
                    <ul class="timeline-activities">
                        <li>Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I., mengikuti secara virtual pembukaan Uji Kepatutan dan Kelayakan (Fit and Proper Test) Calon Pimpinan Pengadilan di Lingkungan Peradilan Agama</li>
                        <li>PA Amuntai Kelas IB berpartisipasi aktif dalam "Sosialisasi Hasil Monitoring dan Evaluasi Kesesuaian Data Penghuni Rumah Negara pada Aplikasi SIMAN"</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Virtual Meeting & PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
            </div>

            <!-- 23 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">23 September 2025</div>
                    <h3 class="timeline-title">Press Conference Kinerja APBN</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai, yang diwakili oleh Bapak Sigit Hary Cahyono, A.Md., menghadiri Press Conference Kinerja APBN dan Evaluasi Pelaksanaan Anggaran Bulan September 2025</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Lokasi Press Conference
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-microphone"></i>
                    </div>
                </div>
            </div>

            <!-- 24 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">24 September 2025</div>
                    <h3 class="timeline-title">BRASTAGI (Briefing Setiap Rabu Pagi)</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai Kelas IB menggelar kegiatan BRASTAGI (Briefing Setiap Rabu Pagi)</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai Kelas IB
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 25 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">25 September 2025</div>
                    <h3 class="timeline-title">Pelantikan Sekretaris PA Barabai dan Lomba Line Dance</h3>
                    <ul class="timeline-activities">
                        <li>Ketua PA Amuntai Kelas IB beserta rombongan menghadiri Pelantikan Sekretaris Pengadilan Agama Barabai, Aan Wiharyanto, S.H., M.H., yang dirangkai dengan pembinaan oleh Ketua Pengadilan Tinggi Agama Banjarmasin</li>
                        <li>Dharmayukti Karini (DYK) Cabang Amuntai turut serta dalam Lomba Line Dance dalam rangka HUT Dharmayukti Karini ke-XXIII Tahun 2025 se-Kalimantan Selatan</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Barabai & Lokasi Lomba
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                </div>
            </div>

            <!-- 26 September 2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">26 September 2025</div>
                    <h3 class="timeline-title">Pelantikan Kasubag Kepegawaian dan Ortala</h3>
                    <ul class="timeline-activities">
                        <li>PA Amuntai resmi melantik Ibu Erliani, S.H.I., M.H., sebagai Kasubag Kepegawaian dan Ortala. Prosesi ini dipimpin oleh Ketua PA Amuntai, Bapak Bahrul Maji, S.H.I.</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                </div>
            </div>

            <!-- 29 September 2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">29 September 2025</div>
                    <h3 class="timeline-title">Silaturahmi ke KUA Babirik</h3>
                    <ul class="timeline-activities">
                        <li>Rombongan PA Amuntai Kelas IB yang dipimpin oleh Panitera, H. Ahmad Ramli, S.H., melakukan silaturahmi ke KUA Babirik dalam rangka persiapan sidang keliling di Kecamatan Babirik</li>
                    </ul>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        KUA Babirik
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
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
                    this.style.transform = 'translateY(-15px) scale(1.05)';
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

            particle.animate([{
                    transform: `translateY(0px) translateX(0px)`,
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
        setInterval(createFloatingParticle, 800);
    </script>
</body>

</html>