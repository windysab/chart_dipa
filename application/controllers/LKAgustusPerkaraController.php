<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKAgustusPerkaraController extends CI_Controller
{
	public function index()
	{
		// ====== HEADER / JUDUL ======
		$data['judul'] = 'LAPORAN KEUANGAN PERKARA - BULAN AGUSTUS 2025';


		// ====== RINGKASAN (ANGKA UTAMA) ======
		$data['total_penerimaan'] = 41520000;  // Rp 41.520.000
		$data['total_pengeluaran'] = 29787000; // Rp 29.787.000
		$data['saldo_akhir']       = 11733000; // Rp 11.733.000
		$data['saldo_bank']        = 5865500;  // Rp 5.865.500
		$data['saldo_kas']         = 5867500;  // Rp 5.867.500

		// (Opsional kalau di Juli ada)
		$data['perkara_masuk']     = 0; // isi jika diperlukan, atau biarkan 0

		// ====== RINCIAN TABEL (SAMA STRUKTURNYA DENGAN JULI) ======
		// gunakan key: no, uraian, penerimaan, pengeluaran
		$data['laporan'] = [
			['no' => 1,  'uraian' => 'Sisa Awal',                   'penerimaan' => 14085000, 'pengeluaran' => 0],
			['no' => 2,  'uraian' => 'Penerimaan bulan ini',        'penerimaan' => 27435000, 'pengeluaran' => 0],
			['no' => 3,  'uraian' => 'Biaya Proses/ATK/Pemberkasan', 'penerimaan' => 0,        'pengeluaran' => 9700000],
			['no' => 4,  'uraian' => 'Biaya Panggilan',             'penerimaan' => 0,        'pengeluaran' => 2637500],
			['no' => 5,  'uraian' => 'Biaya Penterjemah',           'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 6,  'uraian' => 'Biaya Pemberitahuan',         'penerimaan' => 0,        'pengeluaran' => 1122500],
			['no' => 7,  'uraian' => 'Biaya Sita',                  'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 8,  'uraian' => 'Biaya Pemeriksaan Setempat',  'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 9,  'uraian' => 'Biaya Sumpah',                'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 10, 'uraian' => 'Biaya Pengiriman',            'penerimaan' => 0,        'pengeluaran' => 506500],
			['no' => 11, 'uraian' => 'Materai',                     'penerimaan' => 0,        'pengeluaran' => 1430000],
			['no' => 12, 'uraian' => 'PNBP',                        'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 13, 'uraian' => 'Biaya Pendaftaran Tk I',      'penerimaan' => 0,        'pengeluaran' => 2910000],
			['no' => 14, 'uraian' => 'Biaya Pendaftaran Banding',   'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 15, 'uraian' => 'Biaya Pendaftaran Kasasi',    'penerimaan' => 0,        'pengeluaran' => 0],
			['no' => 16, 'uraian' => 'Redaksi',                     'penerimaan' => 0,        'pengeluaran' => 1430000],
			['no' => 17, 'uraian' => 'PNBP lainnya',                'penerimaan' => 0,        'pengeluaran' => 2640000],
			['no' => 18, 'uraian' => 'Pengembalian Sisa Panjar',    'penerimaan' => 0,        'pengeluaran' => 7410500],
		];
		$this->load->view('template/header', $data);
		$this->load->view('LK_Agus_Perkara_view', $data);
		$this->load->view('template/footer');
	}
}
