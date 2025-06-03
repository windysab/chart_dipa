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
            <h2>PENGADILAN AGAMA AMUNTAI</h2>
        </div>

        <div class="month-selector">
            <button class="month-btn">April 2025</button>
            <button class="month-btn active">Mei 2025</button>
            <button class="month-btn">Juni 2025</button>
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
            <!-- 02-05-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card meeting">
                    <div class="timeline-date">02 Mei 2025</div>
                    <h3 class="timeline-title">Sekretaris Pengadilan Agama Amuntai menghadiri Rapat Persiapan Hari Jadi ke-73 Kabupaten HSU</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula KH. Dr. Idham Khalid, Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 03-05-2025 -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">03 Mei 2025</div>
                    <h3 class="timeline-title">Sekretaris PA Amuntai menghadiri Rapat Senat Terbuka STAI Rakha Amuntai dalam rangka Wisuda Sarjana</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula STAI Rakha Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>

            <!-- 05-05-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">05 Mei 2025</div>
                    <h3 class="timeline-title">Penandatanganan penambahan daya listrik gedung kantor untuk Tahun Anggaran 2025</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                </div>
            </div>

            <!-- 06-05-2025 Upacara -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">06 Mei 2025</div>
                    <h3 class="timeline-title">Sekretaris PA Amuntai menghadiri upacara Peringatan Hari Pendidikan Nasional Tahun 2025</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Halaman Kantor Bupati Hulu Sungai Utara</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 06-05-2025 Sosialisasi -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">06 Mei 2025</div>
                    <h3 class="timeline-title">Panitera PA Amuntai hadir sebagai narasumber dalam kegiatan sosialisasi bersama Disduk Capil Balangan</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor Disduk Capil Kabupaten Balangan</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- 06-05-2025 Kunjungan -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">06 Mei 2025</div>
                    <h3 class="timeline-title">PA Amuntai menerima kunjungan YM Ketua PTA Banjarmasin dan jajaran pejabat</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 07-05-2025 Kunjungan -->
            <div class="timeline-item left">
                <div class="timeline-card coordination">
                    <div class="timeline-date">07 Mei 2025</div>
                    <h3 class="timeline-title">PA Amuntai menerima kunjungan Sekretaris PTA Banjarmasin</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Media Center PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- 07-05-2025 HUT -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">07 Mei 2025</div>
                    <h3 class="timeline-title">Ketua PA Amuntai menghadiri Puncak Peringatan HUT ke-73 Kabupaten HSU</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Lapangan Utama Kota Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                </div>
            </div>

            <!-- 08-05-2025 Sidang -->
            <div class="timeline-item left">
                <div class="timeline-card other">
                    <div class="timeline-date">08 Mei 2025</div>
                    <h3 class="timeline-title">PA Amuntai menggelar sidang itsbat nikah terpadu untuk kepastian hukum pasangan suami istri</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula Kecamatan Lampihong, Kabupaten Balangan</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
            </div>

            <!-- 08-05-2025 Sumpah -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">08 Mei 2025</div>
                    <h3 class="timeline-title">PA Amuntai menggelar acara pengambilan sumpah/janji Pegawai Negeri Sipil (PNS)</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Sidang Utama PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-book"></i>
                    </div>
                </div>
            </div>

            <!-- 15-05-2025 -->
            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">15 Mei 2025</div>
                    <h3 class="timeline-title">Ketua PA Amuntai bersama Wakil Ketua, Hakim, dan Panitera mengikuti Pembinaan oleh Ketua Muda Agama MA RI</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Pengadilan Tinggi Agama Banjarmasin</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                </div>
            </div>

            <!-- Remaining items truncated for brevity -->
            <div class="timeline-item right">
                <div class="timeline-card other">
                    <div class="timeline-date">22 Mei 2025</div>
                    <h3 class="timeline-title">PA Amuntai menggelar kegiatan itsbat nikah terpadu untuk layanan hukum masyarakat</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula Serbaguna Kecamatan Lampihong, Kabupaten Balangan</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">23 Mei 2025</div>
                    <h3 class="timeline-title">PA Amuntai mengikuti Bimbingan Teknis Nasional bertema "Kaum Rentan Berhadapan dengan Hukum"</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Secara Daring (Online)</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">26 Mei 2025</div>
                    <h3 class="timeline-title">Ketua PA Amuntai menghadiri acara perpisahan siswa dan siswi Pesantren Ihya Ulumuddin</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Pesantren Ihya Ulumuddin Nur Sufiiyah Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card training">
                    <div class="timeline-date">27 Mei 2025</div>
                    <h3 class="timeline-title">Panitera Muda ikuti Sosialisasi Pelaksanaan Itsbat Nikah dan Penerbitan Salinan Putusan Elektronik</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ruang Media Center PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">27 Mei 2025</div>
                    <h3 class="timeline-title">Sekretaris PA Amuntai hadiri Rapat Paripurna DPRD Kabupaten HSU</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula DPRD Kabupaten Hulu Sungai Utara</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-comments"></i>
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