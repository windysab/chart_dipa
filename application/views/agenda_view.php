<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kerja Pimpinan - PA Amuntai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --success-color: #198754;
            --info-color: #0dcaf0;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --white-color: #ffffff;
            --body-bg: #f5f8fa;
            --card-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
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
            background-color: var(--body-bg);
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

        .month-selector {
            display: flex;
            justify-content: center;
            margin-bottom: 2rem;
            gap: 0.5rem;
        }

        .month-btn {
            padding: 0.75rem 1.5rem;
            background-color: var(--white-color);
            border: 1px solid var(--primary-color);
            border-radius: var(--border-radius);
            color: var(--primary-color);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .month-btn:hover {
            background-color: var(--primary-color);
            color: var(--white-color);
        }

        .month-btn.active {
            background-color: var(--primary-color);
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
            background-color: var(--primary-color);
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
            background-color: var(--white-color);
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            transition: var(--transition);
            position: relative;
        }

        .timeline-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
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

        .timeline-card.other {
            border-left: 5px solid var(--secondary-color);
        }

        .timeline-date {
            display: inline-block;
            padding: 0.35rem 0.75rem;
            background-color: var(--primary-color);
            color: var(--white-color);
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .timeline-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark-color);
            line-height: 1.4;
        }

        .timeline-location {
            display: flex;
            align-items: center;
            font-size: 0.95rem;
            color: var(--secondary-color);
        }

        .timeline-location i {
            margin-right: 0.5rem;
            color: var(--primary-color);
        }

        .timeline-icon {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            font-size: 1.5rem;
            color: rgba(13, 110, 253, 0.15);
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
            border: none;
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
        }

        .filter-btn.active {
            background-color: var(--primary-color);
            color: var(--white-color);
        }

        .filter-btn.active i {
            color: var(--white-color);
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
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>AGENDA KERJA PIMPINAN</h1>
            <h2>PENGADILAN AGAMA AMUNTAI TAHUN 2026</h2>
        </div>

        <div class="month-selector">
            <button class="month-btn">Desember 2025</button>
            <button class="month-btn active">Januari 2026</button>
            <button class="month-btn">Februari 2026</button>
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
        </div>

        <div class="timeline">
            <!-- Kegiatan sesuai gambar yang diberikan -->
            <!-- Item 1 -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">01 Januari 2026</div>
                    <h3 class="timeline-title">Hukum yang Membumi, Keadilan yang Mengabdi: Kolaborasi Pengadilan Agama Amuntai Kelas IB dan LBH Peduli Hukum dan Keadilan Tahun 2026</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Pengadilan Agama Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">02 Januari 2026</div>
                    <h3 class="timeline-title">Belajar Keadilan dari Dekat: PA Amuntai Kelas IB Anugerahkan Sertifikat Magang</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">03 Januari 2026</div>
                    <h3 class="timeline-title">Pengadilan Agama Amuntai Ikut Sosialisasi Asuransi Mandiri Inhealth bagi Anggota IKAHI Tahun 2026</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Hotel Grand Artos, Magelang</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">04 Januari 2026</div>
                    <h3 class="timeline-title">Seluruh Aparatur PA Amuntai Laksanakan Pendatanganan Perjanjian Kinerja, Pakta Integritas, dan Komitmen Bersama</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                </div>
            </div>

            <!-- Item 5 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">05 Januari 2026</div>
                    <h3 class="timeline-title">Pengadilan Agama Amuntai Menerima Mahasiswa Magang Akademik dari UIN Palangkaraya</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>

            <!-- Item 6 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">06 Januari 2026</div>
                    <h3 class="timeline-title">Ketua Pengadilan Agama Amuntai Hadiri Pelantikan dan Pengambilan Sumpah/Janji Pejabat di Lingkungan Pemkab HSU</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula Pendopo Bupati HSU</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
            </div>

            <!-- Item 7 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">07 Januari 2026</div>
                    <h3 class="timeline-title">Ketua Pengadilan Agama Amuntai Hadiri Kegiatan Jalan Sehat Kerukunan HAB Kemenag RI ke-80 Tingkat Kabupaten HSU</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Lapangan Utama Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-running"></i>
                    </div>
                </div>
            </div>

            <!-- Item 8 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">08 Januari 2026</div>
                    <h3 class="timeline-title">Kesekretariatan Pengadilan Agama Amuntai Gelar Rapat Terbatas Bahas Perencanaan Anggaran Tahun Anggaran 2026</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Rapat Sekretaris PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                </div>
            </div>

            <!-- Item 9 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">09 Januari 2026</div>
                    <h3 class="timeline-title">Sekretaris Pengadilan Agama Amuntai Hadiri Upacara Peringatan Hari Amal Bakti ke-80 Tahun 2026</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kemenag Kabupaten HSU</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- Item 10 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">10 Januari 2026</div>
                    <h3 class="timeline-title">Pengadilan Agama Amuntai Ikut Sosialisasi Revisi Anggaran dan Juknis Pembayaran Gaji Hakim</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Hotel Sahid Jaya, Jakarta</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
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
                        const card = item.querySelector('.timeline-card');
                        if (filter === 'all' || card.classList.contains(filter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Month selector functionality
            const monthButtons = document.querySelectorAll('.month-btn');

            monthButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    monthButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    // In a real application, this would load different data
                    // For demo purposes, we just show an alert
                    if (!this.classList.contains('active-loaded')) {
                        alert(`Data untuk ${this.textContent} akan dimuat`);
                    }
                });
            });
        });
    </script>
</body>

</html>