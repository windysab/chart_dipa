<div class="row">
    <div class="col-md-6 table-container">
        <h5>Chart Data Perkara Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
        <div class="card-body">
            <div class="chart">
                <canvas id="donutChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6 chart-container">
        <h5>Chart Penyelesaian Mediasi Bulan <?php echo date('F Y', strtotime('first day of last month')); ?></h5>
        <div class="card-body">
            <div class="chart">
                <canvas id="mediasiChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>
