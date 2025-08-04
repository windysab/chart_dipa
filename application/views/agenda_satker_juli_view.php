<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan Satker PA Amuntai - Juli 2025</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --success-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --warning-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --dark-gradient: linear-gradient(135deg, #434343 0%, #000000 100%);
            --light-bg: #f8fafc;
            --card-bg: rgba(255, 255, 255, 0.95);
            --text-primary: #2d3748;
            --text-secondary: #718096;
            --border-color: rgba(226, 232, 240, 0.8);
            --shadow-soft: 0 10px 25px rgba(0, 0, 0, 0.1);
            --shadow-hover: 0 20px 40px rgba(0, 0, 0, 0.15);
            --border-radius: 16px;
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--light-bg);
            color: var(--text-primary);
            line-height: 1.7;
            overflow-x: hidden;
        }

        .main-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
        }

        .main-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>') repeat;
            pointer-events: none;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .hero-section {
            text-align: center;
            padding: 3rem 0;
            margin-bottom: 3rem;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 400;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            text-align: center;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            animation: slideInUp 0.8s ease-out;
        }

        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
        }

        .stat-icon.briefing { background: var(--primary-gradient); }
        .stat-icon.meeting { background: var(--secondary-gradient); }
        .stat-icon.training { background: var(--success-gradient); }
        .stat-icon.ceremony { background: var(--warning-gradient); }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--text-secondary);
            font-weight: 500;
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
        }

        .date-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition);
            animation: fadeInScale 0.8s ease-out;
        }

        .date-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }

        .date-header {
            background: var(--primary-gradient);
            color: white;
            padding: 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            text-align: center;
            position: relative;
        }

        .date-header::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid rgba(255, 255, 255, 0.2);
        }

        .date-body {
            padding: 1.5rem;
        }

        .event-list {
            list-style: none;
        }

        .event-item {
            padding: 1.25rem;
            margin-bottom: 1rem;
            border-radius: 12px;
            border-left: 4px solid;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9) 0%, rgba(248, 250, 252, 0.9) 100%);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .event-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, transparent 0%, rgba(255, 255, 255, 0.1) 100%);
            opacity: 0;
            transition: var(--transition);
        }

        .event-item:hover::before {
            opacity: 1;
        }

        .event-item:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .event-item[data-type="briefing"] { border-left-color: #667eea; }
        .event-item[data-type="meeting"] { border-left-color: #f093fb; }
        .event-item[data-type="training"] { border-left-color: #4facfe; }
        .event-item[data-type="ceremony"] { border-left-color: #43e97b; }
        .event-item[data-type="coordination"] { border-left-color: #764ba2; }
        .event-item[data-type="visit"] { border-left-color: #f5576c; }
        .event-item[data-type="service"] { border-left-color: #38f9d7; }
        .event-item[data-type="other"] { border-left-color: #434343; }

        .event-type {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.75rem;
            color: white;
        }

        .event-type.briefing { background: var(--primary-gradient); }
        .event-type.meeting { background: var(--secondary-gradient); }
        .event-type.training { background: var(--success-gradient); }
        .event-type.ceremony { background: var(--warning-gradient); }
        .event-type.coordination { background: var(--dark-gradient); }
        .event-type.visit { background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); }
        .event-type.service { background: linear-gradient(135deg, #00d2d3 0%, #54a0ff 100%); }
        .event-type.other { background: linear-gradient(135deg, #5f27cd 0%, #341f97 100%); }

        .event-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 0.75rem;
            line-height: 1.5;
        }

        .event-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.875rem;
            color: var(--text-secondary);
        }

        .event-location,
        .event-time {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .event-location i,
        .event-time i {
            color: var(--text-secondary);
            opacity: 0.7;
        }

        .filter-section {
            margin-bottom: 2rem;
            text-align: center;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 0.75rem;
        }

        .filter-btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--text-primary);
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
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

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }

            .agenda-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .event-meta {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="container">
            <!-- Hero Section -->
            <div class="hero-section">
                <h1 class="hero-title">
                    <i class="fas fa-calendar-alt"></i>
                    Agenda Kegiatan Juli 2025
                </h1>
                <p class="hero-subtitle">Pengadilan Agama Amuntai Kelas IB</p>
            </div>

            <!-- Statistics Section -->
            <div class="stats-grid">
                <div class="stat-card" style="animation-delay: 0.1s">
                    <div class="stat-icon briefing">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="stat-number">15</div>
                    <div class="stat-label">Briefing</div>
                </div>
                <div class="stat-card" style="animation-delay: 0.2s">
                    <div class="stat-icon meeting">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">8</div>
                    <div class="stat-label">Rapat & Koordinasi</div>
                </div>
                <div class="stat-card" style="animation-delay: 0.3s">
                    <div class="stat-icon training">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="stat-number">5</div>
                    <div class="stat-label">Pelatihan</div>
                </div>
                <div class="stat-card" style="animation-delay: 0.4s">
                    <div class="stat-icon ceremony">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number">12</div>
                    <div class="stat-label">Upacara & Apel</div>
                </div>
            </div>

            <!-- Filter Section -->
            <div class="filter-section">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Semua Kegiatan</button>
                    <button class="filter-btn" data-filter="briefing">Briefing</button>
                    <button class="filter-btn" data-filter="meeting">Rapat</button>
                    <button class="filter-btn" data-filter="training">Pelatihan</button>
                    <button class="filter-btn" data-filter="ceremony">Upacara</button>
                </div>
            </div>

            <!-- Agenda Grid -->
            <div class="agenda-grid">
                <!-- 01 Juli 2025 -->
                <div class="date-card" data-date="2025-07-01" style="animation-delay: 0.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Selasa, 01 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 02 Juli 2025 -->
                <div class="date-card" data-date="2025-07-02" style="animation-delay: 0.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Rabu, 02 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pelatihan</span>
                                <h3 class="event-title">Sosialisasi Aplikasi SIPP (Sistem Informasi Penelusuran Perkara) untuk Advokat</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Ruang Sidang PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 31 Juli 2025 -->
                <div class="date-card" data-date="2025-07-31" style="animation-delay: 2.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Kamis, 31 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <h3 class="event-title">Rapat Persiapan Kegiatan Bulan Agustus 2025</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Ruang Rapat PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>10:00 - 12:00 WITA</span>
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
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const dateCards = document.querySelectorAll('.date-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterType = this.getAttribute('data-filter');

                    dateCards.forEach(card => {
                        if (filterType === 'all') {
                            card.style.display = 'block';
                        } else {
                            const hasEventType = card.querySelector(`[data-type="${filterType}"]`);
                            card.style.display = hasEventType ? 'block' : 'none';
                        }
                    });
                });
            });

            // Smooth scroll animation observer
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

            // Observe all date cards
            dateCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });

            // Add hover effects for event items
            const eventItems = document.querySelectorAll('.event-item');
            eventItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(8px) scale(1.02)';
                });
                
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0) scale(1)';
                });
            });

            // Add click animation for stat cards
            const statCards = document.querySelectorAll('.stat-card');
            statCards.forEach(card => {
                card.addEventListener('click', function() {
                    this.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            });

            // Dynamic background animation
            function createFloatingElements() {
                const container = document.querySelector('.main-container');
                
                for (let i = 0; i < 5; i++) {
                    const element = document.createElement('div');
                    element.style.cssText = `
                        position: absolute;
                        width: ${Math.random() * 100 + 50}px;
                        height: ${Math.random() * 100 + 50}px;
                        background: rgba(255, 255, 255, 0.1);
                        border-radius: 50%;
                        top: ${Math.random() * 100}%;
                        left: ${Math.random() * 100}%;
                        animation: float ${Math.random() * 10 + 10}s infinite linear;
                        pointer-events: none;
                        z-index: 0;
                    `;
                    container.appendChild(element);
                }
            }

            // Add floating animation keyframes
            const style = document.createElement('style');
            style.textContent = `
                @keyframes float {
                    0% {
                        transform: translateY(100vh) rotate(0deg);
                        opacity: 0;
                    }
                    10% {
                        opacity: 1;
                    }
                    90% {
                        opacity: 1;
                    }
                    100% {
                        transform: translateY(-100px) rotate(360deg);
                        opacity: 0;
                    }
                }
            `;
            document.head.appendChild(style);

            createFloatingElements();

            // Refresh floating elements periodically
            setInterval(createFloatingElements, 15000);
        });
    </script>
</body>

</html>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 03 Juli 2025 -->
                <div class="date-card" data-date="2025-07-03" style="animation-delay: 0.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Kamis, 03 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 04 Juli 2025 -->
                <div class="date-card" data-date="2025-07-04" style="animation-delay: 0.4s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Jumat, 04 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Apel</span>
                                <h3 class="event-title">Pelaksanaan Apel Sore Jumat Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>16:00 - 16:30 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 07 Juli 2025 -->
                <div class="date-card" data-date="2025-07-07" style="animation-delay: 0.5s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Senin, 07 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <h3 class="event-title">Rapat Koordinasi Bulanan Tim Kesekretariatan PA Amuntai</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Ruang Rapat PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 11:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 08 Juli 2025 -->
                <div class="date-card" data-date="2025-07-08" style="animation-delay: 0.6s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Selasa, 08 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 09 Juli 2025 -->
                <div class="date-card" data-date="2025-07-09" style="animation-delay: 0.7s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Rabu, 09 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pelatihan</span>
                                <h3 class="event-title">Workshop Penulisan Putusan Berbasis Teknologi Digital</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Aula PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 15:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 10 Juli 2025 -->
                <div class="date-card" data-date="2025-07-10" style="animation-delay: 0.8s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Kamis, 10 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 11 Juli 2025 -->
                <div class="date-card" data-date="2025-07-11" style="animation-delay: 0.9s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Jumat, 11 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Apel</span>
                                <h3 class="event-title">Pelaksanaan Apel Sore Jumat Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>16:00 - 16:30 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 14 Juli 2025 -->
                <div class="date-card" data-date="2025-07-14" style="animation-delay: 1.0s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Senin, 14 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="visit">
                                <span class="event-type visit">Kunjungan</span>
                                <h3 class="event-title">Kunjungan Kerja Tim Monitoring Mahkamah Agung RI</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>10:00 - 14:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 15 Juli 2025 -->
                <div class="date-card" data-date="2025-07-15" style="animation-delay: 1.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Selasa, 15 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 16 Juli 2025 -->
                <div class="date-card" data-date="2025-07-16" style="animation-delay: 1.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Rabu, 16 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pelatihan</span>
                                <h3 class="event-title">Bimbingan Teknis Sistem Informasi Manajemen Kepegawaian (SIMPEG)</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Secara Virtual (Online)</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 17 Juli 2025 -->
                <div class="date-card" data-date="2025-07-17" style="animation-delay: 1.3s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Kamis, 17 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Upacara</span>
                                <h3 class="event-title">Upacara Peringatan Hari Kemerdekaan RI ke-80 (Gladi Bersih)</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Halaman Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>08:00 - 09:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 18 Juli 2025 -->
                <div class="date-card" data-date="2025-07-18" style="animation-delay: 1.4s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Jumat, 18 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Apel</span>
                                <h3 class="event-title">Pelaksanaan Apel Sore Jumat Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>16:00 - 16:30 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 21 Juli 2025 -->
                <div class="date-card" data-date="2025-07-21" style="animation-delay: 1.5s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Senin, 21 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="meeting">
                                <span class="event-type meeting">Rapat</span>
                                <h3 class="event-title">Rapat Evaluasi Kinerja Triwulan II Tahun 2025</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Ruang Rapat PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 22 Juli 2025 -->
                <div class="date-card" data-date="2025-07-22" style="animation-delay: 1.6s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Selasa, 22 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 23 Juli 2025 -->
                <div class="date-card" data-date="2025-07-23" style="animation-delay: 1.7s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Rabu, 23 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pelatihan</span>
                                <h3 class="event-title">Pelatihan Mediasi Lanjutan untuk Hakim dan Mediator</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Hotel Banjarmasin</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>08:00 - 17:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 24 Juli 2025 -->
                <div class="date-card" data-date="2025-07-24" style="animation-delay: 1.8s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Kamis, 24 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="service">
                                <span class="event-type service">Pelayanan</span>
                                <h3 class="event-title">Sidang Keliling di Desa Tanjung Harapan</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Balai Desa Tanjung Harapan</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 15:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 25 Juli 2025 -->
                <div class="date-card" data-date="2025-07-25" style="animation-delay: 1.9s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Jumat, 25 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="ceremony">
                                <span class="event-type ceremony">Apel</span>
                                <h3 class="event-title">Pelaksanaan Apel Sore Jumat Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>16:00 - 16:30 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 28 Juli 2025 -->
                <div class="date-card" data-date="2025-07-28" style="animation-delay: 2.0s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Senin, 28 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="coordination">
                                <span class="event-type coordination">Koordinasi</span>
                                <h3 class="event-title">Koordinasi dengan Dinas Kependudukan dan Pencatatan Sipil Kabupaten HSU</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor Disdukcapil HSU</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>10:00 - 12:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 29 Juli 2025 -->
                <div class="date-card" data-date="2025-07-29" style="animation-delay: 2.1s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Selasa, 29 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 30 Juli 2025 -->
                <div class="date-card" data-date="2025-07-30" style="animation-delay: 2.2s">
                    <div class="date-header">
                        <i class="fas fa-calendar-day"></i>
                        Rabu, 30 Juli 2025
                    </div>
                    <div class="date-body">
                        <ul class="event-list">
                            <li class="event-item" data-type="briefing">
                                <span class="event-type briefing">Briefing</span>
                                <h3 class="event-title">Briefing Pagi Pengadilan Agama Amuntai Kelas IB</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Kantor PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>07:30 - 08:00 WITA</span>
                                    </div>
                                </div>
                            </li>
                            <li class="event-item" data-type="training">
                                <span class="event-type training">Pelatihan</span>
                                <h3 class="event-title">Sosialisasi Peraturan Mahkamah Agung Terbaru tentang Administrasi Perkara</h3>
                                <div class="event-meta">
                                    <div class="event-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Aula PA Amuntai</span>
                                    </div>
                                    <div class="event-time">
                                        <i class="far fa-clock"></i>
                                        <span>09:00 - 12:00 WITA</span>