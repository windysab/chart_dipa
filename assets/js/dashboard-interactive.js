// Dashboard Interactive Features
document.addEventListener('DOMContentLoaded', function () {

    // Add loading animation to cards
    function addLoadingToCards() {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            card.classList.add('pulse');
            setTimeout(() => {
                card.classList.remove('pulse');
            }, 1000);
        });
    }

    // Counter animation for numbers
    function animateCounters() {
        const counters = document.querySelectorAll('.info-box-number, .small-box .inner h3');

        counters.forEach(counter => {
            const target = parseInt(counter.textContent.replace(/,/g, ''));
            const increment = target / 50;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = target.toLocaleString();
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current).toLocaleString();
                }
            }, 20);
        });
    }

    // Add hover effects to statistics cards
    function addHoverEffects() {
        const statCards = document.querySelectorAll('.info-box, .small-box');

        statCards.forEach(card => {
            card.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-8px) scale(1.02)';
                this.style.boxShadow = '0 15px 35px rgba(0, 0, 0, 0.2)';
            });

            card.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            });
        });
    }

    // Add progress bars for percentage indicators
    function addProgressBars() {
        const percentageCards = document.querySelectorAll('.info-box-number');

        percentageCards.forEach(card => {
            if (card.textContent.includes('%')) {
                const percentage = parseFloat(card.textContent);
                const progressBar = document.createElement('div');
                progressBar.className = 'progress mt-2';
                progressBar.style.height = '4px';
                progressBar.innerHTML = `
                    <div class="progress-bar bg-white" 
                         role="progressbar" 
                         style="width: ${percentage}%; opacity: 0.8;" 
                         aria-valuenow="${percentage}" 
                         aria-valuemin="0" 
                         aria-valuemax="100">
                    </div>
                `;
                card.parentElement.appendChild(progressBar);
            }
        });
    }

    // Add real-time updates simulation
    function simulateRealTimeUpdates() {
        setInterval(() => {
            // Add subtle pulse to current time elements
            const timeElements = document.querySelectorAll('.progress-description');
            timeElements.forEach(el => {
                if (el.textContent.includes('Tahun') || el.textContent.includes('Digital')) {
                    el.style.opacity = '0.6';
                    setTimeout(() => {
                        el.style.opacity = '1';
                    }, 500);
                }
            });
        }, 5000);
    }

    // Enhanced Chart.js configurations
    function enhanceCharts() {
        // Add click handlers to charts for interactivity
        if (typeof Chart !== 'undefined') {
            Chart.defaults.global.defaultFontFamily = "'Source Sans Pro', sans-serif";
            Chart.defaults.global.defaultFontSize = 14;
            Chart.defaults.global.defaultFontColor = '#333';

            // Add responsive breakpoints
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.maintainAspectRatio = false;
        }
    }

    // Add tooltip enhancements
    function addTooltips() {
        const elements = document.querySelectorAll('[data-toggle="tooltip"]');
        elements.forEach(el => {
            el.setAttribute('title', el.textContent + ' - Klik untuk detail');
        });
    }

    // Performance indicators with color coding
    function addPerformanceIndicators() {
        const performanceValues = document.querySelectorAll('.info-box-number');

        performanceValues.forEach(value => {
            const parent = value.closest('.info-box');
            if (!parent) return;

            const text = value.textContent;
            if (text.includes('%')) {
                const percentage = parseFloat(text);
                if (percentage >= 80) {
                    parent.classList.add('success-indicator');
                } else if (percentage >= 60) {
                    parent.classList.add('warning-indicator');
                } else {
                    parent.classList.add('danger-indicator');
                }
            }
        });
    }

    // Add export functionality
    function addExportButtons() {
        const cards = document.querySelectorAll('.card');

        cards.forEach(card => {
            const header = card.querySelector('.card-header');
            if (header) {
                const exportBtn = document.createElement('button');
                exportBtn.className = 'btn btn-sm btn-outline-light float-right';
                exportBtn.innerHTML = '<i class="fas fa-download"></i>';
                exportBtn.title = 'Export Data';
                exportBtn.style.marginTop = '-2px';

                exportBtn.addEventListener('click', function () {
                    // Simulate export functionality
                    alert('Fitur export akan segera tersedia');
                });

                header.appendChild(exportBtn);
            }
        });
    }

    // Add print functionality
    function addPrintButton() {
        const printBtn = document.createElement('button');
        printBtn.className = 'btn btn-primary position-fixed';
        printBtn.style.bottom = '20px';
        printBtn.style.right = '20px';
        printBtn.style.zIndex = '1000';
        printBtn.style.borderRadius = '50%';
        printBtn.style.width = '60px';
        printBtn.style.height = '60px';
        printBtn.innerHTML = '<i class="fas fa-print"></i>';
        printBtn.title = 'Print Dashboard';

        printBtn.addEventListener('click', function () {
            window.print();
        });

        document.body.appendChild(printBtn);
    }

    // Add refresh functionality
    function addRefreshButton() {
        const refreshBtn = document.createElement('button');
        refreshBtn.className = 'btn btn-info position-fixed';
        refreshBtn.style.bottom = '90px';
        refreshBtn.style.right = '20px';
        refreshBtn.style.zIndex = '1000';
        refreshBtn.style.borderRadius = '50%';
        refreshBtn.style.width = '60px';
        refreshBtn.style.height = '60px';
        refreshBtn.innerHTML = '<i class="fas fa-sync-alt"></i>';
        refreshBtn.title = 'Refresh Data';

        refreshBtn.addEventListener('click', function () {
            this.querySelector('i').classList.add('fa-spin');
            setTimeout(() => {
                location.reload();
            }, 1000);
        });

        document.body.appendChild(refreshBtn);
    }

    // Initialize all features
    function initializeDashboard() {
        setTimeout(() => {
            addLoadingToCards();
            animateCounters();
            addHoverEffects();
            addProgressBars();
            addPerformanceIndicators();
            enhanceCharts();
            addTooltips();
            addExportButtons();
            addPrintButton();
            addRefreshButton();
            simulateRealTimeUpdates();
        }, 500);
    }

    // Start the dashboard
    initializeDashboard();

    // Add responsive chart resizing
    window.addEventListener('resize', function () {
        if (typeof Chart !== 'undefined') {
            Chart.helpers.each(Chart.instances, function (instance) {
                instance.resize();
            });
        }
    });

    // Add keyboard shortcuts
    document.addEventListener('keydown', function (e) {
        // Ctrl + P for print
        if (e.ctrlKey && e.key === 'p') {
            e.preventDefault();
            window.print();
        }

        // Ctrl + R for refresh
        if (e.ctrlKey && e.key === 'r') {
            e.preventDefault();
            location.reload();
        }
    });

    // Add loading state management
    function showLoading() {
        const loader = document.createElement('div');
        loader.id = 'dashboard-loader';
        loader.className = 'position-fixed';
        loader.style.cssText = `
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        `;
        loader.innerHTML = `
            <div class="text-center">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <p class="mt-3">Memuat dashboard...</p>
            </div>
        `;
        document.body.appendChild(loader);

        setTimeout(() => {
            loader.remove();
        }, 2000);
    }

    // Show loading on page load
    showLoading();
});
