


<?php
/**
 * Controller: LipaAgustus.php (CodeIgniter 3/4 compatible style)
 * - Route it as needed (e.g. /laporan/lipa/agustus)
 * - Supplies cleaned data for LIPA 8 Agustus 2025 + UI config for charts.
 */

defined('BASEPATH') or exit('No direct script access allowed');

class LipaAgustusController extends CI_Controller { // For CI3. For CI4: class LipaAgustus extends \CodeIgniter\Controller
	public function __construct()
    {
        parent::__construct();
    }

  public function index() {
    // ===============
    // MASTER KATEGORI (urut sesuai template LIPA 8)
    // ===============
    $kategori = [
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
    ];

    // ============================================================
    // DATA LIPA 8 – AGUSTUS 2025 (disusun sesuai kolom template)
    // Kolom:
    //  sisa_lalu, diterima, jumlah, dicabut, dikabulkan, ditolak,
    //  tidak_diterima, digugurkan, dicoret, perdamaian, dismissal,
    //  jumlah_laju_6_13, sisa_akhir, banding, kasasi, pk
    //
    // Catatan: Angka diisi berdasarkan tabel yang Anda lampirkan.
    // Baris yang tak terlihat jelas di gambar diset 0 agar tidak salah input.
    // Silakan ubah dengan cepat pada array ini jika ada koreksi numerik.
    // ============================================================
    $rows = [
      // 1–5
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], // Izin Poligami
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], // Pencegahan Perkawinan
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], // Penolakan Perkawinan
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], // Pembatalan Perkawinan
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0], // Kelalaian Atas Kewajiban Suami/Istri

      // 6. Cerai Talak (terbaca: sisa 5, diterima 12, jumlah 17, dikabulkan 5; sisa akhir tampak 11 dgn laju 6?)
      [5,12,17,0,5,0,0,0,0,0,0,6,11,0,0,0],

      // 7. Cerai Gugat (terbaca: sisa 68, diterima 57, jumlah 125, dicabut 2, dikabulkan 64, tidak diterima 3; laju 69, sisa akhir 56)
      [68,57,125,2,64,0,0,3,0,0,0,69,56,0,0,0],

      // 8–18 (nilai tampak kecil/0 pada gambar; beberapa baris terlihat 2/2/4/1 pada Penguasaan Anak)
      [0,0,0,0,0,0,0,0,0,0,0,1,3,0,0,0],    // Harta Bersama (di gambar terlihat 1 & 3 di kanan kolom akhir)
      [2,2,4,1,0,0,0,0,0,0,0,0,0,0,0,0],    // Penguasaan Anak
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [1,0,1,0,0,0,0,0,0,0,0,0,1,0,0,0],    // Pewalilan (terlihat angka 1 di kolom sisa akhir)
      [0,1,1,0,1,0,0,0,0,0,0,0,0,0,0,0],    // Pencabutan Kekuasaan Wali (terlihat 1 di lajur tengah)
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,3,3,0,1,0,0,0,0,0,0,0,0,0,0,0],    // Asal Usul Anak (baris tampak 3 3 dan 1)

      // 19. Perkawinan Campuran (tampak kosong)
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],

      // 20. Pengesahan Perkawinan/Isbat Nikah (terbaca: 43,28,71,0,42,3,3; kanan: laju 48, sisa 23)
      [43,28,71,0,42,3,0,3,0,0,0,48,23,0,0,0],

      // 21–30 (sebagian kecil tampak: Izin Kawin 1; Dispensasi Kawin 5 & 1; Lain‑Lain 5; P3HP 4)
      [1,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0],   // Izin Kawin
      [1,5,6,0,5,0,0,0,0,0,0,5,1,0,0,0],   // Dispensasi Kawin (kanan terlihat 5 & 1)
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [1,1,2,1,1,0,0,0,0,0,0,2,0,0,0,0],   // Kewarisan (terbaca 1 1 2 dan beberapa 1 di tengah)
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,5,5,0,0,0,0,0,0,0,0,0,0,0,0,0],   // Lain‑Lain (terlihat 5 pada diterima)
      [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
      [0,4,4,0,0,0,0,0,0,0,0,0,0,0,0,0],   // P3HP / Penetapan Ahli Waris (terlihat 4 pada sisa akhir)
    ];

    // ===== Totals dari gambar (baris JUMLAH) – agar konsisten
    $totals_from_image = [
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
    ];

    // Hitung totals dari $rows (sebagai validasi internal)
    $tot = array_fill(0, 16, 0);
    foreach ($rows as $r) {
      foreach ($r as $i => $v) $tot[$i] += $v;
    }

    // Kirim ke view
    $data = [
      'title' => 'LIPA 8 – Bulan Agustus 2025',
      'kategori' => $kategori,
      'rows' => $rows,
      'tot_calc' => $tot,
      'tot_img'  => $totals_from_image,
    ];

    // $this->load->view('lipa/Lipa_Agustus_view', $data); // sesuaikan path view Anda
	$this->load->view('Lipa_Agustus_view');
  }
}

?>
