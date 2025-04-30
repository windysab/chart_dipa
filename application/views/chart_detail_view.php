<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $category ?> - <?= $month_name ?> 2025</title>
    <style>
        :root {
            --primary-color: #1e5631;
            --secondary-color: #3c8dbc;
            --accent-color: #f39c12;
            --dark-color: #2c3e50;
            --light-color: #f5f7fa;
            --border-color: #e0e6ed;
            --hover-color: #eef2ff;
            --header-gradient: linear-gradient(135deg, #1e5631, #2d7d46);
            --footer-gradient: linear-gradient(135deg, #1e5631, #184a29);
        }

        .content-wrapper {
            padding: 20px;
        }

        .chart-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
            padding: 20px;
        }

        .chart-header {
            background: var(--header-gradient);
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }

        .chart-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .chart-header h2 {
            margin: 10px 0 0;
            font-size: 18px;
            font-weight: 400;
        }

        .chart-wrapper {
            height: 400px;
            position: relative;
            width: 100%;
            margin-top: 30px;
        }

        .detail-info {
            margin-top: 30px;
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            border-left: 5px solid var(--primary-color);
        }

        .detail-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 14px;
        }

        .detail-table th,
        .detail-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .detail-table th {
            background-color: var(--primary-color);
            color: white;
            font-weight: 600;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .category-cell {
            text-align: left;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <div class="chart-container">
            <div class="chart-header">
                <h1>DETAIL <?= strtoupper($category) ?></h1>
                <h2>BULAN <?= strtoupper($month_name) ?> 2025</h2>
            </div>

            <div class="chart-wrapper">
                <canvas id="detailChart"></canvas>
            </div>

            <div class="detail-info">
                <h3>Ringkasan <?= $category ?> - <?= $month_name ?> 2025</h3>
                <table class="detail-table">
                    <thead>
                        <tr>
                            <th>URAIAN</th>
                            <th>PAGU (RP)</th>
                            <th>REALISASI (RP)</th>
                            <th>PERSENTASE</th>
                            <th>SISA (RP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="category-cell"><?= $category ?></td>
                            <td><?= number_format($financial_data['categories'][$category]['pagu'][$month_index]) ?></td>
                            <td><?= number_format($financial_data['categories'][$category]['realisasi'][$month_index]) ?></td>
                            <td><?= $financial_data['categories'][$category]['percentage'][$month_index] ?> %</td>
                            <td><?= number_format($financial_data['categories'][$category]['sisa_pagu'][$month_index]) ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <a href="<?= site_url('KUMARController') ?>" class="back-link">← Kembali ke Laporan Utama</a>
        </div>
    </div>

    <!-- Add Chart.js for visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                // Get the canvas element
                var ctx = document.getElementById('detailChart').getContext('2d');

                // Define the chart data
                var pagu = <?= $financial_data['categories'][$category]['pagu'][$month_index] ?>;
                var realisasi = <?= $financial_data['categories'][$category]['realisasi'][$month_index] ?>;
                var sisa = <?= $financial_data['categories'][$category]['sisa_pagu'][$month_index] ?>;

                // Create the chart
                var detailChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Realisasi', 'Sisa Anggaran'],
                        datasets: [{
                            data: [realisasi, sisa],
                            backgroundColor: ['rgba(60, 141, 188, 0.8)', 'rgba(210, 214, 222, 0.8)'],
                            borderColor: ['rgba(60, 141, 188, 1)', 'rgba(210, 214, 222, 1)'],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            title: {
                                display: true,
                                text: '<?= $category ?> - <?= $month_name ?> 2025',
                                font: {
                                    size: 16
                                }
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        var label = context.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        label += new Intl.NumberFormat('id-ID', {
                                            style: 'currency',
                                            currency: 'IDR',
                                            minimumFractionDigits: 0,
                                            maximumFractionDigits: 0
                                        }).format(context.raw);
                                        return label;
                                    }
                                }
                            },
                            legend: {
                                position: 'bottom',
                            }
                        }
                    }
                });

                console.log('Detail chart initialized successfully');

            } catch (error) {
                console.error('Error initializing chart:', error);
                document.querySelector('.chart-wrapper').innerHTML = 'Error initializing chart: ' + error.message;
            }
        });
    </script>
</body>

</html>