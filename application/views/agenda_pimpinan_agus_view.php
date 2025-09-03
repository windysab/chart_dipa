<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?= isset($title) ? $title : 'Agenda Kerja Pimpinan — Agustus 2025' ?></title>

	<!-- Bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		body {
			background: #f7f9fb;
		}

		.page-title {
			font-weight: 700;
			letter-spacing: .2px;
		}

		.card {
			border: 0;
			box-shadow: 0 8px 24px rgba(0, 0, 0, .06);
			border-radius: 1rem;
		}

		.table thead th {
			position: sticky;
			top: 0;
			background: #fff;
			z-index: 2;
			border-bottom: 2px solid #dee2e6 !important;
		}

		.table tbody tr:hover {
			background: #f7fbff;
		}

		.badge-month {
			font-size: .8rem;
			background: #eef6ff;
			color: #0b5ed7;
		}

		.search-input::placeholder {
			color: #9aa6b2;
		}
	</style>
</head>

<body>
	<div class="container py-4">
		<div class="d-flex align-items-center mb-3">
			<div>
				<h1 class="page-title mb-0"><?= isset($title) ? $title : 'Agenda Kerja Pimpinan — Agustus 2025' ?></h1>
				<div class="text-muted">Pengadilan Agama Amuntai Kelas IB</div>
			</div>
			<div class="ms-auto">
				<span class="badge badge-month rounded-pill px-3 py-2">Periode: Agustus 2025</span>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<!-- Toolbar -->
				<div class="row g-2 align-items-center mb-3">
					<div class="col-md-6">
						<div class="input-group">
							<span class="input-group-text">🔎</span>
							<input id="tblSearch" type="text" class="form-control search-input" placeholder="Cari tanggal/kegiatan/keterangan…">
						</div>
					</div>
					<div class="col-md-6 text-md-end">
						<button id="btnExport" class="btn btn-outline-primary btn-sm">
							⤓ Ekspor CSV
						</button>
					</div>
				</div>

				<!-- Tabel -->
				<div class="table-responsive">
					<table id="agendaTable" class="table table-hover table-striped align-middle">
						<thead>
							<tr>
								<th style="width:56px;">No</th>
								<th style="min-width:180px;">Tanggal</th>
								<th style="min-width:320px;">Kegiatan</th>
								<th style="min-width:220px;">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($agenda)): ?>
								<?php $no = 1;
								foreach ($agenda as $row): ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= htmlspecialchars($row['label']) ?></td>
										<td><?= htmlspecialchars($row['kegiatan']) ?></td>
										<td><?= htmlspecialchars($row['keterangan']) ?></td>
									</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="4" class="text-center text-muted py-4">Tidak ada data agenda.</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>

				<div class="small text-muted mt-2">*Header tabel tetap (sticky) saat discroll • Pencarian bersifat instan</div>
			</div>
		</div>
	</div>

	<script>
		// Pencarian instan
		const searchInput = document.getElementById('tblSearch');
		const rows = () => Array.from(document.querySelectorAll('#agendaTable tbody tr'));
		searchInput.addEventListener('input', function() {
			const q = this.value.toLowerCase();
			rows().forEach(tr => {
				const text = tr.innerText.toLowerCase();
				tr.style.display = text.includes(q) ? '' : 'none';
			});
		});

		// Ekspor CSV sederhana
		document.getElementById('btnExport').addEventListener('click', function() {
			const table = document.getElementById('agendaTable');
			let csv = [];
			const toCSV = (row) => Array.from(row.querySelectorAll('th,td'))
				.map(cell => `"${cell.innerText.replace(/"/g, '""')}"`).join(',');

			csv.push(toCSV(table.tHead.rows[0]));
			rows().forEach(tr => {
				if (tr.style.display !== 'none') csv.push(toCSV(tr));
			});

			const blob = new Blob([csv.join('\n')], {
				type: 'text/csv;charset=utf-8;'
			});
			const link = document.createElement('a');
			link.href = URL.createObjectURL(blob);
			link.download = 'agenda_pimpinan_agustus_2025.csv';
			link.click();
			URL.revokeObjectURL(link.href);
		});
	</script>
</body>

</html>
