<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kerja Pimpinan Desember 2025 - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #dc2626;
            --secondary-color: #6c757d;
            --success-color: #198754;
            --info-color: #0dcaf0;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-color: #fef2f2;
            --dark-color: #212529;
            --white-color: #ffffff;
            --body-bg: #fef2f2;
            --card-shadow: 0 0.5rem 1rem rgba(220, 38, 38, 0.15);
            --border-radius: 0.5rem;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', 'Roboto', sans-serif;
            background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%);
            color: var(--dark-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .header:after {
            content: '';
            display: block;
            width: 100px;
            height: 4px;
            background: var(--primary-color);
            margin: 1rem auto;
            border-radius: 4px;
        }

        .header h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .header h2 {
            font-size: 1.5rem;
            color: var(--secondary-color);
            font-weight: 400;
        }

        .month-indicator {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), #ef4444);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            box-shadow: var(--card-shadow);
            position: relative;
        }

        .month-indicator:before {
            content: "🎄";
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5rem;
        }

        .year-end-badge {
            background: rgba(255, 215, 0, 0.9);
            color: #8b5a00;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 20px;
            margin-left: 15px;
        }

        .timeline-filter {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            background-color: var(--white-color);
            border: 1px solid rgba(220, 38, 38, 0.2);
            border-radius: 20px;
            color: var(--dark-color);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-btn i {
            color: var(--primary-color);
        }

        .filter-btn:hover {
            background-color: var(--light-color);
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background-color: var(--primary-color);
            color: var(--white-color);
            border-color: var(--primary-color);
        }

        .filter-btn.active i {
            color: var(--white-color);
        }

        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: linear-gradient(to bottom, var(--primary-color), #ef4444);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 5px;
        }

        .timeline-item {
            padding: 10px 50px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            margin-bottom: 2rem;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12.5px;
            background-color: var(--white-color);
            border: 4px solid var(--primary-color);
            top: 20px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 2px 8px rgba(220, 38, 38, 0.3);
        }

        .left {
            left: 0;
        }

        .right {
            left: 50%;
        }

        .right::after {
            left: -12.5px;
        }

        .timeline-card {
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--white-color), #fef7f7);
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
            border: 1px solid rgba(220, 38, 38, 0.1);
        }

        .timeline-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 1rem 2rem rgba(220, 38, 38, 0.2);
        }

        .timeline-card.meeting {
            border-left: 5px solid var(--primary-color);
        }

        .timeline-card.ceremony {
            border-left: 5px solid var(--success-color);
        }

        .timeline-card.training {
            border-left: 5px solid var(--warning-color);
        }

        .timeline-card.coordination {
            border-left: 5px solid var(--info-color);
        }

        .timeline-card.monitoring {
            border-left: 5px solid #8b5cf6;
        }

        .timeline-date {
            display: inline-block;
            padding: 0.4rem 1rem;
            background: linear-gradient(135deg, var(--primary-color), #ef4444);
            color: var(--white-color);
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(220, 38, 38, 0.3);
        }

        .timeline-title {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--dark-color);
            line-height: 1.4;
            font-weight: 600;
        }

        .timeline-description {
            display: flex;
            align-items: center;
            font-size: 0.95rem;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }

        .timeline-description i {
            margin-right: 0.5rem;
            color: var(--primary-color);
        }

        .timeline-icon {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 1.5rem;
            color: rgba(220, 38, 38, 0.15);
        }

        .year-end-highlight {
            background: linear-gradient(135deg, #fef2f2, #fee2e2);
            border: 2px solid var(--primary-color);
            position: relative;
        }

        .year-end-highlight::before {
            content: "📊 AKHIR TAHUN";
            position: absolute;
            top: -10px;
            right: 20px;
            background: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 10px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        @media screen and (max-width: 768px) {
            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            .timeline-item::after {
                left: 19px;
                right: auto;
            }

            .left,
            .right {
                left: 0;
            }

            .header h1 {
                font-size: 2rem;
            }

            .header h2 {
                font-size: 1.2rem;
            }

            .container {
                padding: 1rem;
            }

            .month-indicator {
                font-size: 1rem;
                padding: 0.8rem 1.5rem;
            }

            .year-end-badge {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>AGENDA KERJA PIMPINAN</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <div class="month-indicator">
                <i class="fas fa-calendar-alt"></i> Desember 2025
                <span class="year-end-badge">Penutupan Tahun 2025</span>
            </div>
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
                <i class="fas fa-chalkboard-teacher"></i> Sosialisasi/Pelatihan
            </button>
            <button class="filter-btn" data-filter="coordination">
                <i class="fas fa-handshake"></i> Koordinasi
            </button>
            <button class="filter-btn" data-filter="monitoring">
                <i class="fas fa-chart-line"></i> Monitoring/Evaluasi
            </button>
        </div>

        <div class="timeline">
            <!-- 01-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">01 Desember 2025</div>
                    <h3 class="timeline-title">Pelepasan Mahasiswa PPL STAI Rakha Amuntai Kelompok 4</h3>
                    <div class="timeline-description">
                        <i class="fas fa-graduation-cap"></i>
                        Acara pelepasan mahasiswa magang kelompok 4
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">01 Desember 2025</div>
                    <h3 class="timeline-title">Penyambutan Mahasiswa PPL STAI Rakha Amuntai Kelompok 5</h3>
                    <div class="timeline-description">
                        <i class="fas fa-handshake"></i>
                        Penyambutan mahasiswa magang gelombang baru
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">01 Desember 2025</div>
                    <h3 class="timeline-title">Pembacaan Burdah - Program TANGGA (Kegiatan Keagamaan)</h3>
                    <div class="timeline-description">
                        <i class="fas fa-mosque"></i>
                        Inovasi Program TANGGA PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                </div>
            </div>

            <!-- 02-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">02 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Koordinasi Persiapan Penghargaan WBK</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris mengikuti zoom dengan BUA Mahkamah Agung RI
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-video"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card meeting year-end-highlight">
                    <div class="timeline-date">02 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Strategis Akhir Tahun 2025</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Langkah strategis penyelesaian perkara dan laporan tahunan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">02 Desember 2025</div>
                    <h3 class="timeline-title">Zoom Orientasi PPPK Tahap II</h3>
                    <div class="timeline-description">
                        <i class="fas fa-laptop"></i>
                        Diselenggarakan BSDK Mahkamah Agung
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                </div>
            </div>

            <!-- 03-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card monitoring year-end-highlight">
                    <div class="timeline-date">03 Desember 2025</div>
                    <h3 class="timeline-title">Bimbingan dan Monitoring Laporan Akhir Tahun</h3>
                    <div class="timeline-description">
                        <i class="fas fa-chart-bar"></i>
                        Zoom dengan Ditjen Badilag - Evaluasi KINSATKER dan SIPP
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">03 Desember 2025</div>
                    <h3 class="timeline-title">Peringatan Hari Disabilitas Internasional</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua hadiri di tingkat Kabupaten HSU
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-wheelchair"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">03 Desember 2025</div>
                    <h3 class="timeline-title">Penandatanganan Perjanjian Kerjasama Badilag dengan BSI</h3>
                    <div class="timeline-description">
                        <i class="fas fa-handshake"></i>
                        PA Amuntai ikuti zoom penandatanganan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                </div>
            </div>

            <!-- 04-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">04 Desember 2025</div>
                    <h3 class="timeline-title">Apel Kesiapsiagaan Bencana Kabupaten HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua hadiri menghadapi cuaca ekstrem
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">04 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Paripurna DPRD Kabupaten HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua hadiri sinergi kelembagaan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">04 Desember 2025</div>
                    <h3 class="timeline-title">Identifikasi Kebutuhan Gedung Kantor</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris dan jajaran ikuti zoom
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">04 Desember 2025</div>
                    <h3 class="timeline-title">Pengukuhan Pengurus MUI Kabupaten HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua hadiri pengukuhan pengurus baru
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                </div>
            </div>

            <!-- 05-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">05 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Koordinasi Pelayanan Pencatatan Sipil</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        H. Syamsi Bahrun, S.Ag., M.Sy. hadiri koordinasi dengan PA dan PN
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                </div>
            </div>

            <!-- 08-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">08 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Pleno Terbuka Rekapitulasi Data Pemilih</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris hadiri di KPU HSU - Triwulan IV 2025
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-vote-yea"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card monitoring">
                    <div class="timeline-date">08 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Koordinasi Desember 2025</h3>
                    <div class="timeline-description">
                        <i class="fas fa-users"></i>
                        Perkuat kekompakan aparatur dan monitoring evaluasi
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 09-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">09 Desember 2025</div>
                    <h3 class="timeline-title">Penyerahan Penghargaan Wilayah Bebas Korupsi</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua hadiri penyerahan dari Mahkamah Agung RI
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-award"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">09 Desember 2025</div>
                    <h3 class="timeline-title">Pembinaan Ketua PTA Banjarmasin</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua PTA Banjarmasin dan rombongan di PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 12-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card monitoring">
                    <div class="timeline-date">12 Desember 2025</div>
                    <h3 class="timeline-title">Kunjungan Pembimbing Magang SMKN I</h3>
                    <div class="timeline-description">
                        <i class="fas fa-school"></i>
                        Agenda monitoring bulanan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">12 Desember 2025</div>
                    <h3 class="timeline-title">Sosialisasi Proyek Perubahan Latsah CPNS</h3>
                    <div class="timeline-description">
                        <i class="fas fa-presentation"></i>
                        Sosialisasi untuk CPNS PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">12 Desember 2025</div>
                    <h3 class="timeline-title">Sosialisasi Coretax</h3>
                    <div class="timeline-description">
                        <i class="fas fa-calculator"></i>
                        Sosialisasi sistem perpajakan core tax
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

            <!-- 13-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">13 Desember 2025</div>
                    <h3 class="timeline-title">Resepsi Peringatan Hari Kesehatan Nasional ke-61</h3>
                    <div class="timeline-description">
                        <i class="fas fa-heartbeat"></i>
                        PA Amuntai hadiri resepsi hari kesehatan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                </div>
            </div>

            <!-- 15-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card monitoring">
                    <div class="timeline-date">15 Desember 2025</div>
                    <h3 class="timeline-title">Verifikasi dan Validasi Data Kepegawaian</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-check"></i>
                        Kasubbag Kepegawaian Ortala - Ditjen Badilag
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-database"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">15 Desember 2025</div>
                    <h3 class="timeline-title">Penguatan Dukungan Prioritas Direktif Presiden 2026</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris ikuti zoom penguatan prioritas
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 16-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">16 Desember 2025</div>
                    <h3 class="timeline-title">Penyerahan Simbolis Sertifikat WBK</h3>
                    <div class="timeline-description">
                        <i class="fas fa-certificate"></i>
                        Penyerahan sertifikat dan PIN WBK seluruh pegawai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-award"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">16 Desember 2025</div>
                    <h3 class="timeline-title">Bimbingan Teknis Kepegawaian</h3>
                    <div class="timeline-description">
                        <i class="fas fa-graduation-cap"></i>
                        Sekretaris dan Kasubbag ikuti Bimtek Biro Kepegawaian MA RI
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">16 Desember 2025</div>
                    <h3 class="timeline-title">Evaluasi Semester II Tim Percepatan Penurunan Stunting</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua hadiri evaluasi TP3S Kabupaten HSU
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-child"></i>
                    </div>
                </div>
            </div>

            <!-- 17-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card monitoring">
                    <div class="timeline-date">17 Desember 2025</div>
                    <h3 class="timeline-title">Monitoring dan Evaluasi Posbakum Triwulan IV</h3>
                    <div class="timeline-description">
                        <i class="fas fa-chart-line"></i>
                        Rapat evaluasi triwulan Posbakum
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card monitoring">
                    <div class="timeline-date">17 Desember 2025</div>
                    <h3 class="timeline-title">Monitoring dan Evaluasi dengan PT POS</h3>
                    <div class="timeline-description">
                        <i class="fas fa-truck"></i>
                        Rapat evaluasi kerjasama dengan PT POS
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                </div>
            </div>

            <!-- 18-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">18 Desember 2025</div>
                    <h3 class="timeline-title">Sosialisasi Fitur E-SAKIP</h3>
                    <div class="timeline-description">
                        <i class="fas fa-laptop"></i>
                        Kasubbag PTIP dan staf optimalisasi SAKIP
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card meeting year-end-highlight">
                    <div class="timeline-date">18 Desember 2025</div>
                    <h3 class="timeline-title">Tim Penyusunan Laporan Pelaksanaan Kegiatan Tahun 2025</h3>
                    <div class="timeline-description">
                        <i class="fas fa-file-alt"></i>
                        Rapat penyusunan laporan tahunan 2025
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-folder-open"></i>
                    </div>
                </div>
            </div>

            <!-- 19-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">19 Desember 2025</div>
                    <h3 class="timeline-title">Jumat Sehat - Senam Bersama</h3>
                    <div class="timeline-description">
                        <i class="fas fa-running"></i>
                        PA Amuntai gelar Jumat sehat dengan senam bersama
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                </div>
            </div>

            <!-- 22-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">22 Desember 2025</div>
                    <h3 class="timeline-title">Upacara Bela Negara di Pemkab HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris hadiri upacara bela negara
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card monitoring">
                    <div class="timeline-date">22 Desember 2025</div>
                    <h3 class="timeline-title">Diskusi Monitoring dan Evaluasi Perencanaan</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris dan tim dengan PTA Banjarmasin - Anggaran 2026
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">22 Desember 2025</div>
                    <h3 class="timeline-title">Seminar Hasil Aktualisasi Latsar CPNS Gelombang II</h3>
                    <div class="timeline-description">
                        <i class="fas fa-graduation-cap"></i>
                        6 CPNS PA Amuntai berhasil menyelesaikan seminar
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">22 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Penentuan Uraian Tugas PPPK</h3>
                    <div class="timeline-description">
                        <i class="fas fa-tasks"></i>
                        Penentu arah kinerja awal tahun PPPK
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                </div>
            </div>

            <!-- 23-12-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">23 Desember 2025</div>
                    <h3 class="timeline-title">Sosialisasi Penyusunan Analisis Jabatan dan Beban Kerja</h3>
                    <div class="timeline-description">
                        <i class="fas fa-chart-bar"></i>
                        Kasubbag Kepegawaian OTL - Pemetaan organisasi
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                </div>
            </div>

            <!-- 24-12-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting year-end-highlight">
                    <div class="timeline-date">24 Desember 2025</div>
                    <h3 class="timeline-title">Rapat Penyusunan Program Kerja</h3>
                    <div class="timeline-description">
                        <i class="fas fa-clipboard-check"></i>
                        Penyusunan program kerja tahun mendatang
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-calendar-plus"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">24 Desember 2025</div>
                    <h3 class="timeline-title">Zoom Pengelolaan Aset dengan PTA Banjarmasin</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Sekretaris dan Kasubbag Umum dan Keuangan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-building"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">24 Desember 2025</div>
                    <h3 class="timeline-title">Rapat dengan Tim Penyedia Outsourcing</h3>
                    <div class="timeline-description">
                        <i class="fas fa-handshake"></i>
                        Pembahasan layanan outsourcing
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">24 Desember 2025</div>
                    <h3 class="timeline-title">Narasumber: Mewujudkan Data Kependudukan</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua jadi narasumber - Implementasi visi HSU Bangkit
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-microphone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const timelineItems = document.querySelectorAll('.timeline-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    timelineItems.forEach(item => {
                        if (filter === 'all') {
                            item.style.display = 'block';
                        } else {
                            const card = item.querySelector('.timeline-card');
                            if (card.classList.contains(filter)) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        }
                    });
                });
            });

            // Add enhanced hover effects
            const cards = document.querySelectorAll('.timeline-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                    this.style.boxShadow = '0 1.5rem 3rem rgba(220, 38, 38, 0.25)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                    this.style.boxShadow = '0 0.5rem 1rem rgba(220, 38, 38, 0.15)';
                });
            });

            // Add year-end celebration animation
            const yearEndCards = document.querySelectorAll('.year-end-highlight');
            yearEndCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.background = 'linear-gradient(135deg, #fef2f2, #fee2e2, #fecaca)';
                    this.style.borderColor = '#dc2626';
                    this.style.transform = 'translateY(-12px) scale(1.03)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.background = 'linear-gradient(135deg, #fef2f2, #fee2e2)';
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
</body>

</html>