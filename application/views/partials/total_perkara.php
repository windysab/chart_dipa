<div class="row total-perkara-container text-center">
    <div class="col-md-3">
        <div class="circle-card total-perkara">
            <p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <p class="title">Total Perkara</p>
    </div>
    <div class="col-md-3">
        <div class="circle-card total-perkara-ecourt">
            <p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_ecourt, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <p class="title">Total Perkara e-Court</p>
    </div>
    <div class="col-md-3">
        <div class="circle-card persen-perkara-ecourt">
            <p class="value"><?php echo number_format($total_perkara_data->persen_perkara_ecourt, 2) . '%'; ?></p>
        </div>
        <p class="title">Persentase Perkara e-Court</p>
    </div>
    <div class="col-md-3">
        <div class="circle-card total-perkara-non-ecourt">
            <p class="value"><?php echo htmlspecialchars($total_perkara_data->total_perkara_non_ecourt, ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <p class="title">Total Perkara Non e-Court</p>
    </div>
</div>
