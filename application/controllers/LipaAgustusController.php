<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * LipaAgustusController
 * CodeIgniter 3 controller – LIPA 8 Agustus 2025
 * - Memperbaiki error Undefined offset dengan normalisasi data
 * - Menyediakan data ke view modern (Bootstrap + Chart.js)
 */
class LipaAgustusController extends CI_Controller
{
    public function index()
    {
        // 1) Master jenis perkara (30 item sesuai LIPA 8)
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

        // 2) Data baris LIPA 8 – 16 kolom per baris (index 0..15)
        //    Kolom: sisa_lalu, diterima, jumlah, dicabut, dikabulkan, ditolak, tidak_diterima, digugurkan,
        //           dicoret, perdamaian, dismissal, jumlah_laju_6_13, sisa_akhir, banding, kasasi, pk
        $rows = array(
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 1 Izin Poligami
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 2 Pencegahan Perkawinan
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 3 Penolakan Perkawinan
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 4 Pembatalan Perkawinan
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 5 Kelalaian Atas Kewajiban Suami / Istri
            array(5,12,17,0,5,0,0,0,0,0,0,6,11,0,0,0), // 6 Cerai Talak
            array(68,57,125,2,64,0,0,3,0,0,0,69,56,0,0,0), // 7 Cerai Gugat
            array(0,0,0,0,0,0,0,0,0,0,0,1,3,0,0,0), // 8 Harta Bersama
            array(2,2,4,1,0,0,0,0,0,0,0,0,0,0,0,0), // 9 Penguasaan Anak
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 10 Nafkah Anak oleh Ibu...
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 11 Hak-hak bekas istri...
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 12 Pengesahan Anak
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 13 Pencabutan Kekuasaan Orang Tua
            array(1,0,1,0,0,0,0,0,0,0,0,0,1,0,0,0), // 14 Pewalilan
            array(0,1,1,0,1,0,0,0,0,0,0,0,0,0,0,0), // 15 Pencabutan Kekuasaan Wali
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 16 Penunjukan orang lain...
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 17 Ganti Rugi terhadap Wali
            array(0,3,3,0,1,0,0,0,0,0,0,0,0,0,0,0), // 18 Asal Usul Anak
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 19 Perkawinan Campuran
            array(43,28,71,0,42,3,0,3,0,0,0,48,23,0,0,0), // 20 Isbat Nikah
            array(1,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0), // 21 Izin Kawin
            array(1,5,6,0,5,0,0,0,0,0,0,5,1,0,0,0), // 22 Dispensasi Kawin
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 23 Wali Adhol
            array(1,1,2,1,1,0,0,0,0,0,0,2,0,0,0,0), // 24 Kewarisan
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 25 Wasiat
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 26 Hibah
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 27 Wakaf
            array(0,5,5,0,0,0,0,0,0,0,0,0,0,0,0,0), // 28 Lain-Lain
            array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0), // 29 Ekonomi Syariah
            array(0,4,4,0,0,0,0,0,0,0,0,0,0,0,0,0), // 30 P3HP / Penetapan Ahli Waris
        );

        // 3) Normalisasi: pastikan jumlah baris = jumlah kategori
        $targetRows = count($kategori);
        for ($i = count($rows); $i < $targetRows; $i++) {
            $rows[$i] = array_fill(0, 16, 0);
        }

        // 4) Normalisasi: pastikan setiap baris punya 16 kolom
        foreach ($rows as $i => $r) {
            if (!is_array($r)) $r = array();
            for ($c = count($r); $c < 16; $c++) $r[$c] = 0;
            $rows[$i] = array_values($r);
        }

        // 5) Totals dari gambar (agar footer pasti cocok)
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

        // 6) Kalkulasi total sebagai pembanding
        $tot_calc = array_fill(0, 16, 0);
        foreach ($rows as $r) {
            foreach ($r as $i => $v) $tot_calc[$i] += (int)$v;
        }

        $data = array(
            'title' => 'LIPA 8 – Bulan Agustus 2025',
            'kategori' => $kategori,
            'rows' => $rows,
            'tot_calc' => $tot_calc,
            'tot_img'  => $totals_from_image,
        );

        $this->load->view('Lipa_Agustus_view', $data); // sesuaikan path view Anda
    }
}
