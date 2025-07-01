<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Satker PA Amuntai - Juni 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #016936;
            --primary-light: #e3f2ed;
            --primary-dark: #004d27;
            --secondary-color: #f8c630;
            --secondary-light: #fff8e6;
            --secondary-dark: #d9a82a;
            --dark-color: #333333;
            --light-color: #ffffff;
            --gray-color: #f4f6f9;
            --text-color: #4a4a4a;
            --border-color: #e5e5e5;
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 8px 16px rgba(0, 0, 0, 0.1);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            background-color: var(--gray-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .page-header {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        .page-header h1 {
            font-size: 2.2rem;
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
        }

        .page-header p {
            font-size: 1.1rem;
            color: var(--text-color);
            opacity: 0.8;
        }

        .month-selection {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .month-btn {
            padding: 0.6rem 1.2rem;
            background-color: var(--light-color);
            border: 2px solid var(--border-color);
            border-radius: var(--border-radius);
            font-weight: 600;
            color: var(--text-color);
            cursor: pointer;
            transition: var(--transition);
        }

        .month-btn:hover {
            background-color: var(--primary-light);
            border-color: var(--primary-color);
            color: var(--primary-dark);
        }

        .month-btn.active {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--light-color);
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .date-card {
            background-color: var(--light-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .date-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-5px);
        }

        .date-header {
            background-color: var(--primary-color);
            color: var(--light-color);
            padding: 1rem;
            text-align: center;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .date-body {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .event-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .event-item {
            margin-bottom: 1.2rem;
            padding-bottom: 1.2rem;
            border-bottom: 1px solid var(--border-color);
        }

        .event-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .event-type {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .event-type.ceremony {
            background-color: var(--secondary-light);
            color: var(--secondary-dark);
        }

        .event-type.meeting {
            background-color: #e3f2fd;
            color: #1976d2;
        }

        .event-type.service {
            background-color: #e8f5e9;
            color: #2e7d32;
        }

        .event-type.training {
            background-color: #fff3e0;
            color: #e65100;
        }

        .event-type.visit {
            background-color: #f3e5f5;
            color: #7b1fa2;
        }

        .event-type.briefing {
            background-color: #ffebee;
            color: #c62828;
        }

        .event-type.coordination {
            background-color: #e0f2f1;
            color: #00695c;
        }

        .event-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .event-location {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-color);
            opacity: 0.8;
        }

        .event-location i {
            color: var(--primary-color);
            font-size: 1rem;
        }

        .event-time {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            color: var(--text-color);
            opacity: 0.8;
            margin-top: 0.5rem;
        }

        .event-time i {
            color: var(--primary-color);
            font-size: 1rem;
        }

        .filter-section {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin-bottom: 2rem;
            justify-content: center;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            background-color: var(--light-color);
            border: none;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-color);
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .filter-btn:hover {
            background-color: var(--primary-light);
        }

        .filter-btn.active {
            background-color: var(--primary-color);
            color: var(--light-color);
        }

        .filter-btn i {
            font-size: 1rem;
        }

        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            background-color: var(--light-color);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-sm);
        }

        .empty-state i {
            font-size: 3rem;
            color: var(--primary-light);
            margin-bottom: 1rem;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .empty-state p {
            color: var(--text-color);
            opacity: 0.7;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .page-header h1 {
                font-size: 1.8rem;
            }

            .calendar-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="page-header">
            <h1>AGENDA KEGIATAN SATKER</h1>
            <p>PENGADILAN AGAMA AMUNTAI - JUNI 2025</p>
        </header>

        <div class="month-selection">
            <button class="month-btn">April 2025</button>
            <button class="month-btn">Mei 2025</button>
            <button class="month-btn active">Juni 2025</button>
        </div>

        <div class="filter-section">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-list"></i> Semua Kegiatan
            </button>
            <button class="filter-btn" data-filter="ceremony">
                <i class="fas fa-certificate"></i> Upacara & Peringatan
            </button>
            <button class="filter-btn" data-filter="meeting">
                <i class="fas fa-handshake"></i> Rapat & Koordinasi
            </button>
            <button class="filter-btn" data-filter="service">
                <i class="fas fa-gavel"></i> Layanan Hukum
            </button>
            <button class="filter-btn" data-filter="training">
                <i class="fas fa-graduation-cap"></i> Pelatihan & Bimtek
            </button>
            <button class="filter-btn" data-filter="visit">
                <i class="fas fa-exchange-alt"></i> Kunjungan
            </button>
            <button class="filter-btn" data-filter="briefing">
                <i class="fas fa-bullhorn"></i> Briefing
            </button>
        </div>

        <div class="calendar-grid">
            <!-- 02 Juni 2025 -->
            <div class="date-card" data-date="2025-06-02">
                <div class="date-header">
                    Senin, 02 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Upacara</span>
                            <h3 class="event-title">Upacara Peringatan Hari Lahir Pancasila 2025</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Lokasi Upacara</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>08:00 - 09:30 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="visit">
                            <span class="event-type visit">Kunjungan</span>
                            <h3 class="event-title">Menyambut kedatangan Calon Pegawai Negeri Sipil (CPNS) Mahkamah Agung RI Tahun 2024</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>10:00 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 04 Juni 2025 -->
            <div class="date-card" data-date="2025-06-04">
                <div class="date-header">
                    Rabu, 04 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="briefing">
                            <span class="event-type briefing">Briefing</span>
                            <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>07:30 - 08:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 10 Juni 2025 -->
            <div class="date-card" data-date="2025-06-10">
                <div class="date-header">
                    Selasa, 10 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="meeting">
                            <span class="event-type meeting">Rapat</span>
                            <h3 class="event-title">Rapat Paripurna DPRD Kabupaten Hulu Sungai Utara tentang Penyampaian Jawaban Kepala Daerah Atas Pemandangan Umum Fraksi DPRD Terhadap 4 Buah Rancangan Peraturan Daerah</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula DPRD Kab. HSU</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 11 Juni 2025 -->
            <div class="date-card" data-date="2025-06-11">
                <div class="date-header">
                    Rabu, 11 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="briefing">
                            <span class="event-type briefing">Briefing</span>
                            <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>07:30 - 08:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Juni 2025 (No specific date) -->
            <div class="date-card" data-date="2025-06-12">
                <div class="date-header">
                    Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="coordination">
                            <span class="event-type coordination">Koordinasi</span>
                            <h3 class="event-title">Rapat Koordinasi tim kesekretariatan Pengadilan Agama Amuntai Kelas IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 11:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="visit">
                            <span class="event-type visit">Alih Tugas</span>
                            <h3 class="event-title">Pengantar Alih Tugas YM Wakil Ketua Bapak H.Abdurrahman, S.Ag., M.H. dan Hakim Ibu Rabiatul Adawiah, S.Ag</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>10:00 - 12:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="meeting">
                            <span class="event-type meeting">Rapat</span>
                            <h3 class="event-title">YM Ketua Pengadilan Agama Amuntai Kelas IB Bapak Bahrul Maji, S.H.I. hadiri Rapat Paripurna DPRD Kab. Hulu Sungai Utara</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula DPRD Kab. HSU</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>13:30 - 16:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="visit">
                            <span class="event-type visit">Acara</span>
                            <h3 class="event-title">Menghadiri acara Panen Simpedes yang diselenggarakan oleh Kantor BRI Cabang Amuntai</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor BRI Cabang Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 11:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 13 Juni 2025 -->
            <div class="date-card" data-date="2025-06-13">
                <div class="date-header">
                    Jumat, 13 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Apel</span>
                            <h3 class="event-title">Pelaksanaan Apel Sore Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>16:00 - 16:30 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 16 Juni 2025 -->
            <div class="date-card" data-date="2025-06-16">
                <div class="date-header">
                    Senin, 16 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="briefing">
                            <span class="event-type briefing">Briefing</span>
                            <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>07:30 - 08:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 19 Juni 2025 -->
            <div class="date-card" data-date="2025-06-19">
                <div class="date-header">
                    Kamis, 19 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="training">
                            <span class="event-type training">Sosialisasi</span>
                            <h3 class="event-title">Sosialisasi Aplikasi EAC (Elektronik Akta Cerai) yang diselenggarakan secara virtual oleh Dirjen Badilag Mahkamah Agung RI</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Secara Virtual (Online)</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 20 Juni 2025 -->
            <div class="date-card" data-date="2025-06-20">
                <div class="date-header">
                    Jumat, 20 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Pelantikan</span>
                            <h3 class="event-title">Pelantikan YM Ibu Hj. Mursidah, S.Ag., M.H. sebagai Wakil Ketua Pengadilan Agama Amuntai Kelas IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>10:00 - 11:30 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Apel</span>
                            <h3 class="event-title">Pelaksanaan Apel Sore Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>16:00 - 16:30 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 24 Juni 2025 -->
            <div class="date-card" data-date="2025-06-24">
                <div class="date-header">
                    Selasa, 24 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="service">
                            <span class="event-type service">Mediasi</span>
                            <h3 class="event-title">Mediasi perkara perceraian dengan Nomor 180/Pdt.G/2025/PA.Amt</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 25 Juni 2025 -->
            <div class="date-card" data-date="2025-06-25">
                <div class="date-header">
                    Rabu, 25 Juni 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="briefing">
                            <span class="event-type briefing">Briefing</span>
                            <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai IB</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>07:30 - 08:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="service">
                            <span class="event-type service">Sidang</span>
                            <h3 class="event-title">Sidang pengucapan putusan banding secara virtual untuk perkara Nomor 32/Pdt.G/2025/PTA.Bjm</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Secara Virtual (Online)</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>10:00 - 12:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="visit">
                            <span class="event-type visit">Kunjungan</span>
                            <h3 class="event-title">Kunjungan Ketua Badan Pengawas Pemilu Bapak Syardani beserta Rombongan dalam Rangka Koordinasi dan Perkuat Sinergi antar instansi</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>14:00 - 16:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const dateCards = document.querySelectorAll('.date-card');
            const eventItems = document.querySelectorAll('.event-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filter = this.getAttribute('data-filter');

                    // Handle filtering
                    if (filter === 'all') {
                        // Show all events
                        eventItems.forEach(item => {
                            item.style.display = 'block';
                        });
                        // Show all date cards
                        dateCards.forEach(card => {
                            card.style.display = 'flex';
                        });
                    } else {
                        // Hide all events first
                        eventItems.forEach(item => {
                            if (item.getAttribute('data-type') === filter) {
                                item.style.display = 'block';
                            } else {
                                item.style.display = 'none';
                            }
                        });

                        // Hide date cards that don't have visible events
                        dateCards.forEach(card => {
                            const visibleEvents = card.querySelectorAll(`.event-item[data-type="${filter}"]`);
                            if (visibleEvents.length > 0) {
                                card.style.display = 'flex';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    }
                });
            });

            // Month selection functionality
            const monthButtons = document.querySelectorAll('.month-btn');

            monthButtons.forEach(button => {
                button.addEventListener('click', function() {
                    monthButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // In a real application, this would load the data for the selected month
                    // For demo purposes, just show an alert
                    if (this.textContent !== 'Juni 2025') {
                        alert(`Data untuk ${this.textContent} akan dimuat`);
                    }
                });
            });
        });
    </script>
</body>

</html> 