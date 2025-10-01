<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * LipaSeptemberController – LIPA 8 September 2025
 * Modern dashboard with interactive charts and beautiful UI
 */
class LipaSeptemberController extends CI_Controller
{
    public function index()
    {
        // 30 jenis perkara sesuai data yang diberikan
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

        // Data sesuai tabel yang diberikan
        // 16 kolom: sisa_lalu, diterima, jumlah, dicabut, dikabulkan, ditolak,
        // tidak_diterima, digugurkan, dicoret, perdamaian, dismissal,
        // jumlah_laju_6_13, sisa_akhir, banding, kasasi, pk
        $rows = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 1. Izin Poligami
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 2. Pencegahan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 3. Penolakan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 4. Pembatalan Perkawinan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 5. Kelalaian Atas Kewajiban Suami/Istri
            array(11, 10, 21, 1, 11, 1, 0, 0, 0, 0, 0, 13, 8, 0, 0, 0), // 6. Cerai Talak
            array(56, 44, 100, 2, 48, 0, 2, 1, 0, 0, 0, 53, 47, 0, 0, 0), // 7. Cerai Gugat
            array(3, 0, 3, 0, 0, 0, 0, 0, 0, 1, 0, 1, 2, 0, 0, 0), // 8. Harta Bersama
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 9. Penguasaan Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 10. Nafkah Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 11. Hak bekas istri
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 12. Pengesahan Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 13. Pencabutan Kekuasaan Orang Tua
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 14. Perwalian
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 15. Pencabutan Kekuasaan Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 16. Penunjukan Wali
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 17. Ganti Rugi Wali
            array(2, 0, 2, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0), // 18. Asal Usul Anak
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 19. Perkawinan Campuran
            array(23, 42, 65, 0, 24, 0, 2, 1, 0, 0, 0, 27, 38, 0, 0, 0), // 20. Isbat Nikah
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 21. Izin Kawin
            array(1, 1, 2, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0), // 22. Dispensasi Kawin
            array(0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0), // 23. Wali Adhol
            array(0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0), // 24. Kewarisan
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 25. Wasiat
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 26. Hibah
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 27. Wakaf
            array(2, 4, 6, 0, 5, 1, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0), // 28. Lain-Lain
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0), // 29. Ekonomi Syariah
            array(0, 4, 4, 1, 2, 0, 0, 0, 0, 0, 0, 3, 1, 0, 0, 0), // 30. P3HP/Penetapan Ahli Waris
        );

        // Totals sesuai data JUMLAH dari tabel
        $totals_september = array(
            'sisa_lalu' => 98,
            'diterima' => 107,
            'jumlah' => 205,
            'dicabut' => 4,
            'dikabulkan' => 95,
            'ditolak' => 2,
            'tidak_diterima' => 4,
            'digugurkan' => 2,
            'dicoret' => 0,
            'perdamaian' => 1,
            'dismissal' => 0,
            'jumlah_laju_6_13' => 108,
            'sisa_akhir' => 97,
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

        // Data series bulanan untuk chart (Jan-Sep)
        $series_masuk = [89, 112, 95, 103, 128, 124, 143, 116, 107, 0, 0, 0];
        $series_selesai = [94, 108, 87, 98, 135, 119, 151, 148, 108, 0, 0, 0];
        $series_sisa = [95, 99, 107, 112, 105, 110, 102, 98, 97, 0, 0, 0];

        $data = array(
            'title' => 'LAPORAN PERKARA (LIPA) SEPTEMBER 2025',
            'subtitle' => 'PENGADILAN AGAMA AMUNTAI KELAS IB',
            'periode' => 'SEPTEMBER 2025',
            'kategori' => $kategori,
            'rows' => $rows,
            'tot_img' => $totals_september,
            'tot_calc' => $tot_calc,
            'series_masuk' => $series_masuk,
            'series_selesai' => $series_selesai,
            'series_sisa' => $series_sisa,
        );

        $this->load->view('template/header', $data);
        $this->load->view('Lipa_September_view', $data);
        $this->load->view('template/footer');
    }
}
