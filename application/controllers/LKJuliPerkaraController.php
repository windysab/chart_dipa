<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKJuliPerkaraController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Laporan Keuangan Perkara Juli 2025';
        $this->load->view('template/header', $data);
        $this->load->view('LK_Juli_Perkara_view');
        $this->load->view('template/footer');
    }
}