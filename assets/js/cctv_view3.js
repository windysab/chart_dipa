$(function() {
    // Parse the JSON data embedded in the HTML
    var groupedData = JSON.parse($('#groupedData').text());
    var mediasiData = JSON.parse($('#mediasiData').text());
    var jumlahPerkaraTerdaftar = parseInt($('#jumlahPerkaraTerdaftar').text());
    var jumlahPerkaraDiputus = parseInt($('#jumlahPerkaraDiputus').text());
    var sisaPerkara = parseInt($('#sisaPerkara').text());

    // Check if data is correctly parsed
    console.log(groupedData, mediasiData, jumlahPerkaraTerdaftar, jumlahPerkaraDiputus, sisaPerkara);

    var pieChartCanvas = $('#donutChart').get(0).getContext('2d');
    var pieData = {
        labels: Object.keys(groupedData),
        datasets: [{
            data: Object.values(groupedData),
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#3b8bba'],
        }]
    };
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        },
        plugins: {
            datalabels: {
                display: true,
                formatter: (value, ctx) => {
                    let total = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                    let percentage = ((value / total) * 100).toFixed(2) + '%';
                    return `${value} (${percentage})`;
                },
                color: '#FFFFFF',
                anchor: 'end',
                align: 'start',
                offset: -10,
                borderWidth: 2,
                borderColor: '#000',
                borderRadius: 4,
                backgroundColor: '#000'
            },
            tooltip: {
                enabled: true,
                callbacks: {
                    label: function(tooltipItem) {
                        let total = tooltipItem.dataset.data.reduce((a, b) => a + b, 0);
                        let value = tooltipItem.raw;
                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                        return `${tooltipItem.label}: ${value} (${percentage})`;
                    }
                }
            }
        }
    };
    var pieChart = new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    });

    $('#donutChart').on('mousemove', function(evt) {
        var activePoints = pieChart.getElementsAtEventForMode(evt, 'nearest', {
            intersect: true
        }, false);
        if (activePoints.length > 0) {
            var index = activePoints[0].index;
            var label = pieChart.data.labels[index];
            var color = pieChart.data.datasets[0].backgroundColor[index];
            if (label && color) {
                $('table tbody tr').removeClass('highlight').css('background-color', '');
                $('table tbody tr').each(function() {
                    if ($(this).find('td:first').text().trim() === label.trim()) {
                        $(this).css('background-color', color);
                    }
                });
            }
        } else {
            $('table tbody tr').removeClass('highlight').css('background-color', '');
        }
    });

    var mediasiChartCanvas = $('#mediasiChart').get(0).getContext('2d');
    var mediasiChartData = {
        labels: ['Tidak Dapat Dilaksanakan', 'Berhasil Sebagian', 'Tidak Berhasil', 'Berhasil Dengan Pencabutan', 'Berhasil Dengan Akta Perdamaian'],
        datasets: [{
            data: [mediasiData['D'], mediasiData['S'], mediasiData['T'], mediasiData['Y2'], mediasiData['Y1']],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc']
        }]
    };
    var mediasiOptions = {
        maintainAspectRatio: false,
        responsive: true,
        animation: {
            animateScale: true,
            animateRotate: true
        },
        plugins: {
            datalabels: {
                display: true,
                formatter: (value, ctx) => {
                    let total = ctx.chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
                    let percentage = ((value / total) * 100).toFixed(2) + '%';
                    return `${value} (${percentage})`;
                },
                color: '#FFFFFF',
                anchor: 'end',
                align: 'start',
                offset: -10,
                borderWidth: 2,
                borderColor: '#000',
                borderRadius: 4,
                backgroundColor: '#000'
            },
            tooltip: {
                enabled: true,
                callbacks: {
                    label: function(tooltipItem) {
                        let total = tooltipItem.dataset.data.reduce((a, b) => a + b, 0);
                        let value = tooltipItem.raw;
                        let percentage = ((value / total) * 100).toFixed(2) + '%';
                        return `${tooltipItem.label}: ${value} (${percentage})`;
                    }
                }
            }
        }
    };
    var mediasiChart = new Chart(mediasiChartCanvas, {
        type: 'pie',
        data: mediasiChartData,
        options: mediasiOptions
    });

    $('#mediasiChart').on('mousemove', function(evt) {
        var activePoints = mediasiChart.getElementsAtEventForMode(evt, 'nearest', {
            intersect: true
        }, false);
        if (activePoints.length > 0) {
            var index = activePoints[0].index;
            var label = mediasiChart.data.labels[index];
            var color = mediasiChart.data.datasets[0].backgroundColor[index];
            if (label && color) {
                $('table tbody tr').removeClass('highlight').css('background-color', '');
                $('table tbody tr').each(function() {
                    if ($(this).find('td:first').text().trim() === label.trim()) {
                        $(this).css('background-color', color);
                    }
                });
            }
        } else {
            $('table tbody tr').removeClass('highlight').css('background-color', '');
        }
    });

    var barChartCanvas = $('#barChart').get(0).getContext('2d');
    var barData = {
        labels: ['Di Terima', 'Diputus', 'Sisa'],
        datasets: [{
            label: 'Perkara E-court',
            data: [jumlahPerkaraTerdaftar, jumlahPerkaraDiputus, sisaPerkara],
            backgroundColor: ['#007bff', '#28a745', '#dc3545'],
            borderColor: ['#0056b3', '#1e7e34', '#c82333'],
            borderWidth: 1,
            hoverBackgroundColor: ['#0056b3', '#1e7e34', '#c82333'],
            hoverBorderColor: ['#003f7f', '#155724', '#bd2130']
        }]
    };
    var barOptions = {
        maintainAspectRatio: false,
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 1
                }
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'top',
                labels: {
                    font: {
                        size: 14
                    }
                }
            },
            tooltip: {
                enabled: true,
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                    }
                }
            }
        },
        animation: {
            duration: 1000,
            easing: 'easeInOutBounce'
        }
    };
    var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: barData,
        options: barOptions
    });
});
