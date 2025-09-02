<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<title><?= $judul ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		:root {
			--bg: #f7faf9;
			--ink: #0f172a;
			--muted: #6b7280;
			--line: #e5e7eb;
			--accent: #10b981;
			/* emerald */
			--accent-ink: #065f46;
			--danger: #ef4444;
		}

		* {
			box-sizing: border-box
		}

		body {
			margin: 0;
			background: var(--bg);
			color: var(--ink);
			font: 14px/1.6 ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu
		}

		.wrap {
			max-width: 1080px;
			margin: 24px auto;
			padding: 0 16px
		}

		.header {
			padding: 18px 20px;
			border: 1px solid var(--line);
			border-radius: 14px;
			background: linear-gradient(180deg, #ffffff, #f3faf7);
			box-shadow: 0 1px 0 rgba(0, 0, 0, .03);
		}

		h1 {
			margin: 0;
			font-size: 20px;
			letter-spacing: .3px
		}

		.sub {
			color: var(--muted);
			font-size: 12px;
			margin-top: 4px
		}

		.grid {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 12px;
			margin: 16px 0 20px
		}

		.card {
			background: #fff;
			border: 1px solid var(--line);
			border-radius: 12px;
			padding: 14px;
		}

		.k-label {
			font-size: 12px;
			color: var(--muted);
			margin: 0 0 6px
		}

		.k-val {
			margin: 0;
			font-weight: 700;
			font-size: 18px
		}

		.ok {
			color: var(--accent-ink)
		}

		.bad {
			color: var(--danger)
		}

		.pill {
			display: inline-block;
			padding: 2px 8px;
			border: 1px solid var(--line);
			border-radius: 999px;
			color: #111;
			font-weight: 600;
			font-size: 12px;
			background: #fff
		}

		table {
			width: 100%;
			border-collapse: separate;
			border-spacing: 0;
			background: #fff;
			border: 1px solid var(--line);
			border-radius: 12px;
			overflow: hidden
		}

		thead th {
			background: #e9fbf3;
			color: #064e3b;
			border-bottom: 1px solid var(--line);
			font-weight: 700;
			text-transform: uppercase;
			font-size: 12px;
			letter-spacing: .6px;
			padding: 10px 12px;
			text-align: center
		}

		tbody td {
			padding: 10px 12px;
			border-bottom: 1px dashed var(--line)
		}

		tbody tr:nth-child(odd) {
			background: #fcfdfc
		}

		tbody tr:hover {
			background: #f3faf7
		}

		.num {
			text-align: right;
			white-space: nowrap;
			font-variant-numeric: tabular-nums
		}

		.ctr {
			text-align: center
		}

		.foot {
			display: flex;
			gap: 12px;
			margin-top: 12px;
			flex-wrap: wrap
		}

		.foot .card {
			flex: 1 1 240px
		}

		.totalbar {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 10px 12px;
			background: #072;
			color: #eafff3;
		}

		.totalbar small {
			opacity: .85
		}

		.totalbar b {
			font-variant-numeric: tabular-nums
		}

		@media (max-width:900px) {
			.grid {
				grid-template-columns: repeat(2, 1fr)
			}
		}

		@media (max-width:560px) {
			.grid {
				grid-template-columns: 1fr
			}
		}
	</style>
</head>

<body>
	<div class="wrap">

		<!-- HEADER -->
		<div class="header">
			<h1><?= $judul ?></h1>
			<div class="sub">Format laporan perkara • Versi Agustus • tampilan minimal clean</div>
		</div>

		<!-- RINGKASAN -->
		<div class="grid">
			<div class="card">
				<div class="k-label">Total Penerimaan</div>
				<p class="k-val ok">Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></p>
			</div>
			<div class="card">
				<div class="k-label">Total Pengeluaran</div>
				<p class="k-val bad">Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></p>
			</div>
			<div class="card">
				<div class="k-label">Saldo Akhir</div>
				<p class="k-val">Rp <?= number_format($saldo_akhir, 0, ',', '.') ?></p>
			</div>
			<div class="card">
				<div class="k-label">Info</div>
				<p class="k-val"><span class="pill">Agustus 2025</span></p>
			</div>
		</div>

		<!-- TABEL RINCIAN -->
		<table>
			<thead>
				<tr>
					<th style="width:60px">No</th>
					<th>Uraian</th>
					<th style="width:220px">Penerimaan (Rp)</th>
					<th style="width:220px">Pengeluaran (Rp)</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($laporan as $r): ?>
					<tr>
						<td class="ctr"><?= $r['no']; ?></td>
						<td><?= htmlspecialchars($r['uraian']); ?></td>
						<td class="num"><?= $r['penerimaan'] ? number_format($r['penerimaan'], 0, ',', '.') : '-' ?></td>
						<td class="num"><?= $r['pengeluaran'] ? number_format($r['pengeluaran'], 0, ',', '.') : '-' ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" style="padding:0">
						<div class="totalbar">
							<div><small>Jumlah</small></div>
							<div>
								<small>Penerimaan:</small>
								<b>Rp <?= number_format($total_penerimaan, 0, ',', '.') ?></b>
								&nbsp;&nbsp;•&nbsp;&nbsp;
								<small>Pengeluaran:</small>
								<b>Rp <?= number_format($total_pengeluaran, 0, ',', '.') ?></b>
							</div>
						</div>
					</td>
				</tr>
			</tfoot>
		</table>

		<!-- FOOT / SALDO DETAIL -->
		<div class="foot">
			<div class="card">
				<div class="k-label">Saldo Bank</div>
				<p class="k-val">Rp <?= number_format($saldo_bank, 0, ',', '.') ?></p>
			</div>
			<div class="card">
				<div class="k-label">Saldo Kas Tunai</div>
				<p class="k-val">Rp <?= number_format($saldo_kas, 0, ',', '.') ?></p>
			</div>
		</div>

	</div>
</body>

</html>
