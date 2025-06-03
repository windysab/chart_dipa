<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan PA Amuntai</title>
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
            <p>PENGADILAN AGAMA AMUNTAI</p>
        </header>

        <div class="month-selection">
            <button class="month-btn">April 2025</button>
            <button class="month-btn active">Mei 2025</button>
            <button class="month-btn">Juni 2025</button>
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
        </div>

        <div class="calendar-grid">
            <!-- 02 Mei 2025 -->
            <div class="date-card" data-date="2025-05-02">
                <div class="date-header">
                    Jumat, 02 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="meeting">
                            <span class="event-type meeting">Rapat</span>
                            <h3 class="event-title">Rapat Persiapan Hari Jadi ke-73 Kabupaten Hulu Sungai Utara (HSU)</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula KH. Dr. Idham Khalid, Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 03 Mei 2025 -->
            <div class="date-card" data-date="2025-05-03">
                <div class="date-header">
                    Sabtu, 03 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Acara</span>
                            <h3 class="event-title">Menghadiri Wisuda Sarjana Tahun Akademik 2024/2025 STAI Rasyidiyah Khalidiyah Amuntai</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula STAI Rakha Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>08:00 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 05 Mei 2025 -->
            <div class="date-card" data-date="2025-05-05">
                <div class="date-header">
                    Senin, 05 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="meeting">
                            <span class="event-type meeting">Administratif</span>
                            <h3 class="event-title">Penandatanganan penambahan daya listrik gedung kantor untuk Tahun Anggaran 2025</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>10:00 - 11:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 06 Mei 2025 -->
            <div class="date-card" data-date="2025-05-06">
                <div class="date-header">
                    Selasa, 06 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Upacara</span>
                            <h3 class="event-title">Upacara Peringatan Hari Pendidikan Nasional Tahun 2025</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Halaman Kantor Bupati Hulu Sungai Utara</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>08:00 - 09:30 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="training">
                            <span class="event-type training">Sosialisasi</span>
                            <h3 class="event-title">Sosialisasi bersama Dinas Kependudukan dan Pencatatan Sipil Kabupaten Balangan</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Kantor Disdukcapil Kabupaten Balangan</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>13:00 - 15:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="visit">
                            <span class="event-type visit">Kunjungan</span>
                            <h3 class="event-title">Kunjungan Ketua PTA Banjarmasin dan jajaran</h3>
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

            <!-- 07 Mei 2025 -->
            <div class="date-card" data-date="2025-05-07">
                <div class="date-header">
                    Rabu, 07 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="visit">
                            <span class="event-type visit">Kunjungan</span>
                            <h3 class="event-title">Kunjungan Sekretaris PTA Banjarmasin</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Media Center PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 11:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Peringatan</span>
                            <h3 class="event-title">Menghadiri Puncak Peringatan HUT ke-73 Kabupaten Hulu Sungai Utara</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Lapangan Utama Kota Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>13:30 - 16:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 08 Mei 2025 -->
            <div class="date-card" data-date="2025-05-08">
                <div class="date-header">
                    Kamis, 08 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="service">
                            <span class="event-type service">Layanan Hukum</span>
                            <h3 class="event-title">Sidang Itsbat Nikah Terpadu untuk masyarakat Kecamatan Lampihong</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula Kecamatan Lampihong, Kabupaten Balangan</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 14:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Acara Internal</span>
                            <h3 class="event-title">Pengambilan Sumpah/Janji Pegawai Negeri Sipil (PNS)</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Sidang Utama PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>10:00 - 11:30 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 15 Mei 2025 -->
            <div class="date-card" data-date="2025-05-15">
                <div class="date-header">
                    Kamis, 15 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="training">
                            <span class="event-type training">Pembinaan</span>
                            <h3 class="event-title">Pembinaan oleh Ketua Muda Agama Mahkamah Agung Republik Indonesia</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Pengadilan Tinggi Agama Banjarmasin</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 15:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 22 Mei 2025 -->
            <div class="date-card" data-date="2025-05-22">
                <div class="date-header">
                    Kamis, 22 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="service">
                            <span class="event-type service">Layanan Hukum</span>
                            <h3 class="event-title">Sidang Itsbat Nikah Terpadu untuk masyarakat Kecamatan Lampihong</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula Serbaguna Kecamatan Lampihong, Kabupaten Balangan</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 14:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 23 Mei 2025 -->
            <div class="date-card" data-date="2025-05-23">
                <div class="date-header">
                    Jumat, 23 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="training">
                            <span class="event-type training">Bimtek</span>
                            <h3 class="event-title">Bimbingan Teknis Nasional bertema "Kaum Rentan Berhadapan dengan Hukum"</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Secara Daring (Online)</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>08:30 - 12:00 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 26 Mei 2025 -->
            <div class="date-card" data-date="2025-05-26">
                <div class="date-header">
                    Senin, 26 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="ceremony">
                            <span class="event-type ceremony">Acara</span>
                            <h3 class="event-title">Menghadiri perpisahan siswa dan siswi Pesantren Ihya Ulumuddin Nur Sufiiyah</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Pesantren Ihya Ulumuddin Nur Sufiiyah Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 11:30 WITA</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 27 Mei 2025 -->
            <div class="date-card" data-date="2025-05-27">
                <div class="date-header">
                    Selasa, 27 Mei 2025
                </div>
                <div class="date-body">
                    <ul class="event-list">
                        <li class="event-item" data-type="training">
                            <span class="event-type training">Sosialisasi</span>
                            <h3 class="event-title">Sosialisasi Pelaksanaan Itsbat Nikah dan Penerbitan Putusan Elektronik</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Ruang Media Center PA Amuntai</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>09:00 - 12:00 WITA</span>
                            </div>
                        </li>
                        <li class="event-item" data-type="meeting">
                            <span class="event-type meeting">Rapat</span>
                            <h3 class="event-title">Rapat Paripurna DPRD Kabupaten HSU - Penyampaian Jawaban Kepala Daerah</h3>
                            <div class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Aula DPRD Kabupaten Hulu Sungai Utara</span>
                            </div>
                            <div class="event-time">
                                <i class="far fa-clock"></i>
                                <span>13:30 - 16:00 WITA</span>
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
                    if (this.textContent !== 'Mei 2025') {
                        alert(`Data untuk ${this.textContent} akan dimuat`);
                    }
                });
            });
        });
    </script>
</body>

</html>