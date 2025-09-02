<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * LipaAgustusController – LIPA 8 Agustus 2025
 * - Data disiapkan 30 baris x 16 kolom (aman dari undefined offset)
 * - Totals (baris JUMLAH) pakai angka final dari rekap Agustus
 * - Opsional: seri bulanan untuk chart (seed otomatis jika tidak diisi)
 */
class LipaAgustusController extends CI_Controller
{
	public function index()
	{
		// 30 jenis perkara (urut LIPA 8)
		$kategori = array(
			'Izin Poligami',
			'Pencegahan Perkawinan',
			'Penolakan Perkawinan',
			'Pembatalan Perkawinan',
			'Kelalaian Atas Kewajiban Suami / Istri',
			'Cerai Talak',
			'Cerai Gugat',
			'Harta Bersama',
			'Penguasaan Anak',
			'Nafkah Anak Oleh Ibu karena Ayah tidak mampu',
			'Hak - hak bekas istri/kewajiban bekas Suami',
			'Pengesahan Anak',
			'Pencabutan Kekuasaan Orang Tua',
			'Pewalilan',
			'Pencabutan Kekuasaan Wali',
			'Penunjukan orang lain sebagai Wali oleh Pengadilan',
			'Ganti Rugi terhadap Wali',
			'Asal Usul Anak',
			'Perkawinan Campuran',
			'Pengesahan Perkawinan/Isbat Nikah',
			'Izin Kawin',
			'Dispensasi Kawin',
			'Wali Adhol',
			'Kewarisan',
			'Wasiat',
			'Hibah',
			'Wakaf',
			'Lain-Lain',
			'Ekonomi Syariah',
			'P3HP/Penetapan Ahli Waris',
		);

		// 16 kolom: sisa_lalu, diterima, jumlah, dicabut, dikabulkan, ditolak,
		// tidak_diterima, digugurkan, dicoret, perdamaian, dismissal,
		// jumlah_laju_6_13, sisa_akhir, banding, kasasi, pk
		$rows = array(
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 1
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 2
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 3
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 4
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 5
			array(5, 12, 17, 0, 5, 0, 0, 0, 0, 0, 0, 6, 11, 0, 0, 0), // 6 Cerai Talak
			array(68, 57, 125, 2, 64, 0, 0, 3, 0, 0, 0, 69, 56, 0, 0, 0), // 7 Cerai Gugat
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 3, 0, 0, 0), // 8 Harta Bersama
			array(2, 2, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 9 Penguasaan Anak
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 10
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 11
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 12
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 13
			array(1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 14 Pewalilan
			array(0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 15 Pencabutan Kekuasaan Wali
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 16
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 17
			array(0, 3, 3, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 18 Asal Usul Anak
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 19
			array(43, 28, 71, 0, 42, 3, 0, 3, 0, 0, 0, 48, 23, 0, 0, 0), // 20 Isbat Nikah
			array(1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 21 Izin Kawin
			array(1, 5, 6, 0, 5, 0, 0, 0, 0, 0, 0, 5, 1, 0, 0, 0), // 22 Dispensasi Kawin
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 23
			array(1, 1, 2, 1, 1, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0), // 24 Kewarisan
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 25
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 26
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 27
			array(0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 28 Lain-Lain
			array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 29
			array(0, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 30 P3HP / Penetapan Ahli Waris
		);

		// Normalisasi panjang baris & kolom
		for ($i = count($rows); $i < count($kategori); $i++) $rows[$i] = array_fill(0, 16, 0);
		foreach ($rows as $i => $r) {
			for ($c = count($r); $c < 16; $c++) $r[$c] = 0;
			$rows[$i] = array_values($r);
		}

		// Totals (baris JUMLAH) dari rekap Agustus
		$totals_from_image = array(
			'sisa_lalu' => 130,
			'diterima' => 116,
			'jumlah' => 246,
			'dicabut' => 6,
			'dikabulkan' => 132,
			'ditolak' => 3,
			'tidak_diterima' => 6,
			'digugurkan' => 1,
			'dicoret' => 0,
			'perdamaian' => 0,
			'dismissal' => 0,
			'jumlah_laju_6_13' => 148,
			'sisa_akhir' => 98,
			'banding' => 0,
			'kasasi' => 0,
			'pk' => 0,
		);

		// Hitung total kalkulasi (pembanding)
		$tot_calc = array_fill(0, 16, 0);
		foreach ($rows as $r) foreach ($r as $i => $v) $tot_calc[$i] += (int)$v;

		// (Opsional) seri bulanan 12 angka, kalau belum ada—biarkan NULL (view akan seed Agustus)
		$series_masuk = null;
		$series_selesai = null;
		$series_sisa = null;

		$data = array(
			'title' => 'LIPA 8 – Agustus 2025',
			'kategori' => $kategori,
			'rows' => $rows,
			'tot_img' => $totals_from_image,
			'tot_calc' => $tot_calc,
			'series_masuk' => $series_masuk,
			'series_selesai' => $series_selesai,
			'series_sisa' => $series_sisa,
		);

		$this->load->view('Lipa_Agustus_view', $data);
	}
}
