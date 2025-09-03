<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgendaPimpinanAgusController extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Agenda Kerja Pimpinan — Agustus 2025';

        // DATA AGENDA PIMPINAN (Agustus 2025)
        $data['agenda'] = [
            ['tanggal' => '2025-08-01', 'label' => '1 Agustus 2025',  'kegiatan' => 'Pelantikan Panitera Muda Hukum (Fithria Utami, S.H.I.)', 'keterangan' => 'Aula PA Amuntai'],
            ['tanggal' => '2025-08-05', 'label' => '5 Agustus 2025',  'kegiatan' => 'Rapat terbatas bersama Hakim',                                             'keterangan' => 'Dipimpin Ketua PA Amuntai'],
            ['tanggal' => '2025-08-05', 'label' => '5 Agustus 2025',  'kegiatan' => 'Sosialisasi & arahan di PTSP',                                               'keterangan' => 'Ketua & Panmud Gugatan'],
            ['tanggal' => '2025-08-05', 'label' => '5 Agustus 2025',  'kegiatan' => 'Rapat persiapan HUT PTA Banjarmasin (daring)',                               'keterangan' => 'Online'],
            ['tanggal' => '2025-08-06', 'label' => '6 Agustus 2025',  'kegiatan' => 'HUT PWRI ke-63 Kab. HSU',                                                    'keterangan' => 'Ketua hadir'],
            ['tanggal' => '2025-08-09', 'label' => '9 Agustus 2025',  'kegiatan' => 'Pembekalan mahasiswa PPL STAI Rakha',                                        'keterangan' => 'Aula STAI Rakha'],
            ['tanggal' => '2025-08-11', 'label' => '11 Agustus 2025', 'kegiatan' => 'Penerimaan mahasiswa magang STAI Rakha',                                    'keterangan' => 'Ruang Media Center'],
            ['tanggal' => '2025-08-13', 'label' => '13 Agustus 2025', 'kegiatan' => 'Kunjungan konsultasi anggaran ke PTA Banjarmasin',                          'keterangan' => 'Sekretaris mewakili'],
            ['tanggal' => '2025-08-15', 'label' => '15 Agustus 2025', 'kegiatan' => 'Pengukuhan Paskibraka HSU',                                                  'keterangan' => 'Aula KH. Idham Khalid'],
            ['tanggal' => '2025-08-15', 'label' => '15 Agustus 2025', 'kegiatan' => 'Shalat Hajat menyambut HUT RI',                                              'keterangan' => 'Aula KH. Idham Khalid'],
            ['tanggal' => '2025-08-16', 'label' => '16 Agustus 2025', 'kegiatan' => 'Gladi bersih upacara HUT RI ke-80',                                          'keterangan' => 'Lapangan Pahlawan Amuntai'],
            ['tanggal' => '2025-08-16', 'label' => '16 Agustus 2025', 'kegiatan' => 'Hari Anak Nasional Kab. HSU',                                               'keterangan' => 'Halaman Kantor Bupati'],
            ['tanggal' => '2025-08-16', 'label' => '16 Agustus 2025', 'kegiatan' => 'Pawai Obor Kab. HSU',                                                        'keterangan' => 'Tugu Shalawat Amuntai'],
            ['tanggal' => '2025-08-17', 'label' => '17 Agustus 2025', 'kegiatan' => 'Upacara HUT RI ke-80 di PA Amuntai',                                         'keterangan' => 'Dipimpin Wakil Ketua'],
            ['tanggal' => '2025-08-17', 'label' => '17 Agustus 2025', 'kegiatan' => 'Upacara HUT RI ke-80 Kab. HSU',                                             'keterangan' => 'Lapangan Pahlawan Amuntai'],
            ['tanggal' => '2025-08-17', 'label' => '17 Agustus 2025', 'kegiatan' => 'Upacara penurunan Bendera HUT RI',                                           'keterangan' => 'Dipimpin Wakil Ketua'],
            ['tanggal' => '2025-08-19', 'label' => '19 Agustus 2025', 'kegiatan' => 'Upacara HUT MA RI ke-80',                                                    'keterangan' => 'Bersama PN Amuntai'],
            ['tanggal' => '2025-08-21', 'label' => '21 Agustus 2025', 'kegiatan' => 'Rapat Paripurna DPRD Kab. HSU',                                              'keterangan' => 'Gedung DPRD'],
            ['tanggal' => '2025-08-24', 'label' => '24 Agustus 2025', 'kegiatan' => 'Hulu Sungai Utara Bershalawat',                                              'keterangan' => 'Lapangan Pahlawan Amuntai'],
            ['tanggal' => '2025-08-26', 'label' => '26 Agustus 2025', 'kegiatan' => 'Sosialisasi Tata Tertib Persidangan & ZI',                                  'keterangan' => 'Ketua & Panitera'],
            ['tanggal' => '2025-08-27', 'label' => '27 Agustus 2025', 'kegiatan' => 'Pelantikan GOW Kab. HSU',                                                    'keterangan' => 'Amuntai'],
            ['tanggal' => '2025-08-27', 'label' => '27 Agustus 2025', 'kegiatan' => 'Undangan Maulid Nabi Besar Muhammad SAW',                                    'keterangan' => 'Majelis Al-Ma\'arif Amuntai'],
            ['tanggal' => '2025-08-29', 'label' => '29 Agustus 2025', 'kegiatan' => 'Bimtek Kaum Rentan Berhadapan dengan Hukum',                                 'keterangan' => 'Media Center PA Amuntai'],
        ];

        // Jika ingin diurutkan berdasarkan kolom 'tanggal'
        usort($data['agenda'], function($a, $b) {
            return strcmp($a['tanggal'], $b['tanggal']);
        });

        $this->load->view('agenda_pimpinan_agus_view', $data);
    }
}
