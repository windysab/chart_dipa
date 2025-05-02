<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LipaAprController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Laporan Perkara April 2025';
        $this->load->view('template/header', $data);
        $this->load->view('Lipa_6_Apr_view');
        $this->load->view('template/footer');
    }
}
