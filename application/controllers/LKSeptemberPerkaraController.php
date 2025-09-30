<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKSeptemberPerkaraController extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "LAPORAN KEUANGAN PERKARA";
        $data['subjudul'] = "PENGADILAN AGAMA AMUNTAI";
        $data['periode'] = "BULAN SEPTEMBER 2025";

        // summary
        $data['total_penerimaan'] = 27373000;
        $data['total_pengeluaran'] = 20118000;
        $data['saldo_akhir'] = 7255000;
        $data['saldo_bank'] = 2562000;
        $data['saldo_kas_tunai'] = 4693000;
        $data['perkara_masuk'] = 107; // 51 perkara prodeo
        $data['perkara_putus'] = 108; // 23 perkara prodeo
        $data['perkara_prodeo_masuk'] = 51;
        $data['perkara_prodeo_putus'] = 23;

        // rincian tabel
        $data['laporan'] = [
            ['uraian' => 'Sisa Awal', 'penerimaan' => 11733000, 'pengeluaran' => 0],
            ['uraian' => 'Penerimaan bulan ini', 'penerimaan' => 15640000, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Proses/ATK/Pemberkasan', 'penerimaan' => 0, 'pengeluaran' => 5600000],
            ['uraian' => 'Biaya Panggilan', 'penerimaan' => 0, 'pengeluaran' => 1722500],
            ['uraian' => 'Biaya Penterjemah', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pemberitahuan', 'penerimaan' => 0, 'pengeluaran' => 978500],
            ['uraian' => 'Biaya Sita', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pemeriksaan Setempat', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Sumpah', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pengiriman', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Materai', 'penerimaan' => 0, 'pengeluaran' => 850000],
            ['uraian' => 'Biaya Pendaftaran Tk I', 'penerimaan' => 0, 'pengeluaran' => 1680000],
            ['uraian' => 'Biaya Pendaftaran Banding', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pendaftaran Kasasi', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Redaksi', 'penerimaan' => 0, 'pengeluaran' => 850000],
            ['uraian' => 'PNBP lainnya', 'penerimaan' => 0, 'pengeluaran' => 1820000],
            ['uraian' => 'Pengembalian Sisa Panjar', 'penerimaan' => 0, 'pengeluaran' => 6617000],
        ];

        // Data untuk chart perbandingan bulanan
        $data['penerimaan_bulanan'] = [22372500, 31983500, 24661000, 27887500, 38137000, 36913000, 50505500, 41520000, 27373000];
        $data['pengeluaran_bulanan'] = [16856500, 23740000, 17918500, 20196000, 25939000, 23680000, 36420500, 29787000, 20118000];
        $data['bulan'] = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep"];

        // Data perkara bulanan untuk chart
        $data['perkara_masuk_bulanan'] = [89, 112, 95, 103, 128, 124, 143, 116, 107];
        $data['perkara_putus_bulanan'] = [94, 108, 87, 98, 135, 119, 151, 148, 108];

        $this->load->view('template/header', $data);
        $this->load->view('LK_September_Perkara_view', $data);
        $this->load->view('template/footer');
    }
}
