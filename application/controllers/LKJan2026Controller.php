<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LKJan2026Controller extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Laporan Keuangan Perkara Januari 2026';
        $this->load->view('template/new_header', $data);
        $this->load->view('template/new_sidebar');
        $this->load->view('LK_Jan_2026_view', $data);
        $this->load->view('template/new_footer');
    }
}
