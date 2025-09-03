<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgendaSatkerAgusController extends CI_Controller
{
    public function index()
    {
        $data['title']    = 'AGENDA KERJA SATKER';
        $data['subtitle'] = 'PENGADILAN AGAMA AMUNTAI';
        $data['periode']  = 'Agustus 2025';

        // Data Agenda Satker Agustus 2025
        $data['agenda'] = [
            ['tanggal'=>'2025-08-01','label'=>'1 Agustus 2025','kegiatan'=>'Bimtek Kaum Rentan Berhadapan dengan Hukum','keterangan'=>'Zoom Meeting'],
            ['tanggal'=>'2025-08-04','label'=>'4 Agustus 2025','kegiatan'=>'Rapat Kepaniteraan: Evaluasi & Inovasi Layanan','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-04','label'=>'4 Agustus 2025','kegiatan'=>'Penandatanganan MoU dengan UIN & Universitas','keterangan'=>'Online'],
            ['tanggal'=>'2025-08-06','label'=>'6 Agustus 2025','kegiatan'=>'Rapat Kesekretariatan Evaluasi Kinsatker & PTA Award','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-07','label'=>'7 Agustus 2025','kegiatan'=>'Sidang Keliling','keterangan'=>'Lapangan'],
            ['tanggal'=>'2025-08-08','label'=>'8 Agustus 2025','kegiatan'=>'Rapat Umum Bulanan','keterangan'=>'Aula PA Amuntai'],
            ['tanggal'=>'2025-08-08','label'=>'8 Agustus 2025','kegiatan'=>'Sosialisasi Unit Pengendalian Gratifikasi (UPG)','keterangan'=>'Aula PA Amuntai'],
            ['tanggal'=>'2025-08-14','label'=>'14 Agustus 2025','kegiatan'=>'Rapat Virtual Penyusunan Pagu 2026','keterangan'=>'PTA Banjarmasin'],
            ['tanggal'=>'2025-08-15','label'=>'15 Agustus 2025','kegiatan'=>'Senam sehat & lomba 17-an','keterangan'=>'Halaman Kantor PA Amuntai'],
            ['tanggal'=>'2025-08-15','label'=>'15 Agustus 2025','kegiatan'=>'Zoom MoU & PKS Badilag MA RI – UII','keterangan'=>'Online'],
            ['tanggal'=>'2025-08-19','label'=>'19 Agustus 2025','kegiatan'=>'Tasyakuran HUT MA RI ke-80','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-19','label'=>'19 Agustus 2025','kegiatan'=>'Sosialisasi Kanker & Tumor','keterangan'=>'Kerja sama Yayasan'],
            ['tanggal'=>'2025-08-20','label'=>'20 Agustus 2025','kegiatan'=>'Rapat Evaluasi Kesekretariatan & Pembubaran Panitia','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-20','label'=>'20 Agustus 2025','kegiatan'=>'Pembacaan Surah Yasin & Syair Burdah','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-21','label'=>'21 Agustus 2025','kegiatan'=>'Sidang di Luar Gedung','keterangan'=>'Masyarakat Kab. HSU'],
            ['tanggal'=>'2025-08-22','label'=>'22 Agustus 2025','kegiatan'=>'Pengawasan Internal Triwulan III','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-26','label'=>'26 Agustus 2025','kegiatan'=>'Sosialisasi daring tentang PPPK','keterangan'=>'Zoom'],
            ['tanggal'=>'2025-08-28','label'=>'28 Agustus 2025','kegiatan'=>'Sidang di luar gedung','keterangan'=>'Kabupaten Balangan'],
            ['tanggal'=>'2025-08-28','label'=>'28 Agustus 2025','kegiatan'=>'Penyerahan rekening & kartu debit PPPK','keterangan'=>'BRI Amuntai'],
            ['tanggal'=>'2025-08-29','label'=>'29 Agustus 2025','kegiatan'=>'Rapat terbatas bersama PPNPN (alih status PPPK)','keterangan'=>'PA Amuntai'],
            ['tanggal'=>'2025-08-29','label'=>'29 Agustus 2025','kegiatan'=>'Rakor Penyelesaian Pagu Minus Pejabat Negara & PPPK','keterangan'=>'Zoom - MA RI'],
        ];

        // urutkan berdasar tanggal
        usort($data['agenda'], function($a,$b){ return strcmp($a['tanggal'],$b['tanggal']); });

        $this->load->view('agenda_satker_agus_view', $data);
    }
}
