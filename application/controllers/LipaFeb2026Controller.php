<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * LipaFeb2026Controller – LIPA 8 Februari 2026
 * Modern dashboard with interactive charts and beautiful UI
 */
class LipaFeb2026Controller extends CI_Controller
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

        // Data Februari 2026 - progress dari Januari
        // 16 kolom: sisa_lalu, diterima, jumlah, dicabut, dikabulkan, ditolak,
        // tidak_diterima, digugurkan, dicoret, perdamaian, dismissal,
        // jumlah_laju_6_13, sisa_akhir, banding, kasasi, pk
        $rows = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 1. Izin Poligami
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 2. Pencegahan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 3. Penolakan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 4. Pembatalan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 5. Kelalaian Atas Kewajiban Suami/Istri
            array(14, 18, 32, 0, 8, 0, 0, 0, 0, 0, 0, 8, 24, 0, 0, 0), // 6. Cerai Talak
            array(55, 72, 127, 2, 35, 1, 0, 0, 0, 0, 0, 38, 89, 0, 0, 0), // 7. Cerai Gugat
            array(0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 8. Harta Bersama
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 9. Penguasaan Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 10. Nafkah Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 11. Hak bekas istri
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 12. Pengesahan Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 13. Pencabutan Kekuasaan Orang Tua
            array(0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 14. Perwalian
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 15. Pencabutan Kekuasaan Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 16. Penunjukan Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 17. Ganti Rugi Wali
            array(2, 4, 6, 0, 2, 0, 0, 0, 0, 0, 0, 2, 4, 0, 0, 0), // 18. Asal Usul Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 19. Perkawinan Campuran
            array(20, 28, 48, 0, 12, 2, 0, 0, 0, 0, 0, 14, 34, 0, 0, 0), // 20. Isbat Nikah
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 21. Izin Kawin
            array(0, 2, 2, 0, 1, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0), // 22. Dispensasi Kawin
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 23. Wali Adhol
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 24. Kewarisan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 25. Wasiat
            array(1, 2, 3, 0, 1, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 0), // 26. Hibah
            array(0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 27. Wakaf
            array(2, 4, 6, 0, 2, 0, 0, 0, 0, 0, 0, 2, 4, 0, 0, 0), // 28. Lain-Lain
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 29. Ekonomi Syariah
            array(0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 30. P3HP/Penetapan Ahli Waris
        );

        // Totals Februari 2026
        $totals_februari = array(
            'sisa_lalu' => 94,
            'diterima' => 134,
            'jumlah' => 228,
            'dicabut' => 2,
            'dikabulkan' => 62,
            'ditolak' => 4,
            'tidak_diterima' => 0,
            'digugurkan' => 0,
            'dicoret' => 0,
            'perdamaian' => 0,
            'dismissal' => 0,
            'jumlah_laju_6_13' => 68,
            'sisa_akhir' => 160,
            'banding' => 0,
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

        // Data series bulanan untuk chart (Jan-Des) - data 2026
        $series_masuk = [111, 134, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; // Data Jan-Feb tersedia
        $series_selesai = [25, 68, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; // Data Jan-Feb tersedia
        $series_sisa = [91, 160, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]; // Data Jan-Feb tersedia

        $data = array(
            'title' => 'LIPA 8 – Februari 2026',
            'kategori' => $kategori,
            'rows' => $rows,
            'tot_img' => $totals_februari,
            'tot_calc' => $tot_calc,
            'series_masuk' => $series_masuk,
            'series_selesai' => $series_selesai,
            'series_sisa' => $series_sisa,
        );

        $this->load->view('template/new_header', $data);
        $this->load->view('Lipa_Feb_2026_view', $data);
        $this->load->view('template/new_footer');
    }
}
