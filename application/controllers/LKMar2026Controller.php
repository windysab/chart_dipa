<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKMar2026Controller extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Laporan Keuangan Perkara Maret 2026';
        $this->load->view('template/new_header', $data);
        $this->load->view('LK_Mar_2026_view', $data);
        $this->load->view('template/new_footer');
    }
}
