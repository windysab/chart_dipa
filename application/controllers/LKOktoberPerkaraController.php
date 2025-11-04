<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKOktoberPerkaraController extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "LAPORAN KEUANGAN PERKARA";
        $data['subjudul'] = "PENGADILAN AGAMA AMUNTAI";
        $data['periode'] = "BULAN OKTOBER 2025";

        // summary
        $data['total_penerimaan'] = 29978500;
        $data['total_pengeluaran'] = 22653000;
        $data['saldo_akhir'] = 7325500;
        $data['saldo_bank'] = 1850500;
        $data['saldo_kas_tunai'] = 5475000;
        $data['perkara_masuk'] = 99; // 20 perkara prodeo
        $data['perkara_putus'] = 129; // 47 perkara prodeo
        $data['perkara_prodeo_masuk'] = 20;
        $data['perkara_prodeo_putus'] = 47;

        // rincian tabel
        $data['laporan'] = [
            ['uraian' => 'Sisa Awal', 'penerimaan' => 7255000, 'pengeluaran' => 0],
            ['uraian' => 'Penerimaan bulan ini', 'penerimaan' => 22723500, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Proses/ATK/Pemberkasan', 'penerimaan' => 0, 'pengeluaran' => 7900000],
            ['uraian' => 'Biaya Panggilan', 'penerimaan' => 0, 'pengeluaran' => 2089500],
            ['uraian' => 'Biaya Penterjemah', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pemberitahuan', 'penerimaan' => 0, 'pengeluaran' => 926000],
            ['uraian' => 'Biaya Sita', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pemeriksaan Setempat', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Sumpah', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pengiriman', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Materai', 'penerimaan' => 0, 'pengeluaran' => 820000],
            ['uraian' => 'PNBP', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pendaftaran Tk I', 'penerimaan' => 0, 'pengeluaran' => 2370000],
            ['uraian' => 'Biaya Pendaftaran Banding', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pendaftaran Kasasi', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Redaksi', 'penerimaan' => 0, 'pengeluaran' => 820000],
            ['uraian' => 'PNBP lainnya', 'penerimaan' => 0, 'pengeluaran' => 2110000],
            ['uraian' => 'Pengembalian Sisa Panjar', 'penerimaan' => 0, 'pengeluaran' => 5617500],
        ];

        // Data untuk chart perbandingan bulanan (Jan-Okt)
        $data['penerimaan_bulanan'] = [22372500, 31983500, 24661000, 27887500, 38137000, 36913000, 50505500, 41520000, 27373000, 29978500];
        $data['pengeluaran_bulanan'] = [16856500, 23740000, 17918500, 20196000, 25939000, 23680000, 36420500, 29787000, 20118000, 22653000];
        $data['bulan'] = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt"];

        // Data perkara bulanan untuk chart (Jan-Okt)
        $data['perkara_masuk_bulanan'] = [89, 112, 95, 103, 128, 124, 143, 116, 107, 99];
        $data['perkara_putus_bulanan'] = [94, 108, 87, 98, 135, 119, 151, 148, 108, 129];

        $this->load->view('template/header', $data);
        $this->load->view('LK_Oktober_Perkara_view', $data);
        $this->load->view('template/footer');
    }
}
