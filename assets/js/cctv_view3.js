$(function() {
    var pieChartCanvas = $('#donutChart').get(0).getContext('2d');
    var pieData = {
        labels: [<?php foreach ($grouped_data as $jenis_perkara_nama => $jumlah_perkara) {
                        echo '"' . $jenis_perkara_nama . '",';
                    } ?>],
        datasets: [{
            data: [<?php foreach ($grouped_data as $jumlah_perkara) {
                        echo $jumlah_perkara . ',';
                    } ?>],
            backgroundColor: [
                '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#3b8bba'
            ],
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
    var mediasiData = {
        labels: ['Tidak Dapat Dilaksanakan', 'Berhasil Sebagian', 'Tidak Berhasil', 'Berhasil Dengan Pencabutan', 'Berhasil Dengan Akta Perdamaian'],
        datasets: [{
            data: [<?php echo $mediasi_data['D']; ?>, <?php echo $mediasi_data['S']; ?>, <?php echo $mediasi_data['T']; ?>, <?php echo $mediasi_data['Y2']; ?>, <?php echo $mediasi_data['Y1']; ?>],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#3b8bba']
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
        data: mediasiData,
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
});
