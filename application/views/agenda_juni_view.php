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

        .timeline-card.briefing {
            border-left: 5px solid var(--danger-color);
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
            <button class="month-btn">Mei 2025</button>
            <button class="month-btn active">Juni 2025</button>
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
            <!-- 02-06-2025 Upacara Pancasila -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">02 Juni 2025</div>
                    <h3 class="timeline-title">Upacara Peringatan Hari Lahir Pancasila 2025</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Lokasi Upacara</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
            </div>

            <!-- 02-06-2025 CPNS -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">02 Juni 2025</div>
                    <h3 class="timeline-title">Ketua Pengadilan Agama Amuntai Kelas IB, YM Bapak Bahrul Maji, S.H.I., didampingi Wakil Ketua Bapak H. Abdurrahman, S.Ag., M.H., Pejabat Fungsional dan Struktural, menyambut hangat kedatangan Calon Pegawai Negeri Sipil (CPNS) Mahkamah Agung RI Tahun 2024 ditempatkan di Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                </div>
            </div>

            <!-- 04-06-2025 Briefing -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">04 Juni 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 10-06-2025 Rapat Paripurna -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">10 Juni 2025</div>
                    <h3 class="timeline-title">Sekretaris Pengadilan Agama Amuntai Kelas IB Bapak Salmani, S.Ag. Wakili Ketua hadiri Rapat Paripurna DPRD Kabupaten Hulu Sungai Utara tentang Penyampaian Jawaban Kepala Daerah Atas Pemandangan Umum Fraksi DPRD Terhadap 4 Buah Rancangan Peraturan Daerah</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula DPRD Kab. HSU</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                </div>
            </div>

            <!-- 11-06-2025 Briefing -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">11 Juni 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- Juni 2025 Rapat Koordinasi -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">Juni 2025</div>
                    <h3 class="timeline-title">Rapat Koordinasi tim kesekretariatan Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                </div>
            </div>

            <!-- Juni 2025 Alih Tugas -->
            <div class="timeline-item left">
                <div class="timeline-card other">
                    <div class="timeline-date">Juni 2025</div>
                    <h3 class="timeline-title">Pengantar Alih Tugas YM Wakil Ketua Bapak H.Abdurrahman, S.Ag., M.H. dan Hakim Ibu Rabiatul Adawiah, S.Ag</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                </div>
            </div>

            <!-- Juni 2025 Rapat Paripurna -->
            <div class="timeline-item right">
                <div class="timeline-card meeting">
                    <div class="timeline-date">Juni 2025</div>
                    <h3 class="timeline-title">YM Ketua Pengadilan Agama Amuntai Kelas IB Bapak Bahrul Maji, S.H.I. hadiri Rapat Paripurna DPRD Kab. Hulu Sungai Utara</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Aula DPRD Kab. HSU</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                </div>
            </div>

            <!-- 13-06-2025 Apel Sore -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">13 Juni 2025</div>
                    <h3 class="timeline-title">Pelaksanaan Apel Sore Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- Juni 2025 Panen Simpedes -->
            <div class="timeline-item right">
                <div class="timeline-card other">
                    <div class="timeline-date">Juni 2025</div>
                    <h3 class="timeline-title">Bapak Rahmadi, S.Ap wakili YM Ketua Pengadilan Agama Amuntai Kelas IB Bapak Bahrul Maji, S.H.I. untuk menghadiri acara Panen Simpedes yang diselenggarakan oleh Kantor BRI Cabang Amuntai</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor BRI Cabang Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                </div>
            </div>

            <!-- 16-06-2025 Briefing -->
            <div class="timeline-item left">
                <div class="timeline-card briefing">
                    <div class="timeline-date">16 Juni 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 19-06-2025 Sosialisasi EAC -->
            <div class="timeline-item right">
                <div class="timeline-card training">
                    <div class="timeline-date">19 Juni 2025</div>
                    <h3 class="timeline-title">Pengadilan Agama Amuntai Kelas IB mengikuti kegiatan sosialisasi Aplikasi EAC (Elektronik Akta Cerai) yang diselenggarakan secara virtual oleh Dirjen Badilag Mahkamah Agung RI</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Secara Virtual (Online)</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>

            <!-- 20-06-2025 Pelantikan -->
            <div class="timeline-item left">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">20 Juni 2025</div>
                    <h3 class="timeline-title">Ketua Pengadilan Agama Amuntai Kelas IB, YM Bapak Bahrul Maji, S.H.I., resmi mengambil sumpah jabatan dan melantik YM Ibu Hj. Mursidah, S.Ag., M.H. sebagai Wakil Ketua Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                </div>
            </div>

            <!-- 20-06-2025 Apel Sore -->
            <div class="timeline-item right">
                <div class="timeline-card ceremony">
                    <div class="timeline-date">20 Juni 2025</div>
                    <h3 class="timeline-title">Pelaksanaan Apel Sore Jum'at Pengadilan Agama Amuntai Kelas IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <!-- 24-06-2025 Mediasi -->
            <div class="timeline-item left">
                <div class="timeline-card other">
                    <div class="timeline-date">24 Juni 2025</div>
                    <h3 class="timeline-title">Pengadilan Agama Amuntai kembali berhasil memediasi tuntutan dalam perkara perceraian dengan Nomor 180/Pdt.G/2025/PA.Amt</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                </div>
            </div>

            <!-- 25-06-2025 Briefing -->
            <div class="timeline-item right">
                <div class="timeline-card briefing">
                    <div class="timeline-date">25 Juni 2025</div>
                    <h3 class="timeline-title">Briefing Pagi Pengadilan Agama Amuntai IB</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                </div>
            </div>

            <!-- 25-06-2025 Sidang Banding -->
            <div class="timeline-item left">
                <div class="timeline-card other">
                    <div class="timeline-date">25 Juni 2025</div>
                    <h3 class="timeline-title">Pengadilan Agama Amuntai mengikuti sidang pengucapan putusan banding secara virtual yang diselenggarakan oleh PTA Banjarmasin untuk perkara Nomor 32/Pdt.G/2025/PTA.Bjm</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Secara Virtual (Online)</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                </div>
            </div>

            <!-- 25-06-2025 Kunjungan Bawaslu -->
            <div class="timeline-item right">
                <div class="timeline-card coordination">
                    <div class="timeline-date">25 Juni 2025</div>
                    <h3 class="timeline-title">Sekretaris Pengadilan Agama Amuntai Kelas IB Bapak Salmani, S.Ag. dan Kasubbag PTIP Bapak Rahmadi, S.Ag. sambut Kedatangan Ketua Badan Pengawas Pemilu Bapak Syardani beserta Rombongan dalam Rangka Keperluan Koordinasi dan Perkuat Sinergi antar instansi</h3>
                    <div class="timeline-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kantor PA Amuntai</span>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-handshake"></i>
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