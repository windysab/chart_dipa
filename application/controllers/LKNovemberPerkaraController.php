<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKNovemberPerkaraController extends CI_Controller
{
    public function index()
    {
        $data['judul'] = "LAPORAN KEUANGAN PERKARA";
        $data['subjudul'] = "PENGADILAN AGAMA AMUNTAI";
        $data['periode'] = "BULAN NOVEMBER 2025";

        // summary sesuai data dari gambar
        $data['total_penerimaan'] = 28480500;
        $data['total_pengeluaran'] = 21572000;
        $data['saldo_akhir'] = 6908500;
        $data['saldo_bank'] = 4399500;
        $data['saldo_kas_tunai'] = 2509000;
        $data['perkara_masuk'] = 105; // estimasi berdasarkan tren
        $data['perkara_putus'] = 118; // estimasi berdasarkan tren
        $data['perkara_prodeo_masuk'] = 25;
        $data['perkara_prodeo_putus'] = 32;

        // rincian tabel sesuai data dari gambar November
        $data['laporan'] = [
            ['uraian' => 'Sisa Awal', 'penerimaan' => 7325500, 'pengeluaran' => 0],
            ['uraian' => 'Penerimaan bulan ini', 'penerimaan' => 21155000, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Proses/ATK/Pemberkasan *)', 'penerimaan' => 0, 'pengeluaran' => 7500000],
            ['uraian' => 'Biaya Panggilan', 'penerimaan' => 0, 'pengeluaran' => 2018000],
            ['uraian' => 'Biaya Penterjemah', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pemberitahuan', 'penerimaan' => 0, 'pengeluaran' => 810000],
            ['uraian' => 'Biaya Sita', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pemeriksaan Setempat', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Sumpah', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pengiriman', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Materai', 'penerimaan' => 0, 'pengeluaran' => 760000],
            ['uraian' => 'PNBP', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pendaftaran Tk I', 'penerimaan' => 0, 'pengeluaran' => 2250000],
            ['uraian' => 'Biaya Pendaftaran Banding', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Biaya Pendaftaran Kasasi', 'penerimaan' => 0, 'pengeluaran' => 0],
            ['uraian' => 'Redaksi', 'penerimaan' => 0, 'pengeluaran' => 760000],
            ['uraian' => 'PNBP lainnya', 'penerimaan' => 0, 'pengeluaran' => 2060000],
            ['uraian' => 'Pengembalian Sisa Panjar', 'penerimaan' => 0, 'pengeluaran' => 5414000],
        ];

        // Data untuk chart perbandingan bulanan (Jan-Nov)
        $data['penerimaan_bulanan'] = [22372500, 31983500, 24661000, 27887500, 38137000, 36913000, 50505500, 41520000, 27373000, 29978500, 28480500];
        $data['pengeluaran_bulanan'] = [16856500, 23740000, 17918500, 20196000, 25939000, 23680000, 36420500, 29787000, 20118000, 22653000, 21572000];
        $data['bulan'] = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov"];

        // Data perkara bulanan untuk chart (Jan-Nov)
        $data['perkara_masuk_bulanan'] = [89, 112, 95, 103, 128, 124, 143, 116, 107, 99, 105];
        $data['perkara_putus_bulanan'] = [94, 108, 87, 98, 135, 119, 151, 148, 108, 129, 118];

        $this->load->view('template/header', $data);
        $this->load->view('LK_November_Perkara_view', $data);
        $this->load->view('template/footer');
    }
}
