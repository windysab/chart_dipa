<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKAgustusPerkaraController extends CI_Controller
{
	public function index()
	{
		$data['judul'] = "LAPORAN KEUANGAN PERKARA";
		$data['subjudul'] = "PENGADILAN AGAMA AMUNTAI";
		$data['periode'] = "BULAN AGUSTUS 2025";

		// summary
		$data['total_penerimaan'] = 41520000;
		$data['total_pengeluaran'] = 29787000;
		$data['saldo_akhir'] = 11733000;
		$data['perkara_masuk'] = 116; // contoh angka

		// rincian tabel
		$data['laporan'] = [
			['uraian' => 'Sisa Awal', 'penerimaan' => 14085000, 'pengeluaran' => 0],
			['uraian' => 'Penerimaan bulan ini', 'penerimaan' => 27435000, 'pengeluaran' => 0],
			['uraian' => 'Biaya Proses/ATK/Pemberkasan', 'penerimaan' => 0, 'pengeluaran' => 9700000],
			['uraian' => 'Biaya Panggilan', 'penerimaan' => 0, 'pengeluaran' => 2637500],
			['uraian' => 'Biaya Pemberitahuan', 'penerimaan' => 0, 'pengeluaran' => 1122500],
			['uraian' => 'Biaya Pengiriman', 'penerimaan' => 0, 'pengeluaran' => 506500],
			['uraian' => 'Materai', 'penerimaan' => 0, 'pengeluaran' => 1430000],
			['uraian' => 'Biaya Pendaftaran Tk I', 'penerimaan' => 0, 'pengeluaran' => 2910000],
			['uraian' => 'Redaksi', 'penerimaan' => 0, 'pengeluaran' => 1430000],
			['uraian' => 'PNBP lainnya', 'penerimaan' => 0, 'pengeluaran' => 2640000],
			['uraian' => 'Pengembalian Sisa Panjar', 'penerimaan' => 0, 'pengeluaran' => 7410500],
		];

		// tambahan untuk chart
		$data['penerimaan_bulanan'] = [32000000, 33500000, 34800000, 36500000, 37000000, 39500000, 41520000];
		$data['pengeluaran_bulanan'] = [21000000, 22500000, 24000000, 25500000, 26800000, 28000000, 29787000];
		$data['bulan'] = ["Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu"];
		$this->load->view('template/header', $data);
		$this->load->view('LK_Agus_Perkara_view', $data);
		$this->load->view('template/footer');
	}
}
