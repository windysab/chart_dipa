<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kerja Pimpinan November 2025 - PA Amuntai</title>
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

        .month-indicator {
            display: inline-block;
            background: linear-gradient(135deg, var(--primary-color), var(--info-color));
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 2rem;
            box-shadow: var(--card-shadow);
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
            color: rgba(13, 110, 253, 0.15);
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
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>AGENDA KERJA PIMPINAN</h1>
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
            <div class="month-indicator">
                <i class="fas fa-calendar-alt"></i> November 2025
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
                <i class="fas fa-chalkboard-teacher"></i> Bimtek/Pelatihan
            </button>
            <button class="filter-btn" data-filter="coordination">
                <i class="fas fa-handshake"></i> Koordinasi
            </button>
        </div>

        <div class="timeline">
            <!-- 03-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">03 November 2025</div>
                    <h3 class="timeline-title">Penyambutan Mahasiswa Magang STAI Rakha Amuntai Kelompok 4</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 03-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">03 November 2025</div>
                    <h3 class="timeline-title">Pembacaan Burdah & Perpisahan Mahasiswa Magang STAI Rakha Amuntai Kelompok 3</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                </div>
            </div>

            <!-- 04-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">04 November 2025</div>
                    <h3 class="timeline-title">Briefing Selasa PTSP (BARISTA)</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 05-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">05 November 2025</div>
                    <h3 class="timeline-title">BRASTAGI PA Amuntai</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 05-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">05 November 2025</div>
                    <h3 class="timeline-title">Rapat Terbatas Bagian Keuangan PA Amuntai</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 06-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">06 November 2025</div>
                    <h3 class="timeline-title">Rapat Terbatas Bagian Kesekretariatan PA Amuntai</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Sekretaris
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 06-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">06 November 2025</div>
                    <h3 class="timeline-title">Rapat Terbatas Kepaniteraan membahas pengoptimalan penggunaan Sistem Informasi Penelusuran Perkara (SIPP)</h3>
                    <div class="timeline-description">
                        <i class="fas fa-building"></i>
                        Kepaniteraan Pengadilan Agama Amuntai Kelas IB
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 10-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">10 November 2025</div>
                    <h3 class="timeline-title">Upacara Hari Pahlawan ke-80 Tahun 2025</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 10-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">10 November 2025</div>
                    <h3 class="timeline-title">PA Amuntai Hadiri Rapat Paripurna DPRD Kabupaten HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diwakili oleh Sekretaris PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 10-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">10 November 2025</div>
                    <h3 class="timeline-title">Rapat Terbatas Pimpinan dan Para Hakim</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Pimpinan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 11-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">11 November 2025</div>
                    <h3 class="timeline-title">PA Amuntai Ikuti Sosialisasi dan Penandatanganan MoU IKAHI – BTN</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai dan Hakim
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 12-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">12 November 2025</div>
                    <h3 class="timeline-title">BRASTAGI (Briefing Setiap Rabu Pagi)</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Pimpinan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 12-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">12 November 2025</div>
                    <h3 class="timeline-title">Talkshow Pencegahan P2GP dan Perkawinan Anak secara Daring</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Pimpinan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 12-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">12 November 2025</div>
                    <h3 class="timeline-title">Pembekalan Keperkaraan & Mediasi kepada Mahasiswa STAI Rakha Amuntai</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Wakil Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 13-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">13 November 2025</div>
                    <h3 class="timeline-title">Khataman Al-Qur'an di Masjid Raya At-Taqwa Amuntai bersama Forkopimda Kabupaten HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                </div>
            </div>

            <!-- 13-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">13 November 2025</div>
                    <h3 class="timeline-title">Rapat Bulanan & Rapat Tinjauan Manajemen (RTM) PA Amuntai – November 2025</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Ketua PA Amuntai Bersama Wakil Ketua
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 14-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">14 November 2025</div>
                    <h3 class="timeline-title">Rapat Pembahasan Target Renstra 2025</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Pimpinan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 19-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">19 November 2025</div>
                    <h3 class="timeline-title">Sosialisasi Anti Korupsi dan Gratifikasi</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Dipimpin Wakil Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>
            </div>

            <!-- 19-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">19 November 2025</div>
                    <h3 class="timeline-title">PKS IKAHI–BSI dan Sosialisasi Hunian Hakim</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Wakil Ketua & Para Hakim
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 20-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">20 November 2025</div>
                    <h3 class="timeline-title">Pembekalan Keperkaraan untuk Mahasiswa Magang STAI Rakha</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 23-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">23 November 2025</div>
                    <h3 class="timeline-title">Milad ke-113 Muhammadiyah & 1 Abad Muhammadiyah Alabio</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                </div>
            </div>

            <!-- 24-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">24 November 2025</div>
                    <h3 class="timeline-title">Acara Wisuda XXXVI TKA/TPA HSU</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>

            <!-- 24-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">24 November 2025</div>
                    <h3 class="timeline-title">Sosialisasikan Pembaruan SIPP 6.0.1 & Fitur Smart Majelis</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Pimpinan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>

            <!-- 24-11-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">24 November 2025</div>
                    <h3 class="timeline-title">Sosialisasi & Penandatanganan Rencana Strategis 2025-2029</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Pimpinan
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                </div>
            </div>

            <!-- 26-11-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">26 November 2025</div>
                    <h3 class="timeline-title">Rapat Paripurna DPRD Kabupaten HSU - Rancangan APBD Tahun Anggaran 2026</h3>
                    <div class="timeline-description">
                        <i class="fas fa-user-tie"></i>
                        Diikuti Ketua PA Amuntai
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
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

            // Add smooth scrolling effect
            const cards = document.querySelectorAll('.timeline-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>

</html>
