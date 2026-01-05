<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * LipaDesemberController – LIPA 8 Desember 2025
 * Modern dashboard with interactive charts and beautiful UI
 */
class LipaDesemberController extends CI_Controller
{
    public function index()
    {
        // 30 jenis perkara sesuai standar LIPA
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
            'Perwalian',
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

        // Data Desember 2025 berdasarkan gambar yang diberikan
        // 16 kolom: sisa_lalu, diterima, jumlah, dicabut, dikabulkan, ditolak,
        // tidak_diterima, digugurkan, dicoret, perdamaian, dismissal,
        // jumlah_laju_6_13, sisa_akhir, banding, kasasi, pk
        $rows = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 1. Izin Poligami
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 2. Pencegahan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 3. Penolakan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 4. Pembatalan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 5. Kelalaian Atas Kewajiban Suami/Istri
            array(8, 4, 12, 0, 3, 1, 0, 0, 0, 2, 0, 6, 6, 1, 0, 0), // 6. Cerai Talak
            array(23, 12, 35, 0, 21, 0, 0, 1, 0, 0, 0, 22, 13, 3, 0, 0), // 7. Cerai Gugat
            array(1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 8. Harta Bersama
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 9. Penguasaan Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 10. Nafkah Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 11. Hak bekas istri
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 12. Pengesahan Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 13. Pencabutan Kekuasaan Orang Tua
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 14. Perwalian
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 15. Pencabutan Kekuasaan Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 16. Penunjukan Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 17. Ganti Rugi Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 18. Asal Usul Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 19. Perkawinan Campuran
            array(13, 7, 20, 0, 20, 1, 0, 0, 0, 0, 0, 21, 0, 0, 0, 0), // 20. Isbat Nikah
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 21. Izin Kawin
            array(2, 1, 3, 0, 3, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0), // 22. Dispensasi Kawin
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 23. Wali Adhol
            array(1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0), // 24. Kewarisan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 25. Wasiat
            array(0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 26. Hibah
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 27. Wakaf
            array(2, 3, 5, 0, 2, 0, 0, 0, 0, 0, 0, 2, 3, 0, 0, 0), // 28. Lain-Lain
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 29. Ekonomi Syariah
            array(1, 6, 7, 0, 2, 2, 0, 0, 0, 0, 0, 4, 3, 0, 0, 0), // 30. P3HP/Penetapan Ahli Waris
        );

        // Totals Desember 2025 berdasarkan gambar
        $totals_desember = array(
            'sisa_lalu' => 51,
            'diterima' => 36,
            'jumlah' => 87,
            'dicabut' => 0,
            'dikabulkan' => 52,
            'ditolak' => 4,
            'tidak_diterima' => 0,
            'digugurkan' => 1,
            'dicoret' => 0,
            'perdamaian' => 2,
            'dismissal' => 0,
            'jumlah_laju_6_13' => 59,
            'sisa_akhir' => 28,
            'banding' => 4,
            'kasasi' => 0,
            'pk' => 0,
        );

        // Hitung total kalkulasi untuk verifikasi
        $tot_calc = array_fill(0, 16, 0);
        foreach ($rows as $r) {
            foreach ($r as $i => $v) {
                $tot_calc[$i] += (int)$v;
            }
        }

        // Data series bulanan untuk chart (Jan-Des) - data lengkap tahun 2025
        $series_masuk = [89, 112, 95, 103, 128, 124, 143, 116, 107, 99, 105, 36];
        $series_selesai = [94, 108, 87, 98, 135, 119, 151, 148, 108, 129, 125, 59];
        $series_sisa = [95, 99, 107, 112, 105, 110, 102, 98, 97, 67, 47, 28];

        $data = array(
            'title' => 'LIPA 8 – Desember 2025',
            'kategori' => $kategori,
            'rows' => $rows,
            'tot_img' => $totals_desember,
            'tot_calc' => $tot_calc,
            'series_masuk' => $series_masuk,
            'series_selesai' => $series_selesai,
            'series_sisa' => $series_sisa,
        );

        $this->load->view('template/header', $data);
        $this->load->view('Lipa_Desember_view', $data);
        $this->load->view('template/footer');
    }
}
