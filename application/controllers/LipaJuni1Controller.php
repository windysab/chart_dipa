<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LipaJuni1Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Laporan Perkara LIPA Juni 2025';
        $this->load->view('template/header', $data);
        $this->load->view('Lipa_Juni1_view');
        $this->load->view('template/footer');
    }
} 