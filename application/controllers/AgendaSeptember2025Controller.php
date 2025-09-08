<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgendaSeptember2025Controller extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Agenda Kegiatan September 2025';
        $data['subtitle'] = 'Pengadilan Agama Amuntai Kelas IB';
        $data['periode'] = 'September 2025';

        // Data Agenda September 2025
        $data['agenda'] = [
            [
                'tanggal' => '2025-09-01',
                'label' => '1 September 2025',
                'kegiatan' => 'Pelantikan Pegawai PPPK',
                'keterangan' => 'Aula PA Amuntai Kelas IB',
                'deskripsi' => 'Aula Pengadilan Agama Amuntai Kelas IB dipenuhi suasana haru dan bahagia saat Ketua PA Amuntai, YM Bapak Bahrul Maji, S.H.I., mengambil sumpah/janji 7 (tujuh) orang Pegawai Pemerintah dengan Perjanjian Kerja (PPPK).',
                'icon' => 'fas fa-user-tie'
            ],
            [
                'tanggal' => '2025-09-03',
                'label' => '3 September 2025',
                'kegiatan' => 'Rapat Terbatas Sekretaris',
                'keterangan' => 'Ruang Sekretaris PA Amuntai',
                'deskripsi' => 'Sekretaris Pengadilan Agama Amuntai Kelas IB, Bapak Salmani, S.Ag., memimpin rapat terbatas bersama Sub Bagian Umum dan Keuangan, Sub Bagian PTIP, serta Sub Bagian Kepegawaian dan Ortala.',
                'icon' => 'fas fa-users'
            ],
            [
                'tanggal' => '2025-09-04',
                'label' => '4 September 2025',
                'kegiatan' => 'Peringatan Maulid Nabi Muhammad SAW',
                'keterangan' => 'Aula PA Amuntai Kelas IB',
                'deskripsi' => 'Pengadilan Agama Amuntai Kelas IB menyelenggarakan peringatan Maulid Nabi Besar Muhammad SAW 1447 H dalam suasana khidmat dan penuh makna.',
                'icon' => 'fas fa-mosque'
            ],
            [
                'tanggal' => '2025-09-11',
                'label' => '11 September 2025',
                'kegiatan' => 'Penyambutan Mahasiswa PPL STAI Rakha',
                'keterangan' => 'Ruang Media Center PA Amuntai',
                'deskripsi' => 'Suasana hangat terasa di Ruang Media Center saat Wakil Ketua PA Amuntai, YM Ibu Mursidah, S.Ag., M.H., bersama Panitera dan Sekretaris secara resmi menyambut kedatangan mahasiswa/i Praktik Pengalaman Lapangan (PPL) Kelompok 2 Tahun 2025 dari STAI Rasyidiyah Khalidiyah (Rakha) Amuntai.',
                'icon' => 'fas fa-graduation-cap'
            ]
        ];

        // Urutkan berdasarkan tanggal
        usort($data['agenda'], function ($a, $b) {
            return strcmp($a['tanggal'], $b['tanggal']);
        });

        $this->load->view('agenda_september_2025_view', $data);
    }
}
