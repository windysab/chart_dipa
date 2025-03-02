<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laporan Keuangan Perkara - PA Amuntai</title>
	<style>
		:root {
			--primary-color: #009879;
			--bg-color: #f4f4f9;
			--text-color: #333;
			--border-color: #ddd;
		}

		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: var(--bg-color);
			color: var(--text-color);
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
		}

		.header {
			background-color: var(--primary-color);
			color: #ffffff;
			padding: 20px;
			text-align: center;
			margin-bottom: 30px;
		}

		.table-container {
			width: 100%;
			overflow-x: auto;
			margin: 20px 0;
			background: #fff;
			border-radius: 8px;
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}

		.custom-table {
			width: 100%;
			border-collapse: collapse;
			font-size: 15px;
			text-align: left;
		}

		.custom-table th,
		.custom-table td {
			padding: 12px 15px;
			border: 1px solid var(--border-color);
		}

		.custom-table th {
			background-color: var(--primary-color);
			color: #ffffff;
			font-weight: bold;
			text-align: center;
		}

		.custom-table tbody tr:nth-child(even) {
			background-color: #f8f9fa;
		}

		.custom-table tbody tr:hover {
			background-color: #f2f2f2;
		}

		.amount-cell {
			text-align: right;
			font-family: 'Consolas', monospace;
		}

		.total-row {
			font-weight: bold;
			background-color: #e9ecef;
		}

		.signature-section {
			margin: 40px 20px;
			text-align: right;
			font-size: 14px;
		}

		.signature-section .info-box {
			display: inline-block;
			padding: 15px;
			border: 1px solid var(--border-color);
			border-radius: 5px;
			background: #fff;
		}

		.footer {
			background-color: var(--primary-color);
			color: #ffffff;
			text-align: center;
			padding: 15px;
			position: fixed;
			width: 100%;
			bottom: 0;
		}

		@media print {
			.footer {
				position: static;
				margin-top: 30px;
			}

			body {
				background-color: #fff;
			}

			.table-container {
				box-shadow: none;
			}
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="header">
			<h1>LAPORAN KEUANGAN PERKARA</h1>
			<h2>PENGADILAN AGAMA AMUNTAI</h2>
			<h3>BULAN JANUARI 2025</h3>
			<p>LIPA 7a</p>
		</div>


		<!-- Same content as before but with added classes -->
		<div class="table-container">
			<table class="custom-table">
				<thead>
					<tr>
						<th width="5%">NO</th>
						<th width="45%">URAIAN</th>
						<th width="25%">PENERIMAAN (Rp)</th>
						<th width="25%">PENGELUARAN (Rp)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Sisa Awal</td>
						<td class="amount-cell">934.000</td>
						<td class="amount-cell">-</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Penerimaan bulan ini</td>
						<td class="amount-cell">21.438.500</td>
						<td class="amount-cell">-</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Biaya Proses/ATK/Pemberkasan *)</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">8.600.000</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Biaya Panggilan</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">1.902.000</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Biaya Penterjemah</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td>6</td>
						<td>Biaya Pemberitahuan</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">283.000</td>
					</tr>
					<tr>
						<td>7</td>
						<td>Biaya Sita</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td>8</td>
						<td>Biaya Pemeriksaan Setempat</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td>9</td>
						<td>Biaya Sumpah</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td>10</td>
						<td>Biaya Pengiriman</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td>11</td>
						<td>Materai</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">260.000</td>
					</tr>
					<tr>
						<td>12</td>
						<td>PNBP</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td></td>
						<td>Biaya Pendaftaran Tk I</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">2.580.000</td>
					</tr>
					<tr>
						<td></td>
						<td>Biaya Pendaftaran Banding</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td></td>
						<td>Biaya Pendaftaran Kasasi</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">0</td>
					</tr>
					<tr>
						<td></td>
						<td>Redaksi</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">260.000</td>
					</tr>
					<tr>
						<td></td>
						<td>PNBP lainnya</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">1.960.000</td>
					</tr>
					<tr>
						<td>13</td>
						<td>Pengembalian Sisa Panjar</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">1.011.500</td>
					</tr>
					<tr class="total-row">
						<td></td>
						<td>Jumlah</td>
						<td class="amount-cell">22.372.500</td>
						<td class="amount-cell">17.271.500</td>
					</tr>



					<tr>
						<td colspan="2">Saldo Akhir</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">5.101.000</td>
					</tr>
					<tr>
						<td colspan="2">Saldo Bank</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">712.500</td>
					</tr>
					<tr>
						<td colspan="2">Saldo Kas Tunai</td>
						<td class="amount-cell">-</td>
						<td class="amount-cell">4.388.500</td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="signature-section">
			<div class="info-box">
				<h4>Catatan:</h4>
				<p>Perkara masuk: 95 perkara</p>
				<p>Perkara putus: 95 Perkara</p>
			</div>
		</div>
	</div>

	<div class="footer">
		<p>&copy; 2025 Pengadilan Agama Amuntai. All rights reserved.</p>
	</div>
</body>

</html>
