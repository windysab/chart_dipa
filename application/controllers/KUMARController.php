<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KUMARController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LKMarModel');
    }

    public function index() {
        $data['title'] = 'Laporan Keuangan Maret 2025';
        $data['financial_data'] = $this->LKMarModel->get_financial_data();
        $this->load->view('template/header', $data);
        $this->load->view('template/new_sidebar');
        $this->load->view('LKMar_view', $data);
        $this->load->view('template/footer');
    }
}
